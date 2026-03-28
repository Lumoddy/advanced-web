
// Open cover image from title id:
await(async(s)=>location.href=(await(await fetch("https://api.imdbapi.dev/titles/"+s)).json())["primaryImage"]["url"])("tt15940132");

// Scrape titles from https://www.imdb.com/search/title/?title_type=feature:
[...document.querySelectorAll("li.ipc-metadata-list-summary-item > div:nth-child(1) > div:nth-child(1) > div:nth-child(2) > div:nth-child(1) > div:nth-child(2) > ul:nth-child(1) > div:nth-child(1) > a:nth-child(1)")].map((x)=>x.href.replace(/\/\?ref_=.*$/,""))

// Open tabs:
// Turns out spamming IMDB gets me banned, thats why theres the delay.
.forEach((x,i)=>setTimeout(()=>window.open(x,"_blank"),(i*1000)+(Math.random()*500)));

// Scrape from detail page (scroll down to genre before using):
console.log(`# ${location.href.replace(/\/?[&?]ref_=[^&]*/,"")}
SET @media_title = ${JSON.stringify(document.querySelector(".hero__primary-text").textContent)};

INSERT INTO \`movies_source\` (\`media_id\`, \`media_title\`, \`movie_length_minutes\`, \`media_release_date\`, \`media_description\`)
VALUES
    (INSERTIDHERE, @media_title, (60 * ${[...document.querySelectorAll("ul.ipc-inline-list--show-dividers > li")].map((x)=>/(\d+)h(?:\s+(\d+)m)?/.exec(x.textContent)).find((x)=>x!==null).toSpliced(0, 1).map((x)=>x??"0").join(") + ")}, ${JSON.stringify((()=>{const d=new Date([...document.querySelectorAll("section.ipc-page-section > div > ul > li > a:nth-child(1)")].find((x)=>x.textContent==="Release date").nextSibling.textContent);return`${d.getFullYear().toString()}-${(d.getMonth()+1).toString().padStart(2,"0")}-${d.getDate().toString().padStart(2,"0")}`})())}, ${JSON.stringify(document.querySelector(".sc-9a16f31-1 > span:nth-child(1) > span:nth-child(1)").textContent)});

INSERT INTO \`people_source\` (\`media_title\`, \`person_in_media_job\`, \`person_full_name\`)
VALUES
    ${[...[...document.querySelectorAll("[data-testid=\"title-cast\"] .ipc-sub-grid--wraps-at-above-l > div > div:nth-child(2) > a")].map((x)=>`(@media_title, "cast", ${JSON.stringify(x.textContent)})`),...[...document.querySelectorAll("ul.ipc-metadata-list:nth-child(3) > li:nth-child(1) > div:nth-child(2) > ul:nth-child(1) > li > a:nth-child(1)")].map((x)=>`(@media_title, "director", ${JSON.stringify(x.textContent)})`),...[...document.querySelectorAll("ul.ipc-metadata-list:nth-child(3) > li:nth-child(2) > div:nth-child(2) > ul:nth-child(1) > li > a:nth-child(1)")].map((x)=>`(@media_title, "writer", ${JSON.stringify(x.textContent)})`)].join(",\n    ")};

INSERT INTO \`genre_source\` (\`media_title\`, \`genre\`)
VALUES
    ${[...[...document.querySelectorAll("ul.ipc-metadata-list > li > span:nth-child(1)")].find((x)=>/Genres?/.test(x.textContent)).nextSibling.querySelectorAll("a")].map((x)=>`(@media_title, ${JSON.stringify(x.textContent.toLowerCase())})`).join(",\n    ")};`);

// Person duplication detection:
{const m=new Map();for(const x of (function*(s){let i=0,r=/^    \(@media_title, "(.*?)", "(.*?)"\),|SET @media_title = "(.*?)"/gm,m,n;while(true){r.lastIndex=i;if(!(m=r.exec(s)))break;if(m[3]!==undefined){i=r.lastIndex;n=m[3]}else{i=r.lastIndex;yield[n,m[1],m[2]]}}})($0.data)){const v=x.join(" ");m.set(v,(m.get(v)??0)+1)};m.entries().filter(([,x])=>x!==1).toArray()}