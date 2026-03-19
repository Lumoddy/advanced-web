<?php
    declare(strict_types=1);

    /*
     * I hate PHP.
     */

    /**
     * Scraped from https://dev.mysql.com/doc/mysql-errors/9.6/en/server-error-reference.html.
     */
    enum mysqli_error_code: int
    {
        /**
         * Error number: 1002; Symbol: ER_NO; SQLSTATE: HY000
         *
         * Message: NO
         *
         * Used in the construction of other messages.
         */
        case ER_NO = 1002;
        /**
         * Error number: 1003; Symbol: ER_YES; SQLSTATE: HY000
         *
         * Message: YES
         *
         * Used in the construction of other messages.
         *
         * Extended EXPLAIN format generates
         * Note messages. ER_YES is used in
         * the Code column for these messages in
         * subsequent SHOW WARNINGS output.
         */
        case ER_YES = 1003;
        /**
         * Error number: 1004; Symbol: ER_CANT_CREATE_FILE; SQLSTATE: HY000
         *
         * Message: Can't create file '%s' (errno: %d - %s)
         *
         * Occurs for failure to create or copy a file needed for some
         * operation.
         *
         * Possible causes: Permissions problem for source file; destination
         * file already exists but is not writeable.
         */
        case ER_CANT_CREATE_FILE = 1004;
        /**
         * Error number: 1005; Symbol: ER_CANT_CREATE_TABLE; SQLSTATE: HY000
         *
         * Message: Can't create table '%s' (errno: %d - %s)
         *
         * InnoDB reports this error when a table cannot
         * be created. If the error message refers to error 150, table
         * creation failed because a
         * foreign key
         * constraint was not correctly formed. If the error message
         * refers to error −1, table creation probably failed because
         * the table includes a column name that matched the name of an
         * internal InnoDB table.
         */
        case ER_CANT_CREATE_TABLE = 1005;
        /**
         * Error number: 1006; Symbol: ER_CANT_CREATE_DB; SQLSTATE: HY000
         *
         * Message: Can't create database '%s' (errno: %d - %s)
         */
        case ER_CANT_CREATE_DB = 1006;
        /**
         * Error number: 1007; Symbol: ER_DB_CREATE_EXISTS; SQLSTATE: HY000
         *
         * Message: Can't create database '%s'; database exists
         *
         * An attempt to create a database failed because the database
         * already exists.
         *
         * Drop the database first if you really want to replace an existing
         * database, or add an IF NOT EXISTS clause to the
         * CREATE DATABASE statement if to
         * retain an existing database without having the statement produce
         * an error.
         */
        case ER_DB_CREATE_EXISTS = 1007;
        /**
         * Error number: 1008; Symbol: ER_DB_DROP_EXISTS; SQLSTATE: HY000
         *
         * Message: Can't drop database '%s'; database doesn't exist
         */
        case ER_DB_DROP_EXISTS = 1008;
        /**
         * Error number: 1010; Symbol: ER_DB_DROP_RMDIR; SQLSTATE: HY000
         *
         * Message: Error dropping database (can't rmdir '%s', errno: %d -
         * %s)
         */
        case ER_DB_DROP_RMDIR = 1010;
        /**
         * Error number: 1012; Symbol: ER_CANT_FIND_SYSTEM_REC; SQLSTATE: HY000
         *
         * Message: Can't read record in system table
         *
         * Returned by InnoDB for attempts to access
         * InnoDB INFORMATION_SCHEMA
         * tables when InnoDB is unavailable.
         */
        case ER_CANT_FIND_SYSTEM_REC = 1012;
        /**
         * Error number: 1013; Symbol: ER_CANT_GET_STAT; SQLSTATE: HY000
         *
         * Message: Can't get status of '%s' (errno: %d - %s)
         */
        case ER_CANT_GET_STAT = 1013;
        /**
         * Error number: 1015; Symbol: ER_CANT_LOCK; SQLSTATE: HY000
         *
         * Message: Can't lock file (errno: %d - %s)
         */
        case ER_CANT_LOCK = 1015;
        /**
         * Error number: 1016; Symbol: ER_CANT_OPEN_FILE; SQLSTATE: HY000
         *
         * Message: Can't open file: '%s' (errno: %d - %s)
         *
         * InnoDB reports this error when the table from
         * the InnoDB data
         * files cannot be found.
         */
        case ER_CANT_OPEN_FILE = 1016;
        /**
         * Error number: 1017; Symbol: ER_FILE_NOT_FOUND; SQLSTATE: HY000
         *
         * Message: Can't find file: '%s' (errno: %d - %s)
         */
        case ER_FILE_NOT_FOUND = 1017;
        /**
         * Error number: 1018; Symbol: ER_CANT_READ_DIR; SQLSTATE: HY000
         *
         * Message: Can't read dir of '%s' (errno: %d - %s)
         */
        case ER_CANT_READ_DIR = 1018;
        /**
         * Error number: 1020; Symbol: ER_CHECKREAD; SQLSTATE: HY000
         *
         * Message: Record has changed since last read in table '%s'
         */
        case ER_CHECKREAD = 1020;
        /**
         * Error number: 1022; Symbol: ER_DUP_KEY; SQLSTATE: 23000
         *
         * Message: Can't write; duplicate key in table '%s'
         */
        case ER_DUP_KEY = 1022;
        /**
         * Error number: 1024; Symbol: ER_ERROR_ON_READ; SQLSTATE: HY000
         *
         * Message: Error reading file '%s' (errno: %d - %s)
         */
        case ER_ERROR_ON_READ = 1024;
        /**
         * Error number: 1025; Symbol: ER_ERROR_ON_RENAME; SQLSTATE: HY000
         *
         * Message: Error on rename of '%s' to '%s' (errno: %d - %s)
         */
        case ER_ERROR_ON_RENAME = 1025;
        /**
         * Error number: 1026; Symbol: ER_ERROR_ON_WRITE; SQLSTATE: HY000
         *
         * Message: Error writing file '%s' (errno: %d - %s)
         */
        case ER_ERROR_ON_WRITE = 1026;
        /**
         * Error number: 1027; Symbol: ER_FILE_USED; SQLSTATE: HY000
         *
         * Message: '%s' is locked against change
         */
        case ER_FILE_USED = 1027;
        /**
         * Error number: 1030; Symbol: ER_GET_ERRNO; SQLSTATE: HY000
         *
         * Message: Got error %d - '%s' from storage engine
         *
         * Check the %d value to see what the OS error
         * means. For example, 28 indicates that you have run out of disk
         * space.
         */
        case ER_GET_ERRNO = 1030;
        /**
         * Error number: 1031; Symbol: ER_ILLEGAL_HA; SQLSTATE: HY000
         *
         * Message: Table storage engine for '%s' doesn't have this option
         */
        case ER_ILLEGAL_HA = 1031;
        /**
         * Error number: 1032; Symbol: ER_KEY_NOT_FOUND; SQLSTATE: HY000
         *
         * Message: Can't find record in '%s'
         */
        case ER_KEY_NOT_FOUND = 1032;
        /**
         * Error number: 1033; Symbol: ER_NOT_FORM_FILE; SQLSTATE: HY000
         *
         * Message: Incorrect information in file: '%s'
         */
        case ER_NOT_FORM_FILE = 1033;
        /**
         * Error number: 1034; Symbol: ER_NOT_KEYFILE; SQLSTATE: HY000
         *
         * Message: Incorrect key file for table '%s'; try to repair it
         */
        case ER_NOT_KEYFILE = 1034;
        /**
         * Error number: 1035; Symbol: ER_OLD_KEYFILE; SQLSTATE: HY000
         *
         * Message: Old key file for table '%s'; repair it!
         */
        case ER_OLD_KEYFILE = 1035;
        /**
         * Error number: 1036; Symbol: ER_OPEN_AS_READONLY; SQLSTATE: HY000
         *
         * Message: Table '%s' is read only
         */
        case ER_OPEN_AS_READONLY = 1036;
        /**
         * Error number: 1037; Symbol: ER_OUTOFMEMORY; SQLSTATE: HY001
         *
         * Message: Out of memory; restart server and try again (needed %d
         * bytes)
         */
        case ER_OUTOFMEMORY = 1037;
        /**
         * Error number: 1038; Symbol: ER_OUT_OF_SORTMEMORY; SQLSTATE: HY001
         *
         * Message: Out of sort memory, consider increasing server sort
         * buffer size
         */
        case ER_OUT_OF_SORTMEMORY = 1038;
        /**
         * Error number: 1040; Symbol: ER_CON_COUNT_ERROR; SQLSTATE: 08004
         *
         * Message: Too many connections
         */
        case ER_CON_COUNT_ERROR = 1040;
        /**
         * Error number: 1041; Symbol: ER_OUT_OF_RESOURCES; SQLSTATE: HY000
         *
         * Message: Out of memory; check if mysqld or some other process uses
         * all available memory; if not, you may have to use 'ulimit' to
         * allow mysqld to use more memory or you can add more swap space
         */
        case ER_OUT_OF_RESOURCES = 1041;
        /**
         * Error number: 1042; Symbol: ER_BAD_HOST_ERROR; SQLSTATE: 08S01
         *
         * Message: Can't get hostname for your address
         */
        case ER_BAD_HOST_ERROR = 1042;
        /**
         * Error number: 1043; Symbol: ER_HANDSHAKE_ERROR; SQLSTATE: 08S01
         *
         * Message: Bad handshake
         */
        case ER_HANDSHAKE_ERROR = 1043;
        /**
         * Error number: 1044; Symbol: ER_DBACCESS_DENIED_ERROR; SQLSTATE: 42000
         *
         * Message: Access denied for user '%s'@'%s' to database '%s'
         */
        case ER_DBACCESS_DENIED_ERROR = 1044;
        /**
         * Error number: 1045; Symbol: ER_ACCESS_DENIED_ERROR; SQLSTATE: 28000
         *
         * Message: Access denied for user '%s'@'%s' (using password: %s)
         */
        case ER_ACCESS_DENIED_ERROR = 1045;
        /**
         * Error number: 1046; Symbol: ER_NO_DB_ERROR; SQLSTATE: 3D000
         *
         * Message: No database selected
         */
        case ER_NO_DB_ERROR = 1046;
        /**
         * Error number: 1047; Symbol: ER_UNKNOWN_COM_ERROR; SQLSTATE: 08S01
         *
         * Message: Unknown command
         */
        case ER_UNKNOWN_COM_ERROR = 1047;
        /**
         * Error number: 1048; Symbol: ER_BAD_NULL_ERROR; SQLSTATE: 23000
         *
         * Message: Column '%s' cannot be null
         */
        case ER_BAD_NULL_ERROR = 1048;
        /**
         * Error number: 1049; Symbol: ER_BAD_DB_ERROR; SQLSTATE: 42000
         *
         * Message: Unknown database '%s'
         */
        case ER_BAD_DB_ERROR = 1049;
        /**
         * Error number: 1050; Symbol: ER_TABLE_EXISTS_ERROR; SQLSTATE: 42S01
         *
         * Message: Table '%s' already exists
         */
        case ER_TABLE_EXISTS_ERROR = 1050;
        /**
         * Error number: 1051; Symbol: ER_BAD_TABLE_ERROR; SQLSTATE: 42S02
         *
         * Message: Unknown table '%s'
         */
        case ER_BAD_TABLE_ERROR = 1051;
        /**
         * Error number: 1052; Symbol: ER_NON_UNIQ_ERROR; SQLSTATE: 23000
         *
         * Message: Column '%s' in %s is ambiguous
         *
         *  %s = column name
         *  %s = location of column (for example, "field list")
         *
         * Likely cause: A column appears in a query without appropriate
         * qualification, such as in a select list or ON clause.
         *
         * Examples:
         *
         *  mysql> SELECT i FROM t INNER JOIN t AS t2;  ERROR 1052 (23000): Column 'i' in field list is ambiguous
         *  mysql> SELECT * FROM t LEFT JOIN t AS t2 ON i = i;  ERROR 1052 (23000): Column 'i' in on clause is ambiguous
         *
         * Resolution:
         *
         * Qualify the column with the appropriate table name:
         *
         *  mysql> SELECT t2.i FROM t INNER JOIN t AS t2;
         *
         * Modify the query to avoid the need for qualification:
         *
         * mysql> SELECT * FROM t LEFT JOIN t AS t2 USING (i);
         */
        case ER_NON_UNIQ_ERROR = 1052;
        /**
         * Error number: 1053; Symbol: ER_SERVER_SHUTDOWN; SQLSTATE: 08S01
         *
         * Message: Server shutdown in progress
         */
        case ER_SERVER_SHUTDOWN = 1053;
        /**
         * Error number: 1054; Symbol: ER_BAD_FIELD_ERROR; SQLSTATE: 42S22
         *
         * Message: Unknown column '%s' in '%s'
         */
        case ER_BAD_FIELD_ERROR = 1054;
        /**
         * Error number: 1055; Symbol: ER_WRONG_FIELD_WITH_GROUP; SQLSTATE: 42000
         *
         * Message: '%s' isn't in GROUP BY
         */
        case ER_WRONG_FIELD_WITH_GROUP = 1055;
        /**
         * Error number: 1056; Symbol: ER_WRONG_GROUP_FIELD; SQLSTATE: 42000
         *
         * Message: Can't group on '%s'
         */
        case ER_WRONG_GROUP_FIELD = 1056;
        /**
         * Error number: 1057; Symbol: ER_WRONG_SUM_SELECT; SQLSTATE: 42000
         *
         * Message: Statement has sum functions and columns in same statement
         */
        case ER_WRONG_SUM_SELECT = 1057;
        /**
         * Error number: 1058; Symbol: ER_WRONG_VALUE_COUNT; SQLSTATE: 21S01
         *
         * Message: Column count doesn't match value count
         */
        case ER_WRONG_VALUE_COUNT = 1058;
        /**
         * Error number: 1059; Symbol: ER_TOO_LONG_IDENT; SQLSTATE: 42000
         *
         * Message: Identifier name '%s' is too long
         */
        case ER_TOO_LONG_IDENT = 1059;
        /**
         * Error number: 1060; Symbol: ER_DUP_FIELDNAME; SQLSTATE: 42S21
         *
         * Message: Duplicate column name '%s'
         */
        case ER_DUP_FIELDNAME = 1060;
        /**
         * Error number: 1061; Symbol: ER_DUP_KEYNAME; SQLSTATE: 42000
         *
         * Message: Duplicate key name '%s'
         */
        case ER_DUP_KEYNAME = 1061;
        /**
         * Error number: 1062; Symbol: ER_DUP_ENTRY; SQLSTATE: 23000
         *
         * Message: Duplicate entry '%s' for key %d
         *
         * The message returned with this error uses the format string for
         * ER_DUP_ENTRY_WITH_KEY_NAME.
         */
        case ER_DUP_ENTRY = 1062;
        /**
         * Error number: 1063; Symbol: ER_WRONG_FIELD_SPEC; SQLSTATE: 42000
         *
         * Message: Incorrect column specifier for column '%s'
         */
        case ER_WRONG_FIELD_SPEC = 1063;
        /**
         * Error number: 1064; Symbol: ER_PARSE_ERROR; SQLSTATE: 42000
         *
         * Message: %s near '%s' at line %d
         */
        case ER_PARSE_ERROR = 1064;
        /**
         * Error number: 1065; Symbol: ER_EMPTY_QUERY; SQLSTATE: 42000
         *
         * Message: Query was empty
         */
        case ER_EMPTY_QUERY = 1065;
        /**
         * Error number: 1066; Symbol: ER_NONUNIQ_TABLE; SQLSTATE: 42000
         *
         * Message: Not unique table/alias: '%s'
         */
        case ER_NONUNIQ_TABLE = 1066;
        /**
         * Error number: 1067; Symbol: ER_INVALID_DEFAULT; SQLSTATE: 42000
         *
         * Message: Invalid default value for '%s'
         */
        case ER_INVALID_DEFAULT = 1067;
        /**
         * Error number: 1068; Symbol: ER_MULTIPLE_PRI_KEY; SQLSTATE: 42000
         *
         * Message: Multiple primary key defined
         */
        case ER_MULTIPLE_PRI_KEY = 1068;
        /**
         * Error number: 1069; Symbol: ER_TOO_MANY_KEYS; SQLSTATE: 42000
         *
         * Message: Too many keys specified; max %d keys allowed
         */
        case ER_TOO_MANY_KEYS = 1069;
        /**
         * Error number: 1070; Symbol: ER_TOO_MANY_KEY_PARTS; SQLSTATE: 42000
         *
         * Message: Too many key parts specified; max %d parts allowed
         */
        case ER_TOO_MANY_KEY_PARTS = 1070;
        /**
         * Error number: 1071; Symbol: ER_TOO_LONG_KEY; SQLSTATE: 42000
         *
         * Message: Specified key was too long; max key length is %d bytes
         */
        case ER_TOO_LONG_KEY = 1071;
        /**
         * Error number: 1072; Symbol: ER_KEY_COLUMN_DOES_NOT_EXITS; SQLSTATE: 42000
         *
         * Message: Key column '%s' doesn't exist in table
         */
        case ER_KEY_COLUMN_DOES_NOT_EXITS = 1072;
        /**
         * Error number: 1073; Symbol: ER_BLOB_USED_AS_KEY; SQLSTATE: 42000
         *
         * Message: BLOB column '%s' can't be used in key specification with
         * the used table type
         */
        case ER_BLOB_USED_AS_KEY = 1073;
        /**
         * Error number: 1074; Symbol: ER_TOO_BIG_FIELDLENGTH; SQLSTATE: 42000
         *
         * Message: Column length too big for column '%s' (max = %lu); use
         * BLOB or TEXT instead
         */
        case ER_TOO_BIG_FIELDLENGTH = 1074;
        /**
         * Error number: 1075; Symbol: ER_WRONG_AUTO_KEY; SQLSTATE: 42000
         *
         * Message: Incorrect table definition; there can be only one auto
         * column and it must be defined as a key
         */
        case ER_WRONG_AUTO_KEY = 1075;
        /**
         * Error number: 1076; Symbol: ER_READY; SQLSTATE: HY000
         *
         * Message: %s: ready for connections. Version: '%s' socket: '%s'
         * port: %d
         */
        case ER_READY = 1076;
        /**
         * Error number: 1079; Symbol: ER_SHUTDOWN_COMPLETE; SQLSTATE: HY000
         *
         * Message: %s: Shutdown complete
         */
        case ER_SHUTDOWN_COMPLETE = 1079;
        /**
         * Error number: 1080; Symbol: ER_FORCING_CLOSE; SQLSTATE: 08S01
         *
         * Message: %s: Forcing close of thread %ld user: '%s'
         */
        case ER_FORCING_CLOSE = 1080;
        /**
         * Error number: 1081; Symbol: ER_IPSOCK_ERROR; SQLSTATE: 08S01
         *
         * Message: Can't create IP socket
         */
        case ER_IPSOCK_ERROR = 1081;
        /**
         * Error number: 1082; Symbol: ER_NO_SUCH_INDEX; SQLSTATE: 42S12
         *
         * Message: Table '%s' has no index like the one used in CREATE
         * INDEX; recreate the table
         */
        case ER_NO_SUCH_INDEX = 1082;
        /**
         * Error number: 1083; Symbol: ER_WRONG_FIELD_TERMINATORS; SQLSTATE: 42000
         *
         * Message: Field separator argument is not what is expected; check
         * the manual
         */
        case ER_WRONG_FIELD_TERMINATORS = 1083;
        /**
         * Error number: 1084; Symbol: ER_BLOBS_AND_NO_TERMINATED; SQLSTATE: 42000
         *
         * Message: You can't use fixed rowlength with BLOBs; please use
         * 'fields terminated by'
         */
        case ER_BLOBS_AND_NO_TERMINATED = 1084;
        /**
         * Error number: 1085; Symbol: ER_TEXTFILE_NOT_READABLE; SQLSTATE: HY000
         *
         * Message: The file '%s' must be in the database directory or be
         * readable by all
         */
        case ER_TEXTFILE_NOT_READABLE = 1085;
        /**
         * Error number: 1086; Symbol: ER_FILE_EXISTS_ERROR; SQLSTATE: HY000
         *
         * Message: File '%s' already exists
         */
        case ER_FILE_EXISTS_ERROR = 1086;
        /**
         * Error number: 1087; Symbol: ER_LOAD_INFO; SQLSTATE: HY000
         *
         * Message: Records: %ld Deleted: %ld Skipped: %ld Warnings: %ld
         */
        case ER_LOAD_INFO = 1087;
        /**
         * Error number: 1088; Symbol: ER_ALTER_INFO; SQLSTATE: HY000
         *
         * Message: Records: %ld Duplicates: %ld
         */
        case ER_ALTER_INFO = 1088;
        /**
         * Error number: 1089; Symbol: ER_WRONG_SUB_KEY; SQLSTATE: HY000
         *
         * Message: Incorrect prefix key; the used key part isn't a string; the used length is longer than the key part, or the storage engine
         * doesn't support unique prefix keys
         */
        case ER_WRONG_SUB_KEY = 1089;
        /**
         * Error number: 1090; Symbol: ER_CANT_REMOVE_ALL_FIELDS; SQLSTATE: 42000
         *
         * Message: You can't delete all columns with ALTER TABLE; use DROP
         * TABLE instead
         */
        case ER_CANT_REMOVE_ALL_FIELDS = 1090;
        /**
         * Error number: 1091; Symbol: ER_CANT_DROP_FIELD_OR_KEY; SQLSTATE: 42000
         *
         * Message: Can't DROP '%s'; check that column/key exists
         */
        case ER_CANT_DROP_FIELD_OR_KEY = 1091;
        /**
         * Error number: 1092; Symbol: ER_INSERT_INFO; SQLSTATE: HY000
         *
         * Message: Records: %ld Duplicates: %ld Warnings: %ld
         */
        case ER_INSERT_INFO = 1092;
        /**
         * Error number: 1093; Symbol: ER_UPDATE_TABLE_USED; SQLSTATE: HY000
         *
         * Message: You can't specify target table '%s' for update in FROM
         * clause
         *
         * This error occurs for attempts to select from and modify the same
         * table within a single statement. If the select attempt occurs
         * within a derived table, you can avoid this error by setting the
         * derived_merge flag of the
         * optimizer_switch system variable
         * to force the subquery to be materialized into a temporary table; which effectively causes it to be a different table from the one
         * modified. See Optimizing Derived Tables, View References, and Common Table Expressions with Merging or Materialization.
         */
        case ER_UPDATE_TABLE_USED = 1093;
        /**
         * Error number: 1094; Symbol: ER_NO_SUCH_THREAD; SQLSTATE: HY000
         *
         * Message: Unknown thread id: %lu
         */
        case ER_NO_SUCH_THREAD = 1094;
        /**
         * Error number: 1095; Symbol: ER_KILL_DENIED_ERROR; SQLSTATE: HY000
         *
         * Message: You are not owner of thread %lu
         */
        case ER_KILL_DENIED_ERROR = 1095;
        /**
         * Error number: 1096; Symbol: ER_NO_TABLES_USED; SQLSTATE: HY000
         *
         * Message: No tables used
         */
        case ER_NO_TABLES_USED = 1096;
        /**
         * Error number: 1097; Symbol: ER_TOO_BIG_SET; SQLSTATE: HY000
         *
         * Message: Too many strings for column %s and SET
         */
        case ER_TOO_BIG_SET = 1097;
        /**
         * Error number: 1098; Symbol: ER_NO_UNIQUE_LOGFILE; SQLSTATE: HY000
         *
         * Message: Can't generate a unique log-filename %s.(1-999)
         */
        case ER_NO_UNIQUE_LOGFILE = 1098;
        /**
         * Error number: 1099; Symbol: ER_TABLE_NOT_LOCKED_FOR_WRITE; SQLSTATE: HY000
         *
         * Message: Table '%s' was locked with a READ lock and can't be
         * updated
         */
        case ER_TABLE_NOT_LOCKED_FOR_WRITE = 1099;
        /**
         * Error number: 1100; Symbol: ER_TABLE_NOT_LOCKED; SQLSTATE: HY000
         *
         * Message: Table '%s' was not locked with LOCK TABLES
         */
        case ER_TABLE_NOT_LOCKED = 1100;
        /**
         * Error number: 1101; Symbol: ER_BLOB_CANT_HAVE_DEFAULT; SQLSTATE: 42000
         *
         * Message: BLOB, TEXT, GEOMETRY or JSON column '%s' can't have a
         * default value
         */
        case ER_BLOB_CANT_HAVE_DEFAULT = 1101;
        /**
         * Error number: 1102; Symbol: ER_WRONG_DB_NAME; SQLSTATE: 42000
         *
         * Message: Incorrect database name '%s'
         */
        case ER_WRONG_DB_NAME = 1102;
        /**
         * Error number: 1103; Symbol: ER_WRONG_TABLE_NAME; SQLSTATE: 42000
         *
         * Message: Incorrect table name '%s'
         */
        case ER_WRONG_TABLE_NAME = 1103;
        /**
         * Error number: 1104; Symbol: ER_TOO_BIG_SELECT; SQLSTATE: 42000
         *
         * Message: The SELECT would examine more than MAX_JOIN_SIZE rows; check your WHERE and use SET SQL_BIG_SELECTS=1 or SET
         * MAX_JOIN_SIZE=# if the SELECT is okay
         */
        case ER_TOO_BIG_SELECT = 1104;
        /**
         * Error number: 1105; Symbol: ER_UNKNOWN_ERROR; SQLSTATE: HY000
         *
         * Message: Unknown error
         */
        case ER_UNKNOWN_ERROR = 1105;
        /**
         * Error number: 1106; Symbol: ER_UNKNOWN_PROCEDURE; SQLSTATE: 42000
         *
         * Message: Unknown procedure '%s'
         */
        case ER_UNKNOWN_PROCEDURE = 1106;
        /**
         * Error number: 1107; Symbol: ER_WRONG_PARAMCOUNT_TO_PROCEDURE; SQLSTATE: 42000
         *
         * Message: Incorrect parameter count to procedure '%s'
         */
        case ER_WRONG_PARAMCOUNT_TO_PROCEDURE = 1107;
        /**
         * Error number: 1108; Symbol: ER_WRONG_PARAMETERS_TO_PROCEDURE; SQLSTATE: HY000
         *
         * Message: Incorrect parameters to procedure '%s'
         */
        case ER_WRONG_PARAMETERS_TO_PROCEDURE = 1108;
        /**
         * Error number: 1109; Symbol: ER_UNKNOWN_TABLE; SQLSTATE: 42S02
         *
         * Message: Unknown table '%s' in %s
         */
        case ER_UNKNOWN_TABLE = 1109;
        /**
         * Error number: 1110; Symbol: ER_FIELD_SPECIFIED_TWICE; SQLSTATE: 42000
         *
         * Message: Column '%s' specified twice
         */
        case ER_FIELD_SPECIFIED_TWICE = 1110;
        /**
         * Error number: 1111; Symbol: ER_INVALID_GROUP_FUNC_USE; SQLSTATE: HY000
         *
         * Message: Invalid use of group function
         */
        case ER_INVALID_GROUP_FUNC_USE = 1111;
        /**
         * Error number: 1112; Symbol: ER_UNSUPPORTED_EXTENSION; SQLSTATE: 42000
         *
         * Message: Table '%s' uses an extension that doesn't exist in this
         * MySQL version
         */
        case ER_UNSUPPORTED_EXTENSION = 1112;
        /**
         * Error number: 1113; Symbol: ER_TABLE_MUST_HAVE_COLUMNS; SQLSTATE: 42000
         *
         * Message: A table must have at least 1 column
         */
        case ER_TABLE_MUST_HAVE_COLUMNS = 1113;
        /**
         * Error number: 1114; Symbol: ER_RECORD_FILE_FULL; SQLSTATE: HY000
         *
         * Message: The table '%s' is full
         *
         * InnoDB reports this error when the system
         * tablespace runs out of free space. Reconfigure the system
         * tablespace to add a new data file.
         */
        case ER_RECORD_FILE_FULL = 1114;
        /**
         * Error number: 1115; Symbol: ER_UNKNOWN_CHARACTER_SET; SQLSTATE: 42000
         *
         * Message: Unknown character set: '%s'
         */
        case ER_UNKNOWN_CHARACTER_SET = 1115;
        /**
         * Error number: 1116; Symbol: ER_TOO_MANY_TABLES; SQLSTATE: HY000
         *
         * Message: Too many tables; MySQL can only use %d tables in a join
         */
        case ER_TOO_MANY_TABLES = 1116;
        /**
         * Error number: 1117; Symbol: ER_TOO_MANY_FIELDS; SQLSTATE: HY000
         *
         * Message: Too many columns
         */
        case ER_TOO_MANY_FIELDS = 1117;
        /**
         * Error number: 1118; Symbol: ER_TOO_BIG_ROWSIZE; SQLSTATE: 42000
         *
         * Message: Row size too large. The maximum row size for the used
         * table type, not counting BLOBs, is %ld. This includes storage
         * overhead, check the manual. You have to change some columns to
         * TEXT or BLOBs
         */
        case ER_TOO_BIG_ROWSIZE = 1118;
        /**
         * Error number: 1119; Symbol: ER_STACK_OVERRUN; SQLSTATE: HY000
         *
         * Message: Thread stack overrun: Used: %ld of a %ld stack. Use
         * 'mysqld --thread_stack=#' to specify a bigger stack if needed
         */
        case ER_STACK_OVERRUN = 1119;
        /**
         * Error number: 1120; Symbol: ER_WRONG_OUTER_JOIN_UNUSED; SQLSTATE: 42000
         *
         * Message: Cross dependency found in OUTER JOIN; examine your ON
         * conditions
         */
        case ER_WRONG_OUTER_JOIN_UNUSED = 1120;
        /**
         * Error number: 1121; Symbol: ER_NULL_COLUMN_IN_INDEX; SQLSTATE: 42000
         *
         * Message: Table handler doesn't support NULL in given index. Please
         * change column '%s' to be NOT NULL or use another handler
         */
        case ER_NULL_COLUMN_IN_INDEX = 1121;
        /**
         * Error number: 1122; Symbol: ER_CANT_FIND_UDF; SQLSTATE: HY000
         *
         * Message: Can't load function '%s'
         */
        case ER_CANT_FIND_UDF = 1122;
        /**
         * Error number: 1123; Symbol: ER_CANT_INITIALIZE_UDF; SQLSTATE: HY000
         *
         * Message: Can't initialize function '%s'; %s
         */
        case ER_CANT_INITIALIZE_UDF = 1123;
        /**
         * Error number: 1124; Symbol: ER_UDF_NO_PATHS; SQLSTATE: HY000
         *
         * Message: No paths allowed for shared library
         */
        case ER_UDF_NO_PATHS = 1124;
        /**
         * Error number: 1125; Symbol: ER_UDF_EXISTS; SQLSTATE: HY000
         *
         * Message: Function '%s' already exists
         */
        case ER_UDF_EXISTS = 1125;
        /**
         * Error number: 1126; Symbol: ER_CANT_OPEN_LIBRARY; SQLSTATE: HY000
         *
         * Message: Can't open shared library '%s' (errno: %d %s)
         */
        case ER_CANT_OPEN_LIBRARY = 1126;
        /**
         * Error number: 1127; Symbol: ER_CANT_FIND_DL_ENTRY; SQLSTATE: HY000
         *
         * Message: Can't find symbol '%s' in library
         */
        case ER_CANT_FIND_DL_ENTRY = 1127;
        /**
         * Error number: 1128; Symbol: ER_FUNCTION_NOT_DEFINED; SQLSTATE: HY000
         *
         * Message: Function '%s' is not defined
         */
        case ER_FUNCTION_NOT_DEFINED = 1128;
        /**
         * Error number: 1129; Symbol: ER_HOST_IS_BLOCKED; SQLSTATE: HY000
         *
         * Message: Host '%s' is blocked because of many connection errors; unblock with 'mysqladmin flush-hosts'
         */
        case ER_HOST_IS_BLOCKED = 1129;
        /**
         * Error number: 1130; Symbol: ER_HOST_NOT_PRIVILEGED; SQLSTATE: HY000
         *
         * Message: Host '%s' is not allowed to connect to this MySQL server
         */
        case ER_HOST_NOT_PRIVILEGED = 1130;
        /**
         * Error number: 1131; Symbol: ER_PASSWORD_ANONYMOUS_USER; SQLSTATE: 42000
         *
         * Message: You are using MySQL as an anonymous user and anonymous
         * users are not allowed to change passwords
         */
        case ER_PASSWORD_ANONYMOUS_USER = 1131;
        /**
         * Error number: 1132; Symbol: ER_PASSWORD_NOT_ALLOWED; SQLSTATE: 42000
         *
         * Message: You must have privileges to update tables in the mysql
         * database to be able to change passwords for others
         */
        case ER_PASSWORD_NOT_ALLOWED = 1132;
        /**
         * Error number: 1133; Symbol: ER_PASSWORD_NO_MATCH; SQLSTATE: 42000
         *
         * Message: Can't find any matching row in the user table
         */
        case ER_PASSWORD_NO_MATCH = 1133;
        /**
         * Error number: 1134; Symbol: ER_UPDATE_INFO; SQLSTATE: HY000
         *
         * Message: Rows matched: %ld Changed: %ld Warnings: %ld
         */
        case ER_UPDATE_INFO = 1134;
        /**
         * Error number: 1135; Symbol: ER_CANT_CREATE_THREAD; SQLSTATE: HY000
         *
         * Message: Can't create a new thread (errno %d); if you are not out
         * of available memory, you can consult the manual for a possible
         * OS-dependent bug
         */
        case ER_CANT_CREATE_THREAD = 1135;
        /**
         * Error number: 1136; Symbol: ER_WRONG_VALUE_COUNT_ON_ROW; SQLSTATE: 21S01
         *
         * Message: Column count doesn't match value count at row %ld
         */
        case ER_WRONG_VALUE_COUNT_ON_ROW = 1136;
        /**
         * Error number: 1137; Symbol: ER_CANT_REOPEN_TABLE; SQLSTATE: HY000
         *
         * Message: Can't reopen table: '%s'
         */
        case ER_CANT_REOPEN_TABLE = 1137;
        /**
         * Error number: 1138; Symbol: ER_INVALID_USE_OF_NULL; SQLSTATE: 22004
         *
         * Message: Invalid use of NULL value
         */
        case ER_INVALID_USE_OF_NULL = 1138;
        /**
         * Error number: 1139; Symbol: ER_REGEXP_ERROR; SQLSTATE: 42000
         *
         * Message: Got error '%s' from regexp
         */
        case ER_REGEXP_ERROR = 1139;
        /**
         * Error number: 1140; Symbol: ER_MIX_OF_GROUP_FUNC_AND_FIELDS; SQLSTATE: 42000
         *
         * Message: Mixing of GROUP columns (MIN(),MAX(),COUNT(),...) with no
         * GROUP columns is illegal if there is no GROUP BY clause
         */
        case ER_MIX_OF_GROUP_FUNC_AND_FIELDS = 1140;
        /**
         * Error number: 1141; Symbol: ER_NONEXISTING_GRANT; SQLSTATE: 42000
         *
         * Message: There is no such grant defined for user '%s' on host '%s'
         */
        case ER_NONEXISTING_GRANT = 1141;
        /**
         * Error number: 1142; Symbol: ER_TABLEACCESS_DENIED_ERROR; SQLSTATE: 42000
         *
         * Message: %s command denied to user '%s'@'%s' for table '%s'
         */
        case ER_TABLEACCESS_DENIED_ERROR = 1142;
        /**
         * Error number: 1143; Symbol: ER_COLUMNACCESS_DENIED_ERROR; SQLSTATE: 42000
         *
         * Message: %s command denied to user '%s'@'%s' for column '%s' in
         * table '%s'
         */
        case ER_COLUMNACCESS_DENIED_ERROR = 1143;
        /**
         * Error number: 1144; Symbol: ER_ILLEGAL_GRANT_FOR_TABLE; SQLSTATE: 42000
         *
         * Message: Illegal GRANT/REVOKE command; please consult the manual
         * to see which privileges can be used
         */
        case ER_ILLEGAL_GRANT_FOR_TABLE = 1144;
        /**
         * Error number: 1145; Symbol: ER_GRANT_WRONG_HOST_OR_USER; SQLSTATE: 42000
         *
         * Message: The host or user argument to GRANT is too long
         */
        case ER_GRANT_WRONG_HOST_OR_USER = 1145;
        /**
         * Error number: 1146; Symbol: ER_NO_SUCH_TABLE; SQLSTATE: 42S02
         *
         * Message: Table '%s.%s' doesn't exist
         */
        case ER_NO_SUCH_TABLE = 1146;
        /**
         * Error number: 1147; Symbol: ER_NONEXISTING_TABLE_GRANT; SQLSTATE: 42000
         *
         * Message: There is no such grant defined for user '%s' on host '%s'
         * on table '%s'
         */
        case ER_NONEXISTING_TABLE_GRANT = 1147;
        /**
         * Error number: 1148; Symbol: ER_NOT_ALLOWED_COMMAND; SQLSTATE: 42000
         *
         * Message: The used command is not allowed with this MySQL version
         */
        case ER_NOT_ALLOWED_COMMAND = 1148;
        /**
         * Error number: 1149; Symbol: ER_SYNTAX_ERROR; SQLSTATE: 42000
         *
         * Message: You have an error in your SQL syntax; check the manual
         * that corresponds to your MySQL server version for the right syntax
         * to use
         */
        case ER_SYNTAX_ERROR = 1149;
        /**
         * Error number: 1152; Symbol: ER_ABORTING_CONNECTION; SQLSTATE: 08S01
         *
         * Message: Aborted connection %ld to db: '%s' user: '%s' (%s)
         */
        case ER_ABORTING_CONNECTION = 1152;
        /**
         * Error number: 1153; Symbol: ER_NET_PACKET_TOO_LARGE; SQLSTATE: 08S01
         *
         * Message: Got a packet bigger than 'max_allowed_packet' bytes
         */
        case ER_NET_PACKET_TOO_LARGE = 1153;
        /**
         * Error number: 1154; Symbol: ER_NET_READ_ERROR_FROM_PIPE; SQLSTATE: 08S01
         *
         * Message: Got a read error from the connection pipe
         */
        case ER_NET_READ_ERROR_FROM_PIPE = 1154;
        /**
         * Error number: 1155; Symbol: ER_NET_FCNTL_ERROR; SQLSTATE: 08S01
         *
         * Message: Got an error from fcntl()
         */
        case ER_NET_FCNTL_ERROR = 1155;
        /**
         * Error number: 1156; Symbol: ER_NET_PACKETS_OUT_OF_ORDER; SQLSTATE: 08S01
         *
         * Message: Got packets out of order
         */
        case ER_NET_PACKETS_OUT_OF_ORDER = 1156;
        /**
         * Error number: 1157; Symbol: ER_NET_UNCOMPRESS_ERROR; SQLSTATE: 08S01
         *
         * Message: Couldn't uncompress communication packet
         */
        case ER_NET_UNCOMPRESS_ERROR = 1157;
        /**
         * Error number: 1158; Symbol: ER_NET_READ_ERROR; SQLSTATE: 08S01
         *
         * Message: Got an error reading communication packets
         */
        case ER_NET_READ_ERROR = 1158;
        /**
         * Error number: 1159; Symbol: ER_NET_READ_INTERRUPTED; SQLSTATE: 08S01
         *
         * Message: Got timeout reading communication packets
         */
        case ER_NET_READ_INTERRUPTED = 1159;
        /**
         * Error number: 1160; Symbol: ER_NET_ERROR_ON_WRITE; SQLSTATE: 08S01
         *
         * Message: Got an error writing communication packets
         */
        case ER_NET_ERROR_ON_WRITE = 1160;
        /**
         * Error number: 1161; Symbol: ER_NET_WRITE_INTERRUPTED; SQLSTATE: 08S01
         *
         * Message: Got timeout writing communication packets
         */
        case ER_NET_WRITE_INTERRUPTED = 1161;
        /**
         * Error number: 1162; Symbol: ER_TOO_LONG_STRING; SQLSTATE: 42000
         *
         * Message: Result string is longer than 'max_allowed_packet' bytes
         */
        case ER_TOO_LONG_STRING = 1162;
        /**
         * Error number: 1163; Symbol: ER_TABLE_CANT_HANDLE_BLOB; SQLSTATE: 42000
         *
         * Message: The used table type doesn't support BLOB/TEXT columns
         */
        case ER_TABLE_CANT_HANDLE_BLOB = 1163;
        /**
         * Error number: 1164; Symbol: ER_TABLE_CANT_HANDLE_AUTO_INCREMENT; SQLSTATE: 42000
         *
         * Message: The used table type doesn't support AUTO_INCREMENT
         * columns
         */
        case ER_TABLE_CANT_HANDLE_AUTO_INCREMENT = 1164;
        /**
         * Error number: 1166; Symbol: ER_WRONG_COLUMN_NAME; SQLSTATE: 42000
         *
         * Message: Incorrect column name '%s'
         */
        case ER_WRONG_COLUMN_NAME = 1166;
        /**
         * Error number: 1167; Symbol: ER_WRONG_KEY_COLUMN; SQLSTATE: 42000
         *
         * Message: The used storage engine can't index column '%s'
         */
        case ER_WRONG_KEY_COLUMN = 1167;
        /**
         * Error number: 1168; Symbol: ER_WRONG_MRG_TABLE; SQLSTATE: HY000
         *
         * Message: Unable to open underlying table which is differently
         * defined or of non-MyISAM type or doesn't exist
         */
        case ER_WRONG_MRG_TABLE = 1168;
        /**
         * Error number: 1169; Symbol: ER_DUP_UNIQUE; SQLSTATE: 23000
         *
         * Message: Can't write, because of unique constraint, to table '%s'
         */
        case ER_DUP_UNIQUE = 1169;
        /**
         * Error number: 1170; Symbol: ER_BLOB_KEY_WITHOUT_LENGTH; SQLSTATE: 42000
         *
         * Message: BLOB/TEXT column '%s' used in key specification without a
         * key length
         */
        case ER_BLOB_KEY_WITHOUT_LENGTH = 1170;
        /**
         * Error number: 1171; Symbol: ER_PRIMARY_CANT_HAVE_NULL; SQLSTATE: 42000
         *
         * Message: All parts of a PRIMARY KEY must be NOT NULL; if you need
         * NULL in a key, use UNIQUE instead
         */
        case ER_PRIMARY_CANT_HAVE_NULL = 1171;
        /**
         * Error number: 1172; Symbol: ER_TOO_MANY_ROWS; SQLSTATE: 42000
         *
         * Message: Result consisted of more than one row
         */
        case ER_TOO_MANY_ROWS = 1172;
        /**
         * Error number: 1173; Symbol: ER_REQUIRES_PRIMARY_KEY; SQLSTATE: 42000
         *
         * Message: This table type requires a primary key
         */
        case ER_REQUIRES_PRIMARY_KEY = 1173;
        /**
         * Error number: 1175; Symbol: ER_UPDATE_WITHOUT_KEY_IN_SAFE_MODE; SQLSTATE: HY000
         *
         * Message: You are using safe update mode and you tried to update a
         * table without a WHERE that uses a KEY column. %s
         */
        case ER_UPDATE_WITHOUT_KEY_IN_SAFE_MODE = 1175;
        /**
         * Error number: 1176; Symbol: ER_KEY_DOES_NOT_EXITS; SQLSTATE: 42000
         *
         * Message: Key '%s' doesn't exist in table '%s'
         */
        case ER_KEY_DOES_NOT_EXITS = 1176;
        /**
         * Error number: 1177; Symbol: ER_CHECK_NO_SUCH_TABLE; SQLSTATE: 42000
         *
         * Message: Can't open table
         */
        case ER_CHECK_NO_SUCH_TABLE = 1177;
        /**
         * Error number: 1178; Symbol: ER_CHECK_NOT_IMPLEMENTED; SQLSTATE: 42000
         *
         * Message: The storage engine for the table doesn't support %s
         */
        case ER_CHECK_NOT_IMPLEMENTED = 1178;
        /**
         * Error number: 1179; Symbol: ER_CANT_DO_THIS_DURING_AN_TRANSACTION; SQLSTATE: 25000
         *
         * Message: You are not allowed to execute this command in a
         * transaction
         */
        case ER_CANT_DO_THIS_DURING_AN_TRANSACTION = 1179;
        /**
         * Error number: 1180; Symbol: ER_ERROR_DURING_COMMIT; SQLSTATE: HY000
         *
         * Message: Got error %d - '%s' during COMMIT
         */
        case ER_ERROR_DURING_COMMIT = 1180;
        /**
         * Error number: 1181; Symbol: ER_ERROR_DURING_ROLLBACK; SQLSTATE: HY000
         *
         * Message: Got error %d - '%s' during ROLLBACK
         */
        case ER_ERROR_DURING_ROLLBACK = 1181;
        /**
         * Error number: 1182; Symbol: ER_ERROR_DURING_FLUSH_LOGS; SQLSTATE: HY000
         *
         * Message: Got error %d during FLUSH_LOGS
         */
        case ER_ERROR_DURING_FLUSH_LOGS = 1182;
        /**
         * Error number: 1184; Symbol: ER_NEW_ABORTING_CONNECTION; SQLSTATE: 08S01
         *
         * Message: Aborted connection %u to db: '%s' user: '%s' host: '%s'
         * (%s)
         */
        case ER_NEW_ABORTING_CONNECTION = 1184;
        /**
         * Error number: 1188; Symbol: ER_SOURCE; SQLSTATE: HY000
         *
         * Message: Error from source: '%s'
         */
        case ER_SOURCE = 1188;
        /**
         * Error number: 1189; Symbol: ER_SOURCE_NET_READ; SQLSTATE: 08S01
         *
         * Message: Net error reading from source
         */
        case ER_SOURCE_NET_READ = 1189;
        /**
         * Error number: 1190; Symbol: ER_SOURCE_NET_WRITE; SQLSTATE: 08S01
         *
         * Message: Net error writing to source
         */
        case ER_SOURCE_NET_WRITE = 1190;
        /**
         * Error number: 1191; Symbol: ER_FT_MATCHING_KEY_NOT_FOUND; SQLSTATE: HY000
         *
         * Message: Can't find FULLTEXT index matching the column list
         */
        case ER_FT_MATCHING_KEY_NOT_FOUND = 1191;
        /**
         * Error number: 1192; Symbol: ER_LOCK_OR_ACTIVE_TRANSACTION; SQLSTATE: HY000
         *
         * Message: Can't execute the given command because you have active
         * locked tables or an active transaction
         */
        case ER_LOCK_OR_ACTIVE_TRANSACTION = 1192;
        /**
         * Error number: 1193; Symbol: ER_UNKNOWN_SYSTEM_VARIABLE; SQLSTATE: HY000
         *
         * Message: Unknown system variable '%s'
         */
        case ER_UNKNOWN_SYSTEM_VARIABLE = 1193;
        /**
         * Error number: 1194; Symbol: ER_CRASHED_ON_USAGE; SQLSTATE: HY000
         *
         * Message: Table '%s' is marked as crashed and should be repaired
         */
        case ER_CRASHED_ON_USAGE = 1194;
        /**
         * Error number: 1195; Symbol: ER_CRASHED_ON_REPAIR; SQLSTATE: HY000
         *
         * Message: Table '%s' is marked as crashed and last (automatic?)
         * repair failed
         */
        case ER_CRASHED_ON_REPAIR = 1195;
        /**
         * Error number: 1196; Symbol: ER_WARNING_NOT_COMPLETE_ROLLBACK; SQLSTATE: HY000
         *
         * Message: Some non-transactional changed tables couldn't be rolled
         * back
         */
        case ER_WARNING_NOT_COMPLETE_ROLLBACK = 1196;
        /**
         * Error number: 1197; Symbol: ER_TRANS_CACHE_FULL; SQLSTATE: HY000
         *
         * Message: Multi-statement transaction required more than
         * 'max_binlog_cache_size' bytes of storage; increase this mysqld
         * variable and try again
         */
        case ER_TRANS_CACHE_FULL = 1197;
        /**
         * Error number: 1199; Symbol: ER_REPLICA_NOT_RUNNING; SQLSTATE: HY000
         *
         * Message: This operation requires a running replica; configure
         * replica and do START REPLICA
         */
        case ER_REPLICA_NOT_RUNNING = 1199;
        /**
         * Error number: 1200; Symbol: ER_BAD_REPLICA; SQLSTATE: HY000
         *
         * Message: The server is not configured as replica; fix in config
         * file or with CHANGE REPLICATION SOURCE TO
         */
        case ER_BAD_REPLICA = 1200;
        /**
         * Error number: 1201; Symbol: ER_CONNECTION_METADATA; SQLSTATE: HY000
         *
         * Message: Could not initialize connection metadata structure; more
         * error messages can be found in the MySQL error log
         */
        case ER_CONNECTION_METADATA = 1201;
        /**
         * Error number: 1202; Symbol: ER_REPLICA_THREAD; SQLSTATE: HY000
         *
         * Message: Could not create replica thread; check system resources
         */
        case ER_REPLICA_THREAD = 1202;
        /**
         * Error number: 1203; Symbol: ER_TOO_MANY_USER_CONNECTIONS; SQLSTATE: 42000
         *
         * Message: User %s already has more than 'max_user_connections'
         * active connections
         */
        case ER_TOO_MANY_USER_CONNECTIONS = 1203;
        /**
         * Error number: 1204; Symbol: ER_SET_CONSTANTS_ONLY; SQLSTATE: HY000
         *
         * Message: You may only use constant expressions with SET
         */
        case ER_SET_CONSTANTS_ONLY = 1204;
        /**
         * Error number: 1205; Symbol: ER_LOCK_WAIT_TIMEOUT; SQLSTATE: HY000
         *
         * Message: Lock wait timeout exceeded; try restarting transaction
         *
         * InnoDB reports this error when lock wait
         * timeout expires. The statement that waited too long was
         * rolled back (not the entire
         * transaction). You can
         * increase the value of the
         * innodb_lock_wait_timeout
         * configuration option if SQL statements should wait longer for
         * other transactions to complete, or decrease it if too many
         * long-running transactions are causing
         * locking problems and reducing
         * concurrency on a busy
         * system.
         */
        case ER_LOCK_WAIT_TIMEOUT = 1205;
        /**
         * Error number: 1206; Symbol: ER_LOCK_TABLE_FULL; SQLSTATE: HY000
         *
         * Message: The total number of locks exceeds the lock table size
         *
         * InnoDB reports this error when the total number
         * of locks exceeds the amount of memory devoted to managing locks.
         * To avoid this error, increase the value of
         * innodb_buffer_pool_size. Within
         * an individual application, a workaround may be to break a large
         * operation into smaller pieces. For example, if the error occurs
         * for a large INSERT, perform several
         * smaller INSERT operations.
         */
        case ER_LOCK_TABLE_FULL = 1206;
        /**
         * Error number: 1207; Symbol: ER_READ_ONLY_TRANSACTION; SQLSTATE: 25000
         *
         * Message: Update locks cannot be acquired during a READ UNCOMMITTED
         * transaction
         */
        case ER_READ_ONLY_TRANSACTION = 1207;
        /**
         * Error number: 1210; Symbol: ER_WRONG_ARGUMENTS; SQLSTATE: HY000
         *
         * Message: Incorrect arguments to %s
         */
        case ER_WRONG_ARGUMENTS = 1210;
        /**
         * Error number: 1211; Symbol: ER_NO_PERMISSION_TO_CREATE_USER; SQLSTATE: 42000
         *
         * Message: '%s'@'%s' is not allowed to create new users
         */
        case ER_NO_PERMISSION_TO_CREATE_USER = 1211;
        /**
         * Error number: 1213; Symbol: ER_LOCK_DEADLOCK; SQLSTATE: 40001
         *
         * Message: Deadlock found when trying to get lock; try restarting
         * transaction
         *
         * InnoDB reports this error when a
         * transaction encounters a
         * deadlock and is automatically
         * rolled back so that your
         * application can take corrective action. To recover from this
         * error, run all the operations in this transaction again. A
         * deadlock occurs when requests for locks arrive in inconsistent
         * order between transactions. The transaction that was rolled back
         * released all its locks, and the other transaction can now get all
         * the locks it requested. Thus, when you re-run the transaction that
         * was rolled back, it might have to wait for other transactions to
         * complete, but typically the deadlock does not recur. If you
         * encounter frequent deadlocks, make the sequence of locking
         * operations (LOCK TABLES, SELECT ...
         * FOR UPDATE, and so on) consistent between the different
         * transactions or applications that experience the issue. See
         * Deadlocks in InnoDB for details.
         */
        case ER_LOCK_DEADLOCK = 1213;
        /**
         * Error number: 1214; Symbol: ER_TABLE_CANT_HANDLE_FT; SQLSTATE: HY000
         *
         * Message: The used table type doesn't support FULLTEXT indexes
         */
        case ER_TABLE_CANT_HANDLE_FT = 1214;
        /**
         * Error number: 1215; Symbol: ER_CANNOT_ADD_FOREIGN; SQLSTATE: HY000
         *
         * Message: Cannot add foreign key constraint
         */
        case ER_CANNOT_ADD_FOREIGN = 1215;
        /**
         * Error number: 1216; Symbol: ER_NO_REFERENCED_ROW; SQLSTATE: 23000
         *
         * Message: Cannot add or update a child row: a foreign key
         * constraint fails
         *
         * InnoDB reports this error when you try to add a
         * row but there is no parent row, and a
         * foreign key
         * constraint fails. Add the parent row first.
         */
        case ER_NO_REFERENCED_ROW = 1216;
        /**
         * Error number: 1217; Symbol: ER_ROW_IS_REFERENCED; SQLSTATE: 23000
         *
         * Message: Cannot delete or update a parent row: a foreign key
         * constraint fails
         *
         * InnoDB reports this error when you try to
         * delete a parent row that has children, and a
         * foreign key
         * constraint fails. Delete the children first.
         */
        case ER_ROW_IS_REFERENCED = 1217;
        /**
         * Error number: 1218; Symbol: ER_CONNECT_TO_SOURCE; SQLSTATE: 08S01
         *
         * Message: Error connecting to source: %s
         */
        case ER_CONNECT_TO_SOURCE = 1218;
        /**
         * Error number: 1220; Symbol: ER_ERROR_WHEN_EXECUTING_COMMAND; SQLSTATE: HY000
         *
         * Message: Error when executing command %s: %s
         */
        case ER_ERROR_WHEN_EXECUTING_COMMAND = 1220;
        /**
         * Error number: 1221; Symbol: ER_WRONG_USAGE; SQLSTATE: HY000
         *
         * Message: Incorrect usage of %s and %s
         */
        case ER_WRONG_USAGE = 1221;
        /**
         * Error number: 1222; Symbol: ER_WRONG_NUMBER_OF_COLUMNS_IN_SELECT; SQLSTATE: 21000
         *
         * Message: The used SELECT statements have a different number of
         * columns
         */
        case ER_WRONG_NUMBER_OF_COLUMNS_IN_SELECT = 1222;
        /**
         * Error number: 1223; Symbol: ER_CANT_UPDATE_WITH_READLOCK; SQLSTATE: HY000
         *
         * Message: Can't execute the query because you have a conflicting
         * read lock
         */
        case ER_CANT_UPDATE_WITH_READLOCK = 1223;
        /**
         * Error number: 1224; Symbol: ER_MIXING_NOT_ALLOWED; SQLSTATE: HY000
         *
         * Message: Mixing of transactional and non-transactional tables is
         * disabled
         */
        case ER_MIXING_NOT_ALLOWED = 1224;
        /**
         * Error number: 1225; Symbol: ER_DUP_ARGUMENT; SQLSTATE: HY000
         *
         * Message: Option '%s' used twice in statement
         */
        case ER_DUP_ARGUMENT = 1225;
        /**
         * Error number: 1226; Symbol: ER_USER_LIMIT_REACHED; SQLSTATE: 42000
         *
         * Message: User '%s' has exceeded the '%s' resource (current value: %ld)
         */
        case ER_USER_LIMIT_REACHED = 1226;
        /**
         * Error number: 1227; Symbol: ER_SPECIFIC_ACCESS_DENIED_ERROR; SQLSTATE: 42000
         *
         * Message: Access denied; you need (at least one of) the %s
         * privilege(s) for this operation
         */
        case ER_SPECIFIC_ACCESS_DENIED_ERROR = 1227;
        /**
         * Error number: 1228; Symbol: ER_LOCAL_VARIABLE; SQLSTATE: HY000
         *
         * Message: Variable '%s' is a SESSION variable and can't be used
         * with SET GLOBAL
         */
        case ER_LOCAL_VARIABLE = 1228;
        /**
         * Error number: 1229; Symbol: ER_GLOBAL_VARIABLE; SQLSTATE: HY000
         *
         * Message: Variable '%s' is a GLOBAL variable and should be set with
         * SET GLOBAL
         */
        case ER_GLOBAL_VARIABLE = 1229;
        /**
         * Error number: 1230; Symbol: ER_NO_DEFAULT; SQLSTATE: 42000
         *
         * Message: Variable '%s' doesn't have a default value
         */
        case ER_NO_DEFAULT = 1230;
        /**
         * Error number: 1231; Symbol: ER_WRONG_VALUE_FOR_VAR; SQLSTATE: 42000
         *
         * Message: Variable '%s' can't be set to the value of '%s'
         */
        case ER_WRONG_VALUE_FOR_VAR = 1231;
        /**
         * Error number: 1232; Symbol: ER_WRONG_TYPE_FOR_VAR; SQLSTATE: 42000
         *
         * Message: Incorrect argument type to variable '%s'
         */
        case ER_WRONG_TYPE_FOR_VAR = 1232;
        /**
         * Error number: 1233; Symbol: ER_VAR_CANT_BE_READ; SQLSTATE: HY000
         *
         * Message: Variable '%s' can only be set, not read
         */
        case ER_VAR_CANT_BE_READ = 1233;
        /**
         * Error number: 1234; Symbol: ER_CANT_USE_OPTION_HERE; SQLSTATE: 42000
         *
         * Message: Incorrect usage/placement of '%s'
         */
        case ER_CANT_USE_OPTION_HERE = 1234;
        /**
         * Error number: 1235; Symbol: ER_NOT_SUPPORTED_YET; SQLSTATE: 42000
         *
         * Message: This version of MySQL doesn't yet support '%s'
         */
        case ER_NOT_SUPPORTED_YET = 1235;
        /**
         * Error number: 1236; Symbol: ER_SOURCE_FATAL_ERROR_READING_BINLOG; SQLSTATE: HY000
         *
         * Message: Got fatal error %d from source when reading data from
         * binary log: '%s'
         */
        case ER_SOURCE_FATAL_ERROR_READING_BINLOG = 1236;
        /**
         * Error number: 1237; Symbol: ER_REPLICA_IGNORED_TABLE; SQLSTATE: HY000
         *
         * Message: Replica SQL thread ignored the query because of
         * replicate-*-table rules
         */
        case ER_REPLICA_IGNORED_TABLE = 1237;
        /**
         * Error number: 1238; Symbol: ER_INCORRECT_GLOBAL_LOCAL_VAR; SQLSTATE: HY000
         *
         * Message: Variable '%s' is a %s variable
         */
        case ER_INCORRECT_GLOBAL_LOCAL_VAR = 1238;
        /**
         * Error number: 1239; Symbol: ER_WRONG_FK_DEF; SQLSTATE: 42000
         *
         * Message: Incorrect foreign key definition for '%s': %s
         */
        case ER_WRONG_FK_DEF = 1239;
        /**
         * Error number: 1240; Symbol: ER_KEY_REF_DO_NOT_MATCH_TABLE_REF; SQLSTATE: HY000
         *
         * Message: Key reference and table reference don't match
         */
        case ER_KEY_REF_DO_NOT_MATCH_TABLE_REF = 1240;
        /**
         * Error number: 1241; Symbol: ER_OPERAND_COLUMNS; SQLSTATE: 21000
         *
         * Message: Operand should contain %d column(s)
         */
        case ER_OPERAND_COLUMNS = 1241;
        /**
         * Error number: 1242; Symbol: ER_SUBQUERY_NO_1_ROW; SQLSTATE: 21000
         *
         * Message: Subquery returns more than 1 row
         */
        case ER_SUBQUERY_NO_1_ROW = 1242;
        /**
         * Error number: 1243; Symbol: ER_UNKNOWN_STMT_HANDLER; SQLSTATE: HY000
         *
         * Message: Unknown prepared statement handler (%.*s) given to %s
         */
        case ER_UNKNOWN_STMT_HANDLER = 1243;
        /**
         * Error number: 1244; Symbol: ER_CORRUPT_HELP_DB; SQLSTATE: HY000
         *
         * Message: Help database is corrupt or does not exist
         */
        case ER_CORRUPT_HELP_DB = 1244;
        /**
         * Error number: 1246; Symbol: ER_AUTO_CONVERT; SQLSTATE: HY000
         *
         * Message: Converting column '%s' from %s to %s
         */
        case ER_AUTO_CONVERT = 1246;
        /**
         * Error number: 1247; Symbol: ER_ILLEGAL_REFERENCE; SQLSTATE: 42S22
         *
         * Message: Reference '%s' not supported (%s)
         */
        case ER_ILLEGAL_REFERENCE = 1247;
        /**
         * Error number: 1248; Symbol: ER_DERIVED_MUST_HAVE_ALIAS; SQLSTATE: 42000
         *
         * Message: Every derived table must have its own alias
         */
        case ER_DERIVED_MUST_HAVE_ALIAS = 1248;
        /**
         * Error number: 1249; Symbol: ER_SELECT_REDUCED; SQLSTATE: 01000
         *
         * Message: Select %u was reduced during optimization
         */
        case ER_SELECT_REDUCED = 1249;
        /**
         * Error number: 1250; Symbol: ER_TABLENAME_NOT_ALLOWED_HERE; SQLSTATE: 42000
         *
         * Message: Table '%s' from one of the SELECTs cannot be used in %s
         */
        case ER_TABLENAME_NOT_ALLOWED_HERE = 1250;
        /**
         * Error number: 1251; Symbol: ER_NOT_SUPPORTED_AUTH_MODE; SQLSTATE: 08004
         *
         * Message: Client does not support authentication protocol requested
         * by server; consider upgrading MySQL client
         */
        case ER_NOT_SUPPORTED_AUTH_MODE = 1251;
        /**
         * Error number: 1252; Symbol: ER_SPATIAL_CANT_HAVE_NULL; SQLSTATE: 42000
         *
         * Message: All parts of a SPATIAL index must be NOT NULL
         */
        case ER_SPATIAL_CANT_HAVE_NULL = 1252;
        /**
         * Error number: 1253; Symbol: ER_COLLATION_CHARSET_MISMATCH; SQLSTATE: 42000
         *
         * Message: COLLATION '%s' is not valid for CHARACTER SET '%s'
         */
        case ER_COLLATION_CHARSET_MISMATCH = 1253;
        /**
         * Error number: 1256; Symbol: ER_TOO_BIG_FOR_UNCOMPRESS; SQLSTATE: HY000
         *
         * Message: Uncompressed data size too large; the maximum size is %d
         * (probably, length of uncompressed data was corrupted)
         */
        case ER_TOO_BIG_FOR_UNCOMPRESS = 1256;
        /**
         * Error number: 1257; Symbol: ER_ZLIB_Z_MEM_ERROR; SQLSTATE: HY000
         *
         * Message: ZLIB: Not enough memory
         */
        case ER_ZLIB_Z_MEM_ERROR = 1257;
        /**
         * Error number: 1258; Symbol: ER_ZLIB_Z_BUF_ERROR; SQLSTATE: HY000
         *
         * Message: ZLIB: Not enough room in the output buffer (probably; length of uncompressed data was corrupted)
         */
        case ER_ZLIB_Z_BUF_ERROR = 1258;
        /**
         * Error number: 1259; Symbol: ER_ZLIB_Z_DATA_ERROR; SQLSTATE: HY000
         *
         * Message: ZLIB: Input data corrupted
         */
        case ER_ZLIB_Z_DATA_ERROR = 1259;
        /**
         * Error number: 1260; Symbol: ER_CUT_VALUE_GROUP_CONCAT; SQLSTATE: HY000
         *
         * Message: Row %u was cut by GROUP_CONCAT()
         */
        case ER_CUT_VALUE_GROUP_CONCAT = 1260;
        /**
         * Error number: 1261; Symbol: ER_WARN_TOO_FEW_RECORDS; SQLSTATE: 01000
         *
         * Message: Row %ld doesn't contain data for all columns
         */
        case ER_WARN_TOO_FEW_RECORDS = 1261;
        /**
         * Error number: 1262; Symbol: ER_WARN_TOO_MANY_RECORDS; SQLSTATE: 01000
         *
         * Message: Row %ld was truncated; it contained more data than there
         * were input columns
         */
        case ER_WARN_TOO_MANY_RECORDS = 1262;
        /**
         * Error number: 1263; Symbol: ER_WARN_NULL_TO_NOTNULL; SQLSTATE: 22004
         *
         * Message: Column set to default value; NULL supplied to NOT NULL
         * column '%s' at row %ld
         */
        case ER_WARN_NULL_TO_NOTNULL = 1263;
        /**
         * Error number: 1264; Symbol: ER_WARN_DATA_OUT_OF_RANGE; SQLSTATE: 22003
         *
         * Message: Out of range value for column '%s' at row %ld
         */
        case ER_WARN_DATA_OUT_OF_RANGE = 1264;
        /**
         * Error number: 1265; Symbol: WARN_DATA_TRUNCATED; SQLSTATE: 01000
         *
         * Message: Data truncated for column '%s' at row %ld
         */
        case WARN_DATA_TRUNCATED = 1265;
        /**
         * Error number: 1266; Symbol: ER_WARN_USING_OTHER_HANDLER; SQLSTATE: HY000
         *
         * Message: Using storage engine %s for table '%s'
         */
        case ER_WARN_USING_OTHER_HANDLER = 1266;
        /**
         * Error number: 1267; Symbol: ER_CANT_AGGREGATE_2COLLATIONS; SQLSTATE: HY000
         *
         * Message: Illegal mix of collations (%s,%s) and (%s,%s) for
         * operation '%s'
         */
        case ER_CANT_AGGREGATE_2COLLATIONS = 1267;
        /**
         * Error number: 1269; Symbol: ER_REVOKE_GRANTS; SQLSTATE: HY000
         *
         * Message: Can't revoke all privileges for one or more of the
         * requested users
         */
        case ER_REVOKE_GRANTS = 1269;
        /**
         * Error number: 1270; Symbol: ER_CANT_AGGREGATE_3COLLATIONS; SQLSTATE: HY000
         *
         * Message: Illegal mix of collations (%s,%s), (%s,%s), (%s,%s) for
         * operation '%s'
         */
        case ER_CANT_AGGREGATE_3COLLATIONS = 1270;
        /**
         * Error number: 1271; Symbol: ER_CANT_AGGREGATE_NCOLLATIONS; SQLSTATE: HY000
         *
         * Message: Illegal mix of collations for operation '%s'
         */
        case ER_CANT_AGGREGATE_NCOLLATIONS = 1271;
        /**
         * Error number: 1272; Symbol: ER_VARIABLE_IS_NOT_STRUCT; SQLSTATE: HY000
         *
         * Message: Variable '%s' is not a variable component (can't be used
         * as XXXX.variable_name)
         */
        case ER_VARIABLE_IS_NOT_STRUCT = 1272;
        /**
         * Error number: 1273; Symbol: ER_UNKNOWN_COLLATION; SQLSTATE: HY000
         *
         * Message: Unknown collation: '%s'
         */
        case ER_UNKNOWN_COLLATION = 1273;
        /**
         * Error number: 1274; Symbol: ER_REPLICA_IGNORED_SSL_PARAMS; SQLSTATE: HY000
         *
         * Message: SSL parameters in CHANGE REPLICATION SOURCE are ignored
         * because this MySQL replica was compiled without SSL support; they
         * can be used later if MySQL replica with SSL is started
         */
        case ER_REPLICA_IGNORED_SSL_PARAMS = 1274;
        /**
         * Error number: 1276; Symbol: ER_WARN_FIELD_RESOLVED; SQLSTATE: HY000
         *
         * Message: Field or reference '%s%s%s%s%s' of SELECT #%d was
         * resolved in SELECT #%d
         */
        case ER_WARN_FIELD_RESOLVED = 1276;
        /**
         * Error number: 1277; Symbol: ER_BAD_REPLICA_UNTIL_COND; SQLSTATE: HY000
         *
         * Message: Incorrect parameter or combination of parameters for
         * START REPLICA UNTIL
         */
        case ER_BAD_REPLICA_UNTIL_COND = 1277;
        /**
         * Error number: 1278; Symbol: ER_MISSING_SKIP_REPLICA; SQLSTATE: HY000
         *
         * Message: It is recommended to use --skip-replica-start when doing
         * step-by-step replication with START REPLICA UNTIL; otherwise, you
         * will get problems if you get an unexpected replica's mysqld
         * restart
         */
        case ER_MISSING_SKIP_REPLICA = 1278;
        /**
         * Error number: 1279; Symbol: ER_UNTIL_COND_IGNORED; SQLSTATE: HY000
         *
         * Message: SQL thread is not to be started so UNTIL options are
         * ignored
         */
        case ER_UNTIL_COND_IGNORED = 1279;
        /**
         * Error number: 1280; Symbol: ER_WRONG_NAME_FOR_INDEX; SQLSTATE: 42000
         *
         * Message: Incorrect index name '%s'
         */
        case ER_WRONG_NAME_FOR_INDEX = 1280;
        /**
         * Error number: 1281; Symbol: ER_WRONG_NAME_FOR_CATALOG; SQLSTATE: 42000
         *
         * Message: Incorrect catalog name '%s'
         */
        case ER_WRONG_NAME_FOR_CATALOG = 1281;
        /**
         * Error number: 1283; Symbol: ER_BAD_FT_COLUMN; SQLSTATE: HY000
         *
         * Message: Column '%s' cannot be part of FULLTEXT index
         */
        case ER_BAD_FT_COLUMN = 1283;
        /**
         * Error number: 1284; Symbol: ER_UNKNOWN_KEY_CACHE; SQLSTATE: HY000
         *
         * Message: Unknown key cache '%s'
         */
        case ER_UNKNOWN_KEY_CACHE = 1284;
        /**
         * Error number: 1285; Symbol: ER_WARN_HOSTNAME_WONT_WORK; SQLSTATE: HY000
         *
         * Message: MySQL is started in --skip-name-resolve mode; you must
         * restart it without this switch for this grant to work
         */
        case ER_WARN_HOSTNAME_WONT_WORK = 1285;
        /**
         * Error number: 1286; Symbol: ER_UNKNOWN_STORAGE_ENGINE; SQLSTATE: 42000
         *
         * Message: Unknown storage engine '%s'
         */
        case ER_UNKNOWN_STORAGE_ENGINE = 1286;
        /**
         * Error number: 1287; Symbol: ER_WARN_DEPRECATED_SYNTAX; SQLSTATE: HY000
         *
         * Message: '%s' is deprecated and will be removed in a future
         * release. Please use %s instead
         */
        case ER_WARN_DEPRECATED_SYNTAX = 1287;
        /**
         * Error number: 1288; Symbol: ER_NON_UPDATABLE_TABLE; SQLSTATE: HY000
         *
         * Message: The target table %s of the %s is not updatable
         */
        case ER_NON_UPDATABLE_TABLE = 1288;
        /**
         * Error number: 1289; Symbol: ER_FEATURE_DISABLED; SQLSTATE: HY000
         *
         * Message: The '%s' feature is disabled; you need MySQL built with
         * '%s' to have it working
         */
        case ER_FEATURE_DISABLED = 1289;
        /**
         * Error number: 1290; Symbol: ER_OPTION_PREVENTS_STATEMENT; SQLSTATE: HY000
         *
         * Message: The MySQL server is running with the %s option so it
         * cannot execute this statement
         */
        case ER_OPTION_PREVENTS_STATEMENT = 1290;
        /**
         * Error number: 1291; Symbol: ER_DUPLICATED_VALUE_IN_TYPE; SQLSTATE: HY000
         *
         * Message: Column '%s' has duplicated value '%s' in %s
         */
        case ER_DUPLICATED_VALUE_IN_TYPE = 1291;
        /**
         * Error number: 1292; Symbol: ER_TRUNCATED_WRONG_VALUE; SQLSTATE: 22007
         *
         * Message: Truncated incorrect %s value: '%s'
         */
        case ER_TRUNCATED_WRONG_VALUE = 1292;
        /**
         * Error number: 1294; Symbol: ER_INVALID_ON_UPDATE; SQLSTATE: HY000
         *
         * Message: Invalid ON UPDATE clause for '%s' column
         */
        case ER_INVALID_ON_UPDATE = 1294;
        /**
         * Error number: 1295; Symbol: ER_UNSUPPORTED_PS; SQLSTATE: HY000
         *
         * Message: This command is not supported in the prepared statement
         * protocol yet
         */
        case ER_UNSUPPORTED_PS = 1295;
        /**
         * Error number: 1296; Symbol: ER_GET_ERRMSG; SQLSTATE: HY000
         *
         * Message: Got error %d '%s' from %s
         */
        case ER_GET_ERRMSG = 1296;
        /**
         * Error number: 1297; Symbol: ER_GET_TEMPORARY_ERRMSG; SQLSTATE: HY000
         *
         * Message: Got temporary error %d '%s' from %s
         */
        case ER_GET_TEMPORARY_ERRMSG = 1297;
        /**
         * Error number: 1298; Symbol: ER_UNKNOWN_TIME_ZONE; SQLSTATE: HY000
         *
         * Message: Unknown or incorrect time zone: '%s'
         */
        case ER_UNKNOWN_TIME_ZONE = 1298;
        /**
         * Error number: 1299; Symbol: ER_WARN_INVALID_TIMESTAMP; SQLSTATE: HY000
         *
         * Message: Invalid TIMESTAMP value in column '%s' at row %ld
         */
        case ER_WARN_INVALID_TIMESTAMP = 1299;
        /**
         * Error number: 1300; Symbol: ER_INVALID_CHARACTER_STRING; SQLSTATE: HY000
         *
         * Message: Invalid %s character string: '%s'
         */
        case ER_INVALID_CHARACTER_STRING = 1300;
        /**
         * Error number: 1301; Symbol: ER_WARN_ALLOWED_PACKET_OVERFLOWED; SQLSTATE: HY000
         *
         * Message: Result of %s() was larger than max_allowed_packet (%ld) -
         * truncated
         */
        case ER_WARN_ALLOWED_PACKET_OVERFLOWED = 1301;
        /**
         * Error number: 1302; Symbol: ER_CONFLICTING_DECLARATIONS; SQLSTATE: HY000
         *
         * Message: Conflicting declarations: '%s%s' and '%s%s'
         */
        case ER_CONFLICTING_DECLARATIONS = 1302;
        /**
         * Error number: 1303; Symbol: ER_SP_NO_RECURSIVE_CREATE; SQLSTATE: 2F003
         *
         * Message: Can't create a %s from within another stored routine
         */
        case ER_SP_NO_RECURSIVE_CREATE = 1303;
        /**
         * Error number: 1304; Symbol: ER_SP_ALREADY_EXISTS; SQLSTATE: 42000
         *
         * Message: %s %s already exists
         */
        case ER_SP_ALREADY_EXISTS = 1304;
        /**
         * Error number: 1305; Symbol: ER_SP_DOES_NOT_EXIST; SQLSTATE: 42000
         *
         * Message: %s %s does not exist
         */
        case ER_SP_DOES_NOT_EXIST = 1305;
        /**
         * Error number: 1306; Symbol: ER_SP_DROP_FAILED; SQLSTATE: HY000
         *
         * Message: Failed to DROP %s %s
         */
        case ER_SP_DROP_FAILED = 1306;
        /**
         * Error number: 1307; Symbol: ER_SP_STORE_FAILED; SQLSTATE: HY000
         *
         * Message: Failed to CREATE %s %s
         */
        case ER_SP_STORE_FAILED = 1307;
        /**
         * Error number: 1308; Symbol: ER_SP_LILABEL_MISMATCH; SQLSTATE: 42000
         *
         * Message: %s with no matching label: %s
         */
        case ER_SP_LILABEL_MISMATCH = 1308;
        /**
         * Error number: 1309; Symbol: ER_SP_LABEL_REDEFINE; SQLSTATE: 42000
         *
         * Message: Redefining label %s
         */
        case ER_SP_LABEL_REDEFINE = 1309;
        /**
         * Error number: 1310; Symbol: ER_SP_LABEL_MISMATCH; SQLSTATE: 42000
         *
         * Message: End-label %s without match
         */
        case ER_SP_LABEL_MISMATCH = 1310;
        /**
         * Error number: 1311; Symbol: ER_SP_UNINIT_VAR; SQLSTATE: 01000
         *
         * Message: Referring to uninitialized variable %s
         */
        case ER_SP_UNINIT_VAR = 1311;
        /**
         * Error number: 1312; Symbol: ER_SP_BADSELECT; SQLSTATE: 0A000
         *
         * Message: PROCEDURE %s can't return a result set in the given
         * context
         */
        case ER_SP_BADSELECT = 1312;
        /**
         * Error number: 1313; Symbol: ER_SP_BADRETURN; SQLSTATE: 42000
         *
         * Message: RETURN is only allowed in a FUNCTION
         */
        case ER_SP_BADRETURN = 1313;
        /**
         * Error number: 1314; Symbol: ER_SP_BADSTATEMENT; SQLSTATE: 0A000
         *
         * Message: %s is not allowed in stored procedures
         */
        case ER_SP_BADSTATEMENT = 1314;
        /**
         * Error number: 1315; Symbol: ER_UPDATE_LOG_DEPRECATED_IGNORED; SQLSTATE: 42000
         *
         * Message: The update log is deprecated and replaced by the binary
         * log; SET SQL_LOG_UPDATE has been ignored.
         */
        case ER_UPDATE_LOG_DEPRECATED_IGNORED = 1315;
        /**
         * Error number: 1316; Symbol: ER_UPDATE_LOG_DEPRECATED_TRANSLATED; SQLSTATE: 42000
         *
         * Message: The update log is deprecated and replaced by the binary
         * log; SET SQL_LOG_UPDATE has been translated to SET SQL_LOG_BIN.
         */
        case ER_UPDATE_LOG_DEPRECATED_TRANSLATED = 1316;
        /**
         * Error number: 1317; Symbol: ER_QUERY_INTERRUPTED; SQLSTATE: 70100
         *
         * Message: Query execution was interrupted
         */
        case ER_QUERY_INTERRUPTED = 1317;
        /**
         * Error number: 1318; Symbol: ER_SP_WRONG_NO_OF_ARGS; SQLSTATE: 42000
         *
         * Message: Incorrect number of arguments for %s %s; expected %u, got
         * %u
         */
        case ER_SP_WRONG_NO_OF_ARGS = 1318;
        /**
         * Error number: 1319; Symbol: ER_SP_COND_MISMATCH; SQLSTATE: 42000
         *
         * Message: Undefined CONDITION: %s
         */
        case ER_SP_COND_MISMATCH = 1319;
        /**
         * Error number: 1320; Symbol: ER_SP_NORETURN; SQLSTATE: 42000
         *
         * Message: No RETURN found in FUNCTION %s
         */
        case ER_SP_NORETURN = 1320;
        /**
         * Error number: 1321; Symbol: ER_SP_NORETURNEND; SQLSTATE: 2F005
         *
         * Message: FUNCTION %s ended without RETURN
         */
        case ER_SP_NORETURNEND = 1321;
        /**
         * Error number: 1322; Symbol: ER_SP_BAD_CURSOR_QUERY; SQLSTATE: 42000
         *
         * Message: Cursor statement must be a SELECT
         */
        case ER_SP_BAD_CURSOR_QUERY = 1322;
        /**
         * Error number: 1323; Symbol: ER_SP_BAD_CURSOR_SELECT; SQLSTATE: 42000
         *
         * Message: Cursor SELECT must not have INTO
         */
        case ER_SP_BAD_CURSOR_SELECT = 1323;
        /**
         * Error number: 1324; Symbol: ER_SP_CURSOR_MISMATCH; SQLSTATE: 42000
         *
         * Message: Undefined CURSOR: %s
         */
        case ER_SP_CURSOR_MISMATCH = 1324;
        /**
         * Error number: 1325; Symbol: ER_SP_CURSOR_ALREADY_OPEN; SQLSTATE: 24000
         *
         * Message: Cursor is already open
         */
        case ER_SP_CURSOR_ALREADY_OPEN = 1325;
        /**
         * Error number: 1326; Symbol: ER_SP_CURSOR_NOT_OPEN; SQLSTATE: 24000
         *
         * Message: Cursor is not open
         */
        case ER_SP_CURSOR_NOT_OPEN = 1326;
        /**
         * Error number: 1327; Symbol: ER_SP_UNDECLARED_VAR; SQLSTATE: 42000
         *
         * Message: Undeclared variable: %s
         */
        case ER_SP_UNDECLARED_VAR = 1327;
        /**
         * Error number: 1328; Symbol: ER_SP_WRONG_NO_OF_FETCH_ARGS; SQLSTATE: HY000
         *
         * Message: Incorrect number of FETCH variables
         */
        case ER_SP_WRONG_NO_OF_FETCH_ARGS = 1328;
        /**
         * Error number: 1329; Symbol: ER_SP_FETCH_NO_DATA; SQLSTATE: 02000
         *
         * Message: No data - zero rows fetched, selected, or processed
         */
        case ER_SP_FETCH_NO_DATA = 1329;
        /**
         * Error number: 1330; Symbol: ER_SP_DUP_PARAM; SQLSTATE: 42000
         *
         * Message: Duplicate parameter: %s
         */
        case ER_SP_DUP_PARAM = 1330;
        /**
         * Error number: 1331; Symbol: ER_SP_DUP_VAR; SQLSTATE: 42000
         *
         * Message: Duplicate variable: %s
         */
        case ER_SP_DUP_VAR = 1331;
        /**
         * Error number: 1332; Symbol: ER_SP_DUP_COND; SQLSTATE: 42000
         *
         * Message: Duplicate condition: %s
         */
        case ER_SP_DUP_COND = 1332;
        /**
         * Error number: 1333; Symbol: ER_SP_DUP_CURS; SQLSTATE: 42000
         *
         * Message: Duplicate cursor: %s
         */
        case ER_SP_DUP_CURS = 1333;
        /**
         * Error number: 1334; Symbol: ER_SP_CANT_ALTER; SQLSTATE: HY000
         *
         * Message: Failed to ALTER %s %s
         */
        case ER_SP_CANT_ALTER = 1334;
        /**
         * Error number: 1335; Symbol: ER_SP_SUBSELECT_NYI; SQLSTATE: 0A000
         *
         * Message: Subquery value not supported
         */
        case ER_SP_SUBSELECT_NYI = 1335;
        /**
         * Error number: 1336; Symbol: ER_STMT_NOT_ALLOWED_IN_SF_OR_TRG; SQLSTATE: 0A000
         *
         * Message: %s is not allowed in stored function or trigger
         */
        case ER_STMT_NOT_ALLOWED_IN_SF_OR_TRG = 1336;
        /**
         * Error number: 1337; Symbol: ER_SP_VARCOND_AFTER_CURSHNDLR; SQLSTATE: 42000
         *
         * Message: Variable or condition declaration after cursor or handler
         * declaration
         */
        case ER_SP_VARCOND_AFTER_CURSHNDLR = 1337;
        /**
         * Error number: 1338; Symbol: ER_SP_CURSOR_AFTER_HANDLER; SQLSTATE: 42000
         *
         * Message: Cursor declaration after handler declaration
         */
        case ER_SP_CURSOR_AFTER_HANDLER = 1338;
        /**
         * Error number: 1339; Symbol: ER_SP_CASE_NOT_FOUND; SQLSTATE: 20000
         *
         * Message: Case not found for CASE statement
         */
        case ER_SP_CASE_NOT_FOUND = 1339;
        /**
         * Error number: 1340; Symbol: ER_FPARSER_TOO_BIG_FILE; SQLSTATE: HY000
         *
         * Message: Configuration file '%s' is too big
         */
        case ER_FPARSER_TOO_BIG_FILE = 1340;
        /**
         * Error number: 1341; Symbol: ER_FPARSER_BAD_HEADER; SQLSTATE: HY000
         *
         * Message: Malformed file type header in file '%s'
         */
        case ER_FPARSER_BAD_HEADER = 1341;
        /**
         * Error number: 1342; Symbol: ER_FPARSER_EOF_IN_COMMENT; SQLSTATE: HY000
         *
         * Message: Unexpected end of file while parsing comment '%s'
         */
        case ER_FPARSER_EOF_IN_COMMENT = 1342;
        /**
         * Error number: 1343; Symbol: ER_FPARSER_ERROR_IN_PARAMETER; SQLSTATE: HY000
         *
         * Message: Error while parsing parameter '%s' (line: '%s')
         */
        case ER_FPARSER_ERROR_IN_PARAMETER = 1343;
        /**
         * Error number: 1344; Symbol: ER_FPARSER_EOF_IN_UNKNOWN_PARAMETER; SQLSTATE: HY000
         *
         * Message: Unexpected end of file while skipping unknown parameter
         * '%s'
         */
        case ER_FPARSER_EOF_IN_UNKNOWN_PARAMETER = 1344;
        /**
         * Error number: 1345; Symbol: ER_VIEW_NO_EXPLAIN; SQLSTATE: HY000
         *
         * Message: EXPLAIN/SHOW can not be issued; lacking privileges for
         * underlying table
         */
        case ER_VIEW_NO_EXPLAIN = 1345;
        /**
         * Error number: 1347; Symbol: ER_WRONG_OBJECT; SQLSTATE: HY000
         *
         * Message: '%s.%s' is not %s
         *
         * The named object is incorrect for the type of operation attempted
         * on it. It must be an object of the named type. Example: HANDLER OPEN
         * requires a base table, not a view. It fails if attempted on an
         * INFORMATION_SCHEMA table that is
         * implemented as a view on data dictionary tables.
         */
        case ER_WRONG_OBJECT = 1347;
        /**
         * Error number: 1348; Symbol: ER_NONUPDATEABLE_COLUMN; SQLSTATE: HY000
         *
         * Message: Column '%s' is not updatable
         */
        case ER_NONUPDATEABLE_COLUMN = 1348;
        /**
         * Error number: 1350; Symbol: ER_VIEW_SELECT_CLAUSE; SQLSTATE: HY000
         *
         * Message: View's SELECT contains a '%s' clause
         */
        case ER_VIEW_SELECT_CLAUSE = 1350;
        /**
         * Error number: 1351; Symbol: ER_VIEW_SELECT_VARIABLE; SQLSTATE: HY000
         *
         * Message: View's SELECT contains a variable or parameter
         */
        case ER_VIEW_SELECT_VARIABLE = 1351;
        /**
         * Error number: 1352; Symbol: ER_VIEW_SELECT_TMPTABLE; SQLSTATE: HY000
         *
         * Message: View's SELECT refers to a temporary table '%s'
         */
        case ER_VIEW_SELECT_TMPTABLE = 1352;
        /**
         * Error number: 1353; Symbol: ER_VIEW_WRONG_LIST; SQLSTATE: HY000
         *
         * Message: In definition of view, derived table or common table
         * expression, SELECT list and column names list have different
         * column counts
         */
        case ER_VIEW_WRONG_LIST = 1353;
        /**
         * Error number: 1354; Symbol: ER_WARN_VIEW_MERGE; SQLSTATE: HY000
         *
         * Message: View merge algorithm can't be used here for now (assumed
         * undefined algorithm)
         */
        case ER_WARN_VIEW_MERGE = 1354;
        /**
         * Error number: 1355; Symbol: ER_WARN_VIEW_WITHOUT_KEY; SQLSTATE: HY000
         *
         * Message: View being updated does not have complete key of
         * underlying table in it
         */
        case ER_WARN_VIEW_WITHOUT_KEY = 1355;
        /**
         * Error number: 1356; Symbol: ER_VIEW_INVALID; SQLSTATE: HY000
         *
         * Message: View '%s.%s' references invalid table(s) or column(s) or
         * function(s) or definer/invoker of view lack rights to use them
         */
        case ER_VIEW_INVALID = 1356;
        /**
         * Error number: 1357; Symbol: ER_SP_NO_DROP_SP; SQLSTATE: HY000
         *
         * Message: Can't drop or alter a %s from within another stored
         * routine
         */
        case ER_SP_NO_DROP_SP = 1357;
        /**
         * Error number: 1359; Symbol: ER_TRG_ALREADY_EXISTS; SQLSTATE: HY000
         *
         * Message: Trigger already exists
         */
        case ER_TRG_ALREADY_EXISTS = 1359;
        /**
         * Error number: 1360; Symbol: ER_TRG_DOES_NOT_EXIST; SQLSTATE: HY000
         *
         * Message: Trigger does not exist
         */
        case ER_TRG_DOES_NOT_EXIST = 1360;
        /**
         * Error number: 1361; Symbol: ER_TRG_ON_VIEW_OR_TEMP_TABLE; SQLSTATE: HY000
         *
         * Message: Trigger's '%s' is view or temporary table
         */
        case ER_TRG_ON_VIEW_OR_TEMP_TABLE = 1361;
        /**
         * Error number: 1362; Symbol: ER_TRG_CANT_CHANGE_ROW; SQLSTATE: HY000
         *
         * Message: Updating of %s row is not allowed in %strigger
         */
        case ER_TRG_CANT_CHANGE_ROW = 1362;
        /**
         * Error number: 1363; Symbol: ER_TRG_NO_SUCH_ROW_IN_TRG; SQLSTATE: HY000
         *
         * Message: There is no %s row in %s trigger
         */
        case ER_TRG_NO_SUCH_ROW_IN_TRG = 1363;
        /**
         * Error number: 1364; Symbol: ER_NO_DEFAULT_FOR_FIELD; SQLSTATE: HY000
         *
         * Message: Field '%s' doesn't have a default value
         */
        case ER_NO_DEFAULT_FOR_FIELD = 1364;
        /**
         * Error number: 1365; Symbol: ER_DIVISION_BY_ZERO; SQLSTATE: 22012
         *
         * Message: Division by 0
         */
        case ER_DIVISION_BY_ZERO = 1365;
        /**
         * Error number: 1366; Symbol: ER_TRUNCATED_WRONG_VALUE_FOR_FIELD; SQLSTATE: HY000
         *
         * Message: Incorrect %s value: '%s' for column '%s' at row %ld
         */
        case ER_TRUNCATED_WRONG_VALUE_FOR_FIELD = 1366;
        /**
         * Error number: 1367; Symbol: ER_ILLEGAL_VALUE_FOR_TYPE; SQLSTATE: 22007
         *
         * Message: Illegal %s '%s' value found during parsing
         */
        case ER_ILLEGAL_VALUE_FOR_TYPE = 1367;
        /**
         * Error number: 1368; Symbol: ER_VIEW_NONUPD_CHECK; SQLSTATE: HY000
         *
         * Message: CHECK OPTION on non-updatable view '%s.%s'
         */
        case ER_VIEW_NONUPD_CHECK = 1368;
        /**
         * Error number: 1369; Symbol: ER_VIEW_CHECK_FAILED; SQLSTATE: HY000
         *
         * Message: CHECK OPTION failed '%s.%s'
         */
        case ER_VIEW_CHECK_FAILED = 1369;
        /**
         * Error number: 1370; Symbol: ER_PROCACCESS_DENIED_ERROR; SQLSTATE: 42000
         *
         * Message: %s command denied to user '%s'@'%s' for routine '%s'
         */
        case ER_PROCACCESS_DENIED_ERROR = 1370;
        /**
         * Error number: 1371; Symbol: ER_RELAY_LOG_FAIL; SQLSTATE: HY000
         *
         * Message: Failed purging old relay logs: %s
         */
        case ER_RELAY_LOG_FAIL = 1371;
        /**
         * Error number: 1373; Symbol: ER_UNKNOWN_TARGET_BINLOG; SQLSTATE: HY000
         *
         * Message: Target log not found in binlog index
         */
        case ER_UNKNOWN_TARGET_BINLOG = 1373;
        /**
         * Error number: 1374; Symbol: ER_IO_ERR_LOG_INDEX_READ; SQLSTATE: HY000
         *
         * Message: I/O error reading log index file
         */
        case ER_IO_ERR_LOG_INDEX_READ = 1374;
        /**
         * Error number: 1375; Symbol: ER_BINLOG_PURGE_PROHIBITED; SQLSTATE: HY000
         *
         * Message: Server configuration does not permit binlog purge
         */
        case ER_BINLOG_PURGE_PROHIBITED = 1375;
        /**
         * Error number: 1376; Symbol: ER_FSEEK_FAIL; SQLSTATE: HY000
         *
         * Message: Failed on fseek()
         */
        case ER_FSEEK_FAIL = 1376;
        /**
         * Error number: 1377; Symbol: ER_BINLOG_PURGE_FATAL_ERR; SQLSTATE: HY000
         *
         * Message: Fatal error during log purge
         */
        case ER_BINLOG_PURGE_FATAL_ERR = 1377;
        /**
         * Error number: 1378; Symbol: ER_LOG_IN_USE; SQLSTATE: HY000
         *
         * Message: A purgeable log is in use, will not purge
         */
        case ER_LOG_IN_USE = 1378;
        /**
         * Error number: 1379; Symbol: ER_LOG_PURGE_UNKNOWN_ERR; SQLSTATE: HY000
         *
         * Message: Unknown error during log purge
         */
        case ER_LOG_PURGE_UNKNOWN_ERR = 1379;
        /**
         * Error number: 1380; Symbol: ER_RELAY_LOG_INIT; SQLSTATE: HY000
         *
         * Message: Failed initializing relay log position: %s
         */
        case ER_RELAY_LOG_INIT = 1380;
        /**
         * Error number: 1381; Symbol: ER_NO_BINARY_LOGGING; SQLSTATE: HY000
         *
         * Message: You are not using binary logging
         */
        case ER_NO_BINARY_LOGGING = 1381;
        /**
         * Error number: 1382; Symbol: ER_RESERVED_SYNTAX; SQLSTATE: HY000
         *
         * Message: The '%s' syntax is reserved for purposes internal to the
         * MySQL server
         */
        case ER_RESERVED_SYNTAX = 1382;
        /**
         * Error number: 1390; Symbol: ER_PS_MANY_PARAM; SQLSTATE: HY000
         *
         * Message: Prepared statement contains too many placeholders
         */
        case ER_PS_MANY_PARAM = 1390;
        /**
         * Error number: 1391; Symbol: ER_KEY_PART_0; SQLSTATE: HY000
         *
         * Message: Key part '%s' length cannot be 0
         */
        case ER_KEY_PART_0 = 1391;
        /**
         * Error number: 1392; Symbol: ER_VIEW_CHECKSUM; SQLSTATE: HY000
         *
         * Message: View text checksum failed
         */
        case ER_VIEW_CHECKSUM = 1392;
        /**
         * Error number: 1393; Symbol: ER_VIEW_MULTIUPDATE; SQLSTATE: HY000
         *
         * Message: Can not modify more than one base table through a join
         * view '%s.%s'
         */
        case ER_VIEW_MULTIUPDATE = 1393;
        /**
         * Error number: 1394; Symbol: ER_VIEW_NO_INSERT_FIELD_LIST; SQLSTATE: HY000
         *
         * Message: Can not insert into join view '%s.%s' without fields list
         */
        case ER_VIEW_NO_INSERT_FIELD_LIST = 1394;
        /**
         * Error number: 1395; Symbol: ER_VIEW_DELETE_MERGE_VIEW; SQLSTATE: HY000
         *
         * Message: Can not delete from join view '%s.%s'
         */
        case ER_VIEW_DELETE_MERGE_VIEW = 1395;
        /**
         * Error number: 1396; Symbol: ER_CANNOT_USER; SQLSTATE: HY000
         *
         * Message: Operation %s failed for %s
         */
        case ER_CANNOT_USER = 1396;
        /**
         * Error number: 1397; Symbol: ER_XAER_NOTA; SQLSTATE: XAE04
         *
         * Message: XAER_NOTA: Unknown XID
         */
        case ER_XAER_NOTA = 1397;
        /**
         * Error number: 1398; Symbol: ER_XAER_INVAL; SQLSTATE: XAE05
         *
         * Message: XAER_INVAL: Invalid arguments (or unsupported command)
         */
        case ER_XAER_INVAL = 1398;
        /**
         * Error number: 1399; Symbol: ER_XAER_RMFAIL; SQLSTATE: XAE07
         *
         * Message: XAER_RMFAIL: The command cannot be executed when global
         * transaction is in the %s state
         */
        case ER_XAER_RMFAIL = 1399;
        /**
         * Error number: 1400; Symbol: ER_XAER_OUTSIDE; SQLSTATE: XAE09
         *
         * Message: XAER_OUTSIDE: Some work is done outside global
         * transaction
         */
        case ER_XAER_OUTSIDE = 1400;
        /**
         * Error number: 1401; Symbol: ER_XAER_RMERR; SQLSTATE: XAE03
         *
         * Message: XAER_RMERR: Fatal error occurred in the transaction
         * branch - check your data for consistency
         */
        case ER_XAER_RMERR = 1401;
        /**
         * Error number: 1402; Symbol: ER_XA_RBROLLBACK; SQLSTATE: XA100
         *
         * Message: XA_RBROLLBACK: Transaction branch was rolled back
         */
        case ER_XA_RBROLLBACK = 1402;
        /**
         * Error number: 1403; Symbol: ER_NONEXISTING_PROC_GRANT; SQLSTATE: 42000
         *
         * Message: There is no such grant defined for user '%s' on host '%s'
         * on routine '%s'
         */
        case ER_NONEXISTING_PROC_GRANT = 1403;
        /**
         * Error number: 1404; Symbol: ER_PROC_AUTO_GRANT_FAIL; SQLSTATE: HY000
         *
         * Message: Failed to grant EXECUTE and ALTER ROUTINE privileges
         */
        case ER_PROC_AUTO_GRANT_FAIL = 1404;
        /**
         * Error number: 1405; Symbol: ER_PROC_AUTO_REVOKE_FAIL; SQLSTATE: HY000
         *
         * Message: Failed to revoke all privileges to dropped routine
         */
        case ER_PROC_AUTO_REVOKE_FAIL = 1405;
        /**
         * Error number: 1406; Symbol: ER_DATA_TOO_LONG; SQLSTATE: 22001
         *
         * Message: Data too long for column '%s' at row %ld
         */
        case ER_DATA_TOO_LONG = 1406;
        /**
         * Error number: 1407; Symbol: ER_SP_BAD_SQLSTATE; SQLSTATE: 42000
         *
         * Message: Bad SQLSTATE: '%s'
         */
        case ER_SP_BAD_SQLSTATE = 1407;
        /**
         * Error number: 1408; Symbol: ER_STARTUP; SQLSTATE: HY000
         *
         * Message: %s: ready for connections. Version: '%s' socket: '%s'
         * port: %d %s
         */
        case ER_STARTUP = 1408;
        /**
         * Error number: 1409; Symbol: ER_LOAD_FROM_FIXED_SIZE_ROWS_TO_VAR; SQLSTATE: HY000
         *
         * Message: Can't load value from file with fixed size rows to
         * variable
         */
        case ER_LOAD_FROM_FIXED_SIZE_ROWS_TO_VAR = 1409;
        /**
         * Error number: 1410; Symbol: ER_CANT_CREATE_USER_WITH_GRANT; SQLSTATE: 42000
         *
         * Message: You are not allowed to create a user with GRANT
         */
        case ER_CANT_CREATE_USER_WITH_GRANT = 1410;
        /**
         * Error number: 1411; Symbol: ER_WRONG_VALUE_FOR_TYPE; SQLSTATE: HY000
         *
         * Message: Incorrect %s value: '%s' for function %s
         */
        case ER_WRONG_VALUE_FOR_TYPE = 1411;
        /**
         * Error number: 1412; Symbol: ER_TABLE_DEF_CHANGED; SQLSTATE: HY000
         *
         * Message: Table definition has changed, please retry transaction
         */
        case ER_TABLE_DEF_CHANGED = 1412;
        /**
         * Error number: 1413; Symbol: ER_SP_DUP_HANDLER; SQLSTATE: 42000
         *
         * Message: Duplicate handler declared in the same block
         */
        case ER_SP_DUP_HANDLER = 1413;
        /**
         * Error number: 1414; Symbol: ER_SP_NOT_VAR_ARG; SQLSTATE: 42000
         *
         * Message: OUT or INOUT argument %d for routine %s is not a variable
         * or NEW pseudo-variable in BEFORE trigger
         */
        case ER_SP_NOT_VAR_ARG = 1414;
        /**
         * Error number: 1415; Symbol: ER_SP_NO_RETSET; SQLSTATE: 0A000
         *
         * Message: Not allowed to return a result set from a %s
         */
        case ER_SP_NO_RETSET = 1415;
        /**
         * Error number: 1416; Symbol: ER_CANT_CREATE_GEOMETRY_OBJECT; SQLSTATE: 22003
         *
         * Message: Cannot get geometry object from data you send to the
         * GEOMETRY field
         */
        case ER_CANT_CREATE_GEOMETRY_OBJECT = 1416;
        /**
         * Error number: 1418; Symbol: ER_BINLOG_UNSAFE_ROUTINE; SQLSTATE: HY000
         *
         * Message: This function has none of DETERMINISTIC, NO SQL, or READS
         * SQL DATA in its declaration and binary logging is enabled (you
         * *might* want to use the less safe log_bin_trust_function_creators
         * variable)
         */
        case ER_BINLOG_UNSAFE_ROUTINE = 1418;
        /**
         * Error number: 1419; Symbol: ER_BINLOG_CREATE_ROUTINE_NEED_SUPER; SQLSTATE: HY000
         *
         * Message: You do not have the SUPER privilege and binary logging is
         * enabled (you *might* want to use the less safe
         * log_bin_trust_function_creators variable)
         */
        case ER_BINLOG_CREATE_ROUTINE_NEED_SUPER = 1419;
        /**
         * Error number: 1421; Symbol: ER_STMT_HAS_NO_OPEN_CURSOR; SQLSTATE: HY000
         *
         * Message: The statement (%lu) has no open cursor.
         */
        case ER_STMT_HAS_NO_OPEN_CURSOR = 1421;
        /**
         * Error number: 1422; Symbol: ER_COMMIT_NOT_ALLOWED_IN_SF_OR_TRG; SQLSTATE: HY000
         *
         * Message: Explicit or implicit commit is not allowed in stored
         * function or trigger.
         */
        case ER_COMMIT_NOT_ALLOWED_IN_SF_OR_TRG = 1422;
        /**
         * Error number: 1423; Symbol: ER_NO_DEFAULT_FOR_VIEW_FIELD; SQLSTATE: HY000
         *
         * Message: Field of view '%s.%s' underlying table doesn't have a
         * default value
         */
        case ER_NO_DEFAULT_FOR_VIEW_FIELD = 1423;
        /**
         * Error number: 1424; Symbol: ER_SP_NO_RECURSION; SQLSTATE: HY000
         *
         * Message: Recursive stored functions and triggers are not allowed.
         */
        case ER_SP_NO_RECURSION = 1424;
        /**
         * Error number: 1425; Symbol: ER_TOO_BIG_SCALE; SQLSTATE: 42000
         *
         * Message: Too big scale %d specified for column '%s'. Maximum is
         * %lu.
         */
        case ER_TOO_BIG_SCALE = 1425;
        /**
         * Error number: 1426; Symbol: ER_TOO_BIG_PRECISION; SQLSTATE: 42000
         *
         * Message: Too-big precision %d specified for '%s'. Maximum is %lu.
         */
        case ER_TOO_BIG_PRECISION = 1426;
        /**
         * Error number: 1427; Symbol: ER_M_BIGGER_THAN_D; SQLSTATE: 42000
         *
         * Message: For float(M,D), double(M,D) or decimal(M,D), M must be
         * >= D (column '%s').
         */
        case ER_M_BIGGER_THAN_D = 1427;
        /**
         * Error number: 1428; Symbol: ER_WRONG_LOCK_OF_SYSTEM_TABLE; SQLSTATE: HY000
         *
         * Message: You can't combine write-locking of system tables with
         * other tables or lock types
         */
        case ER_WRONG_LOCK_OF_SYSTEM_TABLE = 1428;
        /**
         * Error number: 1429; Symbol: ER_CONNECT_TO_FOREIGN_DATA_SOURCE; SQLSTATE: HY000
         *
         * Message: Unable to connect to foreign data source: %s
         */
        case ER_CONNECT_TO_FOREIGN_DATA_SOURCE = 1429;
        /**
         * Error number: 1430; Symbol: ER_QUERY_ON_FOREIGN_DATA_SOURCE; SQLSTATE: HY000
         *
         * Message: There was a problem processing the query on the foreign
         * data source. Data source error: %s
         */
        case ER_QUERY_ON_FOREIGN_DATA_SOURCE = 1430;
        /**
         * Error number: 1431; Symbol: ER_FOREIGN_DATA_SOURCE_DOESNT_EXIST; SQLSTATE: HY000
         *
         * Message: The foreign data source you are trying to reference does
         * not exist. Data source error: %s
         */
        case ER_FOREIGN_DATA_SOURCE_DOESNT_EXIST = 1431;
        /**
         * Error number: 1432; Symbol: ER_FOREIGN_DATA_STRING_INVALID_CANT_CREATE; SQLSTATE: HY000
         *
         * Message: Can't create federated table. The data source connection
         * string '%s' is not in the correct format
         */
        case ER_FOREIGN_DATA_STRING_INVALID_CANT_CREATE = 1432;
        /**
         * Error number: 1433; Symbol: ER_FOREIGN_DATA_STRING_INVALID; SQLSTATE: HY000
         *
         * Message: The data source connection string '%s' is not in the
         * correct format
         */
        case ER_FOREIGN_DATA_STRING_INVALID = 1433;
        /**
         * Error number: 1435; Symbol: ER_TRG_IN_WRONG_SCHEMA; SQLSTATE: HY000
         *
         * Message: Trigger in wrong schema
         */
        case ER_TRG_IN_WRONG_SCHEMA = 1435;
        /**
         * Error number: 1436; Symbol: ER_STACK_OVERRUN_NEED_MORE; SQLSTATE: HY000
         *
         * Message: Thread stack overrun: %ld bytes used of a %ld byte stack; and %ld bytes needed. Use 'mysqld --thread_stack=#' to specify a
         * bigger stack.
         */
        case ER_STACK_OVERRUN_NEED_MORE = 1436;
        /**
         * Error number: 1437; Symbol: ER_TOO_LONG_BODY; SQLSTATE: 42000
         *
         * Message: Routine body for '%s' is too long
         */
        case ER_TOO_LONG_BODY = 1437;
        /**
         * Error number: 1438; Symbol: ER_WARN_CANT_DROP_DEFAULT_KEYCACHE; SQLSTATE: HY000
         *
         * Message: Cannot drop default keycache
         */
        case ER_WARN_CANT_DROP_DEFAULT_KEYCACHE = 1438;
        /**
         * Error number: 1439; Symbol: ER_TOO_BIG_DISPLAYWIDTH; SQLSTATE: 42000
         *
         * Message: Display width out of range for column '%s' (max = %lu)
         */
        case ER_TOO_BIG_DISPLAYWIDTH = 1439;
        /**
         * Error number: 1440; Symbol: ER_XAER_DUPID; SQLSTATE: XAE08
         *
         * Message: XAER_DUPID: The XID already exists
         */
        case ER_XAER_DUPID = 1440;
        /**
         * Error number: 1441; Symbol: ER_DATETIME_FUNCTION_OVERFLOW; SQLSTATE: 22008
         *
         * Message: Datetime function: %s field overflow
         */
        case ER_DATETIME_FUNCTION_OVERFLOW = 1441;
        /**
         * Error number: 1442; Symbol: ER_CANT_UPDATE_USED_TABLE_IN_SF_OR_TRG; SQLSTATE: HY000
         *
         * Message: Can't update table '%s' in stored function/trigger
         * because it is already used by statement which invoked this stored
         * function/trigger.
         */
        case ER_CANT_UPDATE_USED_TABLE_IN_SF_OR_TRG = 1442;
        /**
         * Error number: 1443; Symbol: ER_VIEW_PREVENT_UPDATE; SQLSTATE: HY000
         *
         * Message: The definition of table '%s' prevents operation %s on
         * table '%s'.
         */
        case ER_VIEW_PREVENT_UPDATE = 1443;
        /**
         * Error number: 1444; Symbol: ER_PS_NO_RECURSION; SQLSTATE: HY000
         *
         * Message: The prepared statement contains a stored routine call
         * that refers to that same statement. It's not allowed to execute a
         * prepared statement in such a recursive manner
         */
        case ER_PS_NO_RECURSION = 1444;
        /**
         * Error number: 1445; Symbol: ER_SP_CANT_SET_AUTOCOMMIT; SQLSTATE: HY000
         *
         * Message: Not allowed to set autocommit from a stored function or
         * trigger
         */
        case ER_SP_CANT_SET_AUTOCOMMIT = 1445;
        /**
         * Error number: 1447; Symbol: ER_VIEW_FRM_NO_USER; SQLSTATE: HY000
         *
         * Message: View '%s'.'%s' has no definer information (old table
         * format). Current user is used as definer. Please recreate the
         * view!
         */
        case ER_VIEW_FRM_NO_USER = 1447;
        /**
         * Error number: 1448; Symbol: ER_VIEW_OTHER_USER; SQLSTATE: HY000
         *
         * Message: You need the SUPER privilege for creation view with
         * '%s'@'%s' definer
         */
        case ER_VIEW_OTHER_USER = 1448;
        /**
         * Error number: 1449; Symbol: ER_NO_SUCH_USER; SQLSTATE: HY000
         *
         * Message: The user specified as a definer ('%s'@'%s') does not
         * exist
         */
        case ER_NO_SUCH_USER = 1449;
        /**
         * Error number: 1450; Symbol: ER_FORBID_SCHEMA_CHANGE; SQLSTATE: HY000
         *
         * Message: Changing schema from '%s' to '%s' is not allowed.
         */
        case ER_FORBID_SCHEMA_CHANGE = 1450;
        /**
         * Error number: 1451; Symbol: ER_ROW_IS_REFERENCED_2; SQLSTATE: 23000
         *
         * Message: Cannot delete or update a parent row: a foreign key
         * constraint fails%s
         *
         * InnoDB reports this error when you try to
         * delete a parent row that has children, and a
         * foreign key
         * constraint fails. Delete the children first.
         */
        case ER_ROW_IS_REFERENCED_2 = 1451;
        /**
         * Error number: 1452; Symbol: ER_NO_REFERENCED_ROW_2; SQLSTATE: 23000
         *
         * Message: Cannot add or update a child row: a foreign key
         * constraint fails%s
         *
         * InnoDB reports this error when you try to add a
         * row but there is no parent row, and a
         * foreign key
         * constraint fails. Add the parent row first.
         */
        case ER_NO_REFERENCED_ROW_2 = 1452;
        /**
         * Error number: 1453; Symbol: ER_SP_BAD_VAR_SHADOW; SQLSTATE: 42000
         *
         * Message: Variable '%s' must be quoted with `...`, or renamed
         */
        case ER_SP_BAD_VAR_SHADOW = 1453;
        /**
         * Error number: 1454; Symbol: ER_TRG_NO_DEFINER; SQLSTATE: HY000
         *
         * Message: No definer attribute for trigger '%s'.'%s'. It's
         * disallowed to create trigger without definer.
         */
        case ER_TRG_NO_DEFINER = 1454;
        /**
         * Error number: 1455; Symbol: ER_OLD_FILE_FORMAT; SQLSTATE: HY000
         *
         * Message: '%s' has an old format, you should re-create the '%s'
         * object(s)
         */
        case ER_OLD_FILE_FORMAT = 1455;
        /**
         * Error number: 1456; Symbol: ER_SP_RECURSION_LIMIT; SQLSTATE: HY000
         *
         * Message: Recursive limit %d (as set by the max_sp_recursion_depth
         * variable) was exceeded for routine %s
         */
        case ER_SP_RECURSION_LIMIT = 1456;
        /**
         * Error number: 1458; Symbol: ER_SP_WRONG_NAME; SQLSTATE: 42000
         *
         * Message: Incorrect routine name '%s'
         */
        case ER_SP_WRONG_NAME = 1458;
        /**
         * Error number: 1459; Symbol: ER_TABLE_NEEDS_UPGRADE; SQLSTATE: HY000
         *
         * Message: Table upgrade required. Please do "REPAIR TABLE `%s`" or
         * dump/reload to fix it!
         */
        case ER_TABLE_NEEDS_UPGRADE = 1459;
        /**
         * Error number: 1460; Symbol: ER_SP_NO_AGGREGATE; SQLSTATE: 42000
         *
         * Message: AGGREGATE is not supported for stored functions
         */
        case ER_SP_NO_AGGREGATE = 1460;
        /**
         * Error number: 1461; Symbol: ER_MAX_PREPARED_STMT_COUNT_REACHED; SQLSTATE: 42000
         *
         * Message: Can't create more than max_prepared_stmt_count statements
         * (current value: %lu)
         */
        case ER_MAX_PREPARED_STMT_COUNT_REACHED = 1461;
        /**
         * Error number: 1462; Symbol: ER_VIEW_RECURSIVE; SQLSTATE: HY000
         *
         * Message: `%s`.`%s` contains view recursion
         */
        case ER_VIEW_RECURSIVE = 1462;
        /**
         * Error number: 1463; Symbol: ER_NON_GROUPING_FIELD_USED; SQLSTATE: 42000
         *
         * Message: Non-grouping field '%s' is used in %s clause
         */
        case ER_NON_GROUPING_FIELD_USED = 1463;
        /**
         * Error number: 1464; Symbol: ER_TABLE_CANT_HANDLE_SPKEYS; SQLSTATE: HY000
         *
         * Message: The used table type doesn't support SPATIAL indexes
         */
        case ER_TABLE_CANT_HANDLE_SPKEYS = 1464;
        /**
         * Error number: 1465; Symbol: ER_NO_TRIGGERS_ON_SYSTEM_SCHEMA; SQLSTATE: HY000
         *
         * Message: Triggers can not be created on system tables
         */
        case ER_NO_TRIGGERS_ON_SYSTEM_SCHEMA = 1465;
        /**
         * Error number: 1466; Symbol: ER_REMOVED_SPACES; SQLSTATE: HY000
         *
         * Message: Leading spaces are removed from name '%s'
         */
        case ER_REMOVED_SPACES = 1466;
        /**
         * Error number: 1467; Symbol: ER_AUTOINC_READ_FAILED; SQLSTATE: HY000
         *
         * Message: Failed to read auto-increment value from storage engine
         */
        case ER_AUTOINC_READ_FAILED = 1467;
        /**
         * Error number: 1468; Symbol: ER_USERNAME; SQLSTATE: HY000
         *
         * Message: user name
         */
        case ER_USERNAME = 1468;
        /**
         * Error number: 1469; Symbol: ER_HOSTNAME; SQLSTATE: HY000
         *
         * Message: host name
         */
        case ER_HOSTNAME = 1469;
        /**
         * Error number: 1470; Symbol: ER_WRONG_STRING_LENGTH; SQLSTATE: HY000
         *
         * Message: String '%s' is too long for %s (should be no longer than
         * %d)
         */
        case ER_WRONG_STRING_LENGTH = 1470;
        /**
         * Error number: 1471; Symbol: ER_NON_INSERTABLE_TABLE; SQLSTATE: HY000
         *
         * Message: The target table %s of the %s is not insertable-into
         */
        case ER_NON_INSERTABLE_TABLE = 1471;
        /**
         * Error number: 1472; Symbol: ER_ADMIN_WRONG_MRG_TABLE; SQLSTATE: HY000
         *
         * Message: Table '%s' is differently defined or of non-MyISAM type
         * or doesn't exist
         */
        case ER_ADMIN_WRONG_MRG_TABLE = 1472;
        /**
         * Error number: 1473; Symbol: ER_TOO_HIGH_LEVEL_OF_NESTING_FOR_SELECT; SQLSTATE: HY000
         *
         * Message: Too high level of nesting for select
         */
        case ER_TOO_HIGH_LEVEL_OF_NESTING_FOR_SELECT = 1473;
        /**
         * Error number: 1474; Symbol: ER_NAME_BECOMES_EMPTY; SQLSTATE: HY000
         *
         * Message: Name '%s' has become ''
         */
        case ER_NAME_BECOMES_EMPTY = 1474;
        /**
         * Error number: 1475; Symbol: ER_AMBIGUOUS_FIELD_TERM; SQLSTATE: HY000
         *
         * Message: First character of the FIELDS TERMINATED string is
         * ambiguous; please use non-optional and non-empty FIELDS ENCLOSED
         * BY
         */
        case ER_AMBIGUOUS_FIELD_TERM = 1475;
        /**
         * Error number: 1476; Symbol: ER_FOREIGN_SERVER_EXISTS; SQLSTATE: HY000
         *
         * Message: The foreign server, %s, you are trying to create already
         * exists.
         */
        case ER_FOREIGN_SERVER_EXISTS = 1476;
        /**
         * Error number: 1477; Symbol: ER_FOREIGN_SERVER_DOESNT_EXIST; SQLSTATE: HY000
         *
         * Message: The foreign server name you are trying to reference does
         * not exist. Data source error: %s
         */
        case ER_FOREIGN_SERVER_DOESNT_EXIST = 1477;
        /**
         * Error number: 1478; Symbol: ER_ILLEGAL_HA_CREATE_OPTION; SQLSTATE: HY000
         *
         * Message: Table storage engine '%s' does not support the create
         * option '%s'
         */
        case ER_ILLEGAL_HA_CREATE_OPTION = 1478;
        /**
         * Error number: 1479; Symbol: ER_PARTITION_REQUIRES_VALUES_ERROR; SQLSTATE: HY000
         *
         * Message: Syntax error: %s PARTITIONING requires definition of
         * VALUES %s for each partition
         */
        case ER_PARTITION_REQUIRES_VALUES_ERROR = 1479;
        /**
         * Error number: 1480; Symbol: ER_PARTITION_WRONG_VALUES_ERROR; SQLSTATE: HY000
         *
         * Message: Only %s PARTITIONING can use VALUES %s in partition
         * definition
         */
        case ER_PARTITION_WRONG_VALUES_ERROR = 1480;
        /**
         * Error number: 1481; Symbol: ER_PARTITION_MAXVALUE_ERROR; SQLSTATE: HY000
         *
         * Message: MAXVALUE can only be used in last partition definition
         */
        case ER_PARTITION_MAXVALUE_ERROR = 1481;
        /**
         * Error number: 1484; Symbol: ER_PARTITION_WRONG_NO_PART_ERROR; SQLSTATE: HY000
         *
         * Message: Wrong number of partitions defined, mismatch with
         * previous setting
         */
        case ER_PARTITION_WRONG_NO_PART_ERROR = 1484;
        /**
         * Error number: 1485; Symbol: ER_PARTITION_WRONG_NO_SUBPART_ERROR; SQLSTATE: HY000
         *
         * Message: Wrong number of subpartitions defined, mismatch with
         * previous setting
         */
        case ER_PARTITION_WRONG_NO_SUBPART_ERROR = 1485;
        /**
         * Error number: 1486; Symbol: ER_WRONG_EXPR_IN_PARTITION_FUNC_ERROR; SQLSTATE: HY000
         *
         * Message: Constant, random or timezone-dependent expressions in
         * (sub)partitioning function are not allowed
         */
        case ER_WRONG_EXPR_IN_PARTITION_FUNC_ERROR = 1486;
        /**
         * Error number: 1488; Symbol: ER_FIELD_NOT_FOUND_PART_ERROR; SQLSTATE: HY000
         *
         * Message: Field in list of fields for partition function not found
         * in table
         */
        case ER_FIELD_NOT_FOUND_PART_ERROR = 1488;
        /**
         * Error number: 1490; Symbol: ER_INCONSISTENT_PARTITION_INFO_ERROR; SQLSTATE: HY000
         *
         * Message: The partition info in the frm file is not consistent with
         * what can be written into the frm file
         */
        case ER_INCONSISTENT_PARTITION_INFO_ERROR = 1490;
        /**
         * Error number: 1491; Symbol: ER_PARTITION_FUNC_NOT_ALLOWED_ERROR; SQLSTATE: HY000
         *
         * Message: The %s function returns the wrong type
         */
        case ER_PARTITION_FUNC_NOT_ALLOWED_ERROR = 1491;
        /**
         * Error number: 1492; Symbol: ER_PARTITIONS_MUST_BE_DEFINED_ERROR; SQLSTATE: HY000
         *
         * Message: For %s partitions each partition must be defined
         */
        case ER_PARTITIONS_MUST_BE_DEFINED_ERROR = 1492;
        /**
         * Error number: 1493; Symbol: ER_RANGE_NOT_INCREASING_ERROR; SQLSTATE: HY000
         *
         * Message: VALUES LESS THAN value must be strictly increasing for
         * each partition
         */
        case ER_RANGE_NOT_INCREASING_ERROR = 1493;
        /**
         * Error number: 1494; Symbol: ER_INCONSISTENT_TYPE_OF_FUNCTIONS_ERROR; SQLSTATE: HY000
         *
         * Message: VALUES value must be of same type as partition function
         */
        case ER_INCONSISTENT_TYPE_OF_FUNCTIONS_ERROR = 1494;
        /**
         * Error number: 1495; Symbol: ER_MULTIPLE_DEF_CONST_IN_LIST_PART_ERROR; SQLSTATE: HY000
         *
         * Message: Multiple definition of same constant in list partitioning
         */
        case ER_MULTIPLE_DEF_CONST_IN_LIST_PART_ERROR = 1495;
        /**
         * Error number: 1496; Symbol: ER_PARTITION_ENTRY_ERROR; SQLSTATE: HY000
         *
         * Message: Partitioning can not be used stand-alone in query
         */
        case ER_PARTITION_ENTRY_ERROR = 1496;
        /**
         * Error number: 1497; Symbol: ER_MIX_HANDLER_ERROR; SQLSTATE: HY000
         *
         * Message: The mix of handlers in the partitions is not allowed in
         * this version of MySQL
         */
        case ER_MIX_HANDLER_ERROR = 1497;
        /**
         * Error number: 1498; Symbol: ER_PARTITION_NOT_DEFINED_ERROR; SQLSTATE: HY000
         *
         * Message: For the partitioned engine it is necessary to define all
         * %s
         */
        case ER_PARTITION_NOT_DEFINED_ERROR = 1498;
        /**
         * Error number: 1499; Symbol: ER_TOO_MANY_PARTITIONS_ERROR; SQLSTATE: HY000
         *
         * Message: Too many partitions (including subpartitions) were
         * defined
         */
        case ER_TOO_MANY_PARTITIONS_ERROR = 1499;
        /**
         * Error number: 1500; Symbol: ER_SUBPARTITION_ERROR; SQLSTATE: HY000
         *
         * Message: It is only possible to mix RANGE/LIST partitioning with
         * HASH/KEY partitioning for subpartitioning
         */
        case ER_SUBPARTITION_ERROR = 1500;
        /**
         * Error number: 1501; Symbol: ER_CANT_CREATE_HANDLER_FILE; SQLSTATE: HY000
         *
         * Message: Failed to create specific handler file
         */
        case ER_CANT_CREATE_HANDLER_FILE = 1501;
        /**
         * Error number: 1502; Symbol: ER_BLOB_FIELD_IN_PART_FUNC_ERROR; SQLSTATE: HY000
         *
         * Message: A BLOB field is not allowed in partition function
         */
        case ER_BLOB_FIELD_IN_PART_FUNC_ERROR = 1502;
        /**
         * Error number: 1503; Symbol: ER_UNIQUE_KEY_NEED_ALL_FIELDS_IN_PF; SQLSTATE: HY000
         *
         * Message: A %s must include all columns in the table's partitioning
         * function (prefixed columns are not considered).
         */
        case ER_UNIQUE_KEY_NEED_ALL_FIELDS_IN_PF = 1503;
        /**
         * Error number: 1504; Symbol: ER_NO_PARTS_ERROR; SQLSTATE: HY000
         *
         * Message: Number of %s = 0 is not an allowed value
         */
        case ER_NO_PARTS_ERROR = 1504;
        /**
         * Error number: 1505; Symbol: ER_PARTITION_MGMT_ON_NONPARTITIONED; SQLSTATE: HY000
         *
         * Message: Partition management on a not partitioned table is not
         * possible
         */
        case ER_PARTITION_MGMT_ON_NONPARTITIONED = 1505;
        /**
         * Error number: 1506; Symbol: ER_FOREIGN_KEY_ON_PARTITIONED; SQLSTATE: HY000
         *
         * Message: Foreign keys are not yet supported in conjunction with
         * partitioning
         */
        case ER_FOREIGN_KEY_ON_PARTITIONED = 1506;
        /**
         * Error number: 1507; Symbol: ER_DROP_PARTITION_NON_EXISTENT; SQLSTATE: HY000
         *
         * Message: Error in list of partitions to %s
         */
        case ER_DROP_PARTITION_NON_EXISTENT = 1507;
        /**
         * Error number: 1508; Symbol: ER_DROP_LAST_PARTITION; SQLSTATE: HY000
         *
         * Message: Cannot remove all partitions, use DROP TABLE instead
         */
        case ER_DROP_LAST_PARTITION = 1508;
        /**
         * Error number: 1509; Symbol: ER_COALESCE_ONLY_ON_HASH_PARTITION; SQLSTATE: HY000
         *
         * Message: COALESCE PARTITION can only be used on HASH/KEY
         * partitions
         */
        case ER_COALESCE_ONLY_ON_HASH_PARTITION = 1509;
        /**
         * Error number: 1510; Symbol: ER_REORG_HASH_ONLY_ON_SAME_NO; SQLSTATE: HY000
         *
         * Message: REORGANIZE PARTITION can only be used to reorganize
         * partitions not to change their numbers
         */
        case ER_REORG_HASH_ONLY_ON_SAME_NO = 1510;
        /**
         * Error number: 1511; Symbol: ER_REORG_NO_PARAM_ERROR; SQLSTATE: HY000
         *
         * Message: REORGANIZE PARTITION without parameters can only be used
         * on auto-partitioned tables using HASH PARTITIONs
         */
        case ER_REORG_NO_PARAM_ERROR = 1511;
        /**
         * Error number: 1512; Symbol: ER_ONLY_ON_RANGE_LIST_PARTITION; SQLSTATE: HY000
         *
         * Message: %s PARTITION can only be used on RANGE/LIST partitions
         */
        case ER_ONLY_ON_RANGE_LIST_PARTITION = 1512;
        /**
         * Error number: 1513; Symbol: ER_ADD_PARTITION_SUBPART_ERROR; SQLSTATE: HY000
         *
         * Message: Trying to Add partition(s) with wrong number of
         * subpartitions
         */
        case ER_ADD_PARTITION_SUBPART_ERROR = 1513;
        /**
         * Error number: 1514; Symbol: ER_ADD_PARTITION_NO_NEW_PARTITION; SQLSTATE: HY000
         *
         * Message: At least one partition must be added
         */
        case ER_ADD_PARTITION_NO_NEW_PARTITION = 1514;
        /**
         * Error number: 1515; Symbol: ER_COALESCE_PARTITION_NO_PARTITION; SQLSTATE: HY000
         *
         * Message: At least one partition must be coalesced
         */
        case ER_COALESCE_PARTITION_NO_PARTITION = 1515;
        /**
         * Error number: 1516; Symbol: ER_REORG_PARTITION_NOT_EXIST; SQLSTATE: HY000
         *
         * Message: More partitions to reorganize than there are partitions
         */
        case ER_REORG_PARTITION_NOT_EXIST = 1516;
        /**
         * Error number: 1517; Symbol: ER_SAME_NAME_PARTITION; SQLSTATE: HY000
         *
         * Message: Duplicate partition name %s
         */
        case ER_SAME_NAME_PARTITION = 1517;
        /**
         * Error number: 1518; Symbol: ER_NO_BINLOG_ERROR; SQLSTATE: HY000
         *
         * Message: It is not allowed to shut off binlog on this command
         */
        case ER_NO_BINLOG_ERROR = 1518;
        /**
         * Error number: 1519; Symbol: ER_CONSECUTIVE_REORG_PARTITIONS; SQLSTATE: HY000
         *
         * Message: When reorganizing a set of partitions they must be in
         * consecutive order
         */
        case ER_CONSECUTIVE_REORG_PARTITIONS = 1519;
        /**
         * Error number: 1520; Symbol: ER_REORG_OUTSIDE_RANGE; SQLSTATE: HY000
         *
         * Message: Reorganize of range partitions cannot change total ranges
         * except for last partition where it can extend the range
         */
        case ER_REORG_OUTSIDE_RANGE = 1520;
        /**
         * Error number: 1521; Symbol: ER_PARTITION_FUNCTION_FAILURE; SQLSTATE: HY000
         *
         * Message: Partition function not supported in this version for this
         * handler
         */
        case ER_PARTITION_FUNCTION_FAILURE = 1521;
        /**
         * Error number: 1523; Symbol: ER_LIMITED_PART_RANGE; SQLSTATE: HY000
         *
         * Message: The %s handler only supports 32 bit integers in VALUES
         */
        case ER_LIMITED_PART_RANGE = 1523;
        /**
         * Error number: 1524; Symbol: ER_PLUGIN_IS_NOT_LOADED; SQLSTATE: HY000
         *
         * Message: Plugin '%s' is not loaded
         */
        case ER_PLUGIN_IS_NOT_LOADED = 1524;
        /**
         * Error number: 1525; Symbol: ER_WRONG_VALUE; SQLSTATE: HY000
         *
         * Message: Incorrect %s value: '%s'
         */
        case ER_WRONG_VALUE = 1525;
        /**
         * Error number: 1526; Symbol: ER_NO_PARTITION_FOR_GIVEN_VALUE; SQLSTATE: HY000
         *
         * Message: Table has no partition for value %s
         */
        case ER_NO_PARTITION_FOR_GIVEN_VALUE = 1526;
        /**
         * Error number: 1527; Symbol: ER_FILEGROUP_OPTION_ONLY_ONCE; SQLSTATE: HY000
         *
         * Message: It is not allowed to specify %s more than once
         */
        case ER_FILEGROUP_OPTION_ONLY_ONCE = 1527;
        /**
         * Error number: 1528; Symbol: ER_CREATE_FILEGROUP_FAILED; SQLSTATE: HY000
         *
         * Message: Failed to create %s
         */
        case ER_CREATE_FILEGROUP_FAILED = 1528;
        /**
         * Error number: 1529; Symbol: ER_DROP_FILEGROUP_FAILED; SQLSTATE: HY000
         *
         * Message: Failed to drop %s
         */
        case ER_DROP_FILEGROUP_FAILED = 1529;
        /**
         * Error number: 1530; Symbol: ER_TABLESPACE_AUTO_EXTEND_ERROR; SQLSTATE: HY000
         *
         * Message: The handler doesn't support autoextend of tablespaces
         */
        case ER_TABLESPACE_AUTO_EXTEND_ERROR = 1530;
        /**
         * Error number: 1531; Symbol: ER_WRONG_SIZE_NUMBER; SQLSTATE: HY000
         *
         * Message: A size parameter was incorrectly specified, either number
         * or on the form 10M
         */
        case ER_WRONG_SIZE_NUMBER = 1531;
        /**
         * Error number: 1532; Symbol: ER_SIZE_OVERFLOW_ERROR; SQLSTATE: HY000
         *
         * Message: The size number was correct but we don't allow the digit
         * part to be more than 2 billion
         */
        case ER_SIZE_OVERFLOW_ERROR = 1532;
        /**
         * Error number: 1533; Symbol: ER_ALTER_FILEGROUP_FAILED; SQLSTATE: HY000
         *
         * Message: Failed to alter: %s
         */
        case ER_ALTER_FILEGROUP_FAILED = 1533;
        /**
         * Error number: 1534; Symbol: ER_BINLOG_ROW_LOGGING_FAILED; SQLSTATE: HY000
         *
         * Message: Writing one row to the row-based binary log failed
         */
        case ER_BINLOG_ROW_LOGGING_FAILED = 1534;
        /**
         * Error number: 1537; Symbol: ER_EVENT_ALREADY_EXISTS; SQLSTATE: HY000
         *
         * Message: Event '%s' already exists
         */
        case ER_EVENT_ALREADY_EXISTS = 1537;
        /**
         * Error number: 1539; Symbol: ER_EVENT_DOES_NOT_EXIST; SQLSTATE: HY000
         *
         * Message: Unknown event '%s'
         */
        case ER_EVENT_DOES_NOT_EXIST = 1539;
        /**
         * Error number: 1542; Symbol: ER_EVENT_INTERVAL_NOT_POSITIVE_OR_TOO_BIG; SQLSTATE: HY000
         *
         * Message: INTERVAL is either not positive or too big
         */
        case ER_EVENT_INTERVAL_NOT_POSITIVE_OR_TOO_BIG = 1542;
        /**
         * Error number: 1543; Symbol: ER_EVENT_ENDS_BEFORE_STARTS; SQLSTATE: HY000
         *
         * Message: ENDS is either invalid or before STARTS
         */
        case ER_EVENT_ENDS_BEFORE_STARTS = 1543;
        /**
         * Error number: 1544; Symbol: ER_EVENT_EXEC_TIME_IN_THE_PAST; SQLSTATE: HY000
         *
         * Message: Event execution time is in the past. Event has been
         * disabled
         */
        case ER_EVENT_EXEC_TIME_IN_THE_PAST = 1544;
        /**
         * Error number: 1551; Symbol: ER_EVENT_SAME_NAME; SQLSTATE: HY000
         *
         * Message: Same old and new event name
         */
        case ER_EVENT_SAME_NAME = 1551;
        /**
         * Error number: 1553; Symbol: ER_DROP_INDEX_FK; SQLSTATE: HY000
         *
         * Message: Cannot drop index '%s': needed in a foreign key
         * constraint
         *
         * InnoDB reports this error when you attempt to
         * drop the last index that can enforce a particular referential
         * constraint.
         *
         * For optimal performance with DML statements; InnoDB requires an index to exist on
         * foreign key columns, so
         * that UPDATE and DELETE
         * operations on a parent
         * table can easily check whether corresponding rows exist in
         * the child table. MySQL
         * creates or drops such indexes automatically when needed, as a
         * side-effect of CREATE TABLE; CREATE INDEX, and
         * ALTER TABLE statements.
         *
         * When you drop an index, InnoDB checks if the
         * index is used for checking a foreign key constraint. It is still
         * OK to drop the index if there is another index that can be used to
         * enforce the same constraint. InnoDB prevents
         * you from dropping the last index that can enforce a particular
         * referential constraint.
         */
        case ER_DROP_INDEX_FK = 1553;
        /**
         * Error number: 1554; Symbol: ER_WARN_DEPRECATED_SYNTAX_WITH_VER; SQLSTATE: HY000
         *
         * Message: The syntax '%s' is deprecated and will be removed in
         * MySQL %s. Please use %s instead
         */
        case ER_WARN_DEPRECATED_SYNTAX_WITH_VER = 1554;
        /**
         * Error number: 1556; Symbol: ER_CANT_LOCK_LOG_TABLE; SQLSTATE: HY000
         *
         * Message: You can't use locks with log tables.
         */
        case ER_CANT_LOCK_LOG_TABLE = 1556;
        /**
         * Error number: 1557; Symbol: ER_FOREIGN_DUPLICATE_KEY_OLD_UNUSED; SQLSTATE: 23000
         *
         * Message: Upholding foreign key constraints for table '%s', entry
         * '%s', key %d would lead to a duplicate entry
         */
        case ER_FOREIGN_DUPLICATE_KEY_OLD_UNUSED = 1557;
        /**
         * Error number: 1558; Symbol: ER_COL_COUNT_DOESNT_MATCH_PLEASE_UPDATE; SQLSTATE: HY000
         *
         * Message: The column count of mysql.%s is wrong. Expected %d, found
         * %d. Created with MySQL %d, now running %d. Please perform the
         * MySQL upgrade procedure.
         */
        case ER_COL_COUNT_DOESNT_MATCH_PLEASE_UPDATE = 1558;
        /**
         * Error number: 1560; Symbol: ER_STORED_FUNCTION_PREVENTS_SWITCH_BINLOG_FORMAT; SQLSTATE: HY000
         *
         * Message: Cannot change the binary logging format inside a stored
         * function or trigger
         */
        case ER_STORED_FUNCTION_PREVENTS_SWITCH_BINLOG_FORMAT = 1560;
        /**
         * Error number: 1562; Symbol: ER_PARTITION_NO_TEMPORARY; SQLSTATE: HY000
         *
         * Message: Cannot create temporary table with partitions
         */
        case ER_PARTITION_NO_TEMPORARY = 1562;
        /**
         * Error number: 1563; Symbol: ER_PARTITION_CONST_DOMAIN_ERROR; SQLSTATE: HY000
         *
         * Message: Partition constant is out of partition function domain
         */
        case ER_PARTITION_CONST_DOMAIN_ERROR = 1563;
        /**
         * Error number: 1564; Symbol: ER_PARTITION_FUNCTION_IS_NOT_ALLOWED; SQLSTATE: HY000
         *
         * Message: This partition function is not allowed
         */
        case ER_PARTITION_FUNCTION_IS_NOT_ALLOWED = 1564;
        /**
         * Error number: 1566; Symbol: ER_NULL_IN_VALUES_LESS_THAN; SQLSTATE: HY000
         *
         * Message: Not allowed to use NULL value in VALUES LESS THAN
         */
        case ER_NULL_IN_VALUES_LESS_THAN = 1566;
        /**
         * Error number: 1567; Symbol: ER_WRONG_PARTITION_NAME; SQLSTATE: HY000
         *
         * Message: Incorrect partition name
         */
        case ER_WRONG_PARTITION_NAME = 1567;
        /**
         * Error number: 1568; Symbol: ER_CANT_CHANGE_TX_CHARACTERISTICS; SQLSTATE: 25001
         *
         * Message: Transaction characteristics can't be changed while a
         * transaction is in progress
         */
        case ER_CANT_CHANGE_TX_CHARACTERISTICS = 1568;
        /**
         * Error number: 1569; Symbol: ER_DUP_ENTRY_AUTOINCREMENT_CASE; SQLSTATE: HY000
         *
         * Message: ALTER TABLE causes auto_increment resequencing, resulting
         * in duplicate entry '%s' for key '%s'
         */
        case ER_DUP_ENTRY_AUTOINCREMENT_CASE = 1569;
        /**
         * Error number: 1571; Symbol: ER_EVENT_SET_VAR_ERROR; SQLSTATE: HY000
         *
         * Message: Error during starting/stopping of the scheduler. Error
         * code %u
         */
        case ER_EVENT_SET_VAR_ERROR = 1571;
        /**
         * Error number: 1572; Symbol: ER_PARTITION_MERGE_ERROR; SQLSTATE: HY000
         *
         * Message: Engine cannot be used in partitioned tables
         */
        case ER_PARTITION_MERGE_ERROR = 1572;
        /**
         * Error number: 1575; Symbol: ER_BASE64_DECODE_ERROR; SQLSTATE: HY000
         *
         * Message: Decoding of base64 string failed
         */
        case ER_BASE64_DECODE_ERROR = 1575;
        /**
         * Error number: 1576; Symbol: ER_EVENT_RECURSION_FORBIDDEN; SQLSTATE: HY000
         *
         * Message: Recursion of EVENT DDL statements is forbidden when body
         * is present
         */
        case ER_EVENT_RECURSION_FORBIDDEN = 1576;
        /**
         * Error number: 1578; Symbol: ER_ONLY_INTEGERS_ALLOWED; SQLSTATE: HY000
         *
         * Message: Only integers allowed as number here
         */
        case ER_ONLY_INTEGERS_ALLOWED = 1578;
        /**
         * Error number: 1579; Symbol: ER_UNSUPORTED_LOG_ENGINE; SQLSTATE: HY000
         *
         * Message: This storage engine cannot be used for log tables
         */
        case ER_UNSUPORTED_LOG_ENGINE = 1579;
        /**
         * Error number: 1580; Symbol: ER_BAD_LOG_STATEMENT; SQLSTATE: HY000
         *
         * Message: You cannot '%s' a log table if logging is enabled
         */
        case ER_BAD_LOG_STATEMENT = 1580;
        /**
         * Error number: 1581; Symbol: ER_CANT_RENAME_LOG_TABLE; SQLSTATE: HY000
         *
         * Message: Cannot rename '%s'. When logging enabled, rename to/from
         * log table must rename two tables: the log table to an archive
         * table and another table back to '%s'
         */
        case ER_CANT_RENAME_LOG_TABLE = 1581;
        /**
         * Error number: 1582; Symbol: ER_WRONG_PARAMCOUNT_TO_NATIVE_FCT; SQLSTATE: 42000
         *
         * Message: Incorrect parameter count in the call to native function
         * '%s'
         */
        case ER_WRONG_PARAMCOUNT_TO_NATIVE_FCT = 1582;
        /**
         * Error number: 1583; Symbol: ER_WRONG_PARAMETERS_TO_NATIVE_FCT; SQLSTATE: 42000
         *
         * Message: Incorrect parameters in the call to native function '%s'
         */
        case ER_WRONG_PARAMETERS_TO_NATIVE_FCT = 1583;
        /**
         * Error number: 1584; Symbol: ER_WRONG_PARAMETERS_TO_STORED_FCT; SQLSTATE: 42000
         *
         * Message: Incorrect parameters in the call to stored function %s
         */
        case ER_WRONG_PARAMETERS_TO_STORED_FCT = 1584;
        /**
         * Error number: 1585; Symbol: ER_NATIVE_FCT_NAME_COLLISION; SQLSTATE: HY000
         *
         * Message: This function '%s' has the same name as a native function
         */
        case ER_NATIVE_FCT_NAME_COLLISION = 1585;
        /**
         * Error number: 1586; Symbol: ER_DUP_ENTRY_WITH_KEY_NAME; SQLSTATE: 23000
         *
         * Message: Duplicate entry '%s' for key '%s'
         *
         * The format string for this error is also used with
         * ER_DUP_ENTRY.
         */
        case ER_DUP_ENTRY_WITH_KEY_NAME = 1586;
        /**
         * Error number: 1587; Symbol: ER_BINLOG_PURGE_EMFILE; SQLSTATE: HY000
         *
         * Message: Too many files opened, please execute the command again
         */
        case ER_BINLOG_PURGE_EMFILE = 1587;
        /**
         * Error number: 1588; Symbol: ER_EVENT_CANNOT_CREATE_IN_THE_PAST; SQLSTATE: HY000
         *
         * Message: Event execution time is in the past and ON COMPLETION NOT
         * PRESERVE is set. The event was dropped immediately after creation.
         */
        case ER_EVENT_CANNOT_CREATE_IN_THE_PAST = 1588;
        /**
         * Error number: 1589; Symbol: ER_EVENT_CANNOT_ALTER_IN_THE_PAST; SQLSTATE: HY000
         *
         * Message: Event execution time is in the past and ON COMPLETION NOT
         * PRESERVE is set. The event was not changed. Specify a time in the
         * future.
         */
        case ER_EVENT_CANNOT_ALTER_IN_THE_PAST = 1589;
        /**
         * Error number: 1591; Symbol: ER_NO_PARTITION_FOR_GIVEN_VALUE_SILENT; SQLSTATE: HY000
         *
         * Message: Table has no partition for some existing values
         */
        case ER_NO_PARTITION_FOR_GIVEN_VALUE_SILENT = 1591;
        /**
         * Error number: 1592; Symbol: ER_BINLOG_UNSAFE_STATEMENT; SQLSTATE: HY000
         *
         * Message: Unsafe statement written to the binary log using
         * statement format since BINLOG_FORMAT = STATEMENT. %s
         */
        case ER_BINLOG_UNSAFE_STATEMENT = 1592;
        /**
         * Error number: 1593; Symbol: ER_BINLOG_FATAL_ERROR; SQLSTATE: HY000
         *
         * Message: Fatal error: %s
         */
        case ER_BINLOG_FATAL_ERROR = 1593;
        /**
         * Error number: 1598; Symbol: ER_BINLOG_LOGGING_IMPOSSIBLE; SQLSTATE: HY000
         *
         * Message: Binary logging not possible. Message: %s
         */
        case ER_BINLOG_LOGGING_IMPOSSIBLE = 1598;
        /**
         * Error number: 1599; Symbol: ER_VIEW_NO_CREATION_CTX; SQLSTATE: HY000
         *
         * Message: View `%s`.`%s` has no creation context
         */
        case ER_VIEW_NO_CREATION_CTX = 1599;
        /**
         * Error number: 1600; Symbol: ER_VIEW_INVALID_CREATION_CTX; SQLSTATE: HY000
         *
         * Message: Creation context of view `%s`.`%s' is invalid
         */
        case ER_VIEW_INVALID_CREATION_CTX = 1600;
        /**
         * Error number: 1602; Symbol: ER_TRG_CORRUPTED_FILE; SQLSTATE: HY000
         *
         * Message: Corrupted TRG file for table `%s`.`%s`
         */
        case ER_TRG_CORRUPTED_FILE = 1602;
        /**
         * Error number: 1603; Symbol: ER_TRG_NO_CREATION_CTX; SQLSTATE: HY000
         *
         * Message: Triggers for table `%s`.`%s` have no creation context
         */
        case ER_TRG_NO_CREATION_CTX = 1603;
        /**
         * Error number: 1604; Symbol: ER_TRG_INVALID_CREATION_CTX; SQLSTATE: HY000
         *
         * Message: Trigger creation context of table `%s`.`%s` is invalid
         */
        case ER_TRG_INVALID_CREATION_CTX = 1604;
        /**
         * Error number: 1605; Symbol: ER_EVENT_INVALID_CREATION_CTX; SQLSTATE: HY000
         *
         * Message: Creation context of event `%s`.`%s` is invalid
         */
        case ER_EVENT_INVALID_CREATION_CTX = 1605;
        /**
         * Error number: 1606; Symbol: ER_TRG_CANT_OPEN_TABLE; SQLSTATE: HY000
         *
         * Message: Cannot open table for trigger `%s`.`%s`
         */
        case ER_TRG_CANT_OPEN_TABLE = 1606;
        /**
         * Error number: 1609; Symbol: ER_NO_FORMAT_DESCRIPTION_EVENT_BEFORE_BINLOG_STATEMENT; SQLSTATE: HY000
         *
         * Message: The BINLOG statement of type `%s` was not preceded by a
         * format description BINLOG statement.
         */
        case ER_NO_FORMAT_DESCRIPTION_EVENT_BEFORE_BINLOG_STATEMENT = 1609;
        /**
         * Error number: 1610; Symbol: ER_REPLICA_CORRUPT_EVENT; SQLSTATE: HY000
         *
         * Message: Corrupted replication event was detected
         */
        case ER_REPLICA_CORRUPT_EVENT = 1610;
        /**
         * Error number: 1612; Symbol: ER_LOG_PURGE_NO_FILE; SQLSTATE: HY000
         *
         * Message: Being purged log %s was not found
         */
        case ER_LOG_PURGE_NO_FILE = 1612;
        /**
         * Error number: 1613; Symbol: ER_XA_RBTIMEOUT; SQLSTATE: XA106
         *
         * Message: XA_RBTIMEOUT: Transaction branch was rolled back: took
         * too long
         */
        case ER_XA_RBTIMEOUT = 1613;
        /**
         * Error number: 1614; Symbol: ER_XA_RBDEADLOCK; SQLSTATE: XA102
         *
         * Message: XA_RBDEADLOCK: Transaction branch was rolled back: deadlock was detected
         */
        case ER_XA_RBDEADLOCK = 1614;
        /**
         * Error number: 1615; Symbol: ER_NEED_REPREPARE; SQLSTATE: HY000
         *
         * Message: Prepared statement needs to be re-prepared
         */
        case ER_NEED_REPREPARE = 1615;
        /**
         * Error number: 1617; Symbol: WARN_NO_CONNECTION_METADATA; SQLSTATE: HY000
         *
         * Message: The connection metadata structure does not exist
         */
        case WARN_NO_CONNECTION_METADATA = 1617;
        /**
         * Error number: 1618; Symbol: WARN_OPTION_IGNORED; SQLSTATE: HY000
         *
         * Message: <%s> option ignored
         */
        case WARN_OPTION_IGNORED = 1618;
        /**
         * Error number: 1619; Symbol: ER_PLUGIN_DELETE_BUILTIN; SQLSTATE: HY000
         *
         * Message: Built-in plugins cannot be deleted
         */
        case ER_PLUGIN_DELETE_BUILTIN = 1619;
        /**
         * Error number: 1620; Symbol: WARN_PLUGIN_BUSY; SQLSTATE: HY000
         *
         * Message: Plugin is busy and will be uninstalled on shutdown
         */
        case WARN_PLUGIN_BUSY = 1620;
        /**
         * Error number: 1621; Symbol: ER_VARIABLE_IS_READONLY; SQLSTATE: HY000
         *
         * Message: %s variable '%s' is read-only. Use SET %s to assign the
         * value
         */
        case ER_VARIABLE_IS_READONLY = 1621;
        /**
         * Error number: 1622; Symbol: ER_WARN_ENGINE_TRANSACTION_ROLLBACK; SQLSTATE: HY000
         *
         * Message: Storage engine %s does not support rollback for this
         * statement. Transaction rolled back and must be restarted
         */
        case ER_WARN_ENGINE_TRANSACTION_ROLLBACK = 1622;
        /**
         * Error number: 1624; Symbol: ER_REPLICA_HEARTBEAT_VALUE_OUT_OF_RANGE; SQLSTATE: HY000
         *
         * Message: The requested value for the heartbeat period is either
         * negative or exceeds the maximum allowed (%s seconds).
         */
        case ER_REPLICA_HEARTBEAT_VALUE_OUT_OF_RANGE = 1624;
        /**
         * Error number: 1625; Symbol: ER_NDB_REPLICATION_SCHEMA_ERROR; SQLSTATE: HY000
         *
         * Message: Bad schema for mysql.ndb_replication table. Message: %s
         */
        case ER_NDB_REPLICATION_SCHEMA_ERROR = 1625;
        /**
         * Error number: 1626; Symbol: ER_CONFLICT_FN_PARSE_ERROR; SQLSTATE: HY000
         *
         * Message: Error in parsing conflict function. Message: %s
         */
        case ER_CONFLICT_FN_PARSE_ERROR = 1626;
        /**
         * Error number: 1627; Symbol: ER_EXCEPTIONS_WRITE_ERROR; SQLSTATE: HY000
         *
         * Message: Write to exceptions table failed. Message: %s
         */
        case ER_EXCEPTIONS_WRITE_ERROR = 1627;
        /**
         * Error number: 1628; Symbol: ER_TOO_LONG_TABLE_COMMENT; SQLSTATE: HY000
         *
         * Message: Comment for table '%s' is too long (max = %lu)
         */
        case ER_TOO_LONG_TABLE_COMMENT = 1628;
        /**
         * Error number: 1629; Symbol: ER_TOO_LONG_FIELD_COMMENT; SQLSTATE: HY000
         *
         * Message: The maximum supported character limit for the field; '%s', has been exceeded (max = %lu)
         */
        case ER_TOO_LONG_FIELD_COMMENT = 1629;
        /**
         * Error number: 1630; Symbol: ER_FUNC_INEXISTENT_NAME_COLLISION; SQLSTATE: 42000
         *
         * Message: FUNCTION %s does not exist. Check the 'Function Name
         * Parsing and Resolution' section in the Reference Manual
         */
        case ER_FUNC_INEXISTENT_NAME_COLLISION = 1630;
        /**
         * Error number: 1631; Symbol: ER_DATABASE_NAME; SQLSTATE: HY000
         *
         * Message: Database
         */
        case ER_DATABASE_NAME = 1631;
        /**
         * Error number: 1632; Symbol: ER_TABLE_NAME; SQLSTATE: HY000
         *
         * Message: Table
         */
        case ER_TABLE_NAME = 1632;
        /**
         * Error number: 1633; Symbol: ER_PARTITION_NAME; SQLSTATE: HY000
         *
         * Message: Partition
         */
        case ER_PARTITION_NAME = 1633;
        /**
         * Error number: 1634; Symbol: ER_SUBPARTITION_NAME; SQLSTATE: HY000
         *
         * Message: Subpartition
         */
        case ER_SUBPARTITION_NAME = 1634;
        /**
         * Error number: 1635; Symbol: ER_TEMPORARY_NAME; SQLSTATE: HY000
         *
         * Message: Temporary
         */
        case ER_TEMPORARY_NAME = 1635;
        /**
         * Error number: 1636; Symbol: ER_RENAMED_NAME; SQLSTATE: HY000
         *
         * Message: Renamed
         */
        case ER_RENAMED_NAME = 1636;
        /**
         * Error number: 1637; Symbol: ER_TOO_MANY_CONCURRENT_TRXS; SQLSTATE: HY000
         *
         * Message: Too many active concurrent transactions
         */
        case ER_TOO_MANY_CONCURRENT_TRXS = 1637;
        /**
         * Error number: 1638; Symbol: WARN_NON_ASCII_SEPARATOR_NOT_IMPLEMENTED; SQLSTATE: HY000
         *
         * Message: Non-ASCII separator arguments are not fully supported
         */
        case WARN_NON_ASCII_SEPARATOR_NOT_IMPLEMENTED = 1638;
        /**
         * Error number: 1639; Symbol: ER_DEBUG_SYNC_TIMEOUT; SQLSTATE: HY000
         *
         * Message: debug sync point wait timed out
         */
        case ER_DEBUG_SYNC_TIMEOUT = 1639;
        /**
         * Error number: 1640; Symbol: ER_DEBUG_SYNC_HIT_LIMIT; SQLSTATE: HY000
         *
         * Message: debug sync point hit limit reached
         */
        case ER_DEBUG_SYNC_HIT_LIMIT = 1640;
        /**
         * Error number: 1641; Symbol: ER_DUP_SIGNAL_SET; SQLSTATE: 42000
         *
         * Message: Duplicate condition information item '%s'
         */
        case ER_DUP_SIGNAL_SET = 1641;
        /**
         * Error number: 1642; Symbol: ER_SIGNAL_WARN; SQLSTATE: 01000
         *
         * Message: Unhandled user-defined warning condition
         */
        case ER_SIGNAL_WARN = 1642;
        /**
         * Error number: 1643; Symbol: ER_SIGNAL_NOT_FOUND; SQLSTATE: 02000
         *
         * Message: Unhandled user-defined not found condition
         */
        case ER_SIGNAL_NOT_FOUND = 1643;
        /**
         * Error number: 1644; Symbol: ER_SIGNAL_EXCEPTION; SQLSTATE: HY000
         *
         * Message: Unhandled user-defined exception condition
         */
        case ER_SIGNAL_EXCEPTION = 1644;
        /**
         * Error number: 1645; Symbol: ER_RESIGNAL_WITHOUT_ACTIVE_HANDLER; SQLSTATE: 0K000
         *
         * Message: RESIGNAL when handler not active
         */
        case ER_RESIGNAL_WITHOUT_ACTIVE_HANDLER = 1645;
        /**
         * Error number: 1646; Symbol: ER_SIGNAL_BAD_CONDITION_TYPE; SQLSTATE: HY000
         *
         * Message: SIGNAL/RESIGNAL can only use a CONDITION defined with
         * SQLSTATE
         */
        case ER_SIGNAL_BAD_CONDITION_TYPE = 1646;
        /**
         * Error number: 1647; Symbol: WARN_COND_ITEM_TRUNCATED; SQLSTATE: HY000
         *
         * Message: Data truncated for condition item '%s'
         */
        case WARN_COND_ITEM_TRUNCATED = 1647;
        /**
         * Error number: 1648; Symbol: ER_COND_ITEM_TOO_LONG; SQLSTATE: HY000
         *
         * Message: Data too long for condition item '%s'
         */
        case ER_COND_ITEM_TOO_LONG = 1648;
        /**
         * Error number: 1649; Symbol: ER_UNKNOWN_LOCALE; SQLSTATE: HY000
         *
         * Message: Unknown locale: '%s'
         */
        case ER_UNKNOWN_LOCALE = 1649;
        /**
         * Error number: 1650; Symbol: ER_REPLICA_IGNORE_SERVER_IDS; SQLSTATE: HY000
         *
         * Message: The requested server id %d clashes with the replica
         * startup option --replicate-same-server-id
         */
        case ER_REPLICA_IGNORE_SERVER_IDS = 1650;
        /**
         * Error number: 1652; Symbol: ER_SAME_NAME_PARTITION_FIELD; SQLSTATE: HY000
         *
         * Message: Duplicate partition field name '%s'
         */
        case ER_SAME_NAME_PARTITION_FIELD = 1652;
        /**
         * Error number: 1653; Symbol: ER_PARTITION_COLUMN_LIST_ERROR; SQLSTATE: HY000
         *
         * Message: Inconsistency in usage of column lists for partitioning
         */
        case ER_PARTITION_COLUMN_LIST_ERROR = 1653;
        /**
         * Error number: 1654; Symbol: ER_WRONG_TYPE_COLUMN_VALUE_ERROR; SQLSTATE: HY000
         *
         * Message: Partition column values of incorrect type
         */
        case ER_WRONG_TYPE_COLUMN_VALUE_ERROR = 1654;
        /**
         * Error number: 1655; Symbol: ER_TOO_MANY_PARTITION_FUNC_FIELDS_ERROR; SQLSTATE: HY000
         *
         * Message: Too many fields in '%s'
         */
        case ER_TOO_MANY_PARTITION_FUNC_FIELDS_ERROR = 1655;
        /**
         * Error number: 1656; Symbol: ER_MAXVALUE_IN_VALUES_IN; SQLSTATE: HY000
         *
         * Message: Cannot use MAXVALUE as value in VALUES IN
         */
        case ER_MAXVALUE_IN_VALUES_IN = 1656;
        /**
         * Error number: 1657; Symbol: ER_TOO_MANY_VALUES_ERROR; SQLSTATE: HY000
         *
         * Message: Cannot have more than one value for this type of %s
         * partitioning
         */
        case ER_TOO_MANY_VALUES_ERROR = 1657;
        /**
         * Error number: 1658; Symbol: ER_ROW_SINGLE_PARTITION_FIELD_ERROR; SQLSTATE: HY000
         *
         * Message: Row expressions in VALUES IN only allowed for multi-field
         * column partitioning
         */
        case ER_ROW_SINGLE_PARTITION_FIELD_ERROR = 1658;
        /**
         * Error number: 1659; Symbol: ER_FIELD_TYPE_NOT_ALLOWED_AS_PARTITION_FIELD; SQLSTATE: HY000
         *
         * Message: Field '%s' is of a not allowed type for this type of
         * partitioning
         */
        case ER_FIELD_TYPE_NOT_ALLOWED_AS_PARTITION_FIELD = 1659;
        /**
         * Error number: 1660; Symbol: ER_PARTITION_FIELDS_TOO_LONG; SQLSTATE: HY000
         *
         * Message: The total length of the partitioning fields is too large
         */
        case ER_PARTITION_FIELDS_TOO_LONG = 1660;
        /**
         * Error number: 1661; Symbol: ER_BINLOG_ROW_ENGINE_AND_STMT_ENGINE; SQLSTATE: HY000
         *
         * Message: Cannot execute statement: impossible to write to binary
         * log since both row-incapable engines and statement-incapable
         * engines are involved.
         */
        case ER_BINLOG_ROW_ENGINE_AND_STMT_ENGINE = 1661;
        /**
         * Error number: 1662; Symbol: ER_BINLOG_ROW_MODE_AND_STMT_ENGINE; SQLSTATE: HY000
         *
         * Message: Cannot execute statement: impossible to write to binary
         * log since BINLOG_FORMAT = ROW and at least one table uses a
         * storage engine limited to statement-based logging.
         */
        case ER_BINLOG_ROW_MODE_AND_STMT_ENGINE = 1662;
        /**
         * Error number: 1663; Symbol: ER_BINLOG_UNSAFE_AND_STMT_ENGINE; SQLSTATE: HY000
         *
         * Message: Cannot execute statement: impossible to write to binary
         * log since statement is unsafe, storage engine is limited to
         * statement-based logging, and BINLOG_FORMAT = MIXED. %s
         */
        case ER_BINLOG_UNSAFE_AND_STMT_ENGINE = 1663;
        /**
         * Error number: 1664; Symbol: ER_BINLOG_ROW_INJECTION_AND_STMT_ENGINE; SQLSTATE: HY000
         *
         * Message: Cannot execute statement: impossible to write to binary
         * log since statement is in row format and at least one table uses a
         * storage engine limited to statement-based logging.
         */
        case ER_BINLOG_ROW_INJECTION_AND_STMT_ENGINE = 1664;
        /**
         * Error number: 1665; Symbol: ER_BINLOG_STMT_MODE_AND_ROW_ENGINE; SQLSTATE: HY000
         *
         * Message: Cannot execute statement: impossible to write to binary
         * log since BINLOG_FORMAT = STATEMENT and at least one table uses a
         * storage engine limited to row-based logging.%s
         */
        case ER_BINLOG_STMT_MODE_AND_ROW_ENGINE = 1665;
        /**
         * Error number: 1666; Symbol: ER_BINLOG_ROW_INJECTION_AND_STMT_MODE; SQLSTATE: HY000
         *
         * Message: Cannot execute statement: impossible to write to binary
         * log since statement is in row format and BINLOG_FORMAT =
         * STATEMENT.
         */
        case ER_BINLOG_ROW_INJECTION_AND_STMT_MODE = 1666;
        /**
         * Error number: 1667; Symbol: ER_BINLOG_MULTIPLE_ENGINES_AND_SELF_LOGGING_ENGINE; SQLSTATE: HY000
         *
         * Message: Cannot execute statement: impossible to write to binary
         * log since more than one engine is involved and at least one engine
         * is self-logging.
         */
        case ER_BINLOG_MULTIPLE_ENGINES_AND_SELF_LOGGING_ENGINE = 1667;
        /**
         * Error number: 1668; Symbol: ER_BINLOG_UNSAFE_LIMIT; SQLSTATE: HY000
         *
         * Message: The statement is unsafe because it uses a LIMIT clause.
         * This is unsafe because the set of rows included cannot be
         * predicted.
         */
        case ER_BINLOG_UNSAFE_LIMIT = 1668;
        /**
         * Error number: 1670; Symbol: ER_BINLOG_UNSAFE_SYSTEM_TABLE; SQLSTATE: HY000
         *
         * Message: The statement is unsafe because it uses the general log; slow query log, or performance_schema table(s). This is unsafe
         * because system tables may differ on replicas.
         */
        case ER_BINLOG_UNSAFE_SYSTEM_TABLE = 1670;
        /**
         * Error number: 1671; Symbol: ER_BINLOG_UNSAFE_AUTOINC_COLUMNS; SQLSTATE: HY000
         *
         * Message: Statement is unsafe because it invokes a trigger or a
         * stored function that inserts into an AUTO_INCREMENT column.
         * Inserted values cannot be logged correctly.
         */
        case ER_BINLOG_UNSAFE_AUTOINC_COLUMNS = 1671;
        /**
         * Error number: 1672; Symbol: ER_BINLOG_UNSAFE_UDF; SQLSTATE: HY000
         *
         * Message: Statement is unsafe because it uses a UDF which may not
         * return the same value on the replica.
         */
        case ER_BINLOG_UNSAFE_UDF = 1672;
        /**
         * Error number: 1673; Symbol: ER_BINLOG_UNSAFE_SYSTEM_VARIABLE; SQLSTATE: HY000
         *
         * Message: Statement is unsafe because it uses a system variable
         * that may have a different value on the replica.
         */
        case ER_BINLOG_UNSAFE_SYSTEM_VARIABLE = 1673;
        /**
         * Error number: 1674; Symbol: ER_BINLOG_UNSAFE_SYSTEM_FUNCTION; SQLSTATE: HY000
         *
         * Message: Statement is unsafe because it uses a system function
         * that may return a different value on the replica.
         */
        case ER_BINLOG_UNSAFE_SYSTEM_FUNCTION = 1674;
        /**
         * Error number: 1675; Symbol: ER_BINLOG_UNSAFE_NONTRANS_AFTER_TRANS; SQLSTATE: HY000
         *
         * Message: Statement is unsafe because it accesses a
         * non-transactional table after accessing a transactional table
         * within the same transaction.
         */
        case ER_BINLOG_UNSAFE_NONTRANS_AFTER_TRANS = 1675;
        /**
         * Error number: 1676; Symbol: ER_MESSAGE_AND_STATEMENT; SQLSTATE: HY000
         *
         * Message: %s Statement: %s
         */
        case ER_MESSAGE_AND_STATEMENT = 1676;
        /**
         * Error number: 1678; Symbol: ER_REPLICA_CANT_CREATE_CONVERSION; SQLSTATE: HY000
         *
         * Message: Can't create conversion table for table '%s.%s'
         */
        case ER_REPLICA_CANT_CREATE_CONVERSION = 1678;
        /**
         * Error number: 1679; Symbol: ER_INSIDE_TRANSACTION_PREVENTS_SWITCH_BINLOG_FORMAT; SQLSTATE: HY000
         *
         * Message: Cannot modify @@session.binlog_format inside a
         * transaction
         */
        case ER_INSIDE_TRANSACTION_PREVENTS_SWITCH_BINLOG_FORMAT = 1679;
        /**
         * Error number: 1680; Symbol: ER_PATH_LENGTH; SQLSTATE: HY000
         *
         * Message: The path specified for %s is too long.
         */
        case ER_PATH_LENGTH = 1680;
        /**
         * Error number: 1681; Symbol: ER_WARN_DEPRECATED_SYNTAX_NO_REPLACEMENT; SQLSTATE: HY000
         *
         * Message: '%s' is deprecated and will be removed in a future
         * release.
         */
        case ER_WARN_DEPRECATED_SYNTAX_NO_REPLACEMENT = 1681;
        /**
         * Error number: 1682; Symbol: ER_WRONG_NATIVE_TABLE_STRUCTURE; SQLSTATE: HY000
         *
         * Message: Native table '%s'.'%s' has the wrong structure
         */
        case ER_WRONG_NATIVE_TABLE_STRUCTURE = 1682;
        /**
         * Error number: 1683; Symbol: ER_WRONG_PERFSCHEMA_USAGE; SQLSTATE: HY000
         *
         * Message: Invalid performance_schema usage.
         */
        case ER_WRONG_PERFSCHEMA_USAGE = 1683;
        /**
         * Error number: 1684; Symbol: ER_WARN_I_S_SKIPPED_TABLE; SQLSTATE: HY000
         *
         * Message: Table '%s'.'%s' was skipped since its definition is being
         * modified by concurrent DDL statement
         */
        case ER_WARN_I_S_SKIPPED_TABLE = 1684;
        /**
         * Error number: 1685; Symbol: ER_INSIDE_TRANSACTION_PREVENTS_SWITCH_BINLOG_DIRECT; SQLSTATE: HY000
         *
         * Message: Cannot modify
         * @@session.binlog_direct_non_transactional_updates inside a
         * transaction
         */
        case ER_INSIDE_TRANSACTION_PREVENTS_SWITCH_BINLOG_DIRECT = 1685;
        /**
         * Error number: 1686; Symbol: ER_STORED_FUNCTION_PREVENTS_SWITCH_BINLOG_DIRECT; SQLSTATE: HY000
         *
         * Message: Cannot change the binlog direct flag inside a stored
         * function or trigger
         */
        case ER_STORED_FUNCTION_PREVENTS_SWITCH_BINLOG_DIRECT = 1686;
        /**
         * Error number: 1687; Symbol: ER_SPATIAL_MUST_HAVE_GEOM_COL; SQLSTATE: 42000
         *
         * Message: A SPATIAL index may only contain a geometrical type
         * column
         */
        case ER_SPATIAL_MUST_HAVE_GEOM_COL = 1687;
        /**
         * Error number: 1688; Symbol: ER_TOO_LONG_INDEX_COMMENT; SQLSTATE: HY000
         *
         * Message: Comment for index '%s' is too long (max = %lu)
         */
        case ER_TOO_LONG_INDEX_COMMENT = 1688;
        /**
         * Error number: 1689; Symbol: ER_LOCK_ABORTED; SQLSTATE: HY000
         *
         * Message: Wait on a lock was aborted due to a pending exclusive
         * lock
         */
        case ER_LOCK_ABORTED = 1689;
        /**
         * Error number: 1690; Symbol: ER_DATA_OUT_OF_RANGE; SQLSTATE: 22003
         *
         * Message: %s value is out of range in '%s'
         */
        case ER_DATA_OUT_OF_RANGE = 1690;
        /**
         * Error number: 1692; Symbol: ER_BINLOG_UNSAFE_MULTIPLE_ENGINES_AND_SELF_LOGGING_ENGINE; SQLSTATE: HY000
         *
         * Message: Mixing self-logging and non-self-logging engines in a
         * statement is unsafe.
         */
        case ER_BINLOG_UNSAFE_MULTIPLE_ENGINES_AND_SELF_LOGGING_ENGINE = 1692;
        /**
         * Error number: 1693; Symbol: ER_BINLOG_UNSAFE_MIXED_STATEMENT; SQLSTATE: HY000
         *
         * Message: Statement accesses nontransactional table as well as
         * transactional or temporary table, and writes to any of them.
         */
        case ER_BINLOG_UNSAFE_MIXED_STATEMENT = 1693;
        /**
         * Error number: 1694; Symbol: ER_INSIDE_TRANSACTION_PREVENTS_SWITCH_SQL_LOG_BIN; SQLSTATE: HY000
         *
         * Message: Cannot modify @@session.sql_log_bin inside a transaction
         */
        case ER_INSIDE_TRANSACTION_PREVENTS_SWITCH_SQL_LOG_BIN = 1694;
        /**
         * Error number: 1695; Symbol: ER_STORED_FUNCTION_PREVENTS_SWITCH_SQL_LOG_BIN; SQLSTATE: HY000
         *
         * Message: Cannot change the sql_log_bin inside a stored function or
         * trigger
         */
        case ER_STORED_FUNCTION_PREVENTS_SWITCH_SQL_LOG_BIN = 1695;
        /**
         * Error number: 1696; Symbol: ER_FAILED_READ_FROM_PAR_FILE; SQLSTATE: HY000
         *
         * Message: Failed to read from the .par file
         */
        case ER_FAILED_READ_FROM_PAR_FILE = 1696;
        /**
         * Error number: 1697; Symbol: ER_VALUES_IS_NOT_INT_TYPE_ERROR; SQLSTATE: HY000
         *
         * Message: VALUES value for partition '%s' must have type INT
         */
        case ER_VALUES_IS_NOT_INT_TYPE_ERROR = 1697;
        /**
         * Error number: 1698; Symbol: ER_ACCESS_DENIED_NO_PASSWORD_ERROR; SQLSTATE: 28000
         *
         * Message: Access denied for user '%s'@'%s'
         */
        case ER_ACCESS_DENIED_NO_PASSWORD_ERROR = 1698;
        /**
         * Error number: 1701; Symbol: ER_TRUNCATE_ILLEGAL_FK; SQLSTATE: 42000
         *
         * Message: Cannot truncate a table referenced in a foreign key
         * constraint (%s)
         */
        case ER_TRUNCATE_ILLEGAL_FK = 1701;
        /**
         * Error number: 1702; Symbol: ER_PLUGIN_IS_PERMANENT; SQLSTATE: HY000
         *
         * Message: Plugin '%s' is force_plus_permanent and can not be
         * unloaded
         */
        case ER_PLUGIN_IS_PERMANENT = 1702;
        /**
         * Error number: 1703; Symbol: ER_REPLICA_HEARTBEAT_VALUE_OUT_OF_RANGE_MIN; SQLSTATE: HY000
         *
         * Message: The requested value for the heartbeat period is less than
         * 1 millisecond. The value is reset to 0, meaning that heartbeating
         * will effectively be disabled.
         */
        case ER_REPLICA_HEARTBEAT_VALUE_OUT_OF_RANGE_MIN = 1703;
        /**
         * Error number: 1704; Symbol: ER_REPLICA_HEARTBEAT_VALUE_OUT_OF_RANGE_MAX; SQLSTATE: HY000
         *
         * Message: The requested value for the heartbeat period exceeds the
         * value of `replica_net_timeout' seconds. A sensible value for the
         * period should be less than the timeout.
         */
        case ER_REPLICA_HEARTBEAT_VALUE_OUT_OF_RANGE_MAX = 1704;
        /**
         * Error number: 1705; Symbol: ER_STMT_CACHE_FULL; SQLSTATE: HY000
         *
         * Message: Multi-row statements required more than
         * 'max_binlog_stmt_cache_size' bytes of storage; increase this
         * mysqld variable and try again
         */
        case ER_STMT_CACHE_FULL = 1705;
        /**
         * Error number: 1706; Symbol: ER_MULTI_UPDATE_KEY_CONFLICT; SQLSTATE: HY000
         *
         * Message: Primary key/partition key update is not allowed since the
         * table is updated both as '%s' and '%s'.
         */
        case ER_MULTI_UPDATE_KEY_CONFLICT = 1706;
        /**
         * Error number: 1707; Symbol: ER_TABLE_NEEDS_REBUILD; SQLSTATE: HY000
         *
         * Message: Table rebuild required. Please do "ALTER TABLE `%s`
         * FORCE" or dump/reload to fix it!
         */
        case ER_TABLE_NEEDS_REBUILD = 1707;
        /**
         * Error number: 1708; Symbol: WARN_OPTION_BELOW_LIMIT; SQLSTATE: HY000
         *
         * Message: The value of '%s' should be no less than the value of
         * '%s'
         */
        case WARN_OPTION_BELOW_LIMIT = 1708;
        /**
         * Error number: 1709; Symbol: ER_INDEX_COLUMN_TOO_LONG; SQLSTATE: HY000
         *
         * Message: Index column size too large. The maximum column size is
         * %lu bytes.
         */
        case ER_INDEX_COLUMN_TOO_LONG = 1709;
        /**
         * Error number: 1710; Symbol: ER_ERROR_IN_TRIGGER_BODY; SQLSTATE: HY000
         *
         * Message: Trigger '%s' has an error in its body: '%s'
         */
        case ER_ERROR_IN_TRIGGER_BODY = 1710;
        /**
         * Error number: 1711; Symbol: ER_ERROR_IN_UNKNOWN_TRIGGER_BODY; SQLSTATE: HY000
         *
         * Message: Unknown trigger has an error in its body: '%s'
         */
        case ER_ERROR_IN_UNKNOWN_TRIGGER_BODY = 1711;
        /**
         * Error number: 1712; Symbol: ER_INDEX_CORRUPT; SQLSTATE: HY000
         *
         * Message: Index %s is corrupted
         */
        case ER_INDEX_CORRUPT = 1712;
        /**
         * Error number: 1713; Symbol: ER_UNDO_RECORD_TOO_BIG; SQLSTATE: HY000
         *
         * Message: Undo log record is too big.
         */
        case ER_UNDO_RECORD_TOO_BIG = 1713;
        /**
         * Error number: 1714; Symbol: ER_BINLOG_UNSAFE_INSERT_IGNORE_SELECT; SQLSTATE: HY000
         *
         * Message: INSERT IGNORE... SELECT is unsafe because the order in
         * which rows are retrieved by the SELECT determines which (if any)
         * rows are ignored. This order cannot be predicted and may differ on
         * source and the replica.
         */
        case ER_BINLOG_UNSAFE_INSERT_IGNORE_SELECT = 1714;
        /**
         * Error number: 1715; Symbol: ER_BINLOG_UNSAFE_INSERT_SELECT_UPDATE; SQLSTATE: HY000
         *
         * Message: INSERT... SELECT... ON DUPLICATE KEY UPDATE is unsafe
         * because the order in which rows are retrieved by the SELECT
         * determines which (if any) rows are updated. This order cannot be
         * predicted and may differ on source and the replica.
         */
        case ER_BINLOG_UNSAFE_INSERT_SELECT_UPDATE = 1715;
        /**
         * Error number: 1716; Symbol: ER_BINLOG_UNSAFE_REPLACE_SELECT; SQLSTATE: HY000
         *
         * Message: REPLACE... SELECT is unsafe because the order in which
         * rows are retrieved by the SELECT determines which (if any) rows
         * are replaced. This order cannot be predicted and may differ on
         * source and the replica.
         */
        case ER_BINLOG_UNSAFE_REPLACE_SELECT = 1716;
        /**
         * Error number: 1717; Symbol: ER_BINLOG_UNSAFE_CREATE_IGNORE_SELECT; SQLSTATE: HY000
         *
         * Message: CREATE... IGNORE SELECT is unsafe because the order in
         * which rows are retrieved by the SELECT determines which (if any)
         * rows are ignored. This order cannot be predicted and may differ on
         * source and the replica.
         */
        case ER_BINLOG_UNSAFE_CREATE_IGNORE_SELECT = 1717;
        /**
         * Error number: 1718; Symbol: ER_BINLOG_UNSAFE_CREATE_REPLACE_SELECT; SQLSTATE: HY000
         *
         * Message: CREATE... REPLACE SELECT is unsafe because the order in
         * which rows are retrieved by the SELECT determines which (if any)
         * rows are replaced. This order cannot be predicted and may differ
         * on source and the replica.
         */
        case ER_BINLOG_UNSAFE_CREATE_REPLACE_SELECT = 1718;
        /**
         * Error number: 1719; Symbol: ER_BINLOG_UNSAFE_UPDATE_IGNORE; SQLSTATE: HY000
         *
         * Message: UPDATE IGNORE is unsafe because the order in which rows
         * are updated determines which (if any) rows are ignored. This order
         * cannot be predicted and may differ on source and the replica.
         */
        case ER_BINLOG_UNSAFE_UPDATE_IGNORE = 1719;
        /**
         * Error number: 1720; Symbol: ER_PLUGIN_NO_UNINSTALL; SQLSTATE: HY000
         *
         * Message: Plugin '%s' is marked as not dynamically uninstallable.
         * You have to stop the server to uninstall it.
         */
        case ER_PLUGIN_NO_UNINSTALL = 1720;
        /**
         * Error number: 1721; Symbol: ER_PLUGIN_NO_INSTALL; SQLSTATE: HY000
         *
         * Message: Plugin '%s' is marked as not dynamically installable. You
         * have to stop the server to install it.
         */
        case ER_PLUGIN_NO_INSTALL = 1721;
        /**
         * Error number: 1722; Symbol: ER_BINLOG_UNSAFE_WRITE_AUTOINC_SELECT; SQLSTATE: HY000
         *
         * Message: Statements writing to a table with an auto-increment
         * column after selecting from another table are unsafe because the
         * order in which rows are retrieved determines what (if any) rows
         * will be written. This order cannot be predicted and may differ on
         * source and the replica.
         */
        case ER_BINLOG_UNSAFE_WRITE_AUTOINC_SELECT = 1722;
        /**
         * Error number: 1723; Symbol: ER_BINLOG_UNSAFE_CREATE_SELECT_AUTOINC; SQLSTATE: HY000
         *
         * Message: CREATE TABLE... SELECT... on a table with an
         * auto-increment column is unsafe because the order in which rows
         * are retrieved by the SELECT determines which (if any) rows are
         * inserted. This order cannot be predicted and may differ on source
         * and the replica.
         */
        case ER_BINLOG_UNSAFE_CREATE_SELECT_AUTOINC = 1723;
        /**
         * Error number: 1724; Symbol: ER_BINLOG_UNSAFE_INSERT_TWO_KEYS; SQLSTATE: HY000
         *
         * Message: INSERT... ON DUPLICATE KEY UPDATE on a table with more
         * than one UNIQUE KEY is unsafe
         */
        case ER_BINLOG_UNSAFE_INSERT_TWO_KEYS = 1724;
        /**
         * Error number: 1725; Symbol: ER_TABLE_IN_FK_CHECK; SQLSTATE: HY000
         *
         * Message: Table is being used in foreign key check.
         */
        case ER_TABLE_IN_FK_CHECK = 1725;
        /**
         * Error number: 1726; Symbol: ER_UNSUPPORTED_ENGINE; SQLSTATE: HY000
         *
         * Message: Storage engine '%s' does not support system tables.
         * [%s.%s]
         */
        case ER_UNSUPPORTED_ENGINE = 1726;
        /**
         * Error number: 1727; Symbol: ER_BINLOG_UNSAFE_AUTOINC_NOT_FIRST; SQLSTATE: HY000
         *
         * Message: INSERT into autoincrement field which is not the first
         * part in the composed primary key is unsafe.
         */
        case ER_BINLOG_UNSAFE_AUTOINC_NOT_FIRST = 1727;
        /**
         * Error number: 1728; Symbol: ER_CANNOT_LOAD_FROM_TABLE_V2; SQLSTATE: HY000
         *
         * Message: Cannot load from %s.%s. The table is probably corrupted
         */
        case ER_CANNOT_LOAD_FROM_TABLE_V2 = 1728;
        /**
         * Error number: 1729; Symbol: ER_SOURCE_DELAY_VALUE_OUT_OF_RANGE; SQLSTATE: HY000
         *
         * Message: The requested value %s for the source delay exceeds the
         * maximum %u
         */
        case ER_SOURCE_DELAY_VALUE_OUT_OF_RANGE = 1729;
        /**
         * Error number: 1730; Symbol: ER_ONLY_FD_AND_RBR_EVENTS_ALLOWED_IN_BINLOG_STATEMENT; SQLSTATE: HY000
         *
         * Message: Only Format_description_log_event and row events are
         * allowed in BINLOG statements (but %s was provided)
         */
        case ER_ONLY_FD_AND_RBR_EVENTS_ALLOWED_IN_BINLOG_STATEMENT = 1730;
        /**
         * Error number: 1731; Symbol: ER_PARTITION_EXCHANGE_DIFFERENT_OPTION; SQLSTATE: HY000
         *
         * Message: Non matching attribute '%s' between partition and table
         */
        case ER_PARTITION_EXCHANGE_DIFFERENT_OPTION = 1731;
        /**
         * Error number: 1732; Symbol: ER_PARTITION_EXCHANGE_PART_TABLE; SQLSTATE: HY000
         *
         * Message: Table to exchange with partition is partitioned: '%s'
         */
        case ER_PARTITION_EXCHANGE_PART_TABLE = 1732;
        /**
         * Error number: 1733; Symbol: ER_PARTITION_EXCHANGE_TEMP_TABLE; SQLSTATE: HY000
         *
         * Message: Table to exchange with partition is temporary: '%s'
         */
        case ER_PARTITION_EXCHANGE_TEMP_TABLE = 1733;
        /**
         * Error number: 1734; Symbol: ER_PARTITION_INSTEAD_OF_SUBPARTITION; SQLSTATE: HY000
         *
         * Message: Subpartitioned table, use subpartition instead of
         * partition
         */
        case ER_PARTITION_INSTEAD_OF_SUBPARTITION = 1734;
        /**
         * Error number: 1735; Symbol: ER_UNKNOWN_PARTITION; SQLSTATE: HY000
         *
         * Message: Unknown partition '%s' in table '%s'
         */
        case ER_UNKNOWN_PARTITION = 1735;
        /**
         * Error number: 1736; Symbol: ER_TABLES_DIFFERENT_METADATA; SQLSTATE: HY000
         *
         * Message: Tables have different definitions
         */
        case ER_TABLES_DIFFERENT_METADATA = 1736;
        /**
         * Error number: 1737; Symbol: ER_ROW_DOES_NOT_MATCH_PARTITION; SQLSTATE: HY000
         *
         * Message: Found a row that does not match the partition
         */
        case ER_ROW_DOES_NOT_MATCH_PARTITION = 1737;
        /**
         * Error number: 1738; Symbol: ER_BINLOG_CACHE_SIZE_GREATER_THAN_MAX; SQLSTATE: HY000
         *
         * Message: Option binlog_cache_size (%lu) is greater than
         * max_binlog_cache_size (%lu); setting binlog_cache_size equal to
         * max_binlog_cache_size.
         */
        case ER_BINLOG_CACHE_SIZE_GREATER_THAN_MAX = 1738;
        /**
         * Error number: 1739; Symbol: ER_WARN_INDEX_NOT_APPLICABLE; SQLSTATE: HY000
         *
         * Message: Cannot use %s access on index '%s' due to type or
         * collation conversion on field '%s'
         */
        case ER_WARN_INDEX_NOT_APPLICABLE = 1739;
        /**
         * Error number: 1740; Symbol: ER_PARTITION_EXCHANGE_FOREIGN_KEY; SQLSTATE: HY000
         *
         * Message: Table to exchange with partition has foreign key
         * references: '%s'
         */
        case ER_PARTITION_EXCHANGE_FOREIGN_KEY = 1740;
        /**
         * Error number: 1742; Symbol: ER_RPL_INFO_DATA_TOO_LONG; SQLSTATE: HY000
         *
         * Message: Data for column '%s' too long
         */
        case ER_RPL_INFO_DATA_TOO_LONG = 1742;
        /**
         * Error number: 1745; Symbol: ER_BINLOG_STMT_CACHE_SIZE_GREATER_THAN_MAX; SQLSTATE: HY000
         *
         * Message: Option binlog_stmt_cache_size (%lu) is greater than
         * max_binlog_stmt_cache_size (%lu); setting binlog_stmt_cache_size
         * equal to max_binlog_stmt_cache_size.
         */
        case ER_BINLOG_STMT_CACHE_SIZE_GREATER_THAN_MAX = 1745;
        /**
         * Error number: 1746; Symbol: ER_CANT_UPDATE_TABLE_IN_CREATE_TABLE_SELECT; SQLSTATE: HY000
         *
         * Message: Can't update table '%s' while '%s' is being created.
         */
        case ER_CANT_UPDATE_TABLE_IN_CREATE_TABLE_SELECT = 1746;
        /**
         * Error number: 1747; Symbol: ER_PARTITION_CLAUSE_ON_NONPARTITIONED; SQLSTATE: HY000
         *
         * Message: PARTITION () clause on non partitioned table
         */
        case ER_PARTITION_CLAUSE_ON_NONPARTITIONED = 1747;
        /**
         * Error number: 1748; Symbol: ER_ROW_DOES_NOT_MATCH_GIVEN_PARTITION_SET; SQLSTATE: HY000
         *
         * Message: Found a row not matching the given partition set
         */
        case ER_ROW_DOES_NOT_MATCH_GIVEN_PARTITION_SET = 1748;
        /**
         * Error number: 1750; Symbol: ER_CHANGE_RPL_INFO_REPOSITORY_FAILURE; SQLSTATE: HY000
         *
         * Message: Failure while changing the type of replication
         * repository: %s.
         */
        case ER_CHANGE_RPL_INFO_REPOSITORY_FAILURE = 1750;
        /**
         * Error number: 1751; Symbol: ER_WARNING_NOT_COMPLETE_ROLLBACK_WITH_CREATED_TEMP_TABLE; SQLSTATE: HY000
         *
         * Message: The creation of some temporary tables could not be rolled
         * back.
         */
        case ER_WARNING_NOT_COMPLETE_ROLLBACK_WITH_CREATED_TEMP_TABLE = 1751;
        /**
         * Error number: 1752; Symbol: ER_WARNING_NOT_COMPLETE_ROLLBACK_WITH_DROPPED_TEMP_TABLE; SQLSTATE: HY000
         *
         * Message: Some temporary tables were dropped, but these operations
         * could not be rolled back.
         */
        case ER_WARNING_NOT_COMPLETE_ROLLBACK_WITH_DROPPED_TEMP_TABLE = 1752;
        /**
         * Error number: 1753; Symbol: ER_MTA_FEATURE_IS_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: %s is not supported in multi-threaded replica mode. %s
         */
        case ER_MTA_FEATURE_IS_NOT_SUPPORTED = 1753;
        /**
         * Error number: 1754; Symbol: ER_MTA_UPDATED_DBS_GREATER_MAX; SQLSTATE: HY000
         *
         * Message: The number of modified databases exceeds the maximum %d; the database names will not be included in the replication event
         * metadata.
         */
        case ER_MTA_UPDATED_DBS_GREATER_MAX = 1754;
        /**
         * Error number: 1755; Symbol: ER_MTA_CANT_PARALLEL; SQLSTATE: HY000
         *
         * Message: Cannot execute the current event group in the parallel
         * mode. Encountered event %s, relay-log name %s, position %s which
         * prevents execution of this event group in parallel mode. Reason: %s.
         */
        case ER_MTA_CANT_PARALLEL = 1755;
        /**
         * Error number: 1756; Symbol: ER_MTA_INCONSISTENT_DATA; SQLSTATE: HY000
         *
         * Message: %s
         */
        case ER_MTA_INCONSISTENT_DATA = 1756;
        /**
         * Error number: 1757; Symbol: ER_FULLTEXT_NOT_SUPPORTED_WITH_PARTITIONING; SQLSTATE: HY000
         *
         * Message: FULLTEXT index is not supported for partitioned tables.
         */
        case ER_FULLTEXT_NOT_SUPPORTED_WITH_PARTITIONING = 1757;
        /**
         * Error number: 1758; Symbol: ER_DA_INVALID_CONDITION_NUMBER; SQLSTATE: 35000
         *
         * Message: Invalid condition number
         */
        case ER_DA_INVALID_CONDITION_NUMBER = 1758;
        /**
         * Error number: 1759; Symbol: ER_INSECURE_PLAIN_TEXT; SQLSTATE: HY000
         *
         * Message: Sending passwords in plain text without SSL/TLS is
         * extremely insecure.
         */
        case ER_INSECURE_PLAIN_TEXT = 1759;
        /**
         * Error number: 1760; Symbol: ER_INSECURE_CHANGE_SOURCE; SQLSTATE: HY000
         *
         * Message: Storing MySQL user name or password information in the
         * connection metadata repository is not secure and is therefore not
         * recommended. Please consider using the USER and PASSWORD
         * connection options for START REPLICA; see the 'START REPLICA
         * Syntax' in the MySQL Manual for more information.
         */
        case ER_INSECURE_CHANGE_SOURCE = 1760;
        /**
         * Error number: 1761; Symbol: ER_FOREIGN_DUPLICATE_KEY_WITH_CHILD_INFO; SQLSTATE: 23000
         *
         * Message: Foreign key constraint for table '%s', record '%s' would
         * lead to a duplicate entry in table '%s', key '%s'
         */
        case ER_FOREIGN_DUPLICATE_KEY_WITH_CHILD_INFO = 1761;
        /**
         * Error number: 1762; Symbol: ER_FOREIGN_DUPLICATE_KEY_WITHOUT_CHILD_INFO; SQLSTATE: 23000
         *
         * Message: Foreign key constraint for table '%s', record '%s' would
         * lead to a duplicate entry in a child table
         */
        case ER_FOREIGN_DUPLICATE_KEY_WITHOUT_CHILD_INFO = 1762;
        /**
         * Error number: 1763; Symbol: ER_SQLTHREAD_WITH_SECURE_REPLICA; SQLSTATE: HY000
         *
         * Message: Setting authentication options is not possible when only
         * the Replica SQL Thread is being started.
         */
        case ER_SQLTHREAD_WITH_SECURE_REPLICA = 1763;
        /**
         * Error number: 1764; Symbol: ER_TABLE_HAS_NO_FT; SQLSTATE: HY000
         *
         * Message: The table does not have FULLTEXT index to support this
         * query
         */
        case ER_TABLE_HAS_NO_FT = 1764;
        /**
         * Error number: 1765; Symbol: ER_VARIABLE_NOT_SETTABLE_IN_SF_OR_TRIGGER; SQLSTATE: HY000
         *
         * Message: The system variable %s cannot be set in stored functions
         * or triggers.
         */
        case ER_VARIABLE_NOT_SETTABLE_IN_SF_OR_TRIGGER = 1765;
        /**
         * Error number: 1766; Symbol: ER_VARIABLE_NOT_SETTABLE_IN_TRANSACTION; SQLSTATE: HY000
         *
         * Message: The system variable %s cannot be set when there is an
         * ongoing transaction.
         */
        case ER_VARIABLE_NOT_SETTABLE_IN_TRANSACTION = 1766;
        /**
         * Error number: 1769; Symbol: ER_SET_STATEMENT_CANNOT_INVOKE_FUNCTION; SQLSTATE: HY000
         *
         * Message: The statement 'SET %s' cannot invoke a stored function.
         */
        case ER_SET_STATEMENT_CANNOT_INVOKE_FUNCTION = 1769;
        /**
         * Error number: 1770; Symbol: ER_GTID_NEXT_CANT_BE_AUTOMATIC_IF_GTID_NEXT_LIST_IS_NON_NULL; SQLSTATE: HY000
         *
         * Message: The system variable @@SESSION.GTID_NEXT cannot be
         * 'AUTOMATIC' when @@SESSION.GTID_NEXT_LIST is non-NULL.
         */
        case ER_GTID_NEXT_CANT_BE_AUTOMATIC_IF_GTID_NEXT_LIST_IS_NON_NULL = 1770;
        /**
         * Error number: 1772; Symbol: ER_MALFORMED_GTID_SET_SPECIFICATION; SQLSTATE: HY000
         *
         * Message: Malformed GTID set specification '%s'.
         */
        case ER_MALFORMED_GTID_SET_SPECIFICATION = 1772;
        /**
         * Error number: 1773; Symbol: ER_MALFORMED_GTID_SET_ENCODING; SQLSTATE: HY000
         *
         * Message: Malformed GTID set encoding.
         */
        case ER_MALFORMED_GTID_SET_ENCODING = 1773;
        /**
         * Error number: 1774; Symbol: ER_MALFORMED_GTID_SPECIFICATION; SQLSTATE: HY000
         *
         * Message: Malformed GTID specification '%s'.
         */
        case ER_MALFORMED_GTID_SPECIFICATION = 1774;
        /**
         * Error number: 1775; Symbol: ER_GNO_EXHAUSTED; SQLSTATE: HY000
         *
         * Message: Impossible to generate GTID: the integer component
         * reached the maximum value. Restart the server with a new
         * server_uuid.
         */
        case ER_GNO_EXHAUSTED = 1775;
        /**
         * Error number: 1776; Symbol: ER_BAD_REPLICA_AUTO_POSITION; SQLSTATE: HY000
         *
         * Message: Parameters SOURCE_LOG_FILE, SOURCE_LOG_POS; RELAY_LOG_FILE and RELAY_LOG_POS cannot be set when
         * SOURCE_AUTO_POSITION is active.
         */
        case ER_BAD_REPLICA_AUTO_POSITION = 1776;
        /**
         * Error number: 1777; Symbol: ER_AUTO_POSITION_REQUIRES_GTID_MODE_NOT_OFF; SQLSTATE: HY000
         *
         * Message: CHANGE REPLICATION SOURCE TO SOURCE_AUTO_POSITION = 1
         * cannot be executed because @@GLOBAL.GTID_MODE = OFF.
         */
        case ER_AUTO_POSITION_REQUIRES_GTID_MODE_NOT_OFF = 1777;
        /**
         * Error number: 1778; Symbol: ER_CANT_DO_IMPLICIT_COMMIT_IN_TRX_WHEN_GTID_NEXT_IS_SET; SQLSTATE: HY000
         *
         * Message: Cannot execute statements with implicit commit inside a
         * transaction when @@SESSION.GTID_NEXT == 'UUID:NUMBER'.
         */
        case ER_CANT_DO_IMPLICIT_COMMIT_IN_TRX_WHEN_GTID_NEXT_IS_SET = 1778;
        /**
         * Error number: 1779; Symbol: ER_GTID_MODE_ON_REQUIRES_ENFORCE_GTID_CONSISTENCY_ON; SQLSTATE: HY000
         *
         * Message: GTID_MODE = ON requires ENFORCE_GTID_CONSISTENCY = ON.
         */
        case ER_GTID_MODE_ON_REQUIRES_ENFORCE_GTID_CONSISTENCY_ON = 1779;
        /**
         * Error number: 1781; Symbol: ER_CANT_SET_GTID_NEXT_TO_GTID_WHEN_GTID_MODE_IS_OFF; SQLSTATE: HY000
         *
         * Message: @@SESSION.GTID_NEXT cannot be set to UUID:NUMBER when
         * @@GLOBAL.GTID_MODE = OFF.
         */
        case ER_CANT_SET_GTID_NEXT_TO_GTID_WHEN_GTID_MODE_IS_OFF = 1781;
        /**
         * Error number: 1782; Symbol: ER_CANT_SET_GTID_NEXT_TO_ANONYMOUS_WHEN_GTID_MODE_IS_ON; SQLSTATE: HY000
         *
         * Message: @@SESSION.GTID_NEXT cannot be set to ANONYMOUS when
         * @@GLOBAL.GTID_MODE = ON.
         */
        case ER_CANT_SET_GTID_NEXT_TO_ANONYMOUS_WHEN_GTID_MODE_IS_ON = 1782;
        /**
         * Error number: 1783; Symbol: ER_CANT_SET_GTID_NEXT_LIST_TO_NON_NULL_WHEN_GTID_MODE_IS_OFF; SQLSTATE: HY000
         *
         * Message: @@SESSION.GTID_NEXT_LIST cannot be set to a non-NULL
         * value when @@GLOBAL.GTID_MODE = OFF.
         */
        case ER_CANT_SET_GTID_NEXT_LIST_TO_NON_NULL_WHEN_GTID_MODE_IS_OFF = 1783;
        /**
         * Error number: 1785; Symbol: ER_GTID_UNSAFE_NON_TRANSACTIONAL_TABLE; SQLSTATE: HY000
         *
         * Message: Statement violates GTID consistency: Updates to
         * non-transactional tables can only be done in either autocommitted
         * statements or single-statement transactions, and never in the same
         * statement as updates to transactional tables.
         */
        case ER_GTID_UNSAFE_NON_TRANSACTIONAL_TABLE = 1785;
        /**
         * Error number: 1786; Symbol: ER_GTID_UNSAFE_CREATE_SELECT; SQLSTATE: HY000
         *
         * Message: Statement violates GTID consistency: CREATE TABLE ...
         * SELECT.
         */
        case ER_GTID_UNSAFE_CREATE_SELECT = 1786;
        /**
         * Error number: 1788; Symbol: ER_GTID_MODE_CAN_ONLY_CHANGE_ONE_STEP_AT_A_TIME; SQLSTATE: HY000
         *
         * Message: The value of @@GLOBAL.GTID_MODE can only be changed one
         * step at a time: OFF <-> OFF_PERMISSIVE <->
         * ON_PERMISSIVE <-> ON. Also note that this value must be
         * stepped up or down simultaneously on all servers. See the Manual
         * for instructions.
         */
        case ER_GTID_MODE_CAN_ONLY_CHANGE_ONE_STEP_AT_A_TIME = 1788;
        /**
         * Error number: 1789; Symbol: ER_SOURCE_HAS_PURGED_REQUIRED_GTIDS; SQLSTATE: HY000
         *
         * Message: Cannot replicate because the source purged required
         * binary logs. Replicate the missing transactions from elsewhere, or
         * provision a new replica from backup. Consider increasing the
         * source's binary log expiration period. %s
         */
        case ER_SOURCE_HAS_PURGED_REQUIRED_GTIDS = 1789;
        /**
         * Error number: 1790; Symbol: ER_CANT_SET_GTID_NEXT_WHEN_OWNING_GTID; SQLSTATE: HY000
         *
         * Message: @@SESSION.GTID_NEXT cannot be changed by a client that
         * owns a GTID. The client owns %s. Ownership is released on COMMIT
         * or ROLLBACK.
         */
        case ER_CANT_SET_GTID_NEXT_WHEN_OWNING_GTID = 1790;
        /**
         * Error number: 1791; Symbol: ER_UNKNOWN_EXPLAIN_FORMAT; SQLSTATE: HY000
         *
         * Message: Unknown EXPLAIN format name: '%s'
         */
        case ER_UNKNOWN_EXPLAIN_FORMAT = 1791;
        /**
         * Error number: 1792; Symbol: ER_CANT_EXECUTE_IN_READ_ONLY_TRANSACTION; SQLSTATE: 25006
         *
         * Message: Cannot execute statement in a READ ONLY transaction.
         */
        case ER_CANT_EXECUTE_IN_READ_ONLY_TRANSACTION = 1792;
        /**
         * Error number: 1793; Symbol: ER_TOO_LONG_TABLE_PARTITION_COMMENT; SQLSTATE: HY000
         *
         * Message: Comment for table partition '%s' is too long (max = %lu)
         */
        case ER_TOO_LONG_TABLE_PARTITION_COMMENT = 1793;
        /**
         * Error number: 1794; Symbol: ER_REPLICA_CONFIGURATION; SQLSTATE: HY000
         *
         * Message: Replica is not configured or failed to initialize
         * properly. You must at least set --server-id to enable either a
         * source or a replica. Additional error messages can be found in the
         * MySQL error log.
         */
        case ER_REPLICA_CONFIGURATION = 1794;
        /**
         * Error number: 1795; Symbol: ER_INNODB_FT_LIMIT; SQLSTATE: HY000
         *
         * Message: InnoDB presently supports one FULLTEXT index creation at
         * a time
         */
        case ER_INNODB_FT_LIMIT = 1795;
        /**
         * Error number: 1796; Symbol: ER_INNODB_NO_FT_TEMP_TABLE; SQLSTATE: HY000
         *
         * Message: Cannot create FULLTEXT index on temporary InnoDB table
         */
        case ER_INNODB_NO_FT_TEMP_TABLE = 1796;
        /**
         * Error number: 1797; Symbol: ER_INNODB_FT_WRONG_DOCID_COLUMN; SQLSTATE: HY000
         *
         * Message: Column '%s' is of wrong type for an InnoDB FULLTEXT index
         */
        case ER_INNODB_FT_WRONG_DOCID_COLUMN = 1797;
        /**
         * Error number: 1798; Symbol: ER_INNODB_FT_WRONG_DOCID_INDEX; SQLSTATE: HY000
         *
         * Message: Index '%s' is of wrong type for an InnoDB FULLTEXT index
         */
        case ER_INNODB_FT_WRONG_DOCID_INDEX = 1798;
        /**
         * Error number: 1799; Symbol: ER_INNODB_ONLINE_LOG_TOO_BIG; SQLSTATE: HY000
         *
         * Message: Creating index '%s' required more than
         * 'innodb_online_alter_log_max_size' bytes of modification log.
         * Please try again.
         */
        case ER_INNODB_ONLINE_LOG_TOO_BIG = 1799;
        /**
         * Error number: 1800; Symbol: ER_UNKNOWN_ALTER_ALGORITHM; SQLSTATE: HY000
         *
         * Message: Unknown ALGORITHM '%s'
         */
        case ER_UNKNOWN_ALTER_ALGORITHM = 1800;
        /**
         * Error number: 1801; Symbol: ER_UNKNOWN_ALTER_LOCK; SQLSTATE: HY000
         *
         * Message: Unknown LOCK type '%s'
         */
        case ER_UNKNOWN_ALTER_LOCK = 1801;
        /**
         * Error number: 1802; Symbol: ER_MTA_CHANGE_SOURCE_CANT_RUN_WITH_GAPS; SQLSTATE: HY000
         *
         * Message: CHANGE REPLICATION SOURCE cannot be executed when the
         * replica was stopped with an error or killed in MTA mode. Consider
         * using RESET REPLICA or START REPLICA UNTIL.
         */
        case ER_MTA_CHANGE_SOURCE_CANT_RUN_WITH_GAPS = 1802;
        /**
         * Error number: 1803; Symbol: ER_MTA_RECOVERY_FAILURE; SQLSTATE: HY000
         *
         * Message: Cannot recover after REPLICA errored out in parallel
         * execution mode. Additional error messages can be found in the
         * MySQL error log.
         */
        case ER_MTA_RECOVERY_FAILURE = 1803;
        /**
         * Error number: 1804; Symbol: ER_MTA_RESET_WORKERS; SQLSTATE: HY000
         *
         * Message: Cannot clean up worker info tables. Additional error
         * messages can be found in the MySQL error log.
         */
        case ER_MTA_RESET_WORKERS = 1804;
        /**
         * Error number: 1805; Symbol: ER_COL_COUNT_DOESNT_MATCH_CORRUPTED_V2; SQLSTATE: HY000
         *
         * Message: Column count of %s.%s is wrong. Expected %d, found %d.
         * The table is probably corrupted
         */
        case ER_COL_COUNT_DOESNT_MATCH_CORRUPTED_V2 = 1805;
        /**
         * Error number: 1806; Symbol: ER_REPLICA_SILENT_RETRY_TRANSACTION; SQLSTATE: HY000
         *
         * Message: Replica must silently retry current transaction
         */
        case ER_REPLICA_SILENT_RETRY_TRANSACTION = 1806;
        /**
         * Error number: 1807; Symbol: ER_DISCARD_FK_CHECKS_RUNNING; SQLSTATE: HY000
         *
         * Message: There is a foreign key check running on table '%s'.
         * Cannot discard the table.
         */
        case ER_DISCARD_FK_CHECKS_RUNNING = 1807;
        /**
         * Error number: 1808; Symbol: ER_TABLE_SCHEMA_MISMATCH; SQLSTATE: HY000
         *
         * Message: Schema mismatch (%s)
         */
        case ER_TABLE_SCHEMA_MISMATCH = 1808;
        /**
         * Error number: 1809; Symbol: ER_TABLE_IN_SYSTEM_TABLESPACE; SQLSTATE: HY000
         *
         * Message: Table '%s' in system tablespace
         */
        case ER_TABLE_IN_SYSTEM_TABLESPACE = 1809;
        /**
         * Error number: 1810; Symbol: ER_IO_READ_ERROR; SQLSTATE: HY000
         *
         * Message: IO Read error: (%lu, %s) %s
         */
        case ER_IO_READ_ERROR = 1810;
        /**
         * Error number: 1811; Symbol: ER_IO_WRITE_ERROR; SQLSTATE: HY000
         *
         * Message: IO Write error: (%lu, %s) %s
         */
        case ER_IO_WRITE_ERROR = 1811;
        /**
         * Error number: 1812; Symbol: ER_TABLESPACE_MISSING; SQLSTATE: HY000
         *
         * Message: Tablespace is missing for table %s.
         */
        case ER_TABLESPACE_MISSING = 1812;
        /**
         * Error number: 1813; Symbol: ER_TABLESPACE_EXISTS; SQLSTATE: HY000
         *
         * Message: Tablespace '%s' exists.
         */
        case ER_TABLESPACE_EXISTS = 1813;
        /**
         * Error number: 1814; Symbol: ER_TABLESPACE_DISCARDED; SQLSTATE: HY000
         *
         * Message: Tablespace is discarded for table, '%s'
         */
        case ER_TABLESPACE_DISCARDED = 1814;
        /**
         * Error number: 1815; Symbol: ER_INTERNAL_ERROR; SQLSTATE: HY000
         *
         * Message: Internal error: %s
         */
        case ER_INTERNAL_ERROR = 1815;
        /**
         * Error number: 1816; Symbol: ER_INNODB_IMPORT_ERROR; SQLSTATE: HY000
         *
         * Message: ALTER TABLE %s IMPORT TABLESPACE failed with error %lu : '%s'
         */
        case ER_INNODB_IMPORT_ERROR = 1816;
        /**
         * Error number: 1817; Symbol: ER_INNODB_INDEX_CORRUPT; SQLSTATE: HY000
         *
         * Message: Index corrupt: %s
         */
        case ER_INNODB_INDEX_CORRUPT = 1817;
        /**
         * Error number: 1818; Symbol: ER_INVALID_YEAR_COLUMN_LENGTH; SQLSTATE: HY000
         *
         * Message: Invalid display width. Use YEAR instead.
         */
        case ER_INVALID_YEAR_COLUMN_LENGTH = 1818;
        /**
         * Error number: 1819; Symbol: ER_NOT_VALID_PASSWORD; SQLSTATE: HY000
         *
         * Message: Your password does not satisfy the current policy
         * requirements
         */
        case ER_NOT_VALID_PASSWORD = 1819;
        /**
         * Error number: 1820; Symbol: ER_MUST_CHANGE_PASSWORD; SQLSTATE: HY000
         *
         * Message: You must reset your password using ALTER USER statement
         * before executing this statement.
         */
        case ER_MUST_CHANGE_PASSWORD = 1820;
        /**
         * Error number: 1821; Symbol: ER_FK_NO_INDEX_CHILD; SQLSTATE: HY000
         *
         * Message: Failed to add the foreign key constraint. Missing index
         * for constraint '%s' in the foreign table '%s'
         */
        case ER_FK_NO_INDEX_CHILD = 1821;
        /**
         * Error number: 1822; Symbol: ER_FK_NO_INDEX_PARENT; SQLSTATE: HY000
         *
         * Message: Failed to add the foreign key constraint. Missing index
         * for constraint '%s' in the referenced table '%s'
         */
        case ER_FK_NO_INDEX_PARENT = 1822;
        /**
         * Error number: 1823; Symbol: ER_FK_FAIL_ADD_SYSTEM; SQLSTATE: HY000
         *
         * Message: Failed to add the foreign key constraint '%s' to system
         * tables
         */
        case ER_FK_FAIL_ADD_SYSTEM = 1823;
        /**
         * Error number: 1824; Symbol: ER_FK_CANNOT_OPEN_PARENT; SQLSTATE: HY000
         *
         * Message: Failed to open the referenced table '%s'
         */
        case ER_FK_CANNOT_OPEN_PARENT = 1824;
        /**
         * Error number: 1825; Symbol: ER_FK_INCORRECT_OPTION; SQLSTATE: HY000
         *
         * Message: Failed to add the foreign key constraint on table '%s'.
         * Incorrect options in FOREIGN KEY constraint '%s'
         */
        case ER_FK_INCORRECT_OPTION = 1825;
        /**
         * Error number: 1826; Symbol: ER_FK_DUP_NAME; SQLSTATE: HY000
         *
         * Message: Duplicate foreign key constraint name '%s'
         */
        case ER_FK_DUP_NAME = 1826;
        /**
         * Error number: 1827; Symbol: ER_PASSWORD_FORMAT; SQLSTATE: HY000
         *
         * Message: The password hash doesn't have the expected format.
         */
        case ER_PASSWORD_FORMAT = 1827;
        /**
         * Error number: 1828; Symbol: ER_FK_COLUMN_CANNOT_DROP; SQLSTATE: HY000
         *
         * Message: Cannot drop column '%s': needed in a foreign key
         * constraint '%s'
         */
        case ER_FK_COLUMN_CANNOT_DROP = 1828;
        /**
         * Error number: 1829; Symbol: ER_FK_COLUMN_CANNOT_DROP_CHILD; SQLSTATE: HY000
         *
         * Message: Cannot drop column '%s': needed in a foreign key
         * constraint '%s' of table '%s'
         */
        case ER_FK_COLUMN_CANNOT_DROP_CHILD = 1829;
        /**
         * Error number: 1830; Symbol: ER_FK_COLUMN_NOT_NULL; SQLSTATE: HY000
         *
         * Message: Column '%s' cannot be NOT NULL: needed in a foreign key
         * constraint '%s' SET NULL
         */
        case ER_FK_COLUMN_NOT_NULL = 1830;
        /**
         * Error number: 1831; Symbol: ER_DUP_INDEX; SQLSTATE: HY000
         *
         * Message: Duplicate index '%s' defined on the table '%s.%s'. This
         * is deprecated and will be disallowed in a future release.
         */
        case ER_DUP_INDEX = 1831;
        /**
         * Error number: 1832; Symbol: ER_FK_COLUMN_CANNOT_CHANGE; SQLSTATE: HY000
         *
         * Message: Cannot change column '%s': used in a foreign key
         * constraint '%s'
         */
        case ER_FK_COLUMN_CANNOT_CHANGE = 1832;
        /**
         * Error number: 1833; Symbol: ER_FK_COLUMN_CANNOT_CHANGE_CHILD; SQLSTATE: HY000
         *
         * Message: Cannot change column '%s': used in a foreign key
         * constraint '%s' of table '%s'
         */
        case ER_FK_COLUMN_CANNOT_CHANGE_CHILD = 1833;
        /**
         * Error number: 1835; Symbol: ER_MALFORMED_PACKET; SQLSTATE: HY000
         *
         * Message: Malformed communication packet.
         */
        case ER_MALFORMED_PACKET = 1835;
        /**
         * Error number: 1836; Symbol: ER_READ_ONLY_MODE; SQLSTATE: HY000
         *
         * Message: Running in read-only mode
         */
        case ER_READ_ONLY_MODE = 1836;
        /**
         * Error number: 1837; Symbol: ER_GTID_NEXT_TYPE_UNDEFINED_GTID; SQLSTATE: HY000
         *
         * Message: When @@SESSION.GTID_NEXT is set to a GTID, you must
         * explicitly set it to a different value after a COMMIT or ROLLBACK.
         * Please check GTID_NEXT variable manual page for detailed
         * explanation. Current @@SESSION.GTID_NEXT is '%s'.
         */
        case ER_GTID_NEXT_TYPE_UNDEFINED_GTID = 1837;
        /**
         * Error number: 1838; Symbol: ER_VARIABLE_NOT_SETTABLE_IN_SP; SQLSTATE: HY000
         *
         * Message: The system variable %s cannot be set in stored
         * procedures.
         */
        case ER_VARIABLE_NOT_SETTABLE_IN_SP = 1838;
        /**
         * Error number: 1840; Symbol: ER_CANT_SET_GTID_PURGED_WHEN_GTID_EXECUTED_IS_NOT_EMPTY; SQLSTATE: HY000
         *
         * Message: @@GLOBAL.GTID_PURGED can only be set when
         * @@GLOBAL.GTID_EXECUTED is empty.
         */
        case ER_CANT_SET_GTID_PURGED_WHEN_GTID_EXECUTED_IS_NOT_EMPTY = 1840;
        /**
         * Error number: 1841; Symbol: ER_CANT_SET_GTID_PURGED_WHEN_OWNED_GTIDS_IS_NOT_EMPTY; SQLSTATE: HY000
         *
         * Message: @@GLOBAL.GTID_PURGED can only be set when there are no
         * ongoing transactions (not even in other clients).
         */
        case ER_CANT_SET_GTID_PURGED_WHEN_OWNED_GTIDS_IS_NOT_EMPTY = 1841;
        /**
         * Error number: 1842; Symbol: ER_GTID_PURGED_WAS_CHANGED; SQLSTATE: HY000
         *
         * Message: @@GLOBAL.GTID_PURGED was changed from '%s' to '%s'.
         */
        case ER_GTID_PURGED_WAS_CHANGED = 1842;
        /**
         * Error number: 1843; Symbol: ER_GTID_EXECUTED_WAS_CHANGED; SQLSTATE: HY000
         *
         * Message: @@GLOBAL.GTID_EXECUTED was changed from '%s' to '%s'.
         */
        case ER_GTID_EXECUTED_WAS_CHANGED = 1843;
        /**
         * Error number: 1844; Symbol: ER_BINLOG_STMT_MODE_AND_NO_REPL_TABLES; SQLSTATE: HY000
         *
         * Message: Cannot execute statement: impossible to write to binary
         * log since BINLOG_FORMAT = STATEMENT, and both replicated and non
         * replicated tables are written to.
         */
        case ER_BINLOG_STMT_MODE_AND_NO_REPL_TABLES = 1844;
        /**
         * Error number: 1845; Symbol: ER_ALTER_OPERATION_NOT_SUPPORTED; SQLSTATE: 0A000
         *
         * Message: %s is not supported for this operation. Try %s.
         */
        case ER_ALTER_OPERATION_NOT_SUPPORTED = 1845;
        /**
         * Error number: 1846; Symbol: ER_ALTER_OPERATION_NOT_SUPPORTED_REASON; SQLSTATE: 0A000
         *
         * Message: %s is not supported. Reason: %s. Try %s.
         */
        case ER_ALTER_OPERATION_NOT_SUPPORTED_REASON = 1846;
        /**
         * Error number: 1847; Symbol: ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_COPY; SQLSTATE: HY000
         *
         * Message: COPY algorithm requires a lock
         */
        case ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_COPY = 1847;
        /**
         * Error number: 1848; Symbol: ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_PARTITION; SQLSTATE: HY000
         *
         * Message: Partition specific operations do not yet support
         * LOCK/ALGORITHM
         */
        case ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_PARTITION = 1848;
        /**
         * Error number: 1849; Symbol: ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_FK_RENAME; SQLSTATE: HY000
         *
         * Message: Columns participating in a foreign key are renamed
         */
        case ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_FK_RENAME = 1849;
        /**
         * Error number: 1850; Symbol: ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_COLUMN_TYPE; SQLSTATE: HY000
         *
         * Message: Cannot change column type INPLACE
         */
        case ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_COLUMN_TYPE = 1850;
        /**
         * Error number: 1851; Symbol: ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_FK_CHECK; SQLSTATE: HY000
         *
         * Message: Adding foreign keys needs foreign_key_checks=OFF
         */
        case ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_FK_CHECK = 1851;
        /**
         * Error number: 1853; Symbol: ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_NOPK; SQLSTATE: HY000
         *
         * Message: Dropping a primary key is not allowed without also adding
         * a new primary key
         */
        case ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_NOPK = 1853;
        /**
         * Error number: 1854; Symbol: ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_AUTOINC; SQLSTATE: HY000
         *
         * Message: Adding an auto-increment column requires a lock
         */
        case ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_AUTOINC = 1854;
        /**
         * Error number: 1855; Symbol: ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_HIDDEN_FTS; SQLSTATE: HY000
         *
         * Message: Cannot replace hidden FTS_DOC_ID with a user-visible one
         */
        case ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_HIDDEN_FTS = 1855;
        /**
         * Error number: 1856; Symbol: ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_CHANGE_FTS; SQLSTATE: HY000
         *
         * Message: Cannot drop or rename FTS_DOC_ID
         */
        case ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_CHANGE_FTS = 1856;
        /**
         * Error number: 1857; Symbol: ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_FTS; SQLSTATE: HY000
         *
         * Message: Fulltext index creation requires a lock
         */
        case ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_FTS = 1857;
        /**
         * Error number: 1859; Symbol: ER_DUP_UNKNOWN_IN_INDEX; SQLSTATE: 23000
         *
         * Message: Duplicate entry for key '%s'
         */
        case ER_DUP_UNKNOWN_IN_INDEX = 1859;
        /**
         * Error number: 1860; Symbol: ER_IDENT_CAUSES_TOO_LONG_PATH; SQLSTATE: HY000
         *
         * Message: Long database name and identifier for object resulted in
         * path length exceeding %d characters. Path: '%s'.
         */
        case ER_IDENT_CAUSES_TOO_LONG_PATH = 1860;
        /**
         * Error number: 1861; Symbol: ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_NOT_NULL; SQLSTATE: HY000
         *
         * Message: cannot silently convert NULL values, as required in this
         * SQL_MODE
         */
        case ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_NOT_NULL = 1861;
        /**
         * Error number: 1862; Symbol: ER_MUST_CHANGE_PASSWORD_LOGIN; SQLSTATE: HY000
         *
         * Message: Your password has expired. To log in you must change it
         * using a client that supports expired passwords.
         */
        case ER_MUST_CHANGE_PASSWORD_LOGIN = 1862;
        /**
         * Error number: 1863; Symbol: ER_ROW_IN_WRONG_PARTITION; SQLSTATE: HY000
         *
         * Message: Found a row in wrong partition %s
         */
        case ER_ROW_IN_WRONG_PARTITION = 1863;
        /**
         * Error number: 1864; Symbol: ER_MTA_EVENT_BIGGER_PENDING_JOBS_SIZE_MAX; SQLSTATE: HY000
         *
         * Message: Cannot schedule event %s, relay-log name %s, position %s
         * to Worker thread because its size %lu exceeds %lu of
         * replica_pending_jobs_size_max.
         */
        case ER_MTA_EVENT_BIGGER_PENDING_JOBS_SIZE_MAX = 1864;
        /**
         * Error number: 1866; Symbol: ER_BINLOG_LOGICAL_CORRUPTION; SQLSTATE: HY000
         *
         * Message: The binary log file '%s' is logically corrupted: %s
         */
        case ER_BINLOG_LOGICAL_CORRUPTION = 1866;
        /**
         * Error number: 1867; Symbol: ER_WARN_PURGE_LOG_IN_USE; SQLSTATE: HY000
         *
         * Message: file %s was not purged because it was being read by %d
         * thread(s), purged only %d out of %d files.
         */
        case ER_WARN_PURGE_LOG_IN_USE = 1867;
        /**
         * Error number: 1868; Symbol: ER_WARN_PURGE_LOG_IS_ACTIVE; SQLSTATE: HY000
         *
         * Message: file %s was not purged because it is the active log file.
         */
        case ER_WARN_PURGE_LOG_IS_ACTIVE = 1868;
        /**
         * Error number: 1869; Symbol: ER_AUTO_INCREMENT_CONFLICT; SQLSTATE: HY000
         *
         * Message: Auto-increment value in UPDATE conflicts with internally
         * generated values
         */
        case ER_AUTO_INCREMENT_CONFLICT = 1869;
        /**
         * Error number: 1870; Symbol: WARN_ON_BLOCKHOLE_IN_RBR; SQLSTATE: HY000
         *
         * Message: Row events are not logged for %s statements that modify
         * BLACKHOLE tables in row format. Table(s): '%s'
         */
        case WARN_ON_BLOCKHOLE_IN_RBR = 1870;
        /**
         * Error number: 1871; Symbol: ER_REPLICA_CM_INIT_REPOSITORY; SQLSTATE: HY000
         *
         * Message: Replica failed to initialize connection metadata
         * structure from the repository
         */
        case ER_REPLICA_CM_INIT_REPOSITORY = 1871;
        /**
         * Error number: 1872; Symbol: ER_REPLICA_AM_INIT_REPOSITORY; SQLSTATE: HY000
         *
         * Message: Replica failed to initialize applier metadata structure
         * from the repository
         */
        case ER_REPLICA_AM_INIT_REPOSITORY = 1872;
        /**
         * Error number: 1873; Symbol: ER_ACCESS_DENIED_CHANGE_USER_ERROR; SQLSTATE: 28000
         *
         * Message: Access denied trying to change to user '%s'@'%s' (using
         * password: %s). Disconnecting.
         */
        case ER_ACCESS_DENIED_CHANGE_USER_ERROR = 1873;
        /**
         * Error number: 1874; Symbol: ER_INNODB_READ_ONLY; SQLSTATE: HY000
         *
         * Message: InnoDB is in read only mode.
         */
        case ER_INNODB_READ_ONLY = 1874;
        /**
         * Error number: 1875; Symbol: ER_STOP_REPLICA_SQL_THREAD_TIMEOUT; SQLSTATE: HY000
         *
         * Message: STOP REPLICA command execution is incomplete: Replica SQL
         * thread got the stop signal, thread is busy, SQL thread will stop
         * once the current task is complete.
         */
        case ER_STOP_REPLICA_SQL_THREAD_TIMEOUT = 1875;
        /**
         * Error number: 1876; Symbol: ER_STOP_REPLICA_IO_THREAD_TIMEOUT; SQLSTATE: HY000
         *
         * Message: STOP REPLICA command execution is incomplete: Replica IO
         * thread got the stop signal, thread is busy, IO thread will stop
         * once the current task is complete.
         */
        case ER_STOP_REPLICA_IO_THREAD_TIMEOUT = 1876;
        /**
         * Error number: 1877; Symbol: ER_TABLE_CORRUPT; SQLSTATE: HY000
         *
         * Message: Operation cannot be performed. The table '%s.%s' is
         * missing, corrupt or contains bad data.
         */
        case ER_TABLE_CORRUPT = 1877;
        /**
         * Error number: 1878; Symbol: ER_TEMP_FILE_WRITE_FAILURE; SQLSTATE: HY000
         *
         * Message: Temporary file write failure.
         */
        case ER_TEMP_FILE_WRITE_FAILURE = 1878;
        /**
         * Error number: 1879; Symbol: ER_INNODB_FT_AUX_NOT_HEX_ID; SQLSTATE: HY000
         *
         * Message: Upgrade index name failed, please use create index(alter
         * table) algorithm copy to rebuild index.
         */
        case ER_INNODB_FT_AUX_NOT_HEX_ID = 1879;
        /**
         * Error number: 1880; Symbol: ER_OLD_TEMPORALS_UPGRADED; SQLSTATE: HY000
         *
         * Message: TIME/TIMESTAMP/DATETIME columns of old format have been
         * upgraded to the new format.
         */
        case ER_OLD_TEMPORALS_UPGRADED = 1880;
        /**
         * Error number: 1881; Symbol: ER_INNODB_FORCED_RECOVERY; SQLSTATE: HY000
         *
         * Message: Operation not allowed when innodb_force_recovery > 0.
         */
        case ER_INNODB_FORCED_RECOVERY = 1881;
        /**
         * Error number: 1882; Symbol: ER_AES_INVALID_IV; SQLSTATE: HY000
         *
         * Message: The initialization vector supplied to %s is too short.
         * Must be at least %d bytes long
         */
        case ER_AES_INVALID_IV = 1882;
        /**
         * Error number: 1883; Symbol: ER_PLUGIN_CANNOT_BE_UNINSTALLED; SQLSTATE: HY000
         *
         * Message: Plugin '%s' cannot be uninstalled now. %s
         */
        case ER_PLUGIN_CANNOT_BE_UNINSTALLED = 1883;
        /**
         * Error number: 1884; Symbol: ER_GTID_UNSAFE_BINLOG_SPLITTABLE_STATEMENT_AND_ASSIGNED_GTID; SQLSTATE: HY000
         *
         * Message: Cannot execute statement because it needs to be written
         * to the binary log as multiple statements, and this is not allowed
         * when @@SESSION.GTID_NEXT == 'UUID:NUMBER'.
         */
        case ER_GTID_UNSAFE_BINLOG_SPLITTABLE_STATEMENT_AND_ASSIGNED_GTID = 1884;
        /**
         * Error number: 1885; Symbol: ER_REPLICA_HAS_MORE_GTIDS_THAN_SOURCE; SQLSTATE: HY000
         *
         * Message: Replica has more GTIDs than the source has, using the
         * source's SERVER_UUID. This may indicate that the the last binary
         * log file was truncated or lost, e.g., after a power failure when
         * sync_binlog != 1. The source may have rolled back transactions
         * that were already replicated to the replica. Replicate any
         * transactions that source has rolled back from replica to source; and/or commit empty transactions on source to account for
         * transactions that have been committed on source but are not
         * included in GTID_EXECUTED.
         */
        case ER_REPLICA_HAS_MORE_GTIDS_THAN_SOURCE = 1885;
        /**
         * Error number: 1886; Symbol: ER_MISSING_KEY; SQLSTATE: HY000
         *
         * Message: The table '%s.%s' does not have the necessary key(s)
         * defined on it. Please check the table definition and create
         * index(s) accordingly.
         */
        case ER_MISSING_KEY = 1886;
        /**
         * Error number: 1887; Symbol: WARN_NAMED_PIPE_ACCESS_EVERYONE; SQLSTATE: HY000
         *
         * Message: Setting named_pipe_full_access_group='%s' is insecure.
         * Consider using a Windows group with fewer members.
         */
        case WARN_NAMED_PIPE_ACCESS_EVERYONE = 1887;
        /**
         * Error number: 3000; Symbol: ER_FILE_CORRUPT; SQLSTATE: HY000
         *
         * Message: File %s is corrupted
         */
        case ER_FILE_CORRUPT = 3000;
        /**
         * Error number: 3001; Symbol: ER_ERROR_ON_SOURCE; SQLSTATE: HY000
         *
         * Message: Query partially completed on the source (error on source: %d) and was aborted. There is a chance that your source is
         * inconsistent at this point. If you are sure that your source is
         * ok, run this query manually on the replica and then restart the
         * replica with SET GLOBAL SQL_REPLICA_SKIP_COUNTER=1; START
         * REPLICA;. Query:'%s'
         */
        case ER_ERROR_ON_SOURCE = 3001;
        /**
         * Error number: 3003; Symbol: ER_STORAGE_ENGINE_NOT_LOADED; SQLSTATE: HY000
         *
         * Message: Storage engine for table '%s'.'%s' is not loaded.
         */
        case ER_STORAGE_ENGINE_NOT_LOADED = 3003;
        /**
         * Error number: 3004; Symbol: ER_GET_STACKED_DA_WITHOUT_ACTIVE_HANDLER; SQLSTATE: 0Z002
         *
         * Message: GET STACKED DIAGNOSTICS when handler not active
         */
        case ER_GET_STACKED_DA_WITHOUT_ACTIVE_HANDLER = 3004;
        /**
         * Error number: 3005; Symbol: ER_WARN_LEGACY_SYNTAX_CONVERTED; SQLSTATE: HY000
         *
         * Message: %s is no longer supported. The statement was converted to
         * %s.
         */
        case ER_WARN_LEGACY_SYNTAX_CONVERTED = 3005;
        /**
         * Error number: 3006; Symbol: ER_BINLOG_UNSAFE_FULLTEXT_PLUGIN; SQLSTATE: HY000
         *
         * Message: Statement is unsafe because it uses a fulltext parser
         * plugin which may not return the same value on the replica.
         */
        case ER_BINLOG_UNSAFE_FULLTEXT_PLUGIN = 3006;
        /**
         * Error number: 3007; Symbol: ER_CANNOT_DISCARD_TEMPORARY_TABLE; SQLSTATE: HY000
         *
         * Message: Cannot DISCARD/IMPORT tablespace associated with
         * temporary table
         */
        case ER_CANNOT_DISCARD_TEMPORARY_TABLE = 3007;
        /**
         * Error number: 3008; Symbol: ER_FK_DEPTH_EXCEEDED; SQLSTATE: HY000
         *
         * Message: Foreign key cascade delete/update exceeds max depth of
         * %d.
         */
        case ER_FK_DEPTH_EXCEEDED = 3008;
        /**
         * Error number: 3009; Symbol: ER_COL_COUNT_DOESNT_MATCH_PLEASE_UPDATE_V2; SQLSTATE: HY000
         *
         * Message: The column count of %s.%s is wrong. Expected %d, found
         * %d. Created with MySQL %d, now running %d. Please perform the
         * MySQL upgrade procedure.
         */
        case ER_COL_COUNT_DOESNT_MATCH_PLEASE_UPDATE_V2 = 3009;
        /**
         * Error number: 3010; Symbol: ER_WARN_TRIGGER_DOESNT_HAVE_CREATED; SQLSTATE: HY000
         *
         * Message: Trigger %s.%s.%s does not have CREATED attribute.
         */
        case ER_WARN_TRIGGER_DOESNT_HAVE_CREATED = 3010;
        /**
         * Error number: 3011; Symbol: ER_REFERENCED_TRG_DOES_NOT_EXIST; SQLSTATE: HY000
         *
         * Message: Referenced trigger '%s' for the given action time and
         * event type does not exist.
         */
        case ER_REFERENCED_TRG_DOES_NOT_EXIST = 3011;
        /**
         * Error number: 3012; Symbol: ER_EXPLAIN_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: EXPLAIN FOR CONNECTION command is supported only for
         * SELECT/UPDATE/INSERT/DELETE/REPLACE
         */
        case ER_EXPLAIN_NOT_SUPPORTED = 3012;
        /**
         * Error number: 3013; Symbol: ER_INVALID_FIELD_SIZE; SQLSTATE: HY000
         *
         * Message: Invalid size for column '%s'.
         */
        case ER_INVALID_FIELD_SIZE = 3013;
        /**
         * Error number: 3014; Symbol: ER_MISSING_HA_CREATE_OPTION; SQLSTATE: HY000
         *
         * Message: Table storage engine '%s' found required create option
         * missing
         */
        case ER_MISSING_HA_CREATE_OPTION = 3014;
        /**
         * Error number: 3015; Symbol: ER_ENGINE_OUT_OF_MEMORY; SQLSTATE: HY000
         *
         * Message: Out of memory in storage engine '%s'.
         */
        case ER_ENGINE_OUT_OF_MEMORY = 3015;
        /**
         * Error number: 3016; Symbol: ER_PASSWORD_EXPIRE_ANONYMOUS_USER; SQLSTATE: HY000
         *
         * Message: The password for anonymous user cannot be expired.
         */
        case ER_PASSWORD_EXPIRE_ANONYMOUS_USER = 3016;
        /**
         * Error number: 3017; Symbol: ER_REPLICA_SQL_THREAD_MUST_STOP; SQLSTATE: HY000
         *
         * Message: This operation cannot be performed with a running replica
         * sql thread; run STOP REPLICA SQL_THREAD first
         */
        case ER_REPLICA_SQL_THREAD_MUST_STOP = 3017;
        /**
         * Error number: 3018; Symbol: ER_NO_FT_MATERIALIZED_SUBQUERY; SQLSTATE: HY000
         *
         * Message: Cannot create FULLTEXT index on materialized subquery
         */
        case ER_NO_FT_MATERIALIZED_SUBQUERY = 3018;
        /**
         * Error number: 3019; Symbol: ER_INNODB_UNDO_LOG_FULL; SQLSTATE: HY000
         *
         * Message: Undo Log error: %s
         */
        case ER_INNODB_UNDO_LOG_FULL = 3019;
        /**
         * Error number: 3020; Symbol: ER_INVALID_ARGUMENT_FOR_LOGARITHM; SQLSTATE: 2201E
         *
         * Message: Invalid argument for logarithm
         */
        case ER_INVALID_ARGUMENT_FOR_LOGARITHM = 3020;
        /**
         * Error number: 3021; Symbol: ER_REPLICA_CHANNEL_IO_THREAD_MUST_STOP; SQLSTATE: HY000
         *
         * Message: This operation cannot be performed with a running replica
         * io thread; run STOP REPLICA IO_THREAD FOR CHANNEL '%s' first.
         */
        case ER_REPLICA_CHANNEL_IO_THREAD_MUST_STOP = 3021;
        /**
         * Error number: 3022; Symbol: ER_WARN_OPEN_TEMP_TABLES_MUST_BE_ZERO; SQLSTATE: HY000
         *
         * Message: This operation may not be safe when the replica has
         * temporary tables. The tables will be kept open until the server
         * restarts or until the tables are deleted by any replicated DROP
         * statement. Suggest to wait until replica_open_temp_tables = 0.
         */
        case ER_WARN_OPEN_TEMP_TABLES_MUST_BE_ZERO = 3022;
        /**
         * Error number: 3023; Symbol: ER_WARN_ONLY_SOURCE_LOG_FILE_NO_POS; SQLSTATE: HY000
         *
         * Message: CHANGE REPLICATION SOURCE TO with a SOURCE_LOG_FILE
         * clause but no SOURCE_LOG_POS clause may not be safe. The old
         * position value may not be valid for the new binary log file.
         */
        case ER_WARN_ONLY_SOURCE_LOG_FILE_NO_POS = 3023;
        /**
         * Error number: 3024; Symbol: ER_QUERY_TIMEOUT; SQLSTATE: HY000
         *
         * Message: Query execution was interrupted, maximum statement
         * execution time exceeded
         */
        case ER_QUERY_TIMEOUT = 3024;
        /**
         * Error number: 3025; Symbol: ER_NON_RO_SELECT_DISABLE_TIMER; SQLSTATE: HY000
         *
         * Message: Select is not a read only statement, disabling timer
         */
        case ER_NON_RO_SELECT_DISABLE_TIMER = 3025;
        /**
         * Error number: 3026; Symbol: ER_DUP_LIST_ENTRY; SQLSTATE: HY000
         *
         * Message: Duplicate entry '%s'.
         */
        case ER_DUP_LIST_ENTRY = 3026;
        /**
         * Error number: 3028; Symbol: ER_AGGREGATE_ORDER_FOR_UNION; SQLSTATE: HY000
         *
         * Message: Expression #%u of ORDER BY contains aggregate function
         * and applies to a UNION, EXCEPT or INTERSECT
         */
        case ER_AGGREGATE_ORDER_FOR_UNION = 3028;
        /**
         * Error number: 3029; Symbol: ER_AGGREGATE_ORDER_NON_AGG_QUERY; SQLSTATE: HY000
         *
         * Message: Expression #%u of ORDER BY contains aggregate function
         * and applies to the result of a non-aggregated query
         */
        case ER_AGGREGATE_ORDER_NON_AGG_QUERY = 3029;
        /**
         * Error number: 3030; Symbol: ER_REPLICA_WORKER_STOPPED_PREVIOUS_THD_ERROR; SQLSTATE: HY000
         *
         * Message: Replica worker has stopped after at least one previous
         * worker encountered an error when replica-preserve-commit-order was
         * enabled. To preserve commit order, the last transaction executed
         * by this thread has not been committed. When restarting the replica
         * after fixing any failed threads, you should fix this worker as
         * well.
         */
        case ER_REPLICA_WORKER_STOPPED_PREVIOUS_THD_ERROR = 3030;
        /**
         * Error number: 3032; Symbol: ER_SERVER_OFFLINE_MODE; SQLSTATE: HY000
         *
         * Message: The server is currently in offline mode
         */
        case ER_SERVER_OFFLINE_MODE = 3032;
        /**
         * Error number: 3033; Symbol: ER_GIS_DIFFERENT_SRIDS; SQLSTATE: HY000
         *
         * Message: Binary geometry function %s given two geometries of
         * different srids: %u and %u, which should have been identical.
         *
         * Geometry values passed as arguments to spatial functions must have
         * the same SRID value.
         */
        case ER_GIS_DIFFERENT_SRIDS = 3033;
        /**
         * Error number: 3034; Symbol: ER_GIS_UNSUPPORTED_ARGUMENT; SQLSTATE: HY000
         *
         * Message: Calling geometry function %s with unsupported types of
         * arguments.
         *
         * A spatial function was called with a combination of argument types
         * that the function does not support.
         */
        case ER_GIS_UNSUPPORTED_ARGUMENT = 3034;
        /**
         * Error number: 3035; Symbol: ER_GIS_UNKNOWN_ERROR; SQLSTATE: HY000
         *
         * Message: Unknown GIS error occurred in function %s.
         */
        case ER_GIS_UNKNOWN_ERROR = 3035;
        /**
         * Error number: 3036; Symbol: ER_GIS_UNKNOWN_EXCEPTION; SQLSTATE: HY000
         *
         * Message: Unknown exception caught in GIS function %s.
         */
        case ER_GIS_UNKNOWN_EXCEPTION = 3036;
        /**
         * Error number: 3037; Symbol: ER_GIS_INVALID_DATA; SQLSTATE: 22023
         *
         * Message: Invalid GIS data provided to function %s.
         *
         * A spatial function was called with an argument not recognized as a
         * valid geometry value.
         */
        case ER_GIS_INVALID_DATA = 3037;
        /**
         * Error number: 3038; Symbol: ER_BOOST_GEOMETRY_EMPTY_INPUT_EXCEPTION; SQLSTATE: HY000
         *
         * Message: The geometry has no data in function %s.
         */
        case ER_BOOST_GEOMETRY_EMPTY_INPUT_EXCEPTION = 3038;
        /**
         * Error number: 3039; Symbol: ER_BOOST_GEOMETRY_CENTROID_EXCEPTION; SQLSTATE: HY000
         *
         * Message: Unable to calculate centroid because geometry is empty in
         * function %s.
         */
        case ER_BOOST_GEOMETRY_CENTROID_EXCEPTION = 3039;
        /**
         * Error number: 3040; Symbol: ER_BOOST_GEOMETRY_OVERLAY_INVALID_INPUT_EXCEPTION; SQLSTATE: HY000
         *
         * Message: Geometry overlay calculation error: geometry data is
         * invalid in function %s.
         */
        case ER_BOOST_GEOMETRY_OVERLAY_INVALID_INPUT_EXCEPTION = 3040;
        /**
         * Error number: 3041; Symbol: ER_BOOST_GEOMETRY_TURN_INFO_EXCEPTION; SQLSTATE: HY000
         *
         * Message: Geometry turn info calculation error: geometry data is
         * invalid in function %s.
         */
        case ER_BOOST_GEOMETRY_TURN_INFO_EXCEPTION = 3041;
        /**
         * Error number: 3042; Symbol: ER_BOOST_GEOMETRY_SELF_INTERSECTION_POINT_EXCEPTION; SQLSTATE: HY000
         *
         * Message: Analysis procedures of intersection points interrupted
         * unexpectedly in function %s.
         */
        case ER_BOOST_GEOMETRY_SELF_INTERSECTION_POINT_EXCEPTION = 3042;
        /**
         * Error number: 3043; Symbol: ER_BOOST_GEOMETRY_UNKNOWN_EXCEPTION; SQLSTATE: HY000
         *
         * Message: Unknown exception thrown in function %s.
         */
        case ER_BOOST_GEOMETRY_UNKNOWN_EXCEPTION = 3043;
        /**
         * Error number: 3044; Symbol: ER_STD_BAD_ALLOC_ERROR; SQLSTATE: HY000
         *
         * Message: Memory allocation error: %s in function %s.
         */
        case ER_STD_BAD_ALLOC_ERROR = 3044;
        /**
         * Error number: 3045; Symbol: ER_STD_DOMAIN_ERROR; SQLSTATE: HY000
         *
         * Message: Domain error: %s in function %s.
         */
        case ER_STD_DOMAIN_ERROR = 3045;
        /**
         * Error number: 3046; Symbol: ER_STD_LENGTH_ERROR; SQLSTATE: HY000
         *
         * Message: Length error: %s in function %s.
         */
        case ER_STD_LENGTH_ERROR = 3046;
        /**
         * Error number: 3047; Symbol: ER_STD_INVALID_ARGUMENT; SQLSTATE: HY000
         *
         * Message: Invalid argument error: %s in function %s.
         */
        case ER_STD_INVALID_ARGUMENT = 3047;
        /**
         * Error number: 3048; Symbol: ER_STD_OUT_OF_RANGE_ERROR; SQLSTATE: HY000
         *
         * Message: Out of range error: %s in function %s.
         */
        case ER_STD_OUT_OF_RANGE_ERROR = 3048;
        /**
         * Error number: 3049; Symbol: ER_STD_OVERFLOW_ERROR; SQLSTATE: HY000
         *
         * Message: Overflow error: %s in function %s.
         */
        case ER_STD_OVERFLOW_ERROR = 3049;
        /**
         * Error number: 3050; Symbol: ER_STD_RANGE_ERROR; SQLSTATE: HY000
         *
         * Message: Range error: %s in function %s.
         */
        case ER_STD_RANGE_ERROR = 3050;
        /**
         * Error number: 3051; Symbol: ER_STD_UNDERFLOW_ERROR; SQLSTATE: HY000
         *
         * Message: Underflow error: %s in function %s.
         */
        case ER_STD_UNDERFLOW_ERROR = 3051;
        /**
         * Error number: 3052; Symbol: ER_STD_LOGIC_ERROR; SQLSTATE: HY000
         *
         * Message: Logic error: %s in function %s.
         */
        case ER_STD_LOGIC_ERROR = 3052;
        /**
         * Error number: 3053; Symbol: ER_STD_RUNTIME_ERROR; SQLSTATE: HY000
         *
         * Message: Runtime error: %s in function %s.
         */
        case ER_STD_RUNTIME_ERROR = 3053;
        /**
         * Error number: 3054; Symbol: ER_STD_UNKNOWN_EXCEPTION; SQLSTATE: HY000
         *
         * Message: Unknown exception: %s in function %s.
         */
        case ER_STD_UNKNOWN_EXCEPTION = 3054;
        /**
         * Error number: 3055; Symbol: ER_GIS_DATA_WRONG_ENDIANESS; SQLSTATE: HY000
         *
         * Message: Geometry byte string must be little endian.
         */
        case ER_GIS_DATA_WRONG_ENDIANESS = 3055;
        /**
         * Error number: 3056; Symbol: ER_CHANGE_SOURCE_PASSWORD_LENGTH; SQLSTATE: HY000
         *
         * Message: The password provided for the replication user exceeds
         * the maximum length of 32 characters
         */
        case ER_CHANGE_SOURCE_PASSWORD_LENGTH = 3056;
        /**
         * Error number: 3057; Symbol: ER_USER_LOCK_WRONG_NAME; SQLSTATE: 42000
         *
         * Message: Incorrect user-level lock name '%s'. The name is empty; NULL, or can not be expressed in the current character-set.
         */
        case ER_USER_LOCK_WRONG_NAME = 3057;
        /**
         * Error number: 3058; Symbol: ER_USER_LOCK_DEADLOCK; SQLSTATE: HY000
         *
         * Message: Deadlock found when trying to get user-level lock; try
         * rolling back transaction/releasing locks and restarting lock
         * acquisition.
         *
         * This error is returned when the metdata locking subsystem detects
         * a deadlock for an attempt to acquire a named lock with
         * GET_LOCK.
         */
        case ER_USER_LOCK_DEADLOCK = 3058;
        /**
         * Error number: 3059; Symbol: ER_REPLACE_INACCESSIBLE_ROWS; SQLSTATE: HY000
         *
         * Message: REPLACE cannot be executed as it requires deleting rows
         * that are not in the view
         */
        case ER_REPLACE_INACCESSIBLE_ROWS = 3059;
        /**
         * Error number: 3060; Symbol: ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_GIS; SQLSTATE: HY000
         *
         * Message: Do not support online operation on table with GIS index
         */
        case ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_GIS = 3060;
        /**
         * Error number: 3061; Symbol: ER_ILLEGAL_USER_VAR; SQLSTATE: 42000
         *
         * Message: User variable name '%s' is illegal
         */
        case ER_ILLEGAL_USER_VAR = 3061;
        /**
         * Error number: 3062; Symbol: ER_GTID_MODE_OFF; SQLSTATE: HY000
         *
         * Message: Cannot %s when GTID_MODE = OFF.
         */
        case ER_GTID_MODE_OFF = 3062;
        /**
         * Error number: 3064; Symbol: ER_INCORRECT_TYPE; SQLSTATE: HY000
         *
         * Message: Incorrect type for argument %s in function %s.
         */
        case ER_INCORRECT_TYPE = 3064;
        /**
         * Error number: 3065; Symbol: ER_FIELD_IN_ORDER_NOT_SELECT; SQLSTATE: HY000
         *
         * Message: Expression #%u of ORDER BY clause is not in SELECT list; references column '%s' which is not in SELECT list; this is
         * incompatible with %s
         */
        case ER_FIELD_IN_ORDER_NOT_SELECT = 3065;
        /**
         * Error number: 3066; Symbol: ER_AGGREGATE_IN_ORDER_NOT_SELECT; SQLSTATE: HY000
         *
         * Message: Expression #%u of ORDER BY clause is not in SELECT list; contains aggregate function; this is incompatible with %s
         */
        case ER_AGGREGATE_IN_ORDER_NOT_SELECT = 3066;
        /**
         * Error number: 3067; Symbol: ER_INVALID_RPL_WILD_TABLE_FILTER_PATTERN; SQLSTATE: HY000
         *
         * Message: Supplied filter list contains a value which is not in the
         * required format 'db_pattern.table_pattern'
         */
        case ER_INVALID_RPL_WILD_TABLE_FILTER_PATTERN = 3067;
        /**
         * Error number: 3068; Symbol: ER_NET_OK_PACKET_TOO_LARGE; SQLSTATE: 08S01
         *
         * Message: OK packet too large
         */
        case ER_NET_OK_PACKET_TOO_LARGE = 3068;
        /**
         * Error number: 3069; Symbol: ER_INVALID_JSON_DATA; SQLSTATE: HY000
         *
         * Message: Invalid JSON data provided to function %s: %s
         */
        case ER_INVALID_JSON_DATA = 3069;
        /**
         * Error number: 3070; Symbol: ER_INVALID_GEOJSON_MISSING_MEMBER; SQLSTATE: HY000
         *
         * Message: Invalid GeoJSON data provided to function %s: Missing
         * required member '%s'
         */
        case ER_INVALID_GEOJSON_MISSING_MEMBER = 3070;
        /**
         * Error number: 3071; Symbol: ER_INVALID_GEOJSON_WRONG_TYPE; SQLSTATE: HY000
         *
         * Message: Invalid GeoJSON data provided to function %s: Member '%s'
         * must be of type '%s'
         */
        case ER_INVALID_GEOJSON_WRONG_TYPE = 3071;
        /**
         * Error number: 3072; Symbol: ER_INVALID_GEOJSON_UNSPECIFIED; SQLSTATE: HY000
         *
         * Message: Invalid GeoJSON data provided to function %s
         */
        case ER_INVALID_GEOJSON_UNSPECIFIED = 3072;
        /**
         * Error number: 3073; Symbol: ER_DIMENSION_UNSUPPORTED; SQLSTATE: HY000
         *
         * Message: Unsupported number of coordinate dimensions in function
         * %s: Found %u, expected %u
         */
        case ER_DIMENSION_UNSUPPORTED = 3073;
        /**
         * Error number: 3074; Symbol: ER_REPLICA_CHANNEL_DOES_NOT_EXIST; SQLSTATE: HY000
         *
         * Message: Replica channel '%s' does not exist.
         */
        case ER_REPLICA_CHANNEL_DOES_NOT_EXIST = 3074;
        /**
         * Error number: 3076; Symbol: ER_REPLICA_CHANNEL_NAME_INVALID_OR_TOO_LONG; SQLSTATE: HY000
         *
         * Message: Couldn't create channel: Channel name is either invalid
         * or too long.
         */
        case ER_REPLICA_CHANNEL_NAME_INVALID_OR_TOO_LONG = 3076;
        /**
         * Error number: 3077; Symbol: ER_REPLICA_NEW_CHANNEL_WRONG_REPOSITORY; SQLSTATE: HY000
         *
         * Message: To have multiple channels, repository cannot be of type
         * FILE; Please check the repository configuration and convert them
         * to TABLE.
         */
        case ER_REPLICA_NEW_CHANNEL_WRONG_REPOSITORY = 3077;
        /**
         * Error number: 3079; Symbol: ER_REPLICA_MULTIPLE_CHANNELS_CMD; SQLSTATE: HY000
         *
         * Message: Multiple channels exist on the replica. Please provide
         * channel name as an argument.
         */
        case ER_REPLICA_MULTIPLE_CHANNELS_CMD = 3079;
        /**
         * Error number: 3080; Symbol: ER_REPLICA_MAX_CHANNELS_EXCEEDED; SQLSTATE: HY000
         *
         * Message: Maximum number of replication channels allowed exceeded.
         */
        case ER_REPLICA_MAX_CHANNELS_EXCEEDED = 3080;
        /**
         * Error number: 3081; Symbol: ER_REPLICA_CHANNEL_MUST_STOP; SQLSTATE: HY000
         *
         * Message: This operation cannot be performed with running
         * replication threads; run STOP REPLICA FOR CHANNEL '%s' first
         */
        case ER_REPLICA_CHANNEL_MUST_STOP = 3081;
        /**
         * Error number: 3082; Symbol: ER_REPLICA_CHANNEL_NOT_RUNNING; SQLSTATE: HY000
         *
         * Message: This operation requires running replication threads; configure replica and run START REPLICA FOR CHANNEL '%s'
         */
        case ER_REPLICA_CHANNEL_NOT_RUNNING = 3082;
        /**
         * Error number: 3083; Symbol: ER_REPLICA_CHANNEL_WAS_RUNNING; SQLSTATE: HY000
         *
         * Message: Replication thread(s) for channel '%s' are already
         * runnning.
         */
        case ER_REPLICA_CHANNEL_WAS_RUNNING = 3083;
        /**
         * Error number: 3084; Symbol: ER_REPLICA_CHANNEL_WAS_NOT_RUNNING; SQLSTATE: HY000
         *
         * Message: Replication thread(s) for channel '%s' are already
         * stopped.
         */
        case ER_REPLICA_CHANNEL_WAS_NOT_RUNNING = 3084;
        /**
         * Error number: 3085; Symbol: ER_REPLICA_CHANNEL_SQL_THREAD_MUST_STOP; SQLSTATE: HY000
         *
         * Message: This operation cannot be performed with a running replica
         * sql thread; run STOP REPLICA SQL_THREAD FOR CHANNEL '%s' first.
         */
        case ER_REPLICA_CHANNEL_SQL_THREAD_MUST_STOP = 3085;
        /**
         * Error number: 3086; Symbol: ER_REPLICA_CHANNEL_SQL_SKIP_COUNTER; SQLSTATE: HY000
         *
         * Message: When sql_replica_skip_counter > 0, it is not allowed
         * to start more than one SQL thread by using 'START REPLICA
         * [SQL_THREAD]'. Value of sql_replica_skip_counter can only be used
         * by one SQL thread at a time. Please use 'START REPLICA
         * [SQL_THREAD] FOR CHANNEL' to start the SQL thread which will use
         * the value of sql_replica_skip_counter.
         */
        case ER_REPLICA_CHANNEL_SQL_SKIP_COUNTER = 3086;
        /**
         * Error number: 3087; Symbol: ER_WRONG_FIELD_WITH_GROUP_V2; SQLSTATE: HY000
         *
         * Message: Expression #%u of %s is not in GROUP BY clause and
         * contains nonaggregated column '%s' which is not functionally
         * dependent on columns in GROUP BY clause; this is incompatible with
         * sql_mode=only_full_group_by
         */
        case ER_WRONG_FIELD_WITH_GROUP_V2 = 3087;
        /**
         * Error number: 3088; Symbol: ER_MIX_OF_GROUP_FUNC_AND_FIELDS_V2; SQLSTATE: HY000
         *
         * Message: In aggregated query without GROUP BY, expression #%u of
         * %s contains nonaggregated column '%s'; this is incompatible with
         * sql_mode=only_full_group_by
         */
        case ER_MIX_OF_GROUP_FUNC_AND_FIELDS_V2 = 3088;
        /**
         * Error number: 3089; Symbol: ER_WARN_DEPRECATED_SYSVAR_UPDATE; SQLSTATE: HY000
         *
         * Message: Updating '%s' is deprecated. It will be made read-only in
         * a future release.
         */
        case ER_WARN_DEPRECATED_SYSVAR_UPDATE = 3089;
        /**
         * Error number: 3090; Symbol: ER_WARN_DEPRECATED_SQLMODE; SQLSTATE: HY000
         *
         * Message: Changing sql mode '%s' is deprecated. It will be removed
         * in a future release.
         */
        case ER_WARN_DEPRECATED_SQLMODE = 3090;
        /**
         * Error number: 3091; Symbol: ER_CANNOT_LOG_PARTIAL_DROP_DATABASE_WITH_GTID; SQLSTATE: HY000
         *
         * Message: DROP DATABASE failed; some tables may have been dropped
         * but the database directory remains. The GTID has not been added to
         * GTID_EXECUTED and the statement was not written to the binary log.
         * Fix this as follows: (1) remove all files from the database
         * directory %s; (2) SET GTID_NEXT='%s'; (3) DROP DATABASE `%s`.
         */
        case ER_CANNOT_LOG_PARTIAL_DROP_DATABASE_WITH_GTID = 3091;
        /**
         * Error number: 3092; Symbol: ER_GROUP_REPLICATION_CONFIGURATION; SQLSTATE: HY000
         *
         * Message: The server is not configured properly to be an active
         * member of the group. Please see more details on error log.
         */
        case ER_GROUP_REPLICATION_CONFIGURATION = 3092;
        /**
         * Error number: 3093; Symbol: ER_GROUP_REPLICATION_RUNNING; SQLSTATE: HY000
         *
         * Message: The START GROUP_REPLICATION command failed since the
         * group is already running.
         */
        case ER_GROUP_REPLICATION_RUNNING = 3093;
        /**
         * Error number: 3094; Symbol: ER_GROUP_REPLICATION_APPLIER_INIT_ERROR; SQLSTATE: HY000
         *
         * Message: The START GROUP_REPLICATION command failed as the applier
         * module failed to start.
         */
        case ER_GROUP_REPLICATION_APPLIER_INIT_ERROR = 3094;
        /**
         * Error number: 3095; Symbol: ER_GROUP_REPLICATION_STOP_APPLIER_THREAD_TIMEOUT; SQLSTATE: HY000
         *
         * Message: The STOP GROUP_REPLICATION command execution is
         * incomplete: The applier thread got the stop signal while it was
         * busy. The applier thread will stop once the current task is
         * complete.
         */
        case ER_GROUP_REPLICATION_STOP_APPLIER_THREAD_TIMEOUT = 3095;
        /**
         * Error number: 3096; Symbol: ER_GROUP_REPLICATION_COMMUNICATION_LAYER_SESSION_ERROR; SQLSTATE: HY000
         *
         * Message: The START GROUP_REPLICATION command failed as there was
         * an error when initializing the group communication layer.
         */
        case ER_GROUP_REPLICATION_COMMUNICATION_LAYER_SESSION_ERROR = 3096;
        /**
         * Error number: 3097; Symbol: ER_GROUP_REPLICATION_COMMUNICATION_LAYER_JOIN_ERROR; SQLSTATE: HY000
         *
         * Message: The START GROUP_REPLICATION command failed as there was
         * an error when joining the communication group.
         */
        case ER_GROUP_REPLICATION_COMMUNICATION_LAYER_JOIN_ERROR = 3097;
        /**
         * Error number: 3098; Symbol: ER_BEFORE_DML_VALIDATION_ERROR; SQLSTATE: HY000
         *
         * Message: The table does not comply with the requirements by an
         * external plugin.
         */
        case ER_BEFORE_DML_VALIDATION_ERROR = 3098;
        /**
         * Error number: 3099; Symbol: ER_PREVENTS_VARIABLE_WITHOUT_RBR; SQLSTATE: HY000
         *
         * Message: Cannot change the value of variable %s without binary log
         * format as ROW.
         */
        case ER_PREVENTS_VARIABLE_WITHOUT_RBR = 3099;
        /**
         * Error number: 3100; Symbol: ER_RUN_HOOK_ERROR; SQLSTATE: HY000
         *
         * Message: Error on observer while running replication hook '%s'.
         */
        case ER_RUN_HOOK_ERROR = 3100;
        /**
         * Error number: 3101; Symbol: ER_TRANSACTION_ROLLBACK_DURING_COMMIT; SQLSTATE: 40000
         *
         * Message: Plugin instructed the server to rollback the current
         * transaction.
         *
         * When using Group Replication, this means that a transaction failed
         * the group certification process, due to one or more members
         * detecting a potential conflict, and was thus rolled back. See
         * Group Replication.
         */
        case ER_TRANSACTION_ROLLBACK_DURING_COMMIT = 3101;
        /**
         * Error number: 3102; Symbol: ER_GENERATED_COLUMN_FUNCTION_IS_NOT_ALLOWED; SQLSTATE: HY000
         *
         * Message: Expression of generated column '%s' contains a disallowed
         * function.
         */
        case ER_GENERATED_COLUMN_FUNCTION_IS_NOT_ALLOWED = 3102;
        /**
         * Error number: 3103; Symbol: ER_UNSUPPORTED_ALTER_INPLACE_ON_VIRTUAL_COLUMN; SQLSTATE: HY000
         *
         * Message: INPLACE ADD or DROP of virtual columns cannot be combined
         * with other ALTER TABLE actions
         */
        case ER_UNSUPPORTED_ALTER_INPLACE_ON_VIRTUAL_COLUMN = 3103;
        /**
         * Error number: 3104; Symbol: ER_WRONG_FK_OPTION_FOR_GENERATED_COLUMN; SQLSTATE: HY000
         *
         * Message: Cannot define foreign key with %s clause on a generated
         * column.
         */
        case ER_WRONG_FK_OPTION_FOR_GENERATED_COLUMN = 3104;
        /**
         * Error number: 3105; Symbol: ER_NON_DEFAULT_VALUE_FOR_GENERATED_COLUMN; SQLSTATE: HY000
         *
         * Message: The value specified for generated column '%s' in table
         * '%s' is not allowed.
         */
        case ER_NON_DEFAULT_VALUE_FOR_GENERATED_COLUMN = 3105;
        /**
         * Error number: 3106; Symbol: ER_UNSUPPORTED_ACTION_ON_GENERATED_COLUMN; SQLSTATE: HY000
         *
         * Message: '%s' is not supported for generated columns.
         */
        case ER_UNSUPPORTED_ACTION_ON_GENERATED_COLUMN = 3106;
        /**
         * Error number: 3107; Symbol: ER_GENERATED_COLUMN_NON_PRIOR; SQLSTATE: HY000
         *
         * Message: Generated column can refer only to generated columns
         * defined prior to it.
         *
         * To address this issue, change the table definition to define each
         * generated column later than any generated columns to which it
         * refers.
         */
        case ER_GENERATED_COLUMN_NON_PRIOR = 3107;
        /**
         * Error number: 3108; Symbol: ER_DEPENDENT_BY_GENERATED_COLUMN; SQLSTATE: HY000
         *
         * Message: Column '%s' has a generated column dependency.
         *
         * You cannot drop or rename a generated column if another column
         * refers to it. You must either drop those columns as well, or
         * redefine them not to refer to the generated column.
         */
        case ER_DEPENDENT_BY_GENERATED_COLUMN = 3108;
        /**
         * Error number: 3109; Symbol: ER_GENERATED_COLUMN_REF_AUTO_INC; SQLSTATE: HY000
         *
         * Message: Generated column '%s' cannot refer to auto-increment
         * column.
         */
        case ER_GENERATED_COLUMN_REF_AUTO_INC = 3109;
        /**
         * Error number: 3110; Symbol: ER_FEATURE_NOT_AVAILABLE; SQLSTATE: HY000
         *
         * Message: The '%s' feature is not available; you need to remove
         * '%s' or use MySQL built with '%s'
         */
        case ER_FEATURE_NOT_AVAILABLE = 3110;
        /**
         * Error number: 3111; Symbol: ER_CANT_SET_GTID_MODE; SQLSTATE: HY000
         *
         * Message: SET @@GLOBAL.GTID_MODE = %s is not allowed because %s.
         */
        case ER_CANT_SET_GTID_MODE = 3111;
        /**
         * Error number: 3112; Symbol: ER_CANT_USE_AUTO_POSITION_WITH_GTID_MODE_OFF; SQLSTATE: HY000
         *
         * Message: The replication receiver thread%s cannot start in
         * AUTO_POSITION mode: this server uses @@GLOBAL.GTID_MODE = OFF.
         */
        case ER_CANT_USE_AUTO_POSITION_WITH_GTID_MODE_OFF = 3112;
        /**
         * Error number: 3116; Symbol: ER_CANT_ENFORCE_GTID_CONSISTENCY_WITH_ONGOING_GTID_VIOLATING_TX; SQLSTATE: HY000
         *
         * Message: Cannot set ENFORCE_GTID_CONSISTENCY = ON because there
         * are ongoing transactions that violate GTID consistency.
         *
         * ER_CANT_SET_ENFORCE_GTID_CONSISTENCY_ON_WITH_ONGOING_GTID_VIOLATING_TRANSACTIONS
         * was renamed to
         * ER_CANT_ENFORCE_GTID_CONSISTENCY_WITH_ONGOING_GTID_VIOLATING_TX.
         */
        case ER_CANT_ENFORCE_GTID_CONSISTENCY_WITH_ONGOING_GTID_VIOLATING_TX = 3116;
        /**
         * Error number: 3117; Symbol: ER_ENFORCE_GTID_CONSISTENCY_WARN_WITH_ONGOING_GTID_VIOLATING_TX; SQLSTATE: HY000
         *
         * Message: There are ongoing transactions that violate GTID
         * consistency.
         *
         * ER_SET_ENFORCE_GTID_CONSISTENCY_WARN_WITH_ONGOING_GTID_VIOLATING_TRANSACTIONS
         * was renamed to
         * ER_ENFORCE_GTID_CONSISTENCY_WARN_WITH_ONGOING_GTID_VIOLATING_TX.
         */
        case ER_ENFORCE_GTID_CONSISTENCY_WARN_WITH_ONGOING_GTID_VIOLATING_TX = 3117;
        /**
         * Error number: 3118; Symbol: ER_ACCOUNT_HAS_BEEN_LOCKED; SQLSTATE: HY000
         *
         * Message: Access denied for user '%s'@'%s'. Account is locked.
         *
         * The account was locked with
         * CREATE USER ...
         * ACCOUNT LOCK or
         * ALTER USER ... ACCOUNT
         * LOCK. An administrator can unlock it with
         * ALTER USER ... ACCOUNT
         * UNLOCK.
         */
        case ER_ACCOUNT_HAS_BEEN_LOCKED = 3118;
        /**
         * Error number: 3119; Symbol: ER_WRONG_TABLESPACE_NAME; SQLSTATE: 42000
         *
         * Message: Incorrect tablespace name `%s`
         */
        case ER_WRONG_TABLESPACE_NAME = 3119;
        /**
         * Error number: 3120; Symbol: ER_TABLESPACE_IS_NOT_EMPTY; SQLSTATE: HY000
         *
         * Message: Tablespace `%s` is not empty.
         */
        case ER_TABLESPACE_IS_NOT_EMPTY = 3120;
        /**
         * Error number: 3121; Symbol: ER_WRONG_FILE_NAME; SQLSTATE: HY000
         *
         * Message: Incorrect File Name '%s'.
         */
        case ER_WRONG_FILE_NAME = 3121;
        /**
         * Error number: 3122; Symbol: ER_BOOST_GEOMETRY_INCONSISTENT_TURNS_EXCEPTION; SQLSTATE: HY000
         *
         * Message: Inconsistent intersection points.
         */
        case ER_BOOST_GEOMETRY_INCONSISTENT_TURNS_EXCEPTION = 3122;
        /**
         * Error number: 3123; Symbol: ER_WARN_OPTIMIZER_HINT_SYNTAX_ERROR; SQLSTATE: HY000
         *
         * Message: Optimizer hint syntax error
         */
        case ER_WARN_OPTIMIZER_HINT_SYNTAX_ERROR = 3123;
        /**
         * Error number: 3124; Symbol: ER_WARN_BAD_MAX_EXECUTION_TIME; SQLSTATE: HY000
         *
         * Message: Unsupported MAX_EXECUTION_TIME
         */
        case ER_WARN_BAD_MAX_EXECUTION_TIME = 3124;
        /**
         * Error number: 3125; Symbol: ER_WARN_UNSUPPORTED_MAX_EXECUTION_TIME; SQLSTATE: HY000
         *
         * Message: MAX_EXECUTION_TIME hint is supported by top-level
         * standalone SELECT statements only
         *
         * The MAX_EXECUTION_TIME optimizer hint is
         * supported only for SELECT
         * statements.
         */
        case ER_WARN_UNSUPPORTED_MAX_EXECUTION_TIME = 3125;
        /**
         * Error number: 3126; Symbol: ER_WARN_CONFLICTING_HINT; SQLSTATE: HY000
         *
         * Message: Hint %s is ignored as conflicting/duplicated
         */
        case ER_WARN_CONFLICTING_HINT = 3126;
        /**
         * Error number: 3127; Symbol: ER_WARN_UNKNOWN_QB_NAME; SQLSTATE: HY000
         *
         * Message: Query block name %s is not found for %s hint
         */
        case ER_WARN_UNKNOWN_QB_NAME = 3127;
        /**
         * Error number: 3128; Symbol: ER_UNRESOLVED_HINT_NAME; SQLSTATE: HY000
         *
         * Message: Unresolved name %s for %s hint
         */
        case ER_UNRESOLVED_HINT_NAME = 3128;
        /**
         * Error number: 3129; Symbol: ER_WARN_ON_MODIFYING_GTID_EXECUTED_TABLE; SQLSTATE: HY000
         *
         * Message: Please do not modify the %s table. This is a mysql
         * internal system table to store GTIDs for committed transactions.
         * Modifying it can lead to an inconsistent GTID state.
         */
        case ER_WARN_ON_MODIFYING_GTID_EXECUTED_TABLE = 3129;
        /**
         * Error number: 3130; Symbol: ER_PLUGGABLE_PROTOCOL_COMMAND_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Command not supported by pluggable protocols
         */
        case ER_PLUGGABLE_PROTOCOL_COMMAND_NOT_SUPPORTED = 3130;
        /**
         * Error number: 3131; Symbol: ER_LOCKING_SERVICE_WRONG_NAME; SQLSTATE: 42000
         *
         * Message: Incorrect locking service lock name '%s'.
         *
         * A locking service name was specified as NULL; the empty string, or a string longer than 64 characters. Namespace
         * and lock names must be non-NULL, nonempty, and
         * no more than 64 characters long.
         */
        case ER_LOCKING_SERVICE_WRONG_NAME = 3131;
        /**
         * Error number: 3132; Symbol: ER_LOCKING_SERVICE_DEADLOCK; SQLSTATE: HY000
         *
         * Message: Deadlock found when trying to get locking service lock; try releasing locks and restarting lock acquisition.
         */
        case ER_LOCKING_SERVICE_DEADLOCK = 3132;
        /**
         * Error number: 3133; Symbol: ER_LOCKING_SERVICE_TIMEOUT; SQLSTATE: HY000
         *
         * Message: Service lock wait timeout exceeded.
         */
        case ER_LOCKING_SERVICE_TIMEOUT = 3133;
        /**
         * Error number: 3134; Symbol: ER_GIS_MAX_POINTS_IN_GEOMETRY_OVERFLOWED; SQLSTATE: HY000
         *
         * Message: Parameter %s exceeds the maximum number of points in a
         * geometry (%lu) in function %s.
         */
        case ER_GIS_MAX_POINTS_IN_GEOMETRY_OVERFLOWED = 3134;
        /**
         * Error number: 3135; Symbol: ER_SQL_MODE_MERGED; SQLSTATE: HY000
         *
         * Message: 'NO_ZERO_DATE', 'NO_ZERO_IN_DATE' and
         * 'ERROR_FOR_DIVISION_BY_ZERO' sql modes should be used with strict
         * mode. They will be merged with strict mode in a future release.
         */
        case ER_SQL_MODE_MERGED = 3135;
        /**
         * Error number: 3138; Symbol: ER_CANT_SET_VARIABLE_WHEN_OWNING_GTID; SQLSTATE: HY000
         *
         * Message: Variable %s cannot be changed by a client that owns a
         * GTID. The client owns %s. Ownership is released on COMMIT or
         * ROLLBACK.
         */
        case ER_CANT_SET_VARIABLE_WHEN_OWNING_GTID = 3138;
        /**
         * Error number: 3139; Symbol: ER_REPLICA_CHANNEL_OPERATION_NOT_ALLOWED; SQLSTATE: HY000
         *
         * Message: %s cannot be performed on channel '%s'.
         */
        case ER_REPLICA_CHANNEL_OPERATION_NOT_ALLOWED = 3139;
        /**
         * Error number: 3140; Symbol: ER_INVALID_JSON_TEXT; SQLSTATE: 22032
         *
         * Message: Invalid JSON text: "%s" at position %u in value for
         * column '%s'.
         */
        case ER_INVALID_JSON_TEXT = 3140;
        /**
         * Error number: 3141; Symbol: ER_INVALID_JSON_TEXT_IN_PARAM; SQLSTATE: 22032
         *
         * Message: Invalid JSON text in argument %u to function %s: "%s" at
         * position %u.%s
         */
        case ER_INVALID_JSON_TEXT_IN_PARAM = 3141;
        /**
         * Error number: 3142; Symbol: ER_INVALID_JSON_BINARY_DATA; SQLSTATE: HY000
         *
         * Message: The JSON binary value contains invalid data.
         */
        case ER_INVALID_JSON_BINARY_DATA = 3142;
        /**
         * Error number: 3143; Symbol: ER_INVALID_JSON_PATH; SQLSTATE: 42000
         *
         * Message: Invalid JSON path expression. The error is around
         * character position %u.%s
         */
        case ER_INVALID_JSON_PATH = 3143;
        /**
         * Error number: 3144; Symbol: ER_INVALID_JSON_CHARSET; SQLSTATE: 22032
         *
         * Message: Cannot create a JSON value from a string with CHARACTER
         * SET '%s'.
         */
        case ER_INVALID_JSON_CHARSET = 3144;
        /**
         * Error number: 3145; Symbol: ER_INVALID_JSON_CHARSET_IN_FUNCTION; SQLSTATE: 22032
         *
         * Message: Invalid JSON character data provided to function %s: '%s'; utf8 is required.
         */
        case ER_INVALID_JSON_CHARSET_IN_FUNCTION = 3145;
        /**
         * Error number: 3146; Symbol: ER_INVALID_TYPE_FOR_JSON; SQLSTATE: 22032
         *
         * Message: Invalid data type for JSON data in argument %u to
         * function %s; a JSON string or JSON type is required.
         */
        case ER_INVALID_TYPE_FOR_JSON = 3146;
        /**
         * Error number: 3147; Symbol: ER_INVALID_CAST_TO_JSON; SQLSTATE: 22032
         *
         * Message: Cannot CAST value to JSON.
         */
        case ER_INVALID_CAST_TO_JSON = 3147;
        /**
         * Error number: 3148; Symbol: ER_INVALID_JSON_PATH_CHARSET; SQLSTATE: 42000
         *
         * Message: A path expression must be encoded in the utf8 character
         * set. The path expression '%s' is encoded in character set '%s'.
         */
        case ER_INVALID_JSON_PATH_CHARSET = 3148;
        /**
         * Error number: 3149; Symbol: ER_INVALID_JSON_PATH_WILDCARD; SQLSTATE: 42000
         *
         * Message: In this situation, path expressions may not contain the *
         * and ** tokens or an array range.
         */
        case ER_INVALID_JSON_PATH_WILDCARD = 3149;
        /**
         * Error number: 3150; Symbol: ER_JSON_VALUE_TOO_BIG; SQLSTATE: 22032
         *
         * Message: The JSON value is too big to be stored in a JSON column.
         */
        case ER_JSON_VALUE_TOO_BIG = 3150;
        /**
         * Error number: 3151; Symbol: ER_JSON_KEY_TOO_BIG; SQLSTATE: 22032
         *
         * Message: The JSON object contains a key name that is too long.
         */
        case ER_JSON_KEY_TOO_BIG = 3151;
        /**
         * Error number: 3152; Symbol: ER_JSON_USED_AS_KEY; SQLSTATE: 42000
         *
         * Message: JSON column '%s' supports indexing only via generated
         * columns on a specified JSON path.
         */
        case ER_JSON_USED_AS_KEY = 3152;
        /**
         * Error number: 3153; Symbol: ER_JSON_VACUOUS_PATH; SQLSTATE: 42000
         *
         * Message: The path expression '$' is not allowed in this context.
         */
        case ER_JSON_VACUOUS_PATH = 3153;
        /**
         * Error number: 3154; Symbol: ER_JSON_BAD_ONE_OR_ALL_ARG; SQLSTATE: 42000
         *
         * Message: The oneOrAll argument to %s may take these values: 'one'
         * or 'all'.
         */
        case ER_JSON_BAD_ONE_OR_ALL_ARG = 3154;
        /**
         * Error number: 3155; Symbol: ER_NUMERIC_JSON_VALUE_OUT_OF_RANGE; SQLSTATE: 22003
         *
         * Message: Out of range JSON value for CAST to %s%s from column %s
         * at row %ld
         */
        case ER_NUMERIC_JSON_VALUE_OUT_OF_RANGE = 3155;
        /**
         * Error number: 3156; Symbol: ER_INVALID_JSON_VALUE_FOR_CAST; SQLSTATE: 22018
         *
         * Message: Invalid JSON value for CAST to %s%s from column %s at row
         * %ld
         */
        case ER_INVALID_JSON_VALUE_FOR_CAST = 3156;
        /**
         * Error number: 3157; Symbol: ER_JSON_DOCUMENT_TOO_DEEP; SQLSTATE: 22032
         *
         * Message: The JSON document exceeds the maximum depth.
         */
        case ER_JSON_DOCUMENT_TOO_DEEP = 3157;
        /**
         * Error number: 3158; Symbol: ER_JSON_DOCUMENT_NULL_KEY; SQLSTATE: 22032
         *
         * Message: JSON documents may not contain NULL member names.
         */
        case ER_JSON_DOCUMENT_NULL_KEY = 3158;
        /**
         * Error number: 3159; Symbol: ER_SECURE_TRANSPORT_REQUIRED; SQLSTATE: HY000
         *
         * Message: Connections using insecure transport are prohibited while
         * --require_secure_transport=ON.
         *
         * With the require_secure_transport
         * system variable, clients can connect only using secure transports.
         * Qualifying connections are those using SSL, a Unix socket file, or
         * shared memory.
         */
        case ER_SECURE_TRANSPORT_REQUIRED = 3159;
        /**
         * Error number: 3160; Symbol: ER_NO_SECURE_TRANSPORTS_CONFIGURED; SQLSTATE: HY000
         *
         * Message: No secure transports (SSL or Shared Memory) are
         * configured, unable to set --require_secure_transport=ON.
         *
         * The require_secure_transport
         * system variable cannot be enabled if the server does not support
         * at least one secure transport. Configure the server with the
         * required SSL keys/certificates to enable SSL connections, or
         * enable the shared_memory system
         * variable to enable shared-memory connections.
         */
        case ER_NO_SECURE_TRANSPORTS_CONFIGURED = 3160;
        /**
         * Error number: 3161; Symbol: ER_DISABLED_STORAGE_ENGINE; SQLSTATE: HY000
         *
         * Message: Storage engine %s is disabled (Table creation is
         * disallowed).
         *
         * An attempt was made to create a table or tablespace using a
         * storage engine listed in the value of the
         * disabled_storage_engines system
         * variable, or to change an existing table or tablespace to such an
         * engine. Choose a different storage engine.
         */
        case ER_DISABLED_STORAGE_ENGINE = 3161;
        /**
         * Error number: 3162; Symbol: ER_USER_DOES_NOT_EXIST; SQLSTATE: HY000
         *
         * Message: Authorization ID %s does not exist.
         */
        case ER_USER_DOES_NOT_EXIST = 3162;
        /**
         * Error number: 3163; Symbol: ER_USER_ALREADY_EXISTS; SQLSTATE: HY000
         *
         * Message: Authorization ID %s already exists.
         */
        case ER_USER_ALREADY_EXISTS = 3163;
        /**
         * Error number: 3164; Symbol: ER_AUDIT_API_ABORT; SQLSTATE: HY000
         *
         * Message: Aborted by Audit API ('%s';%d).
         *
         * This error indicates that an audit plugin terminated execution of
         * an event. The message typically indicates the event subclass name
         * and a numeric status value.
         */
        case ER_AUDIT_API_ABORT = 3164;
        /**
         * Error number: 3165; Symbol: ER_INVALID_JSON_PATH_ARRAY_CELL; SQLSTATE: 42000
         *
         * Message: A path expression is not a path to a cell in an array.
         */
        case ER_INVALID_JSON_PATH_ARRAY_CELL = 3165;
        /**
         * Error number: 3166; Symbol: ER_BUFPOOL_RESIZE_INPROGRESS; SQLSTATE: HY000
         *
         * Message: Another buffer pool resize is already in progress.
         */
        case ER_BUFPOOL_RESIZE_INPROGRESS = 3166;
        /**
         * Error number: 3167; Symbol: ER_FEATURE_DISABLED_SEE_DOC; SQLSTATE: HY000
         *
         * Message: The '%s' feature is disabled; see the documentation for
         * '%s'
         */
        case ER_FEATURE_DISABLED_SEE_DOC = 3167;
        /**
         * Error number: 3168; Symbol: ER_SERVER_ISNT_AVAILABLE; SQLSTATE: HY000
         *
         * Message: Server isn't available
         */
        case ER_SERVER_ISNT_AVAILABLE = 3168;
        /**
         * Error number: 3169; Symbol: ER_SESSION_WAS_KILLED; SQLSTATE: HY000
         *
         * Message: Session was killed
         */
        case ER_SESSION_WAS_KILLED = 3169;
        /**
         * Error number: 3170; Symbol: ER_CAPACITY_EXCEEDED; SQLSTATE: HY000
         *
         * Message: Memory capacity of %llu bytes for '%s' exceeded. %s
         */
        case ER_CAPACITY_EXCEEDED = 3170;
        /**
         * Error number: 3171; Symbol: ER_CAPACITY_EXCEEDED_IN_RANGE_OPTIMIZER; SQLSTATE: HY000
         *
         * Message: Range optimization was not done for this query.
         */
        case ER_CAPACITY_EXCEEDED_IN_RANGE_OPTIMIZER = 3171;
        /**
         * Error number: 3173; Symbol: ER_CANT_WAIT_FOR_EXECUTED_GTID_SET_WHILE_OWNING_A_GTID; SQLSTATE: HY000
         *
         * Message: The client holds ownership of the GTID %s. Therefore; WAIT_FOR_EXECUTED_GTID_SET cannot wait for this GTID.
         */
        case ER_CANT_WAIT_FOR_EXECUTED_GTID_SET_WHILE_OWNING_A_GTID = 3173;
        /**
         * Error number: 3174; Symbol: ER_CANNOT_ADD_FOREIGN_BASE_COL_VIRTUAL; SQLSTATE: HY000
         *
         * Message: Cannot add foreign key on the base column of indexed
         * virtual column.
         */
        case ER_CANNOT_ADD_FOREIGN_BASE_COL_VIRTUAL = 3174;
        /**
         * Error number: 3175; Symbol: ER_CANNOT_CREATE_VIRTUAL_INDEX_CONSTRAINT; SQLSTATE: HY000
         *
         * Message: Cannot create index on virtual column whose base column
         * has foreign constraint.
         */
        case ER_CANNOT_CREATE_VIRTUAL_INDEX_CONSTRAINT = 3175;
        /**
         * Error number: 3176; Symbol: ER_ERROR_ON_MODIFYING_GTID_EXECUTED_TABLE; SQLSTATE: HY000
         *
         * Message: Please do not modify the %s table with an XA transaction.
         * This is an internal system table used to store GTIDs for committed
         * transactions. Although modifying it can lead to an inconsistent
         * GTID state, if necessary you can modify it with a non-XA
         * transaction.
         */
        case ER_ERROR_ON_MODIFYING_GTID_EXECUTED_TABLE = 3176;
        /**
         * Error number: 3177; Symbol: ER_LOCK_REFUSED_BY_ENGINE; SQLSTATE: HY000
         *
         * Message: Lock acquisition refused by storage engine.
         */
        case ER_LOCK_REFUSED_BY_ENGINE = 3177;
        /**
         * Error number: 3178; Symbol: ER_UNSUPPORTED_ALTER_ONLINE_ON_VIRTUAL_COLUMN; SQLSTATE: HY000
         *
         * Message: ADD COLUMN col...VIRTUAL, ADD INDEX(col)
         */
        case ER_UNSUPPORTED_ALTER_ONLINE_ON_VIRTUAL_COLUMN = 3178;
        /**
         * Error number: 3179; Symbol: ER_MASTER_KEY_ROTATION_NOT_SUPPORTED_BY_SE; SQLSTATE: HY000
         *
         * Message: Master key rotation is not supported by storage engine.
         */
        case ER_MASTER_KEY_ROTATION_NOT_SUPPORTED_BY_SE = 3179;
        /**
         * Error number: 3181; Symbol: ER_MASTER_KEY_ROTATION_BINLOG_FAILED; SQLSTATE: HY000
         *
         * Message: Write to binlog failed. However, master key rotation has
         * been completed successfully.
         */
        case ER_MASTER_KEY_ROTATION_BINLOG_FAILED = 3181;
        /**
         * Error number: 3182; Symbol: ER_MASTER_KEY_ROTATION_SE_UNAVAILABLE; SQLSTATE: HY000
         *
         * Message: Storage engine is not available.
         */
        case ER_MASTER_KEY_ROTATION_SE_UNAVAILABLE = 3182;
        /**
         * Error number: 3183; Symbol: ER_TABLESPACE_CANNOT_ENCRYPT; SQLSTATE: HY000
         *
         * Message: This tablespace can't be encrypted.
         */
        case ER_TABLESPACE_CANNOT_ENCRYPT = 3183;
        /**
         * Error number: 3184; Symbol: ER_INVALID_ENCRYPTION_OPTION; SQLSTATE: HY000
         *
         * Message: Invalid encryption option.
         */
        case ER_INVALID_ENCRYPTION_OPTION = 3184;
        /**
         * Error number: 3185; Symbol: ER_CANNOT_FIND_KEY_IN_KEYRING; SQLSTATE: HY000
         *
         * Message: Can't find master key from keyring, please check in the
         * server log if a keyring is loaded and initialized successfully.
         */
        case ER_CANNOT_FIND_KEY_IN_KEYRING = 3185;
        /**
         * Error number: 3186; Symbol: ER_CAPACITY_EXCEEDED_IN_PARSER; SQLSTATE: HY000
         *
         * Message: Parser bailed out for this query.
         */
        case ER_CAPACITY_EXCEEDED_IN_PARSER = 3186;
        /**
         * Error number: 3187; Symbol: ER_UNSUPPORTED_ALTER_ENCRYPTION_INPLACE; SQLSTATE: HY000
         *
         * Message: Cannot alter encryption attribute by inplace algorithm.
         */
        case ER_UNSUPPORTED_ALTER_ENCRYPTION_INPLACE = 3187;
        /**
         * Error number: 3188; Symbol: ER_KEYRING_UDF_KEYRING_SERVICE_ERROR; SQLSTATE: HY000
         *
         * Message: Function '%s' failed because underlying keyring service
         * returned an error. Please check if a keyring is installed and that
         * provided arguments are valid for the keyring you are using.
         */
        case ER_KEYRING_UDF_KEYRING_SERVICE_ERROR = 3188;
        /**
         * Error number: 3189; Symbol: ER_USER_COLUMN_OLD_LENGTH; SQLSTATE: HY000
         *
         * Message: It seems that your db schema is old. The %s column is 77
         * characters long and should be 93 characters long. Please perform
         * the MySQL upgrade procedure.
         */
        case ER_USER_COLUMN_OLD_LENGTH = 3189;
        /**
         * Error number: 3190; Symbol: ER_CANT_RESET_SOURCE; SQLSTATE: HY000
         *
         * Message: RESET BINARY LOGS AND GTIDS is not allowed because %s.
         */
        case ER_CANT_RESET_SOURCE = 3190;
        /**
         * Error number: 3191; Symbol: ER_GROUP_REPLICATION_MAX_GROUP_SIZE; SQLSTATE: HY000
         *
         * Message: The START GROUP_REPLICATION command failed since the
         * group already has 9 members.
         */
        case ER_GROUP_REPLICATION_MAX_GROUP_SIZE = 3191;
        /**
         * Error number: 3192; Symbol: ER_CANNOT_ADD_FOREIGN_BASE_COL_STORED; SQLSTATE: HY000
         *
         * Message: Cannot add foreign key on the base column of stored
         * column.
         */
        case ER_CANNOT_ADD_FOREIGN_BASE_COL_STORED = 3192;
        /**
         * Error number: 3193; Symbol: ER_TABLE_REFERENCED; SQLSTATE: HY000
         *
         * Message: Cannot complete the operation because table is referenced
         * by another connection.
         */
        case ER_TABLE_REFERENCED = 3193;
        /**
         * Error number: 3197; Symbol: ER_XA_RETRY; SQLSTATE: HY000
         *
         * Message: The resource manager is not able to commit the
         * transaction branch at this time. Please retry later.
         */
        case ER_XA_RETRY = 3197;
        /**
         * Error number: 3198; Symbol: ER_KEYRING_AWS_UDF_AWS_KMS_ERROR; SQLSTATE: HY000
         *
         * Message: Function %s failed due to: %s.
         */
        case ER_KEYRING_AWS_UDF_AWS_KMS_ERROR = 3198;
        /**
         * Error number: 3199; Symbol: ER_BINLOG_UNSAFE_XA; SQLSTATE: HY000
         *
         * Message: Statement is unsafe because it is being used inside a XA
         * transaction. Concurrent XA transactions may deadlock on replicas
         * when replicated using statements.
         */
        case ER_BINLOG_UNSAFE_XA = 3199;
        /**
         * Error number: 3200; Symbol: ER_UDF_ERROR; SQLSTATE: HY000
         *
         * Message: %s UDF failed; %s
         */
        case ER_UDF_ERROR = 3200;
        /**
         * Error number: 3201; Symbol: ER_KEYRING_MIGRATION_FAILURE; SQLSTATE: HY000
         *
         * Message: Can not perform keyring migration : %s
         */
        case ER_KEYRING_MIGRATION_FAILURE = 3201;
        /**
         * Error number: 3202; Symbol: ER_KEYRING_ACCESS_DENIED_ERROR; SQLSTATE: 42000
         *
         * Message: Access denied; you need %s privileges for this operation
         */
        case ER_KEYRING_ACCESS_DENIED_ERROR = 3202;
        /**
         * Error number: 3203; Symbol: ER_KEYRING_MIGRATION_STATUS; SQLSTATE: HY000
         *
         * Message: Keyring migration %s.
         */
        case ER_KEYRING_MIGRATION_STATUS = 3203;
        /**
         * Error number: 3218; Symbol: ER_AUDIT_LOG_UDF_READ_INVALID_MAX_ARRAY_LENGTH_ARG_VALUE; SQLSTATE: HY000
         *
         * Message: Invalid "max_array_length" argument value.
         */
        case ER_AUDIT_LOG_UDF_READ_INVALID_MAX_ARRAY_LENGTH_ARG_VALUE = 3218;
        /**
         * Error number: 3231; Symbol: ER_WRITE_SET_EXCEEDS_LIMIT; SQLSTATE: HY000
         *
         * Message: The size of writeset data for the current transaction
         * exceeds a limit imposed by an external component. If using Group
         * Replication check 'group_replication_transaction_size_limit'.
         */
        case ER_WRITE_SET_EXCEEDS_LIMIT = 3231;
        /**
         * Error number: 3235; Symbol: ER_AES_INVALID_KDF_NAME; SQLSTATE: HY000
         *
         * Message: KDF method name is not valid. Please use hkdf or
         * pbkdf2_hmac method name
         */
        case ER_AES_INVALID_KDF_NAME = 3235;
        /**
         * Error number: 3236; Symbol: ER_AES_INVALID_KDF_ITERATIONS; SQLSTATE: HY000
         *
         * Message: For KDF method pbkdf2_hmac iterations value less than
         * 1000 or more than 65535 is not allowed due to security reasons.
         * Please provide iterations >= 1000 and iterations < 65535
         */
        case ER_AES_INVALID_KDF_ITERATIONS = 3236;
        /**
         * Error number: 3237; Symbol: WARN_AES_KEY_SIZE; SQLSTATE: HY000
         *
         * Message: AES key size should be %d bytes length or secure KDF
         * methods hkdf or pbkdf2_hmac should be used, please provide exact
         * AES key size or use KDF methods for better security.
         */
        case WARN_AES_KEY_SIZE = 3237;
        /**
         * Error number: 3238; Symbol: ER_AES_INVALID_KDF_OPTION_SIZE; SQLSTATE: HY000
         *
         * Message: KDF option size is invalid, please provide valid size
         * < %d bytes and not NULL
         */
        case ER_AES_INVALID_KDF_OPTION_SIZE = 3238;
        /**
         * Error number: 3500; Symbol: ER_UNSUPPORT_COMPRESSED_TEMPORARY_TABLE; SQLSTATE: HY000
         *
         * Message: CREATE TEMPORARY TABLE is not allowed with
         * ROW_FORMAT=COMPRESSED or KEY_BLOCK_SIZE.
         */
        case ER_UNSUPPORT_COMPRESSED_TEMPORARY_TABLE = 3500;
        /**
         * Error number: 3501; Symbol: ER_ACL_OPERATION_FAILED; SQLSTATE: HY000
         *
         * Message: The ACL operation failed due to the following error from
         * SE: errcode %d - %s
         */
        case ER_ACL_OPERATION_FAILED = 3501;
        /**
         * Error number: 3502; Symbol: ER_UNSUPPORTED_INDEX_ALGORITHM; SQLSTATE: HY000
         *
         * Message: This storage engine does not support the %s index
         * algorithm, storage engine default was used instead.
         */
        case ER_UNSUPPORTED_INDEX_ALGORITHM = 3502;
        /**
         * Error number: 3503; Symbol: ER_NO_SUCH_DB; SQLSTATE: 42Y07
         *
         * Message: Database '%s' doesn't exist
         */
        case ER_NO_SUCH_DB = 3503;
        /**
         * Error number: 3504; Symbol: ER_TOO_BIG_ENUM; SQLSTATE: HY000
         *
         * Message: Too many enumeration values for column %s.
         */
        case ER_TOO_BIG_ENUM = 3504;
        /**
         * Error number: 3505; Symbol: ER_TOO_LONG_SET_ENUM_VALUE; SQLSTATE: HY000
         *
         * Message: Too long enumeration/set value for column %s.
         */
        case ER_TOO_LONG_SET_ENUM_VALUE = 3505;
        /**
         * Error number: 3506; Symbol: ER_INVALID_DD_OBJECT; SQLSTATE: HY000
         *
         * Message: %s dictionary object is invalid. (%s)
         */
        case ER_INVALID_DD_OBJECT = 3506;
        /**
         * Error number: 3507; Symbol: ER_UPDATING_DD_TABLE; SQLSTATE: HY000
         *
         * Message: Failed to update %s dictionary object.
         */
        case ER_UPDATING_DD_TABLE = 3507;
        /**
         * Error number: 3508; Symbol: ER_INVALID_DD_OBJECT_ID; SQLSTATE: HY000
         *
         * Message: Dictionary object id (%lu) does not exist.
         */
        case ER_INVALID_DD_OBJECT_ID = 3508;
        /**
         * Error number: 3509; Symbol: ER_INVALID_DD_OBJECT_NAME; SQLSTATE: HY000
         *
         * Message: Dictionary object name '%s' is invalid. (%s)
         */
        case ER_INVALID_DD_OBJECT_NAME = 3509;
        /**
         * Error number: 3510; Symbol: ER_TABLESPACE_MISSING_WITH_NAME; SQLSTATE: HY000
         *
         * Message: Tablespace %s doesn't exist.
         */
        case ER_TABLESPACE_MISSING_WITH_NAME = 3510;
        /**
         * Error number: 3511; Symbol: ER_TOO_LONG_ROUTINE_COMMENT; SQLSTATE: HY000
         *
         * Message: Comment for routine '%s' is too long (max = %lu)
         */
        case ER_TOO_LONG_ROUTINE_COMMENT = 3511;
        /**
         * Error number: 3512; Symbol: ER_SP_LOAD_FAILED; SQLSTATE: HY000
         *
         * Message: Failed to load routine '%s'.
         */
        case ER_SP_LOAD_FAILED = 3512;
        /**
         * Error number: 3513; Symbol: ER_INVALID_BITWISE_OPERANDS_SIZE; SQLSTATE: HY000
         *
         * Message: Binary operands of bitwise operators must be of equal
         * length
         */
        case ER_INVALID_BITWISE_OPERANDS_SIZE = 3513;
        /**
         * Error number: 3514; Symbol: ER_INVALID_BITWISE_AGGREGATE_OPERANDS_SIZE; SQLSTATE: HY000
         *
         * Message: Aggregate bitwise functions cannot accept arguments
         * longer than 511 bytes; consider using the SUBSTRING() function
         */
        case ER_INVALID_BITWISE_AGGREGATE_OPERANDS_SIZE = 3514;
        /**
         * Error number: 3515; Symbol: ER_WARN_UNSUPPORTED_HINT; SQLSTATE: HY000
         *
         * Message: Hints aren't supported in %s
         */
        case ER_WARN_UNSUPPORTED_HINT = 3515;
        /**
         * Error number: 3516; Symbol: ER_UNEXPECTED_GEOMETRY_TYPE; SQLSTATE: 22S01
         *
         * Message: %s value is a geometry of unexpected type %s in %s.
         */
        case ER_UNEXPECTED_GEOMETRY_TYPE = 3516;
        /**
         * Error number: 3517; Symbol: ER_SRS_PARSE_ERROR; SQLSTATE: SR002
         *
         * Message: Can't parse the spatial reference system definition of
         * SRID %u.
         */
        case ER_SRS_PARSE_ERROR = 3517;
        /**
         * Error number: 3518; Symbol: ER_SRS_PROJ_PARAMETER_MISSING; SQLSTATE: SR003
         *
         * Message: The spatial reference system definition for SRID %u does
         * not specify the mandatory %s (EPSG %u) projection parameter.
         */
        case ER_SRS_PROJ_PARAMETER_MISSING = 3518;
        /**
         * Error number: 3519; Symbol: ER_WARN_SRS_NOT_FOUND; SQLSTATE: 01000
         *
         * Message: There's no spatial reference system with SRID %u.
         */
        case ER_WARN_SRS_NOT_FOUND = 3519;
        /**
         * Error number: 3520; Symbol: ER_SRS_NOT_CARTESIAN; SQLSTATE: 22S00
         *
         * Message: Function %s is only defined for Cartesian spatial
         * reference systems, but one of its arguments is in SRID %u, which
         * is not Cartesian.
         */
        case ER_SRS_NOT_CARTESIAN = 3520;
        /**
         * Error number: 3521; Symbol: ER_SRS_NOT_CARTESIAN_UNDEFINED; SQLSTATE: SR001
         *
         * Message: Function %s is only defined for Cartesian spatial
         * reference systems, but one of its arguments is in SRID %u, which
         * has not been defined.
         */
        case ER_SRS_NOT_CARTESIAN_UNDEFINED = 3521;
        /**
         * Error number: 3522; Symbol: ER_PK_INDEX_CANT_BE_INVISIBLE; SQLSTATE: HY000
         *
         * Message: A primary key index cannot be invisible
         */
        case ER_PK_INDEX_CANT_BE_INVISIBLE = 3522;
        /**
         * Error number: 3523; Symbol: ER_UNKNOWN_AUTHID; SQLSTATE: HY000
         *
         * Message: Unknown authorization ID `%s`@`%s`
         */
        case ER_UNKNOWN_AUTHID = 3523;
        /**
         * Error number: 3524; Symbol: ER_FAILED_ROLE_GRANT; SQLSTATE: HY000
         *
         * Message: Failed to grant %s` to %s
         */
        case ER_FAILED_ROLE_GRANT = 3524;
        /**
         * Error number: 3525; Symbol: ER_OPEN_ROLE_TABLES; SQLSTATE: HY000
         *
         * Message: Failed to open the security system tables
         */
        case ER_OPEN_ROLE_TABLES = 3525;
        /**
         * Error number: 3526; Symbol: ER_FAILED_DEFAULT_ROLES; SQLSTATE: HY000
         *
         * Message: Failed to set default roles
         */
        case ER_FAILED_DEFAULT_ROLES = 3526;
        /**
         * Error number: 3527; Symbol: ER_COMPONENTS_NO_SCHEME; SQLSTATE: HY000
         *
         * Message: Cannot find schema in specified URN: '%s'.
         */
        case ER_COMPONENTS_NO_SCHEME = 3527;
        /**
         * Error number: 3528; Symbol: ER_COMPONENTS_NO_SCHEME_SERVICE; SQLSTATE: HY000
         *
         * Message: Cannot acquire scheme load service implementation for
         * schema '%s' in specified URN: '%s'.
         */
        case ER_COMPONENTS_NO_SCHEME_SERVICE = 3528;
        /**
         * Error number: 3529; Symbol: ER_COMPONENTS_CANT_LOAD; SQLSTATE: HY000
         *
         * Message: Cannot load component from specified URN: '%s'.
         */
        case ER_COMPONENTS_CANT_LOAD = 3529;
        /**
         * Error number: 3530; Symbol: ER_ROLE_NOT_GRANTED; SQLSTATE: HY000
         *
         * Message: `%s`@`%s` is not granted to `%s`@`%s`
         */
        case ER_ROLE_NOT_GRANTED = 3530;
        /**
         * Error number: 3531; Symbol: ER_FAILED_REVOKE_ROLE; SQLSTATE: HY000
         *
         * Message: Could not revoke role from `%s`@`%s`
         */
        case ER_FAILED_REVOKE_ROLE = 3531;
        /**
         * Error number: 3532; Symbol: ER_RENAME_ROLE; SQLSTATE: HY000
         *
         * Message: Renaming of a role identifier is forbidden
         */
        case ER_RENAME_ROLE = 3532;
        /**
         * Error number: 3533; Symbol: ER_COMPONENTS_CANT_ACQUIRE_SERVICE_IMPLEMENTATION; SQLSTATE: HY000
         *
         * Message: Cannot acquire specified service implementation: '%s'.
         */
        case ER_COMPONENTS_CANT_ACQUIRE_SERVICE_IMPLEMENTATION = 3533;
        /**
         * Error number: 3534; Symbol: ER_COMPONENTS_CANT_SATISFY_DEPENDENCY; SQLSTATE: HY000
         *
         * Message: Cannot satisfy dependency for service '%s' required by
         * component '%s'.
         */
        case ER_COMPONENTS_CANT_SATISFY_DEPENDENCY = 3534;
        /**
         * Error number: 3535; Symbol: ER_COMPONENTS_LOAD_CANT_REGISTER_SERVICE_IMPLEMENTATION; SQLSTATE: HY000
         *
         * Message: Cannot register service implementation '%s' provided by
         * component '%s'.
         */
        case ER_COMPONENTS_LOAD_CANT_REGISTER_SERVICE_IMPLEMENTATION = 3535;
        /**
         * Error number: 3536; Symbol: ER_COMPONENTS_LOAD_CANT_INITIALIZE; SQLSTATE: HY000
         *
         * Message: Initialization method provided by component '%s' failed.
         */
        case ER_COMPONENTS_LOAD_CANT_INITIALIZE = 3536;
        /**
         * Error number: 3537; Symbol: ER_COMPONENTS_UNLOAD_NOT_LOADED; SQLSTATE: HY000
         *
         * Message: Component specified by URN '%s' to unload has not been
         * loaded before.
         */
        case ER_COMPONENTS_UNLOAD_NOT_LOADED = 3537;
        /**
         * Error number: 3538; Symbol: ER_COMPONENTS_UNLOAD_CANT_DEINITIALIZE; SQLSTATE: HY000
         *
         * Message: De-initialization method provided by component '%s'
         * failed.
         */
        case ER_COMPONENTS_UNLOAD_CANT_DEINITIALIZE = 3538;
        /**
         * Error number: 3539; Symbol: ER_COMPONENTS_CANT_RELEASE_SERVICE; SQLSTATE: HY000
         *
         * Message: Release of previously acquired service implementation
         * failed.
         */
        case ER_COMPONENTS_CANT_RELEASE_SERVICE = 3539;
        /**
         * Error number: 3540; Symbol: ER_COMPONENTS_UNLOAD_CANT_UNREGISTER_SERVICE; SQLSTATE: HY000
         *
         * Message: Unregistration of service implementation '%s' provided by
         * component '%s' failed during unloading of the component.
         */
        case ER_COMPONENTS_UNLOAD_CANT_UNREGISTER_SERVICE = 3540;
        /**
         * Error number: 3541; Symbol: ER_COMPONENTS_CANT_UNLOAD; SQLSTATE: HY000
         *
         * Message: Cannot unload component from specified URN: '%s'.
         */
        case ER_COMPONENTS_CANT_UNLOAD = 3541;
        /**
         * Error number: 3542; Symbol: ER_WARN_UNLOAD_THE_NOT_PERSISTED; SQLSTATE: HY000
         *
         * Message: The Persistent Dynamic Loader was used to unload a
         * component '%s', but it was not used to load that component before.
         */
        case ER_WARN_UNLOAD_THE_NOT_PERSISTED = 3542;
        /**
         * Error number: 3543; Symbol: ER_COMPONENT_TABLE_INCORRECT; SQLSTATE: HY000
         *
         * Message: The mysql.component table is missing or has an incorrect
         * definition.
         */
        case ER_COMPONENT_TABLE_INCORRECT = 3543;
        /**
         * Error number: 3544; Symbol: ER_COMPONENT_MANIPULATE_ROW_FAILED; SQLSTATE: HY000
         *
         * Message: Failed to manipulate component '%s' persistence data.
         * Error code %d from storage engine.
         */
        case ER_COMPONENT_MANIPULATE_ROW_FAILED = 3544;
        /**
         * Error number: 3545; Symbol: ER_COMPONENTS_UNLOAD_DUPLICATE_IN_GROUP; SQLSTATE: HY000
         *
         * Message: The component with specified URN: '%s' was specified in
         * group more than once.
         */
        case ER_COMPONENTS_UNLOAD_DUPLICATE_IN_GROUP = 3545;
        /**
         * Error number: 3546; Symbol: ER_CANT_SET_GTID_PURGED_DUE_SETS_CONSTRAINTS; SQLSTATE: HY000
         *
         * Message: @@GLOBAL.GTID_PURGED cannot be changed: %s
         */
        case ER_CANT_SET_GTID_PURGED_DUE_SETS_CONSTRAINTS = 3546;
        /**
         * Error number: 3547; Symbol: ER_CANNOT_LOCK_USER_MANAGEMENT_CACHES; SQLSTATE: HY000
         *
         * Message: Can not lock user management caches for processing.
         */
        case ER_CANNOT_LOCK_USER_MANAGEMENT_CACHES = 3547;
        /**
         * Error number: 3548; Symbol: ER_SRS_NOT_FOUND; SQLSTATE: SR001
         *
         * Message: There's no spatial reference system with SRID %u.
         */
        case ER_SRS_NOT_FOUND = 3548;
        /**
         * Error number: 3549; Symbol: ER_VARIABLE_NOT_PERSISTED; SQLSTATE: HY000
         *
         * Message: Variables cannot be persisted. Please retry.
         */
        case ER_VARIABLE_NOT_PERSISTED = 3549;
        /**
         * Error number: 3550; Symbol: ER_IS_QUERY_INVALID_CLAUSE; SQLSTATE: HY000
         *
         * Message: Information schema queries do not support the '%s'
         * clause.
         */
        case ER_IS_QUERY_INVALID_CLAUSE = 3550;
        /**
         * Error number: 3551; Symbol: ER_UNABLE_TO_STORE_STATISTICS; SQLSTATE: HY000
         *
         * Message: Unable to store dynamic %s statistics into data
         * dictionary.
         */
        case ER_UNABLE_TO_STORE_STATISTICS = 3551;
        /**
         * Error number: 3552; Symbol: ER_NO_SYSTEM_SCHEMA_ACCESS; SQLSTATE: HY000
         *
         * Message: Access to system schema '%s' is rejected.
         */
        case ER_NO_SYSTEM_SCHEMA_ACCESS = 3552;
        /**
         * Error number: 3553; Symbol: ER_NO_SYSTEM_TABLESPACE_ACCESS; SQLSTATE: HY000
         *
         * Message: Access to system tablespace '%s' is rejected.
         */
        case ER_NO_SYSTEM_TABLESPACE_ACCESS = 3553;
        /**
         * Error number: 3554; Symbol: ER_NO_SYSTEM_TABLE_ACCESS; SQLSTATE: HY000
         *
         * Message: Access to %s '%s.%s' is rejected.
         */
        case ER_NO_SYSTEM_TABLE_ACCESS = 3554;
        /**
         * Error number: 3555; Symbol: ER_NO_SYSTEM_TABLE_ACCESS_FOR_DICTIONARY_TABLE; SQLSTATE: HY000
         *
         * Message: data dictionary table
         */
        case ER_NO_SYSTEM_TABLE_ACCESS_FOR_DICTIONARY_TABLE = 3555;
        /**
         * Error number: 3556; Symbol: ER_NO_SYSTEM_TABLE_ACCESS_FOR_SYSTEM_TABLE; SQLSTATE: HY000
         *
         * Message: system table
         */
        case ER_NO_SYSTEM_TABLE_ACCESS_FOR_SYSTEM_TABLE = 3556;
        /**
         * Error number: 3557; Symbol: ER_NO_SYSTEM_TABLE_ACCESS_FOR_TABLE; SQLSTATE: HY000
         *
         * Message: table
         */
        case ER_NO_SYSTEM_TABLE_ACCESS_FOR_TABLE = 3557;
        /**
         * Error number: 3558; Symbol: ER_INVALID_OPTION_KEY; SQLSTATE: 22023
         *
         * Message: Invalid option key '%s' in function %s.
         */
        case ER_INVALID_OPTION_KEY = 3558;
        /**
         * Error number: 3559; Symbol: ER_INVALID_OPTION_VALUE; SQLSTATE: 22023
         *
         * Message: Invalid value '%s' for option '%s' in function '%s'.
         */
        case ER_INVALID_OPTION_VALUE = 3559;
        /**
         * Error number: 3560; Symbol: ER_INVALID_OPTION_KEY_VALUE_PAIR; SQLSTATE: 22023
         *
         * Message: The string '%s' is not a valid key %c value pair in
         * function %s.
         */
        case ER_INVALID_OPTION_KEY_VALUE_PAIR = 3560;
        /**
         * Error number: 3561; Symbol: ER_INVALID_OPTION_START_CHARACTER; SQLSTATE: 22023
         *
         * Message: The options argument in function %s starts with the
         * invalid character '%c'.
         */
        case ER_INVALID_OPTION_START_CHARACTER = 3561;
        /**
         * Error number: 3562; Symbol: ER_INVALID_OPTION_END_CHARACTER; SQLSTATE: 22023
         *
         * Message: The options argument in function %s ends with the invalid
         * character '%c'.
         */
        case ER_INVALID_OPTION_END_CHARACTER = 3562;
        /**
         * Error number: 3563; Symbol: ER_INVALID_OPTION_CHARACTERS; SQLSTATE: 22023
         *
         * Message: The options argument in function %s contains the invalid
         * character sequence '%s'.
         */
        case ER_INVALID_OPTION_CHARACTERS = 3563;
        /**
         * Error number: 3564; Symbol: ER_DUPLICATE_OPTION_KEY; SQLSTATE: 22023
         *
         * Message: Duplicate option key '%s' in funtion '%s'.
         */
        case ER_DUPLICATE_OPTION_KEY = 3564;
        /**
         * Error number: 3565; Symbol: ER_WARN_SRS_NOT_FOUND_AXIS_ORDER; SQLSTATE: 01000
         *
         * Message: There's no spatial reference system with SRID %u. The
         * axis order is unknown.
         */
        case ER_WARN_SRS_NOT_FOUND_AXIS_ORDER = 3565;
        /**
         * Error number: 3566; Symbol: ER_NO_ACCESS_TO_NATIVE_FCT; SQLSTATE: HY000
         *
         * Message: Access to native function '%s' is rejected.
         */
        case ER_NO_ACCESS_TO_NATIVE_FCT = 3566;
        /**
         * Error number: 3567; Symbol: ER_RESET_SOURCE_TO_VALUE_OUT_OF_RANGE; SQLSTATE: HY000
         *
         * Message: The requested value '%llu' for the next binary log index
         * is out of range. Please use a value between '1' and '%lu'.
         */
        case ER_RESET_SOURCE_TO_VALUE_OUT_OF_RANGE = 3567;
        /**
         * Error number: 3568; Symbol: ER_UNRESOLVED_TABLE_LOCK; SQLSTATE: HY000
         *
         * Message: Unresolved table name %s in locking clause.
         */
        case ER_UNRESOLVED_TABLE_LOCK = 3568;
        /**
         * Error number: 3569; Symbol: ER_DUPLICATE_TABLE_LOCK; SQLSTATE: HY000
         *
         * Message: Table %s appears in multiple locking clauses.
         */
        case ER_DUPLICATE_TABLE_LOCK = 3569;
        /**
         * Error number: 3570; Symbol: ER_BINLOG_UNSAFE_SKIP_LOCKED; SQLSTATE: HY000
         *
         * Message: Statement is unsafe because it uses SKIP LOCKED. The set
         * of inserted values is non-deterministic.
         */
        case ER_BINLOG_UNSAFE_SKIP_LOCKED = 3570;
        /**
         * Error number: 3571; Symbol: ER_BINLOG_UNSAFE_NOWAIT; SQLSTATE: HY000
         *
         * Message: Statement is unsafe because it uses NOWAIT. Whether the
         * command will succeed or fail is not deterministic.
         */
        case ER_BINLOG_UNSAFE_NOWAIT = 3571;
        /**
         * Error number: 3572; Symbol: ER_LOCK_NOWAIT; SQLSTATE: HY000
         *
         * Message: Statement aborted because lock(s) could not be acquired
         * immediately and NOWAIT is set.
         */
        case ER_LOCK_NOWAIT = 3572;
        /**
         * Error number: 3573; Symbol: ER_CTE_RECURSIVE_REQUIRES_UNION; SQLSTATE: HY000
         *
         * Message: Recursive Common Table Expression '%s' should contain a
         * UNION
         */
        case ER_CTE_RECURSIVE_REQUIRES_UNION = 3573;
        /**
         * Error number: 3574; Symbol: ER_CTE_RECURSIVE_REQUIRES_NONRECURSIVE_FIRST; SQLSTATE: HY000
         *
         * Message: Recursive Common Table Expression '%s' should have one or
         * more non-recursive query blocks followed by one or more recursive
         * ones
         */
        case ER_CTE_RECURSIVE_REQUIRES_NONRECURSIVE_FIRST = 3574;
        /**
         * Error number: 3575; Symbol: ER_CTE_RECURSIVE_FORBIDS_AGGREGATION; SQLSTATE: HY000
         *
         * Message: Recursive Common Table Expression '%s' can contain
         * neither aggregation nor window functions in recursive query block
         */
        case ER_CTE_RECURSIVE_FORBIDS_AGGREGATION = 3575;
        /**
         * Error number: 3576; Symbol: ER_CTE_RECURSIVE_FORBIDDEN_JOIN_ORDER; SQLSTATE: HY000
         *
         * Message: In recursive query block of Recursive Common Table
         * Expression '%s', the recursive table must neither be in the right
         * argument of a LEFT JOIN, nor be forced to be non-first with join
         * order hints
         */
        case ER_CTE_RECURSIVE_FORBIDDEN_JOIN_ORDER = 3576;
        /**
         * Error number: 3577; Symbol: ER_CTE_RECURSIVE_REQUIRES_SINGLE_REFERENCE; SQLSTATE: HY000
         *
         * Message: In recursive query block of Recursive Common Table
         * Expression '%s', the recursive table must be referenced only once; and not in any subquery
         */
        case ER_CTE_RECURSIVE_REQUIRES_SINGLE_REFERENCE = 3577;
        /**
         * Error number: 3578; Symbol: ER_SWITCH_TMP_ENGINE; SQLSTATE: HY000
         *
         * Message: '%s' requires @@internal_tmp_disk_storage_engine=InnoDB
         */
        case ER_SWITCH_TMP_ENGINE = 3578;
        /**
         * Error number: 3579; Symbol: ER_WINDOW_NO_SUCH_WINDOW; SQLSTATE: HY000
         *
         * Message: Window name '%s' is not defined.
         */
        case ER_WINDOW_NO_SUCH_WINDOW = 3579;
        /**
         * Error number: 3580; Symbol: ER_WINDOW_CIRCULARITY_IN_WINDOW_GRAPH; SQLSTATE: HY000
         *
         * Message: There is a circularity in the window dependency graph.
         */
        case ER_WINDOW_CIRCULARITY_IN_WINDOW_GRAPH = 3580;
        /**
         * Error number: 3581; Symbol: ER_WINDOW_NO_CHILD_PARTITIONING; SQLSTATE: HY000
         *
         * Message: A window which depends on another cannot define
         * partitioning.
         */
        case ER_WINDOW_NO_CHILD_PARTITIONING = 3581;
        /**
         * Error number: 3582; Symbol: ER_WINDOW_NO_INHERIT_FRAME; SQLSTATE: HY000
         *
         * Message: Window '%s' has a frame definition, so cannot be
         * referenced by another window.
         */
        case ER_WINDOW_NO_INHERIT_FRAME = 3582;
        /**
         * Error number: 3583; Symbol: ER_WINDOW_NO_REDEFINE_ORDER_BY; SQLSTATE: HY000
         *
         * Message: Window '%s' cannot inherit '%s' since both contain an
         * ORDER BY clause.
         */
        case ER_WINDOW_NO_REDEFINE_ORDER_BY = 3583;
        /**
         * Error number: 3584; Symbol: ER_WINDOW_FRAME_START_ILLEGAL; SQLSTATE: HY000
         *
         * Message: Window '%s': frame start cannot be UNBOUNDED FOLLOWING.
         */
        case ER_WINDOW_FRAME_START_ILLEGAL = 3584;
        /**
         * Error number: 3585; Symbol: ER_WINDOW_FRAME_END_ILLEGAL; SQLSTATE: HY000
         *
         * Message: Window '%s': frame end cannot be UNBOUNDED PRECEDING.
         */
        case ER_WINDOW_FRAME_END_ILLEGAL = 3585;
        /**
         * Error number: 3586; Symbol: ER_WINDOW_FRAME_ILLEGAL; SQLSTATE: HY000
         *
         * Message: Window '%s': frame start or end is negative, NULL or of
         * non-integral type
         */
        case ER_WINDOW_FRAME_ILLEGAL = 3586;
        /**
         * Error number: 3587; Symbol: ER_WINDOW_RANGE_FRAME_ORDER_TYPE; SQLSTATE: HY000
         *
         * Message: Window '%s' with RANGE N PRECEDING/FOLLOWING frame
         * requires exactly one deterministic ORDER BY expression, of numeric
         * or temporal type
         */
        case ER_WINDOW_RANGE_FRAME_ORDER_TYPE = 3587;
        /**
         * Error number: 3588; Symbol: ER_WINDOW_RANGE_FRAME_TEMPORAL_TYPE; SQLSTATE: HY000
         *
         * Message: Window '%s' with RANGE frame has ORDER BY expression of
         * datetime type. Only INTERVAL bound value allowed.
         */
        case ER_WINDOW_RANGE_FRAME_TEMPORAL_TYPE = 3588;
        /**
         * Error number: 3589; Symbol: ER_WINDOW_RANGE_FRAME_NUMERIC_TYPE; SQLSTATE: HY000
         *
         * Message: Window '%s' with RANGE frame has ORDER BY expression of
         * numeric type, INTERVAL bound value not allowed.
         */
        case ER_WINDOW_RANGE_FRAME_NUMERIC_TYPE = 3589;
        /**
         * Error number: 3590; Symbol: ER_WINDOW_RANGE_BOUND_NOT_CONSTANT; SQLSTATE: HY000
         *
         * Message: Window '%s' has a non-constant frame bound.
         */
        case ER_WINDOW_RANGE_BOUND_NOT_CONSTANT = 3590;
        /**
         * Error number: 3591; Symbol: ER_WINDOW_DUPLICATE_NAME; SQLSTATE: HY000
         *
         * Message: Window '%s' is defined twice.
         */
        case ER_WINDOW_DUPLICATE_NAME = 3591;
        /**
         * Error number: 3592; Symbol: ER_WINDOW_ILLEGAL_ORDER_BY; SQLSTATE: HY000
         *
         * Message: Window '%s': ORDER BY or PARTITION BY uses legacy
         * position indication which is not supported, use expression.
         */
        case ER_WINDOW_ILLEGAL_ORDER_BY = 3592;
        /**
         * Error number: 3593; Symbol: ER_WINDOW_INVALID_WINDOW_FUNC_USE; SQLSTATE: HY000
         *
         * Message: You cannot use the window function '%s' in this context.'
         */
        case ER_WINDOW_INVALID_WINDOW_FUNC_USE = 3593;
        /**
         * Error number: 3594; Symbol: ER_WINDOW_INVALID_WINDOW_FUNC_ALIAS_USE; SQLSTATE: HY000
         *
         * Message: You cannot use the alias '%s' of an expression containing
         * a window function in this context.'
         */
        case ER_WINDOW_INVALID_WINDOW_FUNC_ALIAS_USE = 3594;
        /**
         * Error number: 3595; Symbol: ER_WINDOW_NESTED_WINDOW_FUNC_USE_IN_WINDOW_SPEC; SQLSTATE: HY000
         *
         * Message: You cannot nest a window function in the specification of
         * window '%s'.
         */
        case ER_WINDOW_NESTED_WINDOW_FUNC_USE_IN_WINDOW_SPEC = 3595;
        /**
         * Error number: 3596; Symbol: ER_WINDOW_ROWS_INTERVAL_USE; SQLSTATE: HY000
         *
         * Message: Window '%s': INTERVAL can only be used with RANGE frames.
         */
        case ER_WINDOW_ROWS_INTERVAL_USE = 3596;
        /**
         * Error number: 3597; Symbol: ER_WINDOW_NO_GROUP_ORDER_UNUSED; SQLSTATE: HY000
         *
         * Message: ASC or DESC with GROUP BY isn't allowed with window
         * functions; put ASC or DESC in ORDER BY
         */
        case ER_WINDOW_NO_GROUP_ORDER_UNUSED = 3597;
        /**
         * Error number: 3598; Symbol: ER_WINDOW_EXPLAIN_JSON; SQLSTATE: HY000
         *
         * Message: To get information about window functions use EXPLAIN
         * FORMAT=JSON
         */
        case ER_WINDOW_EXPLAIN_JSON = 3598;
        /**
         * Error number: 3599; Symbol: ER_WINDOW_FUNCTION_IGNORES_FRAME; SQLSTATE: HY000
         *
         * Message: Window function '%s' ignores the frame clause of window
         * '%s' and aggregates over the whole partition
         */
        case ER_WINDOW_FUNCTION_IGNORES_FRAME = 3599;
        /**
         * Error number: 3600; Symbol: ER_WL9236_NOW_UNUSED; SQLSTATE: HY000
         *
         * Message: Windowing requires
         * @@internal_tmp_mem_storage_engine=TempTable.
         */
        case ER_WL9236_NOW_UNUSED = 3600;
        /**
         * Error number: 3601; Symbol: ER_INVALID_NO_OF_ARGS; SQLSTATE: HY000
         *
         * Message: Too many arguments for function %s: %lu; maximum allowed
         * is %s.
         */
        case ER_INVALID_NO_OF_ARGS = 3601;
        /**
         * Error number: 3602; Symbol: ER_FIELD_IN_GROUPING_NOT_GROUP_BY; SQLSTATE: HY000
         *
         * Message: Argument #%u of GROUPING function is not in GROUP BY
         */
        case ER_FIELD_IN_GROUPING_NOT_GROUP_BY = 3602;
        /**
         * Error number: 3603; Symbol: ER_TOO_LONG_TABLESPACE_COMMENT; SQLSTATE: HY000
         *
         * Message: Comment for tablespace '%s' is too long (max = %lu)
         */
        case ER_TOO_LONG_TABLESPACE_COMMENT = 3603;
        /**
         * Error number: 3604; Symbol: ER_ENGINE_CANT_DROP_TABLE; SQLSTATE: HY000
         *
         * Message: Storage engine can't drop table '%s'
         */
        case ER_ENGINE_CANT_DROP_TABLE = 3604;
        /**
         * Error number: 3605; Symbol: ER_ENGINE_CANT_DROP_MISSING_TABLE; SQLSTATE: HY000
         *
         * Message: Storage engine can't drop table '%s' because it is
         * missing. Use DROP TABLE IF EXISTS to remove it from
         * data-dictionary.
         */
        case ER_ENGINE_CANT_DROP_MISSING_TABLE = 3605;
        /**
         * Error number: 3606; Symbol: ER_TABLESPACE_DUP_FILENAME; SQLSTATE: HY000
         *
         * Message: Duplicate file name for tablespace '%s'
         */
        case ER_TABLESPACE_DUP_FILENAME = 3606;
        /**
         * Error number: 3607; Symbol: ER_DB_DROP_RMDIR2; SQLSTATE: HY000
         *
         * Message: Problem while dropping database. Can't remove database
         * directory (%s). Please remove it manually.
         */
        case ER_DB_DROP_RMDIR2 = 3607;
        /**
         * Error number: 3608; Symbol: ER_IMP_NO_FILES_MATCHED; SQLSTATE: HY000
         *
         * Message: No SDI files matched the pattern '%s'
         */
        case ER_IMP_NO_FILES_MATCHED = 3608;
        /**
         * Error number: 3609; Symbol: ER_IMP_SCHEMA_DOES_NOT_EXIST; SQLSTATE: HY000
         *
         * Message: Schema '%s', referenced in SDI, does not exist.
         */
        case ER_IMP_SCHEMA_DOES_NOT_EXIST = 3609;
        /**
         * Error number: 3610; Symbol: ER_IMP_TABLE_ALREADY_EXISTS; SQLSTATE: HY000
         *
         * Message: Table '%s.%s', referenced in SDI, already exists.
         */
        case ER_IMP_TABLE_ALREADY_EXISTS = 3610;
        /**
         * Error number: 3611; Symbol: ER_IMP_INCOMPATIBLE_MYSQLD_VERSION; SQLSTATE: HY000
         *
         * Message: Imported mysqld_version (%llu) is not compatible with
         * current (%llu)
         */
        case ER_IMP_INCOMPATIBLE_MYSQLD_VERSION = 3611;
        /**
         * Error number: 3612; Symbol: ER_IMP_INCOMPATIBLE_DD_VERSION; SQLSTATE: HY000
         *
         * Message: Imported dd version (%u) is not compatible with current
         * (%u)
         */
        case ER_IMP_INCOMPATIBLE_DD_VERSION = 3612;
        /**
         * Error number: 3613; Symbol: ER_IMP_INCOMPATIBLE_SDI_VERSION; SQLSTATE: HY000
         *
         * Message: Imported sdi version (%llu) is not compatible with
         * current (%llu)
         */
        case ER_IMP_INCOMPATIBLE_SDI_VERSION = 3613;
        /**
         * Error number: 3614; Symbol: ER_WARN_INVALID_HINT; SQLSTATE: HY000
         *
         * Message: Invalid number of arguments for hint %s
         */
        case ER_WARN_INVALID_HINT = 3614;
        /**
         * Error number: 3615; Symbol: ER_VAR_DOES_NOT_EXIST; SQLSTATE: HY000
         *
         * Message: Variable %s does not exist in persisted config file
         */
        case ER_VAR_DOES_NOT_EXIST = 3615;
        /**
         * Error number: 3616; Symbol: ER_LONGITUDE_OUT_OF_RANGE; SQLSTATE: 22S02
         *
         * Message: Longitude %f is out of range in function %s. It must be
         * within (%f, %f].
         */
        case ER_LONGITUDE_OUT_OF_RANGE = 3616;
        /**
         * Error number: 3617; Symbol: ER_LATITUDE_OUT_OF_RANGE; SQLSTATE: 22S03
         *
         * Message: Latitude %f is out of range in function %s. It must be
         * within [%f, %f].
         */
        case ER_LATITUDE_OUT_OF_RANGE = 3617;
        /**
         * Error number: 3618; Symbol: ER_NOT_IMPLEMENTED_FOR_GEOGRAPHIC_SRS; SQLSTATE: 22S00
         *
         * Message: %s(%s) has not been implemented for geographic spatial
         * reference systems.
         */
        case ER_NOT_IMPLEMENTED_FOR_GEOGRAPHIC_SRS = 3618;
        /**
         * Error number: 3619; Symbol: ER_ILLEGAL_PRIVILEGE_LEVEL; SQLSTATE: HY000
         *
         * Message: Illegal privilege level specified for %s
         */
        case ER_ILLEGAL_PRIVILEGE_LEVEL = 3619;
        /**
         * Error number: 3620; Symbol: ER_NO_SYSTEM_VIEW_ACCESS; SQLSTATE: HY000
         *
         * Message: Access to system view INFORMATION_SCHEMA.'%s' is
         * rejected.
         */
        case ER_NO_SYSTEM_VIEW_ACCESS = 3620;
        /**
         * Error number: 3621; Symbol: ER_COMPONENT_FILTER_FLABBERGASTED; SQLSTATE: HY000
         *
         * Message: The log-filter component "%s" got confused at "%s" ...
         */
        case ER_COMPONENT_FILTER_FLABBERGASTED = 3621;
        /**
         * Error number: 3622; Symbol: ER_PART_EXPR_TOO_LONG; SQLSTATE: HY000
         *
         * Message: Partitioning expression is too long.
         */
        case ER_PART_EXPR_TOO_LONG = 3622;
        /**
         * Error number: 3623; Symbol: ER_UDF_DROP_DYNAMICALLY_REGISTERED; SQLSTATE: HY000
         *
         * Message: DROP FUNCTION can't drop a dynamically registered user
         * defined function
         */
        case ER_UDF_DROP_DYNAMICALLY_REGISTERED = 3623;
        /**
         * Error number: 3624; Symbol: ER_UNABLE_TO_STORE_COLUMN_STATISTICS; SQLSTATE: HY000
         *
         * Message: Unable to store column statistics for column '%s' in
         * table '%s'.'%s'
         */
        case ER_UNABLE_TO_STORE_COLUMN_STATISTICS = 3624;
        /**
         * Error number: 3625; Symbol: ER_UNABLE_TO_UPDATE_COLUMN_STATISTICS; SQLSTATE: HY000
         *
         * Message: Unable to update column statistics for column '%s' in
         * table '%s'.'%s'
         */
        case ER_UNABLE_TO_UPDATE_COLUMN_STATISTICS = 3625;
        /**
         * Error number: 3626; Symbol: ER_UNABLE_TO_DROP_COLUMN_STATISTICS; SQLSTATE: HY000
         *
         * Message: Unable to remove column statistics for column '%s' in
         * table '%s'.'%s'
         */
        case ER_UNABLE_TO_DROP_COLUMN_STATISTICS = 3626;
        /**
         * Error number: 3627; Symbol: ER_UNABLE_TO_BUILD_HISTOGRAM; SQLSTATE: HY000
         *
         * Message: Unable to build histogram statistics for column '%s' in
         * table '%s'.'%s'
         */
        case ER_UNABLE_TO_BUILD_HISTOGRAM = 3627;
        /**
         * Error number: 3628; Symbol: ER_MANDATORY_ROLE; SQLSTATE: HY000
         *
         * Message: The role %s is a mandatory role and can't be revoked or
         * dropped. The restriction can be lifted by excluding the role
         * identifier from the global variable mandatory_roles.
         */
        case ER_MANDATORY_ROLE = 3628;
        /**
         * Error number: 3629; Symbol: ER_MISSING_TABLESPACE_FILE; SQLSTATE: HY000
         *
         * Message: Tablespace '%s' does not have a file named '%s'
         */
        case ER_MISSING_TABLESPACE_FILE = 3629;
        /**
         * Error number: 3630; Symbol: ER_PERSIST_ONLY_ACCESS_DENIED_ERROR; SQLSTATE: 42000
         *
         * Message: Access denied; you need %s privileges for this operation
         */
        case ER_PERSIST_ONLY_ACCESS_DENIED_ERROR = 3630;
        /**
         * Error number: 3632; Symbol: ER_PATH_IN_DATADIR; SQLSTATE: HY000
         *
         * Message: Path is within the current data directory '%s'
         */
        case ER_PATH_IN_DATADIR = 3632;
        /**
         * Error number: 3633; Symbol: ER_CLONE_DDL_IN_PROGRESS; SQLSTATE: HY000
         *
         * Message: Concurrent DDL is performed during clone operation.
         * Please try again.
         */
        case ER_CLONE_DDL_IN_PROGRESS = 3633;
        /**
         * Error number: 3634; Symbol: ER_CLONE_TOO_MANY_CONCURRENT_CLONES; SQLSTATE: HY000
         *
         * Message: Too many concurrent clone operations. Maximum allowed -
         * %d.
         */
        case ER_CLONE_TOO_MANY_CONCURRENT_CLONES = 3634;
        /**
         * Error number: 3635; Symbol: ER_APPLIER_LOG_EVENT_VALIDATION_ERROR; SQLSTATE: HY000
         *
         * Message: The table in transaction %s does not comply with the
         * requirements by an external plugin.
         */
        case ER_APPLIER_LOG_EVENT_VALIDATION_ERROR = 3635;
        /**
         * Error number: 3636; Symbol: ER_CTE_MAX_RECURSION_DEPTH; SQLSTATE: HY000
         *
         * Message: Recursive query aborted after %u iterations. Try
         * increasing @@cte_max_recursion_depth to a larger value.
         */
        case ER_CTE_MAX_RECURSION_DEPTH = 3636;
        /**
         * Error number: 3637; Symbol: ER_NOT_HINT_UPDATABLE_VARIABLE; SQLSTATE: HY000
         *
         * Message: Variable %s cannot be set using SET_VAR hint.
         */
        case ER_NOT_HINT_UPDATABLE_VARIABLE = 3637;
        /**
         * Error number: 3638; Symbol: ER_CREDENTIALS_CONTRADICT_TO_HISTORY; SQLSTATE: HY000
         *
         * Message: Cannot use these credentials for '%.*s@%.*s' because they
         * contradict the password history policy
         */
        case ER_CREDENTIALS_CONTRADICT_TO_HISTORY = 3638;
        /**
         * Error number: 3639; Symbol: ER_WARNING_PASSWORD_HISTORY_CLAUSES_VOID; SQLSTATE: HY000
         *
         * Message: Non-zero password history clauses ignored for user
         * '%s'@'%s' as its authentication plugin %s does not support
         * password history
         */
        case ER_WARNING_PASSWORD_HISTORY_CLAUSES_VOID = 3639;
        /**
         * Error number: 3640; Symbol: ER_CLIENT_DOES_NOT_SUPPORT; SQLSTATE: HY000
         *
         * Message: The client doesn't support %s
         */
        case ER_CLIENT_DOES_NOT_SUPPORT = 3640;
        /**
         * Error number: 3641; Symbol: ER_I_S_SKIPPED_TABLESPACE; SQLSTATE: HY000
         *
         * Message: Tablespace '%s' was skipped since its definition is being
         * modified by concurrent DDL statement
         */
        case ER_I_S_SKIPPED_TABLESPACE = 3641;
        /**
         * Error number: 3642; Symbol: ER_TABLESPACE_ENGINE_MISMATCH; SQLSTATE: HY000
         *
         * Message: Engine '%s' does not match stored engine '%s' for
         * tablespace '%s'
         */
        case ER_TABLESPACE_ENGINE_MISMATCH = 3642;
        /**
         * Error number: 3643; Symbol: ER_WRONG_SRID_FOR_COLUMN; SQLSTATE: HY000
         *
         * Message: The SRID of the geometry does not match the SRID of the
         * column '%s'. The SRID of the geometry is %lu, but the SRID of the
         * column is %lu. Consider changing the SRID of the geometry or the
         * SRID property of the column.
         */
        case ER_WRONG_SRID_FOR_COLUMN = 3643;
        /**
         * Error number: 3644; Symbol: ER_CANNOT_ALTER_SRID_DUE_TO_INDEX; SQLSTATE: HY000
         *
         * Message: The SRID specification on the column '%s' cannot be
         * changed because there is a spatial index on the column. Please
         * remove the spatial index before altering the SRID specification.
         */
        case ER_CANNOT_ALTER_SRID_DUE_TO_INDEX = 3644;
        /**
         * Error number: 3645; Symbol: ER_WARN_BINLOG_PARTIAL_UPDATES_DISABLED; SQLSTATE: HY000
         *
         * Message: When %s, the option binlog_row_value_options=%s will be
         * ignored and updates will be written in full format to binary log.
         */
        case ER_WARN_BINLOG_PARTIAL_UPDATES_DISABLED = 3645;
        /**
         * Error number: 3647; Symbol: ER_WARN_BINLOG_PARTIAL_UPDATES_SUGGESTS_PARTIAL_IMAGES; SQLSTATE: HY000
         *
         * Message: When %s, the option binlog_row_value_options=%s will be
         * used only for the after-image. Full values will be written in the
         * before-image, so the saving in disk space due to
         * binlog_row_value_options is limited to less than 50%%.
         */
        case ER_WARN_BINLOG_PARTIAL_UPDATES_SUGGESTS_PARTIAL_IMAGES = 3647;
        /**
         * Error number: 3648; Symbol: ER_COULD_NOT_APPLY_JSON_DIFF; SQLSTATE: HY000
         *
         * Message: Could not apply JSON diff in table %.*s, column %s.
         */
        case ER_COULD_NOT_APPLY_JSON_DIFF = 3648;
        /**
         * Error number: 3649; Symbol: ER_CORRUPTED_JSON_DIFF; SQLSTATE: HY000
         *
         * Message: Corrupted JSON diff for table %.*s, column %s.
         */
        case ER_CORRUPTED_JSON_DIFF = 3649;
        /**
         * Error number: 3650; Symbol: ER_RESOURCE_GROUP_EXISTS; SQLSTATE: HY000
         *
         * Message: Resource Group '%s' exists
         */
        case ER_RESOURCE_GROUP_EXISTS = 3650;
        /**
         * Error number: 3651; Symbol: ER_RESOURCE_GROUP_NOT_EXISTS; SQLSTATE: HY000
         *
         * Message: Resource Group '%s' does not exist.
         */
        case ER_RESOURCE_GROUP_NOT_EXISTS = 3651;
        /**
         * Error number: 3652; Symbol: ER_INVALID_VCPU_ID; SQLSTATE: HY000
         *
         * Message: Invalid cpu id %u
         */
        case ER_INVALID_VCPU_ID = 3652;
        /**
         * Error number: 3653; Symbol: ER_INVALID_VCPU_RANGE; SQLSTATE: HY000
         *
         * Message: Invalid VCPU range %u-%u
         */
        case ER_INVALID_VCPU_RANGE = 3653;
        /**
         * Error number: 3654; Symbol: ER_INVALID_THREAD_PRIORITY; SQLSTATE: HY000
         *
         * Message: Invalid thread priority value %d for %s resource group
         * %s. Allowed range is [%d, %d].
         */
        case ER_INVALID_THREAD_PRIORITY = 3654;
        /**
         * Error number: 3655; Symbol: ER_DISALLOWED_OPERATION; SQLSTATE: HY000
         *
         * Message: %s operation is disallowed on %s
         */
        case ER_DISALLOWED_OPERATION = 3655;
        /**
         * Error number: 3656; Symbol: ER_RESOURCE_GROUP_BUSY; SQLSTATE: HY000
         *
         * Message: Resource group %s is busy.
         */
        case ER_RESOURCE_GROUP_BUSY = 3656;
        /**
         * Error number: 3657; Symbol: ER_RESOURCE_GROUP_DISABLED; SQLSTATE: HY000
         *
         * Message: Resource group %s is disabled.
         */
        case ER_RESOURCE_GROUP_DISABLED = 3657;
        /**
         * Error number: 3658; Symbol: ER_FEATURE_UNSUPPORTED; SQLSTATE: HY000
         *
         * Message: Feature %s is unsupported (%s).
         */
        case ER_FEATURE_UNSUPPORTED = 3658;
        /**
         * Error number: 3659; Symbol: ER_ATTRIBUTE_IGNORED; SQLSTATE: HY000
         *
         * Message: Attribute %s is ignored (%s).
         */
        case ER_ATTRIBUTE_IGNORED = 3659;
        /**
         * Error number: 3660; Symbol: ER_INVALID_THREAD_ID; SQLSTATE: HY000
         *
         * Message: Invalid thread id (%llu).
         */
        case ER_INVALID_THREAD_ID = 3660;
        /**
         * Error number: 3661; Symbol: ER_RESOURCE_GROUP_BIND_FAILED; SQLSTATE: HY000
         *
         * Message: Unable to bind resource group %s with thread id
         * (%llu).(%s).
         */
        case ER_RESOURCE_GROUP_BIND_FAILED = 3661;
        /**
         * Error number: 3662; Symbol: ER_INVALID_USE_OF_FORCE_OPTION; SQLSTATE: HY000
         *
         * Message: Option FORCE invalid as DISABLE option is not specified.
         */
        case ER_INVALID_USE_OF_FORCE_OPTION = 3662;
        /**
         * Error number: 3663; Symbol: ER_GROUP_REPLICATION_COMMAND_FAILURE; SQLSTATE: HY000
         *
         * Message: The %s command encountered a failure. %s
         */
        case ER_GROUP_REPLICATION_COMMAND_FAILURE = 3663;
        /**
         * Error number: 3664; Symbol: ER_SDI_OPERATION_FAILED; SQLSTATE: HY000
         *
         * Message: Failed to %s SDI '%s.%s' in tablespace '%s'.
         */
        case ER_SDI_OPERATION_FAILED = 3664;
        /**
         * Error number: 3665; Symbol: ER_MISSING_JSON_TABLE_VALUE; SQLSTATE: 22035
         *
         * Message: Missing value for JSON_TABLE column '%s'
         */
        case ER_MISSING_JSON_TABLE_VALUE = 3665;
        /**
         * Error number: 3666; Symbol: ER_WRONG_JSON_TABLE_VALUE; SQLSTATE: 2203F
         *
         * Message: Can't store an array or an object in the scalar
         * JSON_TABLE column '%s'
         */
        case ER_WRONG_JSON_TABLE_VALUE = 3666;
        /**
         * Error number: 3667; Symbol: ER_TF_MUST_HAVE_ALIAS; SQLSTATE: 42000
         *
         * Message: Every table function must have an alias
         */
        case ER_TF_MUST_HAVE_ALIAS = 3667;
        /**
         * Error number: 3668; Symbol: ER_TF_FORBIDDEN_JOIN_TYPE; SQLSTATE: HY000
         *
         * Message: INNER or LEFT JOIN must be used for LATERAL references
         * made by '%s'
         */
        case ER_TF_FORBIDDEN_JOIN_TYPE = 3668;
        /**
         * Error number: 3669; Symbol: ER_JT_VALUE_OUT_OF_RANGE; SQLSTATE: 22003
         *
         * Message: Value is out of range for JSON_TABLE's column '%s'
         */
        case ER_JT_VALUE_OUT_OF_RANGE = 3669;
        /**
         * Error number: 3670; Symbol: ER_JT_MAX_NESTED_PATH; SQLSTATE: 42000
         *
         * Message: More than supported %u NESTED PATHs were found in
         * JSON_TABLE '%s'
         */
        case ER_JT_MAX_NESTED_PATH = 3670;
        /**
         * Error number: 3671; Symbol: ER_PASSWORD_EXPIRATION_NOT_SUPPORTED_BY_AUTH_METHOD; SQLSTATE: HY000
         *
         * Message: The selected authentication method %.*s does not support
         * password expiration
         */
        case ER_PASSWORD_EXPIRATION_NOT_SUPPORTED_BY_AUTH_METHOD = 3671;
        /**
         * Error number: 3672; Symbol: ER_INVALID_GEOJSON_CRS_NOT_TOP_LEVEL; SQLSTATE: HY000
         *
         * Message: Invalid GeoJSON data provided to function %s: Member
         * 'crs' must be specified in the top level object.
         */
        case ER_INVALID_GEOJSON_CRS_NOT_TOP_LEVEL = 3672;
        /**
         * Error number: 3673; Symbol: ER_BAD_NULL_ERROR_NOT_IGNORED; SQLSTATE: 23000
         *
         * Message: Column '%s' cannot be null
         */
        case ER_BAD_NULL_ERROR_NOT_IGNORED = 3673;
        /**
         * Error number: 3674; Symbol: WARN_USELESS_SPATIAL_INDEX; SQLSTATE: HY000
         *
         * Message: The spatial index on column '%s' will not be used by the
         * query optimizer since the column does not have an SRID attribute.
         * Consider adding an SRID attribute to the column.
         */
        case WARN_USELESS_SPATIAL_INDEX = 3674;
        /**
         * Error number: 3675; Symbol: ER_DISK_FULL_NOWAIT; SQLSTATE: HY000
         *
         * Message: Create table/tablespace '%s' failed, as disk is full
         */
        case ER_DISK_FULL_NOWAIT = 3675;
        /**
         * Error number: 3676; Symbol: ER_PARSE_ERROR_IN_DIGEST_FN; SQLSTATE: HY000
         *
         * Message: Could not parse argument to digest function: "%s".
         */
        case ER_PARSE_ERROR_IN_DIGEST_FN = 3676;
        /**
         * Error number: 3677; Symbol: ER_UNDISCLOSED_PARSE_ERROR_IN_DIGEST_FN; SQLSTATE: HY000
         *
         * Message: Could not parse argument to digest function.
         */
        case ER_UNDISCLOSED_PARSE_ERROR_IN_DIGEST_FN = 3677;
        /**
         * Error number: 3678; Symbol: ER_SCHEMA_DIR_EXISTS; SQLSTATE: HY000
         *
         * Message: Schema directory '%s' already exists. This must be
         * resolved manually (e.g. by moving the schema directory to another
         * location).
         */
        case ER_SCHEMA_DIR_EXISTS = 3678;
        /**
         * Error number: 3679; Symbol: ER_SCHEMA_DIR_MISSING; SQLSTATE: HY000
         *
         * Message: Schema directory '%s' does not exist
         */
        case ER_SCHEMA_DIR_MISSING = 3679;
        /**
         * Error number: 3680; Symbol: ER_SCHEMA_DIR_CREATE_FAILED; SQLSTATE: HY000
         *
         * Message: Failed to create schema directory '%s' (errno: %d - %s)
         */
        case ER_SCHEMA_DIR_CREATE_FAILED = 3680;
        /**
         * Error number: 3681; Symbol: ER_SCHEMA_DIR_UNKNOWN; SQLSTATE: HY000
         *
         * Message: Schema '%s' does not exist, but schema directory '%s' was
         * found. This must be resolved manually (e.g. by moving the schema
         * directory to another location).
         */
        case ER_SCHEMA_DIR_UNKNOWN = 3681;
        /**
         * Error number: 3682; Symbol: ER_ONLY_IMPLEMENTED_FOR_SRID_0_AND_4326; SQLSTATE: 22S00
         *
         * Message: Function %s is only defined for SRID 0 and SRID 4326.
         */
        case ER_ONLY_IMPLEMENTED_FOR_SRID_0_AND_4326 = 3682;
        /**
         * Error number: 3684; Symbol: ER_REGEXP_BUFFER_OVERFLOW; SQLSTATE: HY000
         *
         * Message: The result string is larger than the result buffer.
         */
        case ER_REGEXP_BUFFER_OVERFLOW = 3684;
        /**
         * Error number: 3685; Symbol: ER_REGEXP_ILLEGAL_ARGUMENT; SQLSTATE: HY000
         *
         * Message: Illegal argument to a regular expression.
         */
        case ER_REGEXP_ILLEGAL_ARGUMENT = 3685;
        /**
         * Error number: 3686; Symbol: ER_REGEXP_INDEX_OUTOFBOUNDS_ERROR; SQLSTATE: HY000
         *
         * Message: Index out of bounds in regular expression search.
         */
        case ER_REGEXP_INDEX_OUTOFBOUNDS_ERROR = 3686;
        /**
         * Error number: 3687; Symbol: ER_REGEXP_INTERNAL_ERROR; SQLSTATE: HY000
         *
         * Message: Internal error in the regular expression library.
         */
        case ER_REGEXP_INTERNAL_ERROR = 3687;
        /**
         * Error number: 3688; Symbol: ER_REGEXP_RULE_SYNTAX; SQLSTATE: HY000
         *
         * Message: Syntax error in regular expression on line %u, character
         * %u.
         */
        case ER_REGEXP_RULE_SYNTAX = 3688;
        /**
         * Error number: 3689; Symbol: ER_REGEXP_BAD_ESCAPE_SEQUENCE; SQLSTATE: HY000
         *
         * Message: Unrecognized escape sequence in regular expression.
         */
        case ER_REGEXP_BAD_ESCAPE_SEQUENCE = 3689;
        /**
         * Error number: 3690; Symbol: ER_REGEXP_UNIMPLEMENTED; SQLSTATE: HY000
         *
         * Message: The regular expression contains a feature that is not
         * implemented in this library version.
         */
        case ER_REGEXP_UNIMPLEMENTED = 3690;
        /**
         * Error number: 3691; Symbol: ER_REGEXP_MISMATCHED_PAREN; SQLSTATE: HY000
         *
         * Message: Mismatched parenthesis in regular expression.
         */
        case ER_REGEXP_MISMATCHED_PAREN = 3691;
        /**
         * Error number: 3692; Symbol: ER_REGEXP_BAD_INTERVAL; SQLSTATE: HY000
         *
         * Message: Incorrect description of a {min,max} interval.
         */
        case ER_REGEXP_BAD_INTERVAL = 3692;
        /**
         * Error number: 3693; Symbol: ER_REGEXP_MAX_LT_MIN; SQLSTATE: HY000
         *
         * Message: The maximum is less than the minumum in a {min,max}
         * interval.
         */
        case ER_REGEXP_MAX_LT_MIN = 3693;
        /**
         * Error number: 3694; Symbol: ER_REGEXP_INVALID_BACK_REF; SQLSTATE: HY000
         *
         * Message: Invalid back-reference in regular expression.
         */
        case ER_REGEXP_INVALID_BACK_REF = 3694;
        /**
         * Error number: 3695; Symbol: ER_REGEXP_LOOK_BEHIND_LIMIT; SQLSTATE: HY000
         *
         * Message: The look-behind assertion exceeds the limit in regular
         * expression.
         */
        case ER_REGEXP_LOOK_BEHIND_LIMIT = 3695;
        /**
         * Error number: 3696; Symbol: ER_REGEXP_MISSING_CLOSE_BRACKET; SQLSTATE: HY000
         *
         * Message: The regular expression contains an unclosed bracket
         * expression.
         */
        case ER_REGEXP_MISSING_CLOSE_BRACKET = 3696;
        /**
         * Error number: 3697; Symbol: ER_REGEXP_INVALID_RANGE; SQLSTATE: HY000
         *
         * Message: The regular expression contains an [x-y] character range
         * where x comes after y.
         */
        case ER_REGEXP_INVALID_RANGE = 3697;
        /**
         * Error number: 3698; Symbol: ER_REGEXP_STACK_OVERFLOW; SQLSTATE: HY000
         *
         * Message: Overflow in the regular expression backtrack stack.
         */
        case ER_REGEXP_STACK_OVERFLOW = 3698;
        /**
         * Error number: 3699; Symbol: ER_REGEXP_TIME_OUT; SQLSTATE: HY000
         *
         * Message: Timeout exceeded in regular expression match.
         */
        case ER_REGEXP_TIME_OUT = 3699;
        /**
         * Error number: 3700; Symbol: ER_REGEXP_PATTERN_TOO_BIG; SQLSTATE: HY000
         *
         * Message: The regular expression pattern exceeds limits on size or
         * complexity.
         */
        case ER_REGEXP_PATTERN_TOO_BIG = 3700;
        /**
         * Error number: 3701; Symbol: ER_CANT_SET_ERROR_LOG_SERVICE; SQLSTATE: HY000
         *
         * Message: Value for %s got confusing at or around "%s". Syntax may
         * be wrong, component may not be INSTALLed, or a component that does
         * not support instances may be listed more than once.
         */
        case ER_CANT_SET_ERROR_LOG_SERVICE = 3701;
        /**
         * Error number: 3702; Symbol: ER_EMPTY_PIPELINE_FOR_ERROR_LOG_SERVICE; SQLSTATE: HY000
         *
         * Message: Setting an empty %s pipeline disables error logging!
         */
        case ER_EMPTY_PIPELINE_FOR_ERROR_LOG_SERVICE = 3702;
        /**
         * Error number: 3703; Symbol: ER_COMPONENT_FILTER_DIAGNOSTICS; SQLSTATE: HY000
         *
         * Message: filter %s: %s
         */
        case ER_COMPONENT_FILTER_DIAGNOSTICS = 3703;
        /**
         * Error number: 3704; Symbol: ER_NOT_IMPLEMENTED_FOR_CARTESIAN_SRS; SQLSTATE: 22S00
         *
         * Message: %s(%s) has not been implemented for Cartesian spatial
         * reference systems.
         */
        case ER_NOT_IMPLEMENTED_FOR_CARTESIAN_SRS = 3704;
        /**
         * Error number: 3705; Symbol: ER_NOT_IMPLEMENTED_FOR_PROJECTED_SRS; SQLSTATE: 22S00
         *
         * Message: %s(%s) has not been implemented for projected spatial
         * reference systems.
         */
        case ER_NOT_IMPLEMENTED_FOR_PROJECTED_SRS = 3705;
        /**
         * Error number: 3706; Symbol: ER_NONPOSITIVE_RADIUS; SQLSTATE: 22003
         *
         * Message: Invalid radius provided to function %s: Radius must be
         * greater than zero.
         */
        case ER_NONPOSITIVE_RADIUS = 3706;
        /**
         * Error number: 3707; Symbol: ER_RESTART_SERVER_FAILED; SQLSTATE: HY000
         *
         * Message: Restart server failed (%s).
         */
        case ER_RESTART_SERVER_FAILED = 3707;
        /**
         * Error number: 3708; Symbol: ER_SRS_MISSING_MANDATORY_ATTRIBUTE; SQLSTATE: SR006
         *
         * Message: Missing mandatory attribute %s.
         */
        case ER_SRS_MISSING_MANDATORY_ATTRIBUTE = 3708;
        /**
         * Error number: 3709; Symbol: ER_SRS_MULTIPLE_ATTRIBUTE_DEFINITIONS; SQLSTATE: SR006
         *
         * Message: Multiple definitions of attribute %s.
         */
        case ER_SRS_MULTIPLE_ATTRIBUTE_DEFINITIONS = 3709;
        /**
         * Error number: 3710; Symbol: ER_SRS_NAME_CANT_BE_EMPTY_OR_WHITESPACE; SQLSTATE: SR006
         *
         * Message: The spatial reference system name can't be an empty
         * string or start or end with whitespace.
         */
        case ER_SRS_NAME_CANT_BE_EMPTY_OR_WHITESPACE = 3710;
        /**
         * Error number: 3711; Symbol: ER_SRS_ORGANIZATION_CANT_BE_EMPTY_OR_WHITESPACE; SQLSTATE: SR006
         *
         * Message: The organization name can't be an empty string or start
         * or end with whitespace.
         */
        case ER_SRS_ORGANIZATION_CANT_BE_EMPTY_OR_WHITESPACE = 3711;
        /**
         * Error number: 3712; Symbol: ER_SRS_ID_ALREADY_EXISTS; SQLSTATE: SR004
         *
         * Message: There is already a spatial reference system with SRID %u.
         */
        case ER_SRS_ID_ALREADY_EXISTS = 3712;
        /**
         * Error number: 3713; Symbol: ER_WARN_SRS_ID_ALREADY_EXISTS; SQLSTATE: 01S00
         *
         * Message: There is already a spatial reference system with SRID %u.
         */
        case ER_WARN_SRS_ID_ALREADY_EXISTS = 3713;
        /**
         * Error number: 3714; Symbol: ER_CANT_MODIFY_SRID_0; SQLSTATE: SR000
         *
         * Message: SRID 0 is not modifiable.
         */
        case ER_CANT_MODIFY_SRID_0 = 3714;
        /**
         * Error number: 3715; Symbol: ER_WARN_RESERVED_SRID_RANGE; SQLSTATE: 01S01
         *
         * Message: The SRID range [%u, %u] has been reserved for system use.
         * SRSs in this range may be added, modified or removed without
         * warning during upgrade.
         */
        case ER_WARN_RESERVED_SRID_RANGE = 3715;
        /**
         * Error number: 3716; Symbol: ER_CANT_MODIFY_SRS_USED_BY_COLUMN; SQLSTATE: SR005
         *
         * Message: Can't modify SRID %u. There is at least one column
         * depending on it.
         */
        case ER_CANT_MODIFY_SRS_USED_BY_COLUMN = 3716;
        /**
         * Error number: 3717; Symbol: ER_SRS_INVALID_CHARACTER_IN_ATTRIBUTE; SQLSTATE: SR006
         *
         * Message: Invalid character in attribute %s.
         */
        case ER_SRS_INVALID_CHARACTER_IN_ATTRIBUTE = 3717;
        /**
         * Error number: 3718; Symbol: ER_SRS_ATTRIBUTE_STRING_TOO_LONG; SQLSTATE: SR006
         *
         * Message: Attribute %s is too long. The maximum length is %u
         * characters.
         */
        case ER_SRS_ATTRIBUTE_STRING_TOO_LONG = 3718;
        /**
         * Error number: 3719; Symbol: ER_DEPRECATED_UTF8_ALIAS; SQLSTATE: HY000
         *
         * Message: 'utf8' is currently an alias for the character set
         * UTF8MB3, but will be an alias for UTF8MB4 in a future release.
         * Please consider using UTF8MB4 in order to be unambiguous.
         */
        case ER_DEPRECATED_UTF8_ALIAS = 3719;
        /**
         * Error number: 3720; Symbol: ER_DEPRECATED_NATIONAL; SQLSTATE: HY000
         *
         * Message: NATIONAL/NCHAR/NVARCHAR implies the character set
         * UTF8MB3, which will be replaced by UTF8MB4 in a future release.
         * Please consider using CHAR(x) CHARACTER SET UTF8MB4 in order to be
         * unambiguous.
         */
        case ER_DEPRECATED_NATIONAL = 3720;
        /**
         * Error number: 3721; Symbol: ER_INVALID_DEFAULT_UTF8MB4_COLLATION; SQLSTATE: HY000
         *
         * Message: Invalid default collation %s: utf8mb4_0900_ai_ci or
         * utf8mb4_general_ci expected
         */
        case ER_INVALID_DEFAULT_UTF8MB4_COLLATION = 3721;
        /**
         * Error number: 3722; Symbol: ER_UNABLE_TO_COLLECT_LOG_STATUS; SQLSTATE: HY000
         *
         * Message: Unable to collect information for column '%s': %s.
         */
        case ER_UNABLE_TO_COLLECT_LOG_STATUS = 3722;
        /**
         * Error number: 3723; Symbol: ER_RESERVED_TABLESPACE_NAME; SQLSTATE: HY000
         *
         * Message: The table '%s' may not be created in the reserved
         * tablespace '%s'.
         */
        case ER_RESERVED_TABLESPACE_NAME = 3723;
        /**
         * Error number: 3724; Symbol: ER_UNABLE_TO_SET_OPTION; SQLSTATE: HY000
         *
         * Message: This option cannot be set %s.
         */
        case ER_UNABLE_TO_SET_OPTION = 3724;
        /**
         * Error number: 3725; Symbol: ER_REPLICA_POSSIBLY_DIVERGED_AFTER_DDL; SQLSTATE: HY000
         *
         * Message: A commit for an atomic DDL statement was unsuccessful on
         * the source and the replica. The replica supports atomic DDL
         * statements but the source does not, so the action taken by the
         * replica and source might differ. Check that their states have not
         * diverged before proceeding.
         */
        case ER_REPLICA_POSSIBLY_DIVERGED_AFTER_DDL = 3725;
        /**
         * Error number: 3726; Symbol: ER_SRS_NOT_GEOGRAPHIC; SQLSTATE: 22S00
         *
         * Message: Function %s is only defined for geographic spatial
         * reference systems, but one of its arguments is in SRID %u, which
         * is not geographic.
         */
        case ER_SRS_NOT_GEOGRAPHIC = 3726;
        /**
         * Error number: 3727; Symbol: ER_POLYGON_TOO_LARGE; SQLSTATE: 22023
         *
         * Message: Function %s encountered a polygon that was too large.
         * Polygons must cover less than half the planet.
         */
        case ER_POLYGON_TOO_LARGE = 3727;
        /**
         * Error number: 3728; Symbol: ER_SPATIAL_UNIQUE_INDEX; SQLSTATE: HY000
         *
         * Message: Spatial indexes can't be primary or unique indexes.
         */
        case ER_SPATIAL_UNIQUE_INDEX = 3728;
        /**
         * Error number: 3729; Symbol: ER_INDEX_TYPE_NOT_SUPPORTED_FOR_SPATIAL_INDEX; SQLSTATE: HY000
         *
         * Message: The index type %s is not supported for spatial indexes.
         */
        case ER_INDEX_TYPE_NOT_SUPPORTED_FOR_SPATIAL_INDEX = 3729;
        /**
         * Error number: 3730; Symbol: ER_FK_CANNOT_DROP_PARENT; SQLSTATE: HY000
         *
         * Message: Cannot drop table '%s' referenced by a foreign key
         * constraint '%s' on table '%s'.
         */
        case ER_FK_CANNOT_DROP_PARENT = 3730;
        /**
         * Error number: 3731; Symbol: ER_GEOMETRY_PARAM_LONGITUDE_OUT_OF_RANGE; SQLSTATE: 22S02
         *
         * Message: A parameter of function %s contains a geometry with
         * longitude %f, which is out of range. It must be within (%f, %f].
         */
        case ER_GEOMETRY_PARAM_LONGITUDE_OUT_OF_RANGE = 3731;
        /**
         * Error number: 3732; Symbol: ER_GEOMETRY_PARAM_LATITUDE_OUT_OF_RANGE; SQLSTATE: 22S03
         *
         * Message: A parameter of function %s contains a geometry with
         * latitude %f, which is out of range. It must be within [%f, %f].
         */
        case ER_GEOMETRY_PARAM_LATITUDE_OUT_OF_RANGE = 3732;
        /**
         * Error number: 3733; Symbol: ER_FK_CANNOT_USE_VIRTUAL_COLUMN; SQLSTATE: HY000
         *
         * Message: Foreign key '%s' uses virtual column '%s' which is not
         * supported.
         */
        case ER_FK_CANNOT_USE_VIRTUAL_COLUMN = 3733;
        /**
         * Error number: 3734; Symbol: ER_FK_NO_COLUMN_PARENT; SQLSTATE: HY000
         *
         * Message: Failed to add the foreign key constraint. Missing column
         * '%s' for constraint '%s' in the referenced table '%s'
         */
        case ER_FK_NO_COLUMN_PARENT = 3734;
        /**
         * Error number: 3735; Symbol: ER_CANT_SET_ERROR_SUPPRESSION_LIST; SQLSTATE: HY000
         *
         * Message: %s: Could not add suppression rule for code "%s".
         * Rule-set may be full, or code may not correspond to an error-log
         * message.
         */
        case ER_CANT_SET_ERROR_SUPPRESSION_LIST = 3735;
        /**
         * Error number: 3736; Symbol: ER_SRS_GEOGCS_INVALID_AXES; SQLSTATE: SR002
         *
         * Message: The spatial reference system definition for SRID %u
         * specifies invalid geographic axes '%s' and '%s'. One axis must be
         * NORTH or SOUTH and the other must be EAST or WEST.
         */
        case ER_SRS_GEOGCS_INVALID_AXES = 3736;
        /**
         * Error number: 3737; Symbol: ER_SRS_INVALID_SEMI_MAJOR_AXIS; SQLSTATE: SR002
         *
         * Message: The length of the semi-major axis must be a positive
         * number.
         */
        case ER_SRS_INVALID_SEMI_MAJOR_AXIS = 3737;
        /**
         * Error number: 3738; Symbol: ER_SRS_INVALID_INVERSE_FLATTENING; SQLSTATE: SR002
         *
         * Message: The inverse flattening must be larger than 1.0, or 0.0 if
         * the ellipsoid is a sphere.
         */
        case ER_SRS_INVALID_INVERSE_FLATTENING = 3738;
        /**
         * Error number: 3739; Symbol: ER_SRS_INVALID_ANGULAR_UNIT; SQLSTATE: SR002
         *
         * Message: The angular unit conversion factor must be a positive
         * number.
         */
        case ER_SRS_INVALID_ANGULAR_UNIT = 3739;
        /**
         * Error number: 3740; Symbol: ER_SRS_INVALID_PRIME_MERIDIAN; SQLSTATE: SR002
         *
         * Message: The prime meridian must be within (-180, 180] degrees; specified in the SRS angular unit.
         */
        case ER_SRS_INVALID_PRIME_MERIDIAN = 3740;
        /**
         * Error number: 3741; Symbol: ER_TRANSFORM_SOURCE_SRS_NOT_SUPPORTED; SQLSTATE: 22S00
         *
         * Message: Transformation from SRID %u is not supported.
         */
        case ER_TRANSFORM_SOURCE_SRS_NOT_SUPPORTED = 3741;
        /**
         * Error number: 3742; Symbol: ER_TRANSFORM_TARGET_SRS_NOT_SUPPORTED; SQLSTATE: 22S00
         *
         * Message: Transformation to SRID %u is not supported.
         */
        case ER_TRANSFORM_TARGET_SRS_NOT_SUPPORTED = 3742;
        /**
         * Error number: 3743; Symbol: ER_TRANSFORM_SOURCE_SRS_MISSING_TOWGS84; SQLSTATE: 22S00
         *
         * Message: Transformation from SRID %u is not supported. The spatial
         * reference system has no TOWGS84 clause.
         */
        case ER_TRANSFORM_SOURCE_SRS_MISSING_TOWGS84 = 3743;
        /**
         * Error number: 3744; Symbol: ER_TRANSFORM_TARGET_SRS_MISSING_TOWGS84; SQLSTATE: 22S00
         *
         * Message: Transformation to SRID %u is not supported. The spatial
         * reference system has no TOWGS84 clause.
         */
        case ER_TRANSFORM_TARGET_SRS_MISSING_TOWGS84 = 3744;
        /**
         * Error number: 3745; Symbol: ER_TEMP_TABLE_PREVENTS_SWITCH_SESSION_BINLOG_FORMAT; SQLSTATE: HY000
         *
         * Message: Changing @@session.binlog_format is disallowed when the
         * session has open temporary table(s). You could wait until these
         * temporary table(s) are dropped and try again.
         */
        case ER_TEMP_TABLE_PREVENTS_SWITCH_SESSION_BINLOG_FORMAT = 3745;
        /**
         * Error number: 3746; Symbol: ER_TEMP_TABLE_PREVENTS_SWITCH_GLOBAL_BINLOG_FORMAT; SQLSTATE: HY000
         *
         * Message: Changing @@global.binlog_format or
         * @@persist.binlog_format is disallowed when any replication channel
         * has open temporary table(s). You could wait until
         * Replica_open_temp_tables = 0 and try again
         */
        case ER_TEMP_TABLE_PREVENTS_SWITCH_GLOBAL_BINLOG_FORMAT = 3746;
        /**
         * Error number: 3747; Symbol: ER_RUNNING_APPLIER_PREVENTS_SWITCH_GLOBAL_BINLOG_FORMAT; SQLSTATE: HY000
         *
         * Message: Changing @@global.binlog_format or
         * @@persist.binlog_format is disallowed when any replication channel
         * applier thread is running. You could execute STOP REPLICA
         * SQL_THREAD and try again.
         */
        case ER_RUNNING_APPLIER_PREVENTS_SWITCH_GLOBAL_BINLOG_FORMAT = 3747;
        /**
         * Error number: 3748; Symbol: ER_CLIENT_GTID_UNSAFE_CREATE_DROP_TEMP_TABLE_IN_TRX_IN_SBR; SQLSTATE: HY000
         *
         * Message: Statement violates GTID consistency: CREATE TEMPORARY
         * TABLE and DROP TEMPORARY TABLE are not allowed inside a
         * transaction or inside a procedure in a transactional context when
         * @@session.binlog_format=STATEMENT.
         */
        case ER_CLIENT_GTID_UNSAFE_CREATE_DROP_TEMP_TABLE_IN_TRX_IN_SBR = 3748;
        /**
         * Error number: 3750; Symbol: ER_TABLE_WITHOUT_PK; SQLSTATE: HY000
         *
         * Message: Unable to create or change a table without a primary key; when the system variable 'sql_require_primary_key' is set. Add a
         * primary key to the table or unset this variable to avoid this
         * message. Note that tables without a primary key can cause
         * performance problems in row-based replication, so please consult
         * your DBA before changing this setting.
         */
        case ER_TABLE_WITHOUT_PK = 3750;
        /**
         * Error number: 3751; Symbol: ER_WARN_DATA_TRUNCATED_FUNCTIONAL_INDEX; SQLSTATE: 01000
         *
         * Message: Data truncated for functional index '%s' at row %ld
         */
        case ER_WARN_DATA_TRUNCATED_FUNCTIONAL_INDEX = 3751;
        /**
         * Error number: 3752; Symbol: ER_WARN_DATA_OUT_OF_RANGE_FUNCTIONAL_INDEX; SQLSTATE: 22003
         *
         * Message: Value is out of range for functional index '%s' at row
         * %ld
         */
        case ER_WARN_DATA_OUT_OF_RANGE_FUNCTIONAL_INDEX = 3752;
        /**
         * Error number: 3753; Symbol: ER_FUNCTIONAL_INDEX_ON_JSON_OR_GEOMETRY_FUNCTION; SQLSTATE: 42000
         *
         * Message: Cannot create a functional index on a function that
         * returns a JSON or GEOMETRY value.
         */
        case ER_FUNCTIONAL_INDEX_ON_JSON_OR_GEOMETRY_FUNCTION = 3753;
        /**
         * Error number: 3754; Symbol: ER_FUNCTIONAL_INDEX_REF_AUTO_INCREMENT; SQLSTATE: HY000
         *
         * Message: Functional index '%s' cannot refer to an auto-increment
         * column.
         */
        case ER_FUNCTIONAL_INDEX_REF_AUTO_INCREMENT = 3754;
        /**
         * Error number: 3755; Symbol: ER_CANNOT_DROP_COLUMN_FUNCTIONAL_INDEX; SQLSTATE: HY000
         *
         * Message: Cannot drop column '%s' because it is used by a
         * functional index. In order to drop the column, you must remove the
         * functional index.
         */
        case ER_CANNOT_DROP_COLUMN_FUNCTIONAL_INDEX = 3755;
        /**
         * Error number: 3756; Symbol: ER_FUNCTIONAL_INDEX_PRIMARY_KEY; SQLSTATE: HY000
         *
         * Message: The primary key cannot be a functional index
         */
        case ER_FUNCTIONAL_INDEX_PRIMARY_KEY = 3756;
        /**
         * Error number: 3757; Symbol: ER_FUNCTIONAL_INDEX_ON_LOB; SQLSTATE: HY000
         *
         * Message: Cannot create a functional index on an expression that
         * returns a BLOB or TEXT. Please consider using CAST.
         */
        case ER_FUNCTIONAL_INDEX_ON_LOB = 3757;
        /**
         * Error number: 3758; Symbol: ER_FUNCTIONAL_INDEX_FUNCTION_IS_NOT_ALLOWED; SQLSTATE: HY000
         *
         * Message: Expression of functional index '%s' contains a disallowed
         * function.
         */
        case ER_FUNCTIONAL_INDEX_FUNCTION_IS_NOT_ALLOWED = 3758;
        /**
         * Error number: 3759; Symbol: ER_FULLTEXT_FUNCTIONAL_INDEX; SQLSTATE: HY000
         *
         * Message: Fulltext functional index is not supported.
         */
        case ER_FULLTEXT_FUNCTIONAL_INDEX = 3759;
        /**
         * Error number: 3760; Symbol: ER_SPATIAL_FUNCTIONAL_INDEX; SQLSTATE: HY000
         *
         * Message: Spatial functional index is not supported.
         */
        case ER_SPATIAL_FUNCTIONAL_INDEX = 3760;
        /**
         * Error number: 3761; Symbol: ER_WRONG_KEY_COLUMN_FUNCTIONAL_INDEX; SQLSTATE: HY000
         *
         * Message: The used storage engine cannot index the expression '%s'.
         */
        case ER_WRONG_KEY_COLUMN_FUNCTIONAL_INDEX = 3761;
        /**
         * Error number: 3762; Symbol: ER_FUNCTIONAL_INDEX_ON_FIELD; SQLSTATE: HY000
         *
         * Message: Functional index on a column is not supported. Consider
         * using a regular index instead.
         */
        case ER_FUNCTIONAL_INDEX_ON_FIELD = 3762;
        /**
         * Error number: 3763; Symbol: ER_GENERATED_COLUMN_NAMED_FUNCTION_IS_NOT_ALLOWED; SQLSTATE: HY000
         *
         * Message: Expression of generated column '%s' contains a disallowed
         * function: %s.
         */
        case ER_GENERATED_COLUMN_NAMED_FUNCTION_IS_NOT_ALLOWED = 3763;
        /**
         * Error number: 3764; Symbol: ER_GENERATED_COLUMN_ROW_VALUE; SQLSTATE: HY000
         *
         * Message: Expression of generated column '%s' cannot refer to a row
         * value.
         */
        case ER_GENERATED_COLUMN_ROW_VALUE = 3764;
        /**
         * Error number: 3765; Symbol: ER_GENERATED_COLUMN_VARIABLES; SQLSTATE: HY000
         *
         * Message: Expression of generated column '%s' cannot refer user or
         * system variables.
         */
        case ER_GENERATED_COLUMN_VARIABLES = 3765;
        /**
         * Error number: 3766; Symbol: ER_DEPENDENT_BY_DEFAULT_GENERATED_VALUE; SQLSTATE: HY000
         *
         * Message: Column '%s' of table '%s' has a default value expression
         * dependency and cannot be dropped or renamed.
         */
        case ER_DEPENDENT_BY_DEFAULT_GENERATED_VALUE = 3766;
        /**
         * Error number: 3767; Symbol: ER_DEFAULT_VAL_GENERATED_NON_PRIOR; SQLSTATE: HY000
         *
         * Message: Default value expression of column '%s' cannot refer to a
         * column defined after it if that column is a generated column or
         * has an expression as default value.
         */
        case ER_DEFAULT_VAL_GENERATED_NON_PRIOR = 3767;
        /**
         * Error number: 3768; Symbol: ER_DEFAULT_VAL_GENERATED_REF_AUTO_INC; SQLSTATE: HY000
         *
         * Message: Default value expression of column '%s' cannot refer to
         * an auto-increment column.
         */
        case ER_DEFAULT_VAL_GENERATED_REF_AUTO_INC = 3768;
        /**
         * Error number: 3769; Symbol: ER_DEFAULT_VAL_GENERATED_FUNCTION_IS_NOT_ALLOWED; SQLSTATE: HY000
         *
         * Message: Default value expression of column '%s' contains a
         * disallowed function.
         */
        case ER_DEFAULT_VAL_GENERATED_FUNCTION_IS_NOT_ALLOWED = 3769;
        /**
         * Error number: 3770; Symbol: ER_DEFAULT_VAL_GENERATED_NAMED_FUNCTION_IS_NOT_ALLOWED; SQLSTATE: HY000
         *
         * Message: Default value expression of column '%s' contains a
         * disallowed function: %s.
         */
        case ER_DEFAULT_VAL_GENERATED_NAMED_FUNCTION_IS_NOT_ALLOWED = 3770;
        /**
         * Error number: 3771; Symbol: ER_DEFAULT_VAL_GENERATED_ROW_VALUE; SQLSTATE: HY000
         *
         * Message: Default value expression of column '%s' cannot refer to a
         * row value.
         */
        case ER_DEFAULT_VAL_GENERATED_ROW_VALUE = 3771;
        /**
         * Error number: 3772; Symbol: ER_DEFAULT_VAL_GENERATED_VARIABLES; SQLSTATE: HY000
         *
         * Message: Default value expression of column '%s' cannot refer user
         * or system variables.
         */
        case ER_DEFAULT_VAL_GENERATED_VARIABLES = 3772;
        /**
         * Error number: 3773; Symbol: ER_DEFAULT_AS_VAL_GENERATED; SQLSTATE: HY000
         *
         * Message: DEFAULT function cannot be used with default value
         * expressions
         */
        case ER_DEFAULT_AS_VAL_GENERATED = 3773;
        /**
         * Error number: 3774; Symbol: ER_UNSUPPORTED_ACTION_ON_DEFAULT_VAL_GENERATED; SQLSTATE: HY000
         *
         * Message: '%s' is not supported for default value expressions.
         */
        case ER_UNSUPPORTED_ACTION_ON_DEFAULT_VAL_GENERATED = 3774;
        /**
         * Error number: 3775; Symbol: ER_GTID_UNSAFE_ALTER_ADD_COL_WITH_DEFAULT_EXPRESSION; SQLSTATE: HY000
         *
         * Message: Statement violates GTID consistency: ALTER TABLE ... ADD
         * COLUMN .. with expression as DEFAULT.
         */
        case ER_GTID_UNSAFE_ALTER_ADD_COL_WITH_DEFAULT_EXPRESSION = 3775;
        /**
         * Error number: 3776; Symbol: ER_FK_CANNOT_CHANGE_ENGINE; SQLSTATE: HY000
         *
         * Message: Cannot change table's storage engine because the table
         * participates in a foreign key constraint.
         */
        case ER_FK_CANNOT_CHANGE_ENGINE = 3776;
        /**
         * Error number: 3777; Symbol: ER_WARN_DEPRECATED_USER_SET_EXPR; SQLSTATE: HY000
         *
         * Message: Setting user variables within expressions is deprecated
         * and will be removed in a future release. Consider alternatives: 'SET variable=expression, ...', or 'SELECT expression(s) INTO
         * variables(s)'.
         */
        case ER_WARN_DEPRECATED_USER_SET_EXPR = 3777;
        /**
         * Error number: 3778; Symbol: ER_WARN_DEPRECATED_UTF8MB3_COLLATION; SQLSTATE: HY000
         *
         * Message: '%s' is a collation of the deprecated character set
         * UTF8MB3. Please consider using UTF8MB4 with an appropriate
         * collation instead.
         */
        case ER_WARN_DEPRECATED_UTF8MB3_COLLATION = 3778;
        /**
         * Error number: 3779; Symbol: ER_WARN_DEPRECATED_NESTED_COMMENT_SYNTAX; SQLSTATE: HY000
         *
         * Message: Nested comment syntax is deprecated and will be removed
         * in a future release.
         */
        case ER_WARN_DEPRECATED_NESTED_COMMENT_SYNTAX = 3779;
        /**
         * Error number: 3780; Symbol: ER_FK_INCOMPATIBLE_COLUMNS; SQLSTATE: HY000
         *
         * Message: Referencing column '%s' and referenced column '%s' in
         * foreign key constraint '%s' are incompatible.
         */
        case ER_FK_INCOMPATIBLE_COLUMNS = 3780;
        /**
         * Error number: 3781; Symbol: ER_GR_HOLD_WAIT_TIMEOUT; SQLSTATE: HY000
         *
         * Message: Timeout exceeded for held statement while new Group
         * Replication primary member is applying backlog.
         */
        case ER_GR_HOLD_WAIT_TIMEOUT = 3781;
        /**
         * Error number: 3782; Symbol: ER_GR_HOLD_KILLED; SQLSTATE: HY000
         *
         * Message: Held statement aborted because Group Replication plugin
         * got shut down or thread was killed while new primary member was
         * applying backlog.
         */
        case ER_GR_HOLD_KILLED = 3782;
        /**
         * Error number: 3783; Symbol: ER_GR_HOLD_MEMBER_STATUS_ERROR; SQLSTATE: HY000
         *
         * Message: Held statement was aborted due to member being in error
         * state, while backlog is being applied during Group Replication
         * primary election.
         */
        case ER_GR_HOLD_MEMBER_STATUS_ERROR = 3783;
        /**
         * Error number: 3784; Symbol: ER_RPL_ENCRYPTION_FAILED_TO_FETCH_KEY; SQLSTATE: HY000
         *
         * Message: Failed to fetch key from keyring, please check if keyring
         * is loaded.
         */
        case ER_RPL_ENCRYPTION_FAILED_TO_FETCH_KEY = 3784;
        /**
         * Error number: 3785; Symbol: ER_RPL_ENCRYPTION_KEY_NOT_FOUND; SQLSTATE: HY000
         *
         * Message: Can't find key from keyring, please check in the server
         * log if a keyring is loaded and initialized successfully.
         */
        case ER_RPL_ENCRYPTION_KEY_NOT_FOUND = 3785;
        /**
         * Error number: 3786; Symbol: ER_RPL_ENCRYPTION_KEYRING_INVALID_KEY; SQLSTATE: HY000
         *
         * Message: Fetched an invalid key from keyring.
         */
        case ER_RPL_ENCRYPTION_KEYRING_INVALID_KEY = 3786;
        /**
         * Error number: 3787; Symbol: ER_RPL_ENCRYPTION_HEADER_ERROR; SQLSTATE: HY000
         *
         * Message: Error reading a replication log encryption header: %s.
         */
        case ER_RPL_ENCRYPTION_HEADER_ERROR = 3787;
        /**
         * Error number: 3788; Symbol: ER_RPL_ENCRYPTION_FAILED_TO_ROTATE_LOGS; SQLSTATE: HY000
         *
         * Message: Failed to rotate some logs after changing binlog
         * encryption settings. Please fix the problem and rotate the logs
         * manually.
         */
        case ER_RPL_ENCRYPTION_FAILED_TO_ROTATE_LOGS = 3788;
        /**
         * Error number: 3789; Symbol: ER_RPL_ENCRYPTION_KEY_EXISTS_UNEXPECTED; SQLSTATE: HY000
         *
         * Message: Key %s exists unexpected.
         */
        case ER_RPL_ENCRYPTION_KEY_EXISTS_UNEXPECTED = 3789;
        /**
         * Error number: 3790; Symbol: ER_RPL_ENCRYPTION_FAILED_TO_GENERATE_KEY; SQLSTATE: HY000
         *
         * Message: Failed to generate key, please check if keyring is
         * loaded.
         */
        case ER_RPL_ENCRYPTION_FAILED_TO_GENERATE_KEY = 3790;
        /**
         * Error number: 3791; Symbol: ER_RPL_ENCRYPTION_FAILED_TO_STORE_KEY; SQLSTATE: HY000
         *
         * Message: Failed to store key, please check if keyring is loaded.
         */
        case ER_RPL_ENCRYPTION_FAILED_TO_STORE_KEY = 3791;
        /**
         * Error number: 3792; Symbol: ER_RPL_ENCRYPTION_FAILED_TO_REMOVE_KEY; SQLSTATE: HY000
         *
         * Message: Failed to remove key, please check if keyring is loaded.
         */
        case ER_RPL_ENCRYPTION_FAILED_TO_REMOVE_KEY = 3792;
        /**
         * Error number: 3793; Symbol: ER_RPL_ENCRYPTION_UNABLE_TO_CHANGE_OPTION; SQLSTATE: HY000
         *
         * Message: Failed to change binlog_encryption value. %s.
         */
        case ER_RPL_ENCRYPTION_UNABLE_TO_CHANGE_OPTION = 3793;
        /**
         * Error number: 3794; Symbol: ER_RPL_ENCRYPTION_MASTER_KEY_RECOVERY_FAILED; SQLSTATE: HY000
         *
         * Message: Unable to recover binlog encryption master key, please
         * check if keyring is loaded.
         */
        case ER_RPL_ENCRYPTION_MASTER_KEY_RECOVERY_FAILED = 3794;
        /**
         * Error number: 3795; Symbol: ER_SLOW_LOG_MODE_IGNORED_WHEN_NOT_LOGGING_TO_FILE; SQLSTATE: HY000
         *
         * Message: slow query log file format changed as requested, but
         * setting will have no effect when not actually logging to a file.
         */
        case ER_SLOW_LOG_MODE_IGNORED_WHEN_NOT_LOGGING_TO_FILE = 3795;
        /**
         * Error number: 3796; Symbol: ER_GRP_TRX_CONSISTENCY_NOT_ALLOWED; SQLSTATE: HY000
         *
         * Message: The option group_replication_consistency cannot be used
         * on the current member state.
         */
        case ER_GRP_TRX_CONSISTENCY_NOT_ALLOWED = 3796;
        /**
         * Error number: 3797; Symbol: ER_GRP_TRX_CONSISTENCY_BEFORE; SQLSTATE: HY000
         *
         * Message: Error while waiting for group transactions commit on
         * group_replication_consistency= 'BEFORE'.
         */
        case ER_GRP_TRX_CONSISTENCY_BEFORE = 3797;
        /**
         * Error number: 3798; Symbol: ER_GRP_TRX_CONSISTENCY_AFTER_ON_TRX_BEGIN; SQLSTATE: HY000
         *
         * Message: Error while waiting for transactions with
         * group_replication_consistency= 'AFTER' to commit.
         */
        case ER_GRP_TRX_CONSISTENCY_AFTER_ON_TRX_BEGIN = 3798;
        /**
         * Error number: 3799; Symbol: ER_GRP_TRX_CONSISTENCY_BEGIN_NOT_ALLOWED; SQLSTATE: HY000
         *
         * Message: The Group Replication plugin is stopping, therefore new
         * transactions are not allowed to start.
         */
        case ER_GRP_TRX_CONSISTENCY_BEGIN_NOT_ALLOWED = 3799;
        /**
         * Error number: 3800; Symbol: ER_FUNCTIONAL_INDEX_ROW_VALUE_IS_NOT_ALLOWED; SQLSTATE: HY000
         *
         * Message: Expression of functional index '%s' cannot refer to a row
         * value.
         */
        case ER_FUNCTIONAL_INDEX_ROW_VALUE_IS_NOT_ALLOWED = 3800;
        /**
         * Error number: 3801; Symbol: ER_RPL_ENCRYPTION_FAILED_TO_ENCRYPT; SQLSTATE: HY000
         *
         * Message: Failed to encrypt content to write into binlog file: %s.
         */
        case ER_RPL_ENCRYPTION_FAILED_TO_ENCRYPT = 3801;
        /**
         * Error number: 3802; Symbol: ER_PAGE_TRACKING_NOT_STARTED; SQLSTATE: HY000
         *
         * Message: Page Tracking is not started yet.
         */
        case ER_PAGE_TRACKING_NOT_STARTED = 3802;
        /**
         * Error number: 3803; Symbol: ER_PAGE_TRACKING_RANGE_NOT_TRACKED; SQLSTATE: HY000
         *
         * Message: Tracking was not enabled for the LSN range specified
         */
        case ER_PAGE_TRACKING_RANGE_NOT_TRACKED = 3803;
        /**
         * Error number: 3804; Symbol: ER_PAGE_TRACKING_CANNOT_PURGE; SQLSTATE: HY000
         *
         * Message: Cannot purge data when concurrent clone is in progress.
         * Try later.
         */
        case ER_PAGE_TRACKING_CANNOT_PURGE = 3804;
        /**
         * Error number: 3805; Symbol: ER_RPL_ENCRYPTION_CANNOT_ROTATE_BINLOG_MASTER_KEY; SQLSTATE: HY000
         *
         * Message: Cannot rotate binary log master key when
         * 'binlog-encryption' is off.
         */
        case ER_RPL_ENCRYPTION_CANNOT_ROTATE_BINLOG_MASTER_KEY = 3805;
        /**
         * Error number: 3806; Symbol: ER_BINLOG_MASTER_KEY_RECOVERY_OUT_OF_COMBINATION; SQLSTATE: HY000
         *
         * Message: Unable to recover binary log master key, the combination
         * of new_master_key_seqno=%u, master_key_seqno=%u and
         * old_master_key_seqno=%u are wrong.
         */
        case ER_BINLOG_MASTER_KEY_RECOVERY_OUT_OF_COMBINATION = 3806;
        /**
         * Error number: 3807; Symbol: ER_BINLOG_MASTER_KEY_ROTATION_FAIL_TO_OPERATE_KEY; SQLSTATE: HY000
         *
         * Message: Failed to operate binary log master key on keyring; please check if keyring is loaded. The statement had no effect: the old binary log master key is still in use, the keyring, binary
         * and relay log files are unchanged, and the server could not start
         * using a new binary log master key for encrypting new binary and
         * relay log files.
         */
        case ER_BINLOG_MASTER_KEY_ROTATION_FAIL_TO_OPERATE_KEY = 3807;
        /**
         * Error number: 3808; Symbol: ER_BINLOG_MASTER_KEY_ROTATION_FAIL_TO_ROTATE_LOGS; SQLSTATE: HY000
         *
         * Message: Failed to rotate one or more binary or relay log files. A
         * new binary log master key was generated and will be used to
         * encrypt new binary and relay log files. There may still exist
         * binary or relay log files using the previous binary log master
         * key.
         */
        case ER_BINLOG_MASTER_KEY_ROTATION_FAIL_TO_ROTATE_LOGS = 3808;
        /**
         * Error number: 3809; Symbol: ER_BINLOG_MASTER_KEY_ROTATION_FAIL_TO_REENCRYPT_LOG; SQLSTATE: HY000
         *
         * Message: %s. A new binary log master key was generated and will be
         * used to encrypt new binary and relay log files. There may still
         * exist binary or relay log files using the previous binary log
         * master key.
         */
        case ER_BINLOG_MASTER_KEY_ROTATION_FAIL_TO_REENCRYPT_LOG = 3809;
        /**
         * Error number: 3810; Symbol: ER_BINLOG_MASTER_KEY_ROTATION_FAIL_TO_CLEANUP_UNUSED_KEYS; SQLSTATE: HY000
         *
         * Message: Failed to remove unused binary log encryption keys from
         * the keyring, please check if keyring is loaded. The unused binary
         * log encryption keys may still exist in the keyring, and they will
         * be removed upon server restart or next 'ALTER INSTANCE ROTATE
         * BINLOG MASTER KEY' execution.
         */
        case ER_BINLOG_MASTER_KEY_ROTATION_FAIL_TO_CLEANUP_UNUSED_KEYS = 3810;
        /**
         * Error number: 3811; Symbol: ER_BINLOG_MASTER_KEY_ROTATION_FAIL_TO_CLEANUP_AUX_KEY; SQLSTATE: HY000
         *
         * Message: Failed to remove auxiliary binary log encryption key from
         * keyring, please check if keyring is loaded. The cleanup of the
         * binary log master key rotation process did not finish as expected
         * and the cleanup will take place upon server restart or next 'ALTER
         * INSTANCE ROTATE BINLOG MASTER KEY' execution.
         */
        case ER_BINLOG_MASTER_KEY_ROTATION_FAIL_TO_CLEANUP_AUX_KEY = 3811;
        /**
         * Error number: 3812; Symbol: ER_NON_BOOLEAN_EXPR_FOR_CHECK_CONSTRAINT; SQLSTATE: HY000
         *
         * Message: An expression of non-boolean type specified to a check
         * constraint '%s'.
         */
        case ER_NON_BOOLEAN_EXPR_FOR_CHECK_CONSTRAINT = 3812;
        /**
         * Error number: 3813; Symbol: ER_COLUMN_CHECK_CONSTRAINT_REFERENCES_OTHER_COLUMN; SQLSTATE: HY000
         *
         * Message: Column check constraint '%s' references other column.
         */
        case ER_COLUMN_CHECK_CONSTRAINT_REFERENCES_OTHER_COLUMN = 3813;
        /**
         * Error number: 3814; Symbol: ER_CHECK_CONSTRAINT_NAMED_FUNCTION_IS_NOT_ALLOWED; SQLSTATE: HY000
         *
         * Message: An expression of a check constraint '%s' contains
         * disallowed function: %s.
         */
        case ER_CHECK_CONSTRAINT_NAMED_FUNCTION_IS_NOT_ALLOWED = 3814;
        /**
         * Error number: 3815; Symbol: ER_CHECK_CONSTRAINT_FUNCTION_IS_NOT_ALLOWED; SQLSTATE: HY000
         *
         * Message: An expression of a check constraint '%s' contains
         * disallowed function.
         */
        case ER_CHECK_CONSTRAINT_FUNCTION_IS_NOT_ALLOWED = 3815;
        /**
         * Error number: 3816; Symbol: ER_CHECK_CONSTRAINT_VARIABLES; SQLSTATE: HY000
         *
         * Message: An expression of a check constraint '%s' cannot refer to
         * a user or system variable.
         */
        case ER_CHECK_CONSTRAINT_VARIABLES = 3816;
        /**
         * Error number: 3817; Symbol: ER_CHECK_CONSTRAINT_ROW_VALUE; SQLSTATE: HY000
         *
         * Message: Check constraint '%s' cannot refer to a row value.
         */
        case ER_CHECK_CONSTRAINT_ROW_VALUE = 3817;
        /**
         * Error number: 3818; Symbol: ER_CHECK_CONSTRAINT_REFERS_AUTO_INCREMENT_COLUMN; SQLSTATE: HY000
         *
         * Message: Check constraint '%s' cannot refer to an auto-increment
         * column.
         */
        case ER_CHECK_CONSTRAINT_REFERS_AUTO_INCREMENT_COLUMN = 3818;
        /**
         * Error number: 3819; Symbol: ER_CHECK_CONSTRAINT_VIOLATED; SQLSTATE: HY000
         *
         * Message: Check constraint '%s' is violated.
         */
        case ER_CHECK_CONSTRAINT_VIOLATED = 3819;
        /**
         * Error number: 3820; Symbol: ER_CHECK_CONSTRAINT_REFERS_UNKNOWN_COLUMN; SQLSTATE: HY000
         *
         * Message: Check constraint '%s' refers to non-existing column '%s'.
         */
        case ER_CHECK_CONSTRAINT_REFERS_UNKNOWN_COLUMN = 3820;
        /**
         * Error number: 3821; Symbol: ER_CHECK_CONSTRAINT_NOT_FOUND; SQLSTATE: HY000
         *
         * Message: Check constraint '%s' is not found in the table.
         */
        case ER_CHECK_CONSTRAINT_NOT_FOUND = 3821;
        /**
         * Error number: 3822; Symbol: ER_CHECK_CONSTRAINT_DUP_NAME; SQLSTATE: HY000
         *
         * Message: Duplicate check constraint name '%s'.
         */
        case ER_CHECK_CONSTRAINT_DUP_NAME = 3822;
        /**
         * Error number: 3823; Symbol: ER_CHECK_CONSTRAINT_CLAUSE_USING_FK_REFER_ACTION_COLUMN; SQLSTATE: HY000
         *
         * Message: Column '%s' cannot be used in a check constraint '%s': needed in a foreign key constraint '%s' referential action.
         */
        case ER_CHECK_CONSTRAINT_CLAUSE_USING_FK_REFER_ACTION_COLUMN = 3823;
        /**
         * Error number: 3824; Symbol: WARN_UNENCRYPTED_TABLE_IN_ENCRYPTED_DB; SQLSTATE: HY000
         *
         * Message: Creating an unencrypted table in a database with default
         * encryption enabled.
         */
        case WARN_UNENCRYPTED_TABLE_IN_ENCRYPTED_DB = 3824;
        /**
         * Error number: 3825; Symbol: ER_INVALID_ENCRYPTION_REQUEST; SQLSTATE: HY000
         *
         * Message: Request to create %s table while using an %s tablespace.
         */
        case ER_INVALID_ENCRYPTION_REQUEST = 3825;
        /**
         * Error number: 3826; Symbol: ER_CANNOT_SET_TABLE_ENCRYPTION; SQLSTATE: HY000
         *
         * Message: Table encryption differ from its database default
         * encryption, and user doesn't have enough privilege.
         */
        case ER_CANNOT_SET_TABLE_ENCRYPTION = 3826;
        /**
         * Error number: 3827; Symbol: ER_CANNOT_SET_DATABASE_ENCRYPTION; SQLSTATE: HY000
         *
         * Message: Database default encryption differ from
         * 'default_table_encryption' setting, and user doesn't have enough
         * privilege.
         */
        case ER_CANNOT_SET_DATABASE_ENCRYPTION = 3827;
        /**
         * Error number: 3828; Symbol: ER_CANNOT_SET_TABLESPACE_ENCRYPTION; SQLSTATE: HY000
         *
         * Message: Tablespace encryption differ from
         * 'default_table_encryption' setting, and user doesn't have enough
         * privilege.
         */
        case ER_CANNOT_SET_TABLESPACE_ENCRYPTION = 3828;
        /**
         * Error number: 3829; Symbol: ER_TABLESPACE_CANNOT_BE_ENCRYPTED; SQLSTATE: HY000
         *
         * Message: This tablespace can't be encrypted, because one of
         * table's schema has default encryption OFF and user doesn't have
         * enough privilege.
         */
        case ER_TABLESPACE_CANNOT_BE_ENCRYPTED = 3829;
        /**
         * Error number: 3830; Symbol: ER_TABLESPACE_CANNOT_BE_DECRYPTED; SQLSTATE: HY000
         *
         * Message: This tablespace can't be decrypted, because one of
         * table's schema has default encryption ON and user doesn't have
         * enough privilege.
         */
        case ER_TABLESPACE_CANNOT_BE_DECRYPTED = 3830;
        /**
         * Error number: 3831; Symbol: ER_TABLESPACE_TYPE_UNKNOWN; SQLSTATE: HY000
         *
         * Message: Cannot determine the type of the tablespace named '%s'.
         */
        case ER_TABLESPACE_TYPE_UNKNOWN = 3831;
        /**
         * Error number: 3832; Symbol: ER_TARGET_TABLESPACE_UNENCRYPTED; SQLSTATE: HY000
         *
         * Message: Source tablespace is encrypted but target tablespace is
         * not.
         */
        case ER_TARGET_TABLESPACE_UNENCRYPTED = 3832;
        /**
         * Error number: 3833; Symbol: ER_CANNOT_USE_ENCRYPTION_CLAUSE; SQLSTATE: HY000
         *
         * Message: ENCRYPTION clause is not valid for %s tablespace.
         */
        case ER_CANNOT_USE_ENCRYPTION_CLAUSE = 3833;
        /**
         * Error number: 3834; Symbol: ER_INVALID_MULTIPLE_CLAUSES; SQLSTATE: HY000
         *
         * Message: Multiple %s clauses
         */
        case ER_INVALID_MULTIPLE_CLAUSES = 3834;
        /**
         * Error number: 3835; Symbol: ER_UNSUPPORTED_USE_OF_GRANT_AS; SQLSTATE: HY000
         *
         * Message: GRANT ... AS is currently supported only for global
         * privileges.
         */
        case ER_UNSUPPORTED_USE_OF_GRANT_AS = 3835;
        /**
         * Error number: 3836; Symbol: ER_UKNOWN_AUTH_ID_OR_ACCESS_DENIED_FOR_GRANT_AS; SQLSTATE: HY000
         *
         * Message: Either some of the authorization IDs in the AS clause are
         * invalid or the current user lacks privileges to execute the
         * statement.
         */
        case ER_UKNOWN_AUTH_ID_OR_ACCESS_DENIED_FOR_GRANT_AS = 3836;
        /**
         * Error number: 3837; Symbol: ER_DEPENDENT_BY_FUNCTIONAL_INDEX; SQLSTATE: HY000
         *
         * Message: Column '%s' has a functional index dependency and cannot
         * be dropped or renamed.
         */
        case ER_DEPENDENT_BY_FUNCTIONAL_INDEX = 3837;
        /**
         * Error number: 3838; Symbol: ER_PLUGIN_NOT_EARLY; SQLSTATE: HY000
         *
         * Message: Plugin '%s' is not to be used as an "early" plugin. Don't
         * add it to --early-plugin-load, keyring migration etc.
         */
        case ER_PLUGIN_NOT_EARLY = 3838;
        /**
         * Error number: 3839; Symbol: ER_INNODB_REDO_LOG_ARCHIVE_START_SUBDIR_PATH; SQLSTATE: HY000
         *
         * Message: Redo log archiving start prohibits path name in 'subdir'
         * argument
         */
        case ER_INNODB_REDO_LOG_ARCHIVE_START_SUBDIR_PATH = 3839;
        /**
         * Error number: 3840; Symbol: ER_INNODB_REDO_LOG_ARCHIVE_START_TIMEOUT; SQLSTATE: HY000
         *
         * Message: Redo log archiving start timed out
         */
        case ER_INNODB_REDO_LOG_ARCHIVE_START_TIMEOUT = 3840;
        /**
         * Error number: 3841; Symbol: ER_INNODB_REDO_LOG_ARCHIVE_DIRS_INVALID; SQLSTATE: HY000
         *
         * Message: Server variable 'innodb_redo_log_archive_dirs' is NULL or
         * empty
         */
        case ER_INNODB_REDO_LOG_ARCHIVE_DIRS_INVALID = 3841;
        /**
         * Error number: 3842; Symbol: ER_INNODB_REDO_LOG_ARCHIVE_LABEL_NOT_FOUND; SQLSTATE: HY000
         *
         * Message: Label '%s' not found in server variable
         * 'innodb_redo_log_archive_dirs'
         */
        case ER_INNODB_REDO_LOG_ARCHIVE_LABEL_NOT_FOUND = 3842;
        /**
         * Error number: 3843; Symbol: ER_INNODB_REDO_LOG_ARCHIVE_DIR_EMPTY; SQLSTATE: HY000
         *
         * Message: Directory is empty after label '%s' in server variable
         * 'innodb_redo_log_archive_dirs'
         */
        case ER_INNODB_REDO_LOG_ARCHIVE_DIR_EMPTY = 3843;
        /**
         * Error number: 3844; Symbol: ER_INNODB_REDO_LOG_ARCHIVE_NO_SUCH_DIR; SQLSTATE: HY000
         *
         * Message: Redo log archive directory '%s' does not exist or is not
         * a directory
         */
        case ER_INNODB_REDO_LOG_ARCHIVE_NO_SUCH_DIR = 3844;
        /**
         * Error number: 3845; Symbol: ER_INNODB_REDO_LOG_ARCHIVE_DIR_CLASH; SQLSTATE: HY000
         *
         * Message: Redo log archive directory '%s' is in, under, or over
         * server directory '%s' - '%s'
         */
        case ER_INNODB_REDO_LOG_ARCHIVE_DIR_CLASH = 3845;
        /**
         * Error number: 3846; Symbol: ER_INNODB_REDO_LOG_ARCHIVE_DIR_PERMISSIONS; SQLSTATE: HY000
         *
         * Message: Redo log archive directory '%s' is accessible to all OS
         * users
         */
        case ER_INNODB_REDO_LOG_ARCHIVE_DIR_PERMISSIONS = 3846;
        /**
         * Error number: 3847; Symbol: ER_INNODB_REDO_LOG_ARCHIVE_FILE_CREATE; SQLSTATE: HY000
         *
         * Message: Cannot create redo log archive file '%s' (OS errno: %d -
         * %s)
         */
        case ER_INNODB_REDO_LOG_ARCHIVE_FILE_CREATE = 3847;
        /**
         * Error number: 3848; Symbol: ER_INNODB_REDO_LOG_ARCHIVE_ACTIVE; SQLSTATE: HY000
         *
         * Message: Redo log archiving has been started on '%s' - Call
         * innodb_redo_log_archive_stop() first
         */
        case ER_INNODB_REDO_LOG_ARCHIVE_ACTIVE = 3848;
        /**
         * Error number: 3849; Symbol: ER_INNODB_REDO_LOG_ARCHIVE_INACTIVE; SQLSTATE: HY000
         *
         * Message: Redo log archiving is not active
         */
        case ER_INNODB_REDO_LOG_ARCHIVE_INACTIVE = 3849;
        /**
         * Error number: 3850; Symbol: ER_INNODB_REDO_LOG_ARCHIVE_FAILED; SQLSTATE: HY000
         *
         * Message: Redo log archiving failed: %s
         */
        case ER_INNODB_REDO_LOG_ARCHIVE_FAILED = 3850;
        /**
         * Error number: 3851; Symbol: ER_INNODB_REDO_LOG_ARCHIVE_SESSION; SQLSTATE: HY000
         *
         * Message: Redo log archiving has not been started by this session
         */
        case ER_INNODB_REDO_LOG_ARCHIVE_SESSION = 3851;
        /**
         * Error number: 3852; Symbol: ER_STD_REGEX_ERROR; SQLSTATE: HY000
         *
         * Message: Regex error: %s in function %s.
         */
        case ER_STD_REGEX_ERROR = 3852;
        /**
         * Error number: 3853; Symbol: ER_INVALID_JSON_TYPE; SQLSTATE: 22032
         *
         * Message: Invalid JSON type in argument %u to function %s; an %s is
         * required.
         */
        case ER_INVALID_JSON_TYPE = 3853;
        /**
         * Error number: 3854; Symbol: ER_CANNOT_CONVERT_STRING; SQLSTATE: HY000
         *
         * Message: Cannot convert string '%s' from %s to %s
         */
        case ER_CANNOT_CONVERT_STRING = 3854;
        /**
         * Error number: 3855; Symbol: ER_DEPENDENT_BY_PARTITION_FUNC; SQLSTATE: HY000
         *
         * Message: Column '%s' has a partitioning function dependency and
         * cannot be dropped or renamed.
         */
        case ER_DEPENDENT_BY_PARTITION_FUNC = 3855;
        /**
         * Error number: 3856; Symbol: ER_WARN_DEPRECATED_FLOAT_AUTO_INCREMENT; SQLSTATE: HY000
         *
         * Message: AUTO_INCREMENT support for FLOAT/DOUBLE columns is
         * deprecated and will be removed in a future release. Consider
         * removing AUTO_INCREMENT from column '%s'.
         */
        case ER_WARN_DEPRECATED_FLOAT_AUTO_INCREMENT = 3856;
        /**
         * Error number: 3857; Symbol: ER_RPL_CANT_STOP_REPLICA_WHILE_LOCKED_BACKUP; SQLSTATE: HY000
         *
         * Message: Cannot stop the replica SQL thread while the instance is
         * locked for backup. Try running `UNLOCK INSTANCE` first.
         */
        case ER_RPL_CANT_STOP_REPLICA_WHILE_LOCKED_BACKUP = 3857;
        /**
         * Error number: 3858; Symbol: ER_WARN_DEPRECATED_FLOAT_DIGITS; SQLSTATE: HY000
         *
         * Message: Specifying number of digits for floating point data types
         * is deprecated and will be removed in a future release.
         */
        case ER_WARN_DEPRECATED_FLOAT_DIGITS = 3858;
        /**
         * Error number: 3859; Symbol: ER_WARN_DEPRECATED_FLOAT_UNSIGNED; SQLSTATE: HY000
         *
         * Message: UNSIGNED for decimal and floating point data types is
         * deprecated and support for it will be removed in a future release.
         */
        case ER_WARN_DEPRECATED_FLOAT_UNSIGNED = 3859;
        /**
         * Error number: 3860; Symbol: ER_WARN_DEPRECATED_INTEGER_DISPLAY_WIDTH; SQLSTATE: HY000
         *
         * Message: Integer display width is deprecated and will be removed
         * in a future release.
         */
        case ER_WARN_DEPRECATED_INTEGER_DISPLAY_WIDTH = 3860;
        /**
         * Error number: 3861; Symbol: ER_WARN_DEPRECATED_ZEROFILL; SQLSTATE: HY000
         *
         * Message: The ZEROFILL attribute is deprecated and will be removed
         * in a future release. Use the LPAD function to zero-pad numbers, or
         * store the formatted numbers in a CHAR column.
         */
        case ER_WARN_DEPRECATED_ZEROFILL = 3861;
        /**
         * Error number: 3862; Symbol: ER_CLONE_DONOR; SQLSTATE: HY000
         *
         * Message: Clone Donor Error: %s.
         */
        case ER_CLONE_DONOR = 3862;
        /**
         * Error number: 3863; Symbol: ER_CLONE_PROTOCOL; SQLSTATE: HY000
         *
         * Message: Clone received unexpected response from Donor : %s.
         */
        case ER_CLONE_PROTOCOL = 3863;
        /**
         * Error number: 3864; Symbol: ER_CLONE_DONOR_VERSION; SQLSTATE: HY000
         *
         * Message: Clone Donor MySQL version: %s is different from Recipient
         * MySQL version %s.
         */
        case ER_CLONE_DONOR_VERSION = 3864;
        /**
         * Error number: 3865; Symbol: ER_CLONE_OS; SQLSTATE: HY000
         *
         * Message: Clone Donor OS: %s is different from Recipient OS: %s.
         */
        case ER_CLONE_OS = 3865;
        /**
         * Error number: 3866; Symbol: ER_CLONE_PLATFORM; SQLSTATE: HY000
         *
         * Message: Clone Donor platform: %s is different from Recipient
         * platform: %s.
         */
        case ER_CLONE_PLATFORM = 3866;
        /**
         * Error number: 3867; Symbol: ER_CLONE_CHARSET; SQLSTATE: HY000
         *
         * Message: Clone Donor collation: %s is unavailable in Recipient.
         */
        case ER_CLONE_CHARSET = 3867;
        /**
         * Error number: 3868; Symbol: ER_CLONE_CONFIG; SQLSTATE: HY000
         *
         * Message: Clone Configuration %s: Donor value: %s is different from
         * Recipient value: %s.
         */
        case ER_CLONE_CONFIG = 3868;
        /**
         * Error number: 3869; Symbol: ER_CLONE_SYS_CONFIG; SQLSTATE: HY000
         *
         * Message: Clone system configuration: %s
         */
        case ER_CLONE_SYS_CONFIG = 3869;
        /**
         * Error number: 3870; Symbol: ER_CLONE_PLUGIN_MATCH; SQLSTATE: HY000
         *
         * Message: Clone Donor plugin %s is not active in Recipient.
         */
        case ER_CLONE_PLUGIN_MATCH = 3870;
        /**
         * Error number: 3871; Symbol: ER_CLONE_LOOPBACK; SQLSTATE: HY000
         *
         * Message: Clone cannot use loop back connection while cloning into
         * current data directory.
         */
        case ER_CLONE_LOOPBACK = 3871;
        /**
         * Error number: 3872; Symbol: ER_CLONE_ENCRYPTION; SQLSTATE: HY000
         *
         * Message: Clone needs SSL connection for encrypted table.
         */
        case ER_CLONE_ENCRYPTION = 3872;
        /**
         * Error number: 3873; Symbol: ER_CLONE_DISK_SPACE; SQLSTATE: HY000
         *
         * Message: Clone estimated database size is %s. Available space %s
         * is not enough.
         */
        case ER_CLONE_DISK_SPACE = 3873;
        /**
         * Error number: 3874; Symbol: ER_CLONE_IN_PROGRESS; SQLSTATE: HY000
         *
         * Message: Concurrent clone in progress. Please try after clone is
         * complete.
         */
        case ER_CLONE_IN_PROGRESS = 3874;
        /**
         * Error number: 3875; Symbol: ER_CLONE_DISALLOWED; SQLSTATE: HY000
         *
         * Message: The clone operation cannot be executed when %s.
         */
        case ER_CLONE_DISALLOWED = 3875;
        /**
         * Error number: 3876; Symbol: ER_CANNOT_GRANT_ROLES_TO_ANONYMOUS_USER; SQLSTATE: HY000
         *
         * Message: Cannot grant roles to an anonymous user.
         */
        case ER_CANNOT_GRANT_ROLES_TO_ANONYMOUS_USER = 3876;
        /**
         * Error number: 3877; Symbol: ER_SECONDARY_ENGINE_PLUGIN; SQLSTATE: HY000
         *
         * Message: %s
         */
        case ER_SECONDARY_ENGINE_PLUGIN = 3877;
        /**
         * Error number: 3878; Symbol: ER_SECOND_PASSWORD_CANNOT_BE_EMPTY; SQLSTATE: HY000
         *
         * Message: Empty password can not be retained as second password for
         * user '%s'@'%s'.
         */
        case ER_SECOND_PASSWORD_CANNOT_BE_EMPTY = 3878;
        /**
         * Error number: 3879; Symbol: ER_DB_ACCESS_DENIED; SQLSTATE: HY000
         *
         * Message: Access denied for AuthId `%s`@`%s` to database '%s'.
         */
        case ER_DB_ACCESS_DENIED = 3879;
        /**
         * Error number: 3880; Symbol: ER_DA_AUTH_ID_WITH_SYSTEM_USER_PRIV_IN_MANDATORY_ROLES; SQLSTATE: HY000
         *
         * Message: Cannot set mandatory_roles: AuthId `%s`@`%s` has '%s'
         * privilege.
         */
        case ER_DA_AUTH_ID_WITH_SYSTEM_USER_PRIV_IN_MANDATORY_ROLES = 3880;
        /**
         * Error number: 3881; Symbol: ER_DA_RPL_GTID_TABLE_CANNOT_OPEN; SQLSTATE: HY000
         *
         * Message: Gtid table is not ready to be used. Table '%s.%s' cannot
         * be opened.
         */
        case ER_DA_RPL_GTID_TABLE_CANNOT_OPEN = 3881;
        /**
         * Error number: 3882; Symbol: ER_GEOMETRY_IN_UNKNOWN_LENGTH_UNIT; SQLSTATE: SU001
         *
         * Message: The geometry passed to function %s is in SRID 0, which
         * doesn't specify a length unit. Can't convert to '%s'.
         */
        case ER_GEOMETRY_IN_UNKNOWN_LENGTH_UNIT = 3882;
        /**
         * Error number: 3883; Symbol: ER_DA_PLUGIN_INSTALL_ERROR; SQLSTATE: HY000
         *
         * Message: Error installing plugin '%s': %s
         */
        case ER_DA_PLUGIN_INSTALL_ERROR = 3883;
        /**
         * Error number: 3884; Symbol: ER_NO_SESSION_TEMP; SQLSTATE: HY000
         *
         * Message: Storage engine could not allocate temporary tablespace
         * for this session.
         */
        case ER_NO_SESSION_TEMP = 3884;
        /**
         * Error number: 3885; Symbol: ER_DA_UNKNOWN_ERROR_NUMBER; SQLSTATE: HY000
         *
         * Message: Got unknown error: %d
         */
        case ER_DA_UNKNOWN_ERROR_NUMBER = 3885;
        /**
         * Error number: 3886; Symbol: ER_COLUMN_CHANGE_SIZE; SQLSTATE: HY000
         *
         * Message: Could not change column '%s' of table '%s'. The resulting
         * size of index '%s' would exceed the max key length of %d bytes.
         */
        case ER_COLUMN_CHANGE_SIZE = 3886;
        /**
         * Error number: 3887; Symbol: ER_REGEXP_INVALID_CAPTURE_GROUP_NAME; SQLSTATE: HY000
         *
         * Message: A capture group has an invalid name.
         */
        case ER_REGEXP_INVALID_CAPTURE_GROUP_NAME = 3887;
        /**
         * Error number: 3888; Symbol: ER_DA_SSL_LIBRARY_ERROR; SQLSTATE: HY000
         *
         * Message: Failed to set up SSL because of the following SSL library
         * error: %s
         */
        case ER_DA_SSL_LIBRARY_ERROR = 3888;
        /**
         * Error number: 3889; Symbol: ER_SECONDARY_ENGINE; SQLSTATE: HY000
         *
         * Message: Secondary engine operation failed. %s.
         */
        case ER_SECONDARY_ENGINE = 3889;
        /**
         * Error number: 3890; Symbol: ER_SECONDARY_ENGINE_DDL; SQLSTATE: HY000
         *
         * Message: You cannot perform DDLs on a table that has a secondary
         * engine defined.
         */
        case ER_SECONDARY_ENGINE_DDL = 3890;
        /**
         * Error number: 3891; Symbol: ER_INCORRECT_CURRENT_PASSWORD; SQLSTATE: HY000
         *
         * Message: Incorrect current password. Specify the correct password
         * which has to be replaced.
         */
        case ER_INCORRECT_CURRENT_PASSWORD = 3891;
        /**
         * Error number: 3892; Symbol: ER_MISSING_CURRENT_PASSWORD; SQLSTATE: HY000
         *
         * Message: Current password needs to be specified in the REPLACE
         * clause in order to change it.
         */
        case ER_MISSING_CURRENT_PASSWORD = 3892;
        /**
         * Error number: 3893; Symbol: ER_CURRENT_PASSWORD_NOT_REQUIRED; SQLSTATE: HY000
         *
         * Message: Do not specify the current password while changing it for
         * other users.
         */
        case ER_CURRENT_PASSWORD_NOT_REQUIRED = 3893;
        /**
         * Error number: 3894; Symbol: ER_PASSWORD_CANNOT_BE_RETAINED_ON_PLUGIN_CHANGE; SQLSTATE: HY000
         *
         * Message: Current password can not be retained for user '%s'@'%s'
         * because authentication plugin is being changed.
         */
        case ER_PASSWORD_CANNOT_BE_RETAINED_ON_PLUGIN_CHANGE = 3894;
        /**
         * Error number: 3895; Symbol: ER_CURRENT_PASSWORD_CANNOT_BE_RETAINED; SQLSTATE: HY000
         *
         * Message: Current password can not be retained for user '%s'@'%s'
         * because new password is empty.
         */
        case ER_CURRENT_PASSWORD_CANNOT_BE_RETAINED = 3895;
        /**
         * Error number: 3896; Symbol: ER_PARTIAL_REVOKES_EXIST; SQLSTATE: HY000
         *
         * Message: At least one partial revoke exists on a database. The
         * system variable '@@partial_revokes' must be set to ON.
         */
        case ER_PARTIAL_REVOKES_EXIST = 3896;
        /**
         * Error number: 3897; Symbol: ER_CANNOT_GRANT_SYSTEM_PRIV_TO_MANDATORY_ROLE; SQLSTATE: HY000
         *
         * Message: AuthId `%s`@`%s` is set as mandatory_roles. Cannot grant
         * the '%s' privilege.
         */
        case ER_CANNOT_GRANT_SYSTEM_PRIV_TO_MANDATORY_ROLE = 3897;
        /**
         * Error number: 3898; Symbol: ER_XA_REPLICATION_FILTERS; SQLSTATE: HY000
         *
         * Message: The use of replication filters with XA transactions is
         * not supported, and can lead to an undefined state in the replica.
         */
        case ER_XA_REPLICATION_FILTERS = 3898;
        /**
         * Error number: 3899; Symbol: ER_UNSUPPORTED_SQL_MODE; SQLSTATE: HY000
         *
         * Message: sql_mode=0x%08x is not supported.
         */
        case ER_UNSUPPORTED_SQL_MODE = 3899;
        /**
         * Error number: 3900; Symbol: ER_REGEXP_INVALID_FLAG; SQLSTATE: HY000
         *
         * Message: Invalid match mode flag in regular expression.
         */
        case ER_REGEXP_INVALID_FLAG = 3900;
        /**
         * Error number: 3901; Symbol: ER_PARTIAL_REVOKE_AND_DB_GRANT_BOTH_EXISTS; SQLSTATE: HY000
         *
         * Message: '%s' privilege for database '%s' exists both as partial
         * revoke and mysql.db simultaneously. It could mean that the 'mysql'
         * schema is corrupted.
         */
        case ER_PARTIAL_REVOKE_AND_DB_GRANT_BOTH_EXISTS = 3901;
        /**
         * Error number: 3902; Symbol: ER_UNIT_NOT_FOUND; SQLSTATE: SU001
         *
         * Message: There's no unit of measure named '%s'.
         */
        case ER_UNIT_NOT_FOUND = 3902;
        /**
         * Error number: 3903; Symbol: ER_INVALID_JSON_VALUE_FOR_FUNC_INDEX; SQLSTATE: 22018
         *
         * Message: Invalid JSON value for CAST for functional index '%s'.
         */
        case ER_INVALID_JSON_VALUE_FOR_FUNC_INDEX = 3903;
        /**
         * Error number: 3904; Symbol: ER_JSON_VALUE_OUT_OF_RANGE_FOR_FUNC_INDEX; SQLSTATE: 22003
         *
         * Message: Out of range JSON value for CAST for functional index
         * '%s'.
         */
        case ER_JSON_VALUE_OUT_OF_RANGE_FOR_FUNC_INDEX = 3904;
        /**
         * Error number: 3905; Symbol: ER_EXCEEDED_MV_KEYS_NUM; SQLSTATE: HY000
         *
         * Message: Exceeded max number of values per record for multi-valued
         * index '%s' by %u value(s).
         */
        case ER_EXCEEDED_MV_KEYS_NUM = 3905;
        /**
         * Error number: 3906; Symbol: ER_EXCEEDED_MV_KEYS_SPACE; SQLSTATE: HY000
         *
         * Message: Exceeded max total length of values per record for
         * multi-valued index '%s' by %u bytes.
         */
        case ER_EXCEEDED_MV_KEYS_SPACE = 3906;
        /**
         * Error number: 3907; Symbol: ER_FUNCTIONAL_INDEX_DATA_IS_TOO_LONG; SQLSTATE: 22001
         *
         * Message: Data too long for functional index '%s'.
         */
        case ER_FUNCTIONAL_INDEX_DATA_IS_TOO_LONG = 3907;
        /**
         * Error number: 3908; Symbol: ER_WRONG_MVI_VALUE; SQLSTATE: HY000
         *
         * Message: Cannot store an array or an object in a scalar key part
         * of the index '%s'.
         */
        case ER_WRONG_MVI_VALUE = 3908;
        /**
         * Error number: 3909; Symbol: ER_WARN_FUNC_INDEX_NOT_APPLICABLE; SQLSTATE: HY000
         *
         * Message: Cannot use functional index '%s' due to type or collation
         * conversion.
         */
        case ER_WARN_FUNC_INDEX_NOT_APPLICABLE = 3909;
        /**
         * Error number: 3910; Symbol: ER_GRP_RPL_UDF_ERROR; SQLSTATE: HY000
         *
         * Message: The function '%s' failed. %s
         */
        case ER_GRP_RPL_UDF_ERROR = 3910;
        /**
         * Error number: 3911; Symbol: ER_UPDATE_GTID_PURGED_WITH_GR; SQLSTATE: HY000
         *
         * Message: Cannot update GTID_PURGED with the Group Replication
         * plugin running
         */
        case ER_UPDATE_GTID_PURGED_WITH_GR = 3911;
        /**
         * Error number: 3912; Symbol: ER_GROUPING_ON_TIMESTAMP_IN_DST; SQLSTATE: HY000
         *
         * Message: Grouping on temporal is non-deterministic for timezones
         * having DST. Please consider switching to UTC for this query.
         */
        case ER_GROUPING_ON_TIMESTAMP_IN_DST = 3912;
        /**
         * Error number: 3913; Symbol: ER_TABLE_NAME_CAUSES_TOO_LONG_PATH; SQLSTATE: HY000
         *
         * Message: Long database name and identifier for object resulted in
         * a path length too long for table '%s'. Please check the path limit
         * for your OS.
         */
        case ER_TABLE_NAME_CAUSES_TOO_LONG_PATH = 3913;
        /**
         * Error number: 3914; Symbol: ER_AUDIT_LOG_INSUFFICIENT_PRIVILEGE; SQLSTATE: HY000
         *
         * Message: Request ignored for '%s'@'%s'. Role needed to perform
         * operation: '%s'
         */
        case ER_AUDIT_LOG_INSUFFICIENT_PRIVILEGE = 3914;
        /**
         * Error number: 3916; Symbol: ER_DA_GRP_RPL_STARTED_AUTO_REJOIN; SQLSTATE: HY000
         *
         * Message: Started auto-rejoin procedure attempt %lu of %lu
         */
        case ER_DA_GRP_RPL_STARTED_AUTO_REJOIN = 3916;
        /**
         * Error number: 3917; Symbol: ER_SYSVAR_CHANGE_DURING_QUERY; SQLSTATE: HY000
         *
         * Message: A plugin was loaded or unloaded during a query, a system
         * variable table was changed.
         */
        case ER_SYSVAR_CHANGE_DURING_QUERY = 3917;
        /**
         * Error number: 3918; Symbol: ER_GLOBSTAT_CHANGE_DURING_QUERY; SQLSTATE: HY000
         *
         * Message: A plugin was loaded or unloaded during a query, a global
         * status variable was changed.
         */
        case ER_GLOBSTAT_CHANGE_DURING_QUERY = 3918;
        /**
         * Error number: 3919; Symbol: ER_GRP_RPL_MESSAGE_SERVICE_INIT_FAILURE; SQLSTATE: HY000
         *
         * Message: The START GROUP_REPLICATION command failed to start its
         * message service.
         */
        case ER_GRP_RPL_MESSAGE_SERVICE_INIT_FAILURE = 3919;
        /**
         * Error number: 3920; Symbol: ER_CHANGE_SOURCE_WRONG_COMPRESSION_ALGORITHM_CLIENT; SQLSTATE: HY000
         *
         * Message: Invalid SOURCE_COMPRESSION_ALGORITHMS '%s' for channel
         * '%s'.
         */
        case ER_CHANGE_SOURCE_WRONG_COMPRESSION_ALGORITHM_CLIENT = 3920;
        /**
         * Error number: 3921; Symbol: ER_CHANGE_SOURCE_WRONG_COMPRESSION_LEVEL_CLIENT; SQLSTATE: HY000
         *
         * Message: Invalid SOURCE_ZSTD_COMPRESSION_LEVEL %u for channel
         * '%s'.
         */
        case ER_CHANGE_SOURCE_WRONG_COMPRESSION_LEVEL_CLIENT = 3921;
        /**
         * Error number: 3922; Symbol: ER_WRONG_COMPRESSION_ALGORITHM_CLIENT; SQLSTATE: HY000
         *
         * Message: Invalid compression algorithm '%s'.
         */
        case ER_WRONG_COMPRESSION_ALGORITHM_CLIENT = 3922;
        /**
         * Error number: 3923; Symbol: ER_WRONG_COMPRESSION_LEVEL_CLIENT; SQLSTATE: HY000
         *
         * Message: Invalid zstd compression level for algorithm '%s'.
         */
        case ER_WRONG_COMPRESSION_LEVEL_CLIENT = 3923;
        /**
         * Error number: 3924; Symbol: ER_CHANGE_SOURCE_WRONG_COMPRESSION_ALGORITHM_LIST_CLIENT; SQLSTATE: HY000
         *
         * Message: Specified compression algorithm list '%s' exceeds total
         * count of 3 for channel '%s'.
         */
        case ER_CHANGE_SOURCE_WRONG_COMPRESSION_ALGORITHM_LIST_CLIENT = 3924;
        /**
         * Error number: 3925; Symbol: ER_CLIENT_PRIVILEGE_CHECKS_USER_CANNOT_BE_ANONYMOUS; SQLSTATE: HY000
         *
         * Message: PRIVILEGE_CHECKS_USER for replication channel '%s' was
         * set to ``@`%s`, but anonymous users are disallowed for
         * PRIVILEGE_CHECKS_USER.
         */
        case ER_CLIENT_PRIVILEGE_CHECKS_USER_CANNOT_BE_ANONYMOUS = 3925;
        /**
         * Error number: 3926; Symbol: ER_CLIENT_PRIVILEGE_CHECKS_USER_DOES_NOT_EXIST; SQLSTATE: HY000
         *
         * Message: PRIVILEGE_CHECKS_USER for replication channel '%s' was
         * set to `%s`@`%s`, but this is not an existing user.
         */
        case ER_CLIENT_PRIVILEGE_CHECKS_USER_DOES_NOT_EXIST = 3926;
        /**
         * Error number: 3927; Symbol: ER_CLIENT_PRIVILEGE_CHECKS_USER_CORRUPT; SQLSTATE: HY000
         *
         * Message: Invalid, corrupted PRIVILEGE_CHECKS_USER was found in the
         * replication configuration repository for channel '%s'. Use CHANGE
         * REPLICATION SOURCE TO PRIVILEGE_CHECKS_USER to correct the
         * configuration.
         */
        case ER_CLIENT_PRIVILEGE_CHECKS_USER_CORRUPT = 3927;
        /**
         * Error number: 3928; Symbol: ER_CLIENT_PRIVILEGE_CHECKS_USER_NEEDS_RPL_APPLIER_PRIV; SQLSTATE: HY000
         *
         * Message: PRIVILEGE_CHECKS_USER for replication channel '%s' was
         * set to `%s`@`%s`, but this user does not have REPLICATION_APPLIER
         * privilege.
         */
        case ER_CLIENT_PRIVILEGE_CHECKS_USER_NEEDS_RPL_APPLIER_PRIV = 3928;
        /**
         * Error number: 3929; Symbol: ER_WARN_DA_PRIVILEGE_NOT_REGISTERED; SQLSTATE: HY000
         *
         * Message: Dynamic privilege '%s' is not registered with the server.
         */
        case ER_WARN_DA_PRIVILEGE_NOT_REGISTERED = 3929;
        /**
         * Error number: 3930; Symbol: ER_CLIENT_KEYRING_UDF_KEY_INVALID; SQLSTATE: HY000
         *
         * Message: Function '%s' failed because key is invalid.
         */
        case ER_CLIENT_KEYRING_UDF_KEY_INVALID = 3930;
        /**
         * Error number: 3931; Symbol: ER_CLIENT_KEYRING_UDF_KEY_TYPE_INVALID; SQLSTATE: HY000
         *
         * Message: Function '%s' failed because key type is invalid.
         */
        case ER_CLIENT_KEYRING_UDF_KEY_TYPE_INVALID = 3931;
        /**
         * Error number: 3932; Symbol: ER_CLIENT_KEYRING_UDF_KEY_TOO_LONG; SQLSTATE: HY000
         *
         * Message: Function '%s' failed because key length is too long.
         */
        case ER_CLIENT_KEYRING_UDF_KEY_TOO_LONG = 3932;
        /**
         * Error number: 3933; Symbol: ER_CLIENT_KEYRING_UDF_KEY_TYPE_TOO_LONG; SQLSTATE: HY000
         *
         * Message: Function '%s' failed because key type is too long.
         */
        case ER_CLIENT_KEYRING_UDF_KEY_TYPE_TOO_LONG = 3933;
        /**
         * Error number: 3934; Symbol: ER_JSON_SCHEMA_VALIDATION_ERROR_WITH_DETAILED_REPORT; SQLSTATE: HY000
         *
         * Message: %s.
         */
        case ER_JSON_SCHEMA_VALIDATION_ERROR_WITH_DETAILED_REPORT = 3934;
        /**
         * Error number: 3935; Symbol: ER_DA_UDF_INVALID_CHARSET_SPECIFIED; SQLSTATE: HY000
         *
         * Message: Invalid character set '%s' was specified. It must be
         * either character set name or collation name as supported by
         * server.
         */
        case ER_DA_UDF_INVALID_CHARSET_SPECIFIED = 3935;
        /**
         * Error number: 3936; Symbol: ER_DA_UDF_INVALID_CHARSET; SQLSTATE: HY000
         *
         * Message: Invalid character set '%s' was specified. It must be a
         * character set name as supported by server.
         */
        case ER_DA_UDF_INVALID_CHARSET = 3936;
        /**
         * Error number: 3937; Symbol: ER_DA_UDF_INVALID_COLLATION; SQLSTATE: HY000
         *
         * Message: Invalid collation '%s' was specified. It must be a
         * collation name as supported by server.
         */
        case ER_DA_UDF_INVALID_COLLATION = 3937;
        /**
         * Error number: 3938; Symbol: ER_DA_UDF_INVALID_EXTENSION_ARGUMENT_TYPE; SQLSTATE: HY000
         *
         * Message: Invalid extension argument type '%s' was specified. Refer
         * the MySQL manual for the valid UDF extension arguments type.
         */
        case ER_DA_UDF_INVALID_EXTENSION_ARGUMENT_TYPE = 3938;
        /**
         * Error number: 3939; Symbol: ER_MULTIPLE_CONSTRAINTS_WITH_SAME_NAME; SQLSTATE: HY000
         *
         * Message: Table has multiple constraints with the name '%s'. Please
         * use constraint specific '%s' clause.
         */
        case ER_MULTIPLE_CONSTRAINTS_WITH_SAME_NAME = 3939;
        /**
         * Error number: 3940; Symbol: ER_CONSTRAINT_NOT_FOUND; SQLSTATE: HY000
         *
         * Message: Constraint '%s' does not exist.
         */
        case ER_CONSTRAINT_NOT_FOUND = 3940;
        /**
         * Error number: 3941; Symbol: ER_ALTER_CONSTRAINT_ENFORCEMENT_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Altering constraint enforcement is not supported for the
         * constraint '%s'. Enforcement state alter is not supported for the
         * PRIMARY, UNIQUE and FOREIGN KEY type constraints.
         */
        case ER_ALTER_CONSTRAINT_ENFORCEMENT_NOT_SUPPORTED = 3941;
        /**
         * Error number: 3942; Symbol: ER_TABLE_VALUE_CONSTRUCTOR_MUST_HAVE_COLUMNS; SQLSTATE: HY000
         *
         * Message: Each row of a VALUES clause must have at least one
         * column, unless when used as source in an INSERT statement.
         */
        case ER_TABLE_VALUE_CONSTRUCTOR_MUST_HAVE_COLUMNS = 3942;
        /**
         * Error number: 3943; Symbol: ER_TABLE_VALUE_CONSTRUCTOR_CANNOT_HAVE_DEFAULT; SQLSTATE: HY000
         *
         * Message: A VALUES clause cannot use DEFAULT values, unless used as
         * a source in an INSERT statement.
         */
        case ER_TABLE_VALUE_CONSTRUCTOR_CANNOT_HAVE_DEFAULT = 3943;
        /**
         * Error number: 3944; Symbol: ER_CLIENT_QUERY_FAILURE_INVALID_NON_ROW_FORMAT; SQLSTATE: HY000
         *
         * Message: The query does not comply with variable
         * require_row_format restrictions.
         */
        case ER_CLIENT_QUERY_FAILURE_INVALID_NON_ROW_FORMAT = 3944;
        /**
         * Error number: 3945; Symbol: ER_REQUIRE_ROW_FORMAT_INVALID_VALUE; SQLSTATE: HY000
         *
         * Message: The requested value %s is invalid for REQUIRE_ROW_FORMAT; must be either 0 or 1.
         */
        case ER_REQUIRE_ROW_FORMAT_INVALID_VALUE = 3945;
        /**
         * Error number: 3946; Symbol: ER_FAILED_TO_DETERMINE_IF_ROLE_IS_MANDATORY; SQLSTATE: HY000
         *
         * Message: Failed to acquire lock on user management service, unable
         * to determine if role `%s`@`%s` is mandatory
         */
        case ER_FAILED_TO_DETERMINE_IF_ROLE_IS_MANDATORY = 3946;
        /**
         * Error number: 3947; Symbol: ER_FAILED_TO_FETCH_MANDATORY_ROLE_LIST; SQLSTATE: HY000
         *
         * Message: Failed to acquire lock on user management service, unable
         * to fetch mandatory role list
         */
        case ER_FAILED_TO_FETCH_MANDATORY_ROLE_LIST = 3947;
        /**
         * Error number: 3948; Symbol: ER_CLIENT_LOCAL_FILES_DISABLED; SQLSTATE: 42000
         *
         * Message: Loading local data is disabled; this must be enabled on
         * both the client and server sides
         */
        case ER_CLIENT_LOCAL_FILES_DISABLED = 3948;
        /**
         * Error number: 3949; Symbol: ER_IMP_INCOMPATIBLE_CFG_VERSION; SQLSTATE: HY000
         *
         * Message: Failed to import %s because the CFG file version (%u) is
         * not compatible with the current version (%u)
         */
        case ER_IMP_INCOMPATIBLE_CFG_VERSION = 3949;
        /**
         * Error number: 3950; Symbol: ER_DA_OOM; SQLSTATE: HY000
         *
         * Message: Out of memory
         */
        case ER_DA_OOM = 3950;
        /**
         * Error number: 3951; Symbol: ER_DA_UDF_INVALID_ARGUMENT_TO_SET_CHARSET; SQLSTATE: HY000
         *
         * Message: Character set can be set only for the UDF argument type
         * STRING.
         */
        case ER_DA_UDF_INVALID_ARGUMENT_TO_SET_CHARSET = 3951;
        /**
         * Error number: 3952; Symbol: ER_DA_UDF_INVALID_RETURN_TYPE_TO_SET_CHARSET; SQLSTATE: HY000
         *
         * Message: Character set can be set only for the UDF RETURN type
         * STRING.
         */
        case ER_DA_UDF_INVALID_RETURN_TYPE_TO_SET_CHARSET = 3952;
        /**
         * Error number: 3953; Symbol: ER_MULTIPLE_INTO_CLAUSES; SQLSTATE: HY000
         *
         * Message: Multiple INTO clauses in one query block.
         */
        case ER_MULTIPLE_INTO_CLAUSES = 3953;
        /**
         * Error number: 3954; Symbol: ER_MISPLACED_INTO; SQLSTATE: HY000
         *
         * Message: Misplaced INTO clause, INTO is not allowed inside
         * subqueries, and must be placed at end of UNION clauses.
         */
        case ER_MISPLACED_INTO = 3954;
        /**
         * Error number: 3955; Symbol: ER_USER_ACCESS_DENIED_FOR_USER_ACCOUNT_BLOCKED_BY_PASSWORD_LOCK; SQLSTATE: HY000
         *
         * Message: Access denied for user '%s'@'%s'. Account is blocked for
         * %s day(s) (%s day(s) remaining) due to %u consecutive failed
         * logins.
         */
        case ER_USER_ACCESS_DENIED_FOR_USER_ACCOUNT_BLOCKED_BY_PASSWORD_LOCK = 3955;
        /**
         * Error number: 3956; Symbol: ER_WARN_DEPRECATED_YEAR_UNSIGNED; SQLSTATE: HY000
         *
         * Message: UNSIGNED for the YEAR data type is deprecated and support
         * for it will be removed in a future release.
         */
        case ER_WARN_DEPRECATED_YEAR_UNSIGNED = 3956;
        /**
         * Error number: 3957; Symbol: ER_CLONE_NETWORK_PACKET; SQLSTATE: HY000
         *
         * Message: Clone needs max_allowed_packet value to be %u or more.
         * Current value is %u
         */
        case ER_CLONE_NETWORK_PACKET = 3957;
        /**
         * Error number: 3958; Symbol: ER_SDI_OPERATION_FAILED_MISSING_RECORD; SQLSTATE: HY000
         *
         * Message: Failed to %s sdi for %s.%s in %s due to missing record.
         */
        case ER_SDI_OPERATION_FAILED_MISSING_RECORD = 3958;
        /**
         * Error number: 3959; Symbol: ER_DEPENDENT_BY_CHECK_CONSTRAINT; SQLSTATE: HY000
         *
         * Message: Check constraint '%s' uses column '%s', hence column
         * cannot be dropped or renamed.
         */
        case ER_DEPENDENT_BY_CHECK_CONSTRAINT = 3959;
        /**
         * Error number: 3960; Symbol: ER_GRP_OPERATION_NOT_ALLOWED_GR_MUST_STOP; SQLSTATE: HY000
         *
         * Message: This operation cannot be performed while Group
         * Replication is running; run STOP GROUP_REPLICATION first
         */
        case ER_GRP_OPERATION_NOT_ALLOWED_GR_MUST_STOP = 3960;
        /**
         * Error number: 3961; Symbol: ER_WARN_DEPRECATED_JSON_TABLE_ON_ERROR_ON_EMPTY; SQLSTATE: HY000
         *
         * Message: Specifying an ON EMPTY clause after the ON ERROR clause
         * in a JSON_TABLE column definition is deprecated syntax and will be
         * removed in a future release. Specify ON EMPTY before ON ERROR
         * instead.
         */
        case ER_WARN_DEPRECATED_JSON_TABLE_ON_ERROR_ON_EMPTY = 3961;
        /**
         * Error number: 3962; Symbol: ER_WARN_DEPRECATED_INNER_INTO; SQLSTATE: HY000
         *
         * Message: The INTO clause is deprecated inside query blocks of
         * query expressions and will be removed in a future release. Please
         * move the INTO clause to the end of statement instead.
         */
        case ER_WARN_DEPRECATED_INNER_INTO = 3962;
        /**
         * Error number: 3963; Symbol: ER_WARN_DEPRECATED_VALUES_FUNCTION_ALWAYS_NULL; SQLSTATE: HY000
         *
         * Message: The VALUES function is deprecated and will be removed in
         * a future release. It always returns NULL in this context. If you
         * meant to access a value from the VALUES clause of the INSERT
         * statement, consider using an alias (INSERT INTO ... VALUES (...)
         * AS alias) and reference alias.col instead of VALUES(col) in the ON
         * DUPLICATE KEY UPDATE clause.
         */
        case ER_WARN_DEPRECATED_VALUES_FUNCTION_ALWAYS_NULL = 3963;
        /**
         * Error number: 3964; Symbol: ER_WARN_DEPRECATED_SQL_CALC_FOUND_ROWS; SQLSTATE: HY000
         *
         * Message: SQL_CALC_FOUND_ROWS is deprecated and will be removed in
         * a future release. Consider using two separate queries instead.
         */
        case ER_WARN_DEPRECATED_SQL_CALC_FOUND_ROWS = 3964;
        /**
         * Error number: 3965; Symbol: ER_WARN_DEPRECATED_FOUND_ROWS; SQLSTATE: HY000
         *
         * Message: FOUND_ROWS() is deprecated and will be removed in a
         * future release. Consider using COUNT(*) instead.
         */
        case ER_WARN_DEPRECATED_FOUND_ROWS = 3965;
        /**
         * Error number: 3966; Symbol: ER_MISSING_JSON_VALUE; SQLSTATE: 22035
         *
         * Message: No value was found by '%s' on the specified path.
         */
        case ER_MISSING_JSON_VALUE = 3966;
        /**
         * Error number: 3967; Symbol: ER_MULTIPLE_JSON_VALUES; SQLSTATE: 22034
         *
         * Message: More than one value was found by '%s' on the specified
         * path.
         */
        case ER_MULTIPLE_JSON_VALUES = 3967;
        /**
         * Error number: 3968; Symbol: ER_HOSTNAME_TOO_LONG; SQLSTATE: HY000
         *
         * Message: Hostname cannot be longer than %d characters.
         */
        case ER_HOSTNAME_TOO_LONG = 3968;
        /**
         * Error number: 3970; Symbol: ER_GROUP_REPLICATION_USER_EMPTY_MSG; SQLSTATE: HY000
         *
         * Message: The START GROUP_REPLICATION command failed since the
         * username provided for recovery channel is empty.
         */
        case ER_GROUP_REPLICATION_USER_EMPTY_MSG = 3970;
        /**
         * Error number: 3971; Symbol: ER_GROUP_REPLICATION_USER_MANDATORY_MSG; SQLSTATE: HY000
         *
         * Message: The START GROUP_REPLICATION command failed since the USER
         * option was not provided with PASSWORD for recovery channel.
         */
        case ER_GROUP_REPLICATION_USER_MANDATORY_MSG = 3971;
        /**
         * Error number: 3972; Symbol: ER_GROUP_REPLICATION_PASSWORD_LENGTH; SQLSTATE: HY000
         *
         * Message: The START GROUP_REPLICATION command failed since the
         * password provided for the recovery channel exceeds the maximum
         * length of 32 characters.
         */
        case ER_GROUP_REPLICATION_PASSWORD_LENGTH = 3972;
        /**
         * Error number: 3973; Symbol: ER_SUBQUERY_TRANSFORM_REJECTED; SQLSTATE: HY000
         *
         * Message: Statement requires a transform of a subquery to a non-SET
         * operation (like IN2EXISTS, or subquery-to-LATERAL-derived-table).
         * This is not allowed with optimizer switch 'subquery_to_derived'
         * on.
         */
        case ER_SUBQUERY_TRANSFORM_REJECTED = 3973;
        /**
         * Error number: 3974; Symbol: ER_DA_GRP_RPL_RECOVERY_ENDPOINT_FORMAT; SQLSTATE: HY000
         *
         * Message: Invalid input value for recovery socket endpoints '%s'.
         * Please, provide a valid, comma separated, list of endpoints
         * (IP:port).
         */
        case ER_DA_GRP_RPL_RECOVERY_ENDPOINT_FORMAT = 3974;
        /**
         * Error number: 3975; Symbol: ER_DA_GRP_RPL_RECOVERY_ENDPOINT_INVALID; SQLSTATE: HY000
         *
         * Message: The server is not listening on endpoint '%s'. Only
         * endpoints that the server is listening on are valid recovery
         * endpoints.
         */
        case ER_DA_GRP_RPL_RECOVERY_ENDPOINT_INVALID = 3975;
        /**
         * Error number: 3976; Symbol: ER_WRONG_VALUE_FOR_VAR_PLUS_ACTIONABLE_PART; SQLSTATE: HY000
         *
         * Message: Variable '%s' cannot be set to the value of '%s'. %s
         */
        case ER_WRONG_VALUE_FOR_VAR_PLUS_ACTIONABLE_PART = 3976;
        /**
         * Error number: 3977; Symbol: ER_STATEMENT_NOT_ALLOWED_AFTER_START_TRANSACTION; SQLSTATE: HY000
         *
         * Message: Only BINLOG INSERT, COMMIT and ROLLBACK statements are
         * allowed after CREATE TABLE with START TRANSACTION statement.
         */
        case ER_STATEMENT_NOT_ALLOWED_AFTER_START_TRANSACTION = 3977;
        /**
         * Error number: 3978; Symbol: ER_FOREIGN_KEY_WITH_ATOMIC_CREATE_SELECT; SQLSTATE: HY000
         *
         * Message: Foreign key creation is not allowed with CREATE TABLE as
         * SELECT and CREATE TABLE with START TRANSACTION statement.
         */
        case ER_FOREIGN_KEY_WITH_ATOMIC_CREATE_SELECT = 3978;
        /**
         * Error number: 3979; Symbol: ER_NOT_ALLOWED_WITH_START_TRANSACTION; SQLSTATE: HY000
         *
         * Message: START TRANSACTION clause cannot be used %s
         */
        case ER_NOT_ALLOWED_WITH_START_TRANSACTION = 3979;
        /**
         * Error number: 3980; Symbol: ER_INVALID_JSON_ATTRIBUTE; SQLSTATE: HY000
         *
         * Message: Invalid json attribute, error: "%s" at pos %u: '%s'
         */
        case ER_INVALID_JSON_ATTRIBUTE = 3980;
        /**
         * Error number: 3981; Symbol: ER_ENGINE_ATTRIBUTE_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Storage engine '%s' does not support ENGINE_ATTRIBUTE.
         */
        case ER_ENGINE_ATTRIBUTE_NOT_SUPPORTED = 3981;
        /**
         * Error number: 3982; Symbol: ER_INVALID_USER_ATTRIBUTE_JSON; SQLSTATE: HY000
         *
         * Message: The user attribute must be a valid JSON object
         */
        case ER_INVALID_USER_ATTRIBUTE_JSON = 3982;
        /**
         * Error number: 3983; Symbol: ER_INNODB_REDO_DISABLED; SQLSTATE: HY000
         *
         * Message: Cannot perform operation as InnoDB redo logging is
         * disabled. Please retry after enabling redo log with ALTER INSTANCE
         */
        case ER_INNODB_REDO_DISABLED = 3983;
        /**
         * Error number: 3984; Symbol: ER_INNODB_REDO_ARCHIVING_ENABLED; SQLSTATE: HY000
         *
         * Message: Cannot perform operation as InnoDB is archiving redo log.
         * Please retry after stopping redo archive by invoking
         * innodb_redo_log_archive_stop()
         */
        case ER_INNODB_REDO_ARCHIVING_ENABLED = 3984;
        /**
         * Error number: 3985; Symbol: ER_MDL_OUT_OF_RESOURCES; SQLSTATE: HY000
         *
         * Message: Not enough resources to complete lock request.
         */
        case ER_MDL_OUT_OF_RESOURCES = 3985;
        /**
         * Error number: 3986; Symbol: ER_IMPLICIT_COMPARISON_FOR_JSON; SQLSTATE: HY000
         *
         * Message: Evaluating a JSON value in SQL boolean context does an
         * implicit comparison against JSON integer 0; if this is not what
         * you want, consider converting JSON to a SQL numeric type with
         * JSON_VALUE RETURNING
         */
        case ER_IMPLICIT_COMPARISON_FOR_JSON = 3986;
        /**
         * Error number: 3987; Symbol: ER_FUNCTION_DOES_NOT_SUPPORT_CHARACTER_SET; SQLSTATE: HY000
         *
         * Message: The function %s does not support the character set '%s'.
         */
        case ER_FUNCTION_DOES_NOT_SUPPORT_CHARACTER_SET = 3987;
        /**
         * Error number: 3988; Symbol: ER_IMPOSSIBLE_STRING_CONVERSION; SQLSTATE: HY000
         *
         * Message: Conversion from collation %s into %s impossible for %s
         */
        case ER_IMPOSSIBLE_STRING_CONVERSION = 3988;
        /**
         * Error number: 3989; Symbol: ER_SCHEMA_READ_ONLY; SQLSTATE: HY000
         *
         * Message: Schema '%s' is in read only mode.
         */
        case ER_SCHEMA_READ_ONLY = 3989;
        /**
         * Error number: 3990; Symbol: ER_RPL_ASYNC_RECONNECT_GTID_MODE_OFF; SQLSTATE: HY000
         *
         * Message: Failed to enable Asynchronous Replication Connection
         * Failover feature. The CHANGE REPLICATION SOURCE TO
         * SOURCE_CONNECTION_AUTO_FAILOVER = 1 can only be set when
         * @@GLOBAL.GTID_MODE = ON.
         */
        case ER_RPL_ASYNC_RECONNECT_GTID_MODE_OFF = 3990;
        /**
         * Error number: 3991; Symbol: ER_RPL_ASYNC_RECONNECT_AUTO_POSITION_OFF; SQLSTATE: HY000
         *
         * Message: Failed to enable Asynchronous Replication Connection
         * Failover feature. The CHANGE REPLICATION SOURCE TO
         * SOURCE_CONNECTION_AUTO_FAILOVER = 1 can only be set when
         * SOURCE_AUTO_POSITION option of CHANGE REPLICATION SOURCE TO is
         * enabled.
         */
        case ER_RPL_ASYNC_RECONNECT_AUTO_POSITION_OFF = 3991;
        /**
         * Error number: 3992; Symbol: ER_DISABLE_GTID_MODE_REQUIRES_ASYNC_RECONNECT_OFF; SQLSTATE: HY000
         *
         * Message: The @@GLOBAL.GTID_MODE = %s cannot be executed because
         * Asynchronous Replication Connection Failover is enabled i.e.
         * CHANGE REPLICATION SOURCE TO SOURCE_CONNECTION_AUTO_FAILOVER = 1.
         */
        case ER_DISABLE_GTID_MODE_REQUIRES_ASYNC_RECONNECT_OFF = 3992;
        /**
         * Error number: 3993; Symbol: ER_DISABLE_AUTO_POSITION_REQUIRES_ASYNC_RECONNECT_OFF; SQLSTATE: HY000
         *
         * Message: CHANGE REPLICATION SOURCE TO SOURCE_AUTO_POSITION = 0
         * cannot be executed because Asynchronous Replication Connection
         * Failover is enabled i.e. CHANGE REPLICATION SOURCE TO
         * SOURCE_CONNECTION_AUTO_FAILOVER = 1.
         */
        case ER_DISABLE_AUTO_POSITION_REQUIRES_ASYNC_RECONNECT_OFF = 3993;
        /**
         * Error number: 3994; Symbol: ER_INVALID_PARAMETER_USE; SQLSTATE: HY000
         *
         * Message: Invalid use of parameters in '%s'
         */
        case ER_INVALID_PARAMETER_USE = 3994;
        /**
         * Error number: 3995; Symbol: ER_CHARACTER_SET_MISMATCH; SQLSTATE: HY000
         *
         * Message: Character set '%s' cannot be used in conjunction with
         * '%s' in call to %s.
         */
        case ER_CHARACTER_SET_MISMATCH = 3995;
        /**
         * Error number: 3996; Symbol: ER_WARN_VAR_VALUE_CHANGE_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Changing %s not supported on this platform. Falling back
         * to the default.
         */
        case ER_WARN_VAR_VALUE_CHANGE_NOT_SUPPORTED = 3996;
        /**
         * Error number: 3997; Symbol: ER_INVALID_TIME_ZONE_INTERVAL; SQLSTATE: HY000
         *
         * Message: Invalid time zone interval: '%s'
         */
        case ER_INVALID_TIME_ZONE_INTERVAL = 3997;
        /**
         * Error number: 3998; Symbol: ER_INVALID_CAST; SQLSTATE: HY000
         *
         * Message: Cannot cast value to %s.
         */
        case ER_INVALID_CAST = 3998;
        /**
         * Error number: 3999; Symbol: ER_HYPERGRAPH_NOT_SUPPORTED_YET; SQLSTATE: 42000
         *
         * Message: The hypergraph optimizer does not yet support '%s'
         */
        case ER_HYPERGRAPH_NOT_SUPPORTED_YET = 3999;
        /**
         * Error number: 4001; Symbol: ER_DA_NO_ERROR_LOG_PARSER_CONFIGURED; SQLSTATE: HY000
         *
         * Message: None of the log-sinks selected with
         * --log-error-services=... provides a log-parser. The server will
         * not be able to make the previous runs' error-logs available in
         * performance_schema.error_log.
         */
        case ER_DA_NO_ERROR_LOG_PARSER_CONFIGURED = 4001;
        /**
         * Error number: 4002; Symbol: ER_DA_ERROR_LOG_TABLE_DISABLED; SQLSTATE: HY000
         *
         * Message: None of the log-sinks selected in
         * @@global.log_error_services supports writing to the performance
         * schema. The server will not be able to make the current runs'
         * error events available in performance_schema.error_log. To change
         * this, add a log-sink that supports the performance schema to
         * @@global.log_error_services.
         */
        case ER_DA_ERROR_LOG_TABLE_DISABLED = 4002;
        /**
         * Error number: 4003; Symbol: ER_DA_ERROR_LOG_MULTIPLE_FILTERS; SQLSTATE: HY000
         *
         * Message: @@global.log_error_services lists more than one
         * log-filter service. This is discouraged as it will make it hard to
         * understand which rule in which filter affected a log-event.
         */
        case ER_DA_ERROR_LOG_MULTIPLE_FILTERS = 4003;
        /**
         * Error number: 4004; Symbol: ER_DA_CANT_OPEN_ERROR_LOG; SQLSTATE: HY000
         *
         * Message: Could not open file '%s' for error logging%s%s
         */
        case ER_DA_CANT_OPEN_ERROR_LOG = 4004;
        /**
         * Error number: 4005; Symbol: ER_USER_REFERENCED_AS_DEFINER; SQLSTATE: HY000
         *
         * Message: User %s is referenced as a definer account in %s.
         */
        case ER_USER_REFERENCED_AS_DEFINER = 4005;
        /**
         * Error number: 4006; Symbol: ER_CANNOT_USER_REFERENCED_AS_DEFINER; SQLSTATE: HY000
         *
         * Message: Operation %s failed for %s as it is referenced as a
         * definer account in %s.
         */
        case ER_CANNOT_USER_REFERENCED_AS_DEFINER = 4006;
        /**
         * Error number: 4007; Symbol: ER_REGEX_NUMBER_TOO_BIG; SQLSTATE: HY000
         *
         * Message: Decimal number in regular expression is too large.
         */
        case ER_REGEX_NUMBER_TOO_BIG = 4007;
        /**
         * Error number: 4008; Symbol: ER_SPVAR_NONINTEGER_TYPE; SQLSTATE: HY000
         *
         * Message: The variable "%s" has a non-integer based type
         */
        case ER_SPVAR_NONINTEGER_TYPE = 4008;
        /**
         * Error number: 4009; Symbol: WARN_UNSUPPORTED_ACL_TABLES_READ; SQLSTATE: HY000
         *
         * Message: Reads with serializable isolation/SELECT FOR SHARE are
         * not supported for ACL tables.
         */
        case WARN_UNSUPPORTED_ACL_TABLES_READ = 4009;
        /**
         * Error number: 4010; Symbol: ER_BINLOG_UNSAFE_ACL_TABLE_READ_IN_DML_DDL; SQLSTATE: HY000
         *
         * Message: The statement is unsafe because it updates a table
         * depending on ACL table read operation. As storage engine row locks
         * are skipped for ACL table, it may not have same effect on source
         * and replica.
         */
        case ER_BINLOG_UNSAFE_ACL_TABLE_READ_IN_DML_DDL = 4010;
        /**
         * Error number: 4011; Symbol: ER_STOP_REPLICA_MONITOR_IO_THREAD_TIMEOUT; SQLSTATE: HY000
         *
         * Message: STOP REPLICA command execution is incomplete: Replica
         * Monitor thread got the stop signal, thread is busy, Monitor thread
         * will stop once the current task is complete.
         */
        case ER_STOP_REPLICA_MONITOR_IO_THREAD_TIMEOUT = 4011;
        /**
         * Error number: 4012; Symbol: ER_STARTING_REPLICA_MONITOR_IO_THREAD; SQLSTATE: HY000
         *
         * Message: The Replica Monitor thread failed to start.
         */
        case ER_STARTING_REPLICA_MONITOR_IO_THREAD = 4012;
        /**
         * Error number: 4013; Symbol: ER_CANT_USE_ANONYMOUS_TO_GTID_WITH_GTID_MODE_NOT_ON; SQLSTATE: HY000
         *
         * Message: Replication cannot start%s with
         * ASSIGN_GTIDS_TO_ANONYMOUS_TRANSACTIONS = LOCAL|<UUID> as
         * this server uses @@GLOBAL.GTID_MODE <> ON.
         */
        case ER_CANT_USE_ANONYMOUS_TO_GTID_WITH_GTID_MODE_NOT_ON = 4013;
        /**
         * Error number: 4014; Symbol: ER_CANT_COMBINE_ANONYMOUS_TO_GTID_AND_AUTOPOSITION; SQLSTATE: HY000
         *
         * Message: The options ASSIGN_GTIDS_TO_ANONYMOUS_TRANSACTIONS =
         * LOCAL|<UUID> and SOURCE_AUTO_POSITION = 1 cannot be used
         * together.
         */
        case ER_CANT_COMBINE_ANONYMOUS_TO_GTID_AND_AUTOPOSITION = 4014;
        /**
         * Error number: 4015; Symbol: ER_ASSIGN_GTIDS_TO_ANONYMOUS_TRANSACTIONS_REQUIRES_GTID_MODE_ON; SQLSTATE: HY000
         *
         * Message: CHANGE REPLICATION SOURCE TO
         * ASSIGN_GTIDS_TO_ANONYMOUS_TRANSACTIONS = LOCAL|<UUID> cannot
         * be executed because @@GLOBAL.GTID_MODE <> ON.
         */
        case ER_ASSIGN_GTIDS_TO_ANONYMOUS_TRANSACTIONS_REQUIRES_GTID_MODE_ON = 4015;
        /**
         * Error number: 4016; Symbol: ER_SQL_REPLICA_SKIP_COUNTER_USED_WITH_GTID_MODE_ON; SQLSTATE: HY000
         *
         * Message: The value of sql_replica_skip_counter will only take
         * effect for channels running with
         * ASSIGN_GTIDS_TO_ANONYMOUS_TRANSACTIONS <> OFF.
         */
        case ER_SQL_REPLICA_SKIP_COUNTER_USED_WITH_GTID_MODE_ON = 4016;
        /**
         * Error number: 4017; Symbol: ER_USING_ASSIGN_GTIDS_TO_ANONYMOUS_TRANSACTIONS_AS_LOCAL_OR_UUID; SQLSTATE: HY000
         *
         * Message: Using ASSIGN_GTIDS_TO_ANONYMOUS_TRANSACTIONS creates
         * limitations on the replication topology - you cannot fail over
         * between downstream and upstream servers. Only use this option if
         * it is not possible to enable GTIDs on the source, for instance; because of lack of permissions. If possible, use the procedure for
         * enabling GTID transactions online instead, as described in the
         * documentation.
         */
        case ER_USING_ASSIGN_GTIDS_TO_ANONYMOUS_TRANSACTIONS_AS_LOCAL_OR_UUID = 4017;
        /**
         * Error number: 4019; Symbol: ER_CANT_SET_SQL_AFTER_OR_BEFORE_GTIDS_WITH_ANONYMOUS_TO_GTID; SQLSTATE: HY000
         *
         * Message: The SQL_AFTER_GTIDS or SQL_BEFORE_GTIDS clauses for START
         * REPLICA cannot be used when the replication channel is configured
         * with ASSIGN_GTIDS_TO_ANONYMOUS_TRANSACTIONS = LOCAL|<UUID>.
         */
        case ER_CANT_SET_SQL_AFTER_OR_BEFORE_GTIDS_WITH_ANONYMOUS_TO_GTID = 4019;
        /**
         * Error number: 4020; Symbol: ER_ANONYMOUS_TO_GTID_UUID_SAME_AS_GROUP_NAME; SQLSTATE: HY000
         *
         * Message: Replication '%s' is configured with
         * ASSIGN_GTIDS_TO_ANONYMOUS_TRANSACTIONS = <UUID> where the
         * UUID value is equal to the group_replication_group_name
         */
        case ER_ANONYMOUS_TO_GTID_UUID_SAME_AS_GROUP_NAME = 4020;
        /**
         * Error number: 4021; Symbol: ER_CANT_USE_SAME_UUID_AS_GROUP_NAME; SQLSTATE: HY000
         *
         * Message: CHANGE REPLICATION SOURCE TO
         * ASSIGN_GTIDS_TO_ANONYMOUS_TRANSACTIONS = <UUID> cannot be
         * executed because the UUID value is equal to the
         * group_replication_group_name.
         */
        case ER_CANT_USE_SAME_UUID_AS_GROUP_NAME = 4021;
        /**
         * Error number: 4022; Symbol: ER_GRP_RPL_RECOVERY_CHANNEL_STILL_RUNNING; SQLSTATE: HY000
         *
         * Message: The group_replication_recovery channel is still running; most likely it is waiting for a database/table lock, which is
         * preventing the channel from stopping. Please check database/table
         * locks, including the ones created by backup tools.
         */
        case ER_GRP_RPL_RECOVERY_CHANNEL_STILL_RUNNING = 4022;
        /**
         * Error number: 4023; Symbol: ER_INNODB_INVALID_AUTOEXTEND_SIZE_VALUE; SQLSTATE: HY000
         *
         * Message: AUTOEXTEND_SIZE should be a multiple of %uM
         */
        case ER_INNODB_INVALID_AUTOEXTEND_SIZE_VALUE = 4023;
        /**
         * Error number: 4024; Symbol: ER_INNODB_INCOMPATIBLE_WITH_TABLESPACE; SQLSTATE: HY000
         *
         * Message: InnoDB: "%s" not allowed with general tablespaces
         */
        case ER_INNODB_INCOMPATIBLE_WITH_TABLESPACE = 4024;
        /**
         * Error number: 4025; Symbol: ER_INNODB_AUTOEXTEND_SIZE_OUT_OF_RANGE; SQLSTATE: HY000
         *
         * Message: AUTOEXTEND_SIZE value should be between %uM and %uM
         */
        case ER_INNODB_AUTOEXTEND_SIZE_OUT_OF_RANGE = 4025;
        /**
         * Error number: 4026; Symbol: ER_CANNOT_USE_AUTOEXTEND_SIZE_CLAUSE; SQLSTATE: HY000
         *
         * Message: AUTOEXTEND_SIZE clause is not valid for %s tablespace.
         */
        case ER_CANNOT_USE_AUTOEXTEND_SIZE_CLAUSE = 4026;
        /**
         * Error number: 4027; Symbol: ER_ROLE_GRANTED_TO_ITSELF; SQLSTATE: HY000
         *
         * Message: User account %s is directly or indirectly granted to the
         * role %s. The GRANT would create a loop
         */
        case ER_ROLE_GRANTED_TO_ITSELF = 4027;
        /**
         * Error number: 4028; Symbol: ER_TABLE_MUST_HAVE_A_VISIBLE_COLUMN; SQLSTATE: HY000
         *
         * Message: A table must have at least one visible column.
         */
        case ER_TABLE_MUST_HAVE_A_VISIBLE_COLUMN = 4028;
        /**
         * Error number: 4029; Symbol: ER_INNODB_COMPRESSION_FAILURE; SQLSTATE: HY000
         *
         * Message: Compression failed with the following error : %s
         */
        case ER_INNODB_COMPRESSION_FAILURE = 4029;
        /**
         * Error number: 4030; Symbol: ER_WARN_ASYNC_CONN_FAILOVER_NETWORK_NAMESPACE; SQLSTATE: HY000
         *
         * Message: The parameter network_namespace is reserved for future
         * use. Please use the CHANGE REPLICATION SOURCE command to set
         * channel network_namespace parameter.
         */
        case ER_WARN_ASYNC_CONN_FAILOVER_NETWORK_NAMESPACE = 4030;
        /**
         * Error number: 4031; Symbol: ER_CLIENT_INTERACTION_TIMEOUT; SQLSTATE: HY000
         *
         * Message: The client was disconnected by the server because of
         * inactivity. See wait_timeout and interactive_timeout for
         * configuring this behavior.
         */
        case ER_CLIENT_INTERACTION_TIMEOUT = 4031;
        /**
         * Error number: 4032; Symbol: ER_INVALID_CAST_TO_GEOMETRY; SQLSTATE: 22S01
         *
         * Message: Invalid cast from %s to %s.
         */
        case ER_INVALID_CAST_TO_GEOMETRY = 4032;
        /**
         * Error number: 4033; Symbol: ER_INVALID_CAST_POLYGON_RING_DIRECTION; SQLSTATE: 22S04
         *
         * Message: Invalid cast from %s to %s. A polygon ring is in the
         * wrong direction.
         */
        case ER_INVALID_CAST_POLYGON_RING_DIRECTION = 4033;
        /**
         * Error number: 4034; Symbol: ER_GIS_DIFFERENT_SRIDS_AGGREGATION; SQLSTATE: 22S05
         *
         * Message: Arguments to function %s contains geometries with
         * different SRIDs: %u and %u. All geometries must have the same
         * SRID.
         */
        case ER_GIS_DIFFERENT_SRIDS_AGGREGATION = 4034;
        /**
         * Error number: 4035; Symbol: ER_RELOAD_KEYRING_FAILURE; SQLSTATE: HY000
         *
         * Message: Keyring reload failed. Please check error log for more
         * details.
         */
        case ER_RELOAD_KEYRING_FAILURE = 4035;
        /**
         * Error number: 4036; Symbol: ER_SDI_GET_KEYS_INVALID_TABLESPACE; SQLSTATE: HY000
         *
         * Message: Tablespace '%s' is invalid for SDI operations.
         */
        case ER_SDI_GET_KEYS_INVALID_TABLESPACE = 4036;
        /**
         * Error number: 4037; Symbol: ER_CHANGE_RPL_SRC_WRONG_COMPRESSION_ALGORITHM_SIZE; SQLSTATE: HY000
         *
         * Message: Value too long setting SOURCE_COMPRESSION_ALGORITHMS
         * option to a %d chars long string for channel '%s'.
         */
        case ER_CHANGE_RPL_SRC_WRONG_COMPRESSION_ALGORITHM_SIZE = 4037;
        /**
         * Error number: 4039; Symbol: ER_CANT_USE_SAME_UUID_AS_VIEW_CHANGE_UUID; SQLSTATE: HY000
         *
         * Message: CHANGE REPLICATION SOURCE TO
         * ASSIGN_GTIDS_TO_ANONYMOUS_TRANSACTIONS = <UUID> cannot be
         * executed because the UUID value is equal to the
         * group_replication_view_change_uuid.
         */
        case ER_CANT_USE_SAME_UUID_AS_VIEW_CHANGE_UUID = 4039;
        /**
         * Error number: 4040; Symbol: ER_ANONYMOUS_TO_GTID_UUID_SAME_AS_VIEW_CHANGE_UUID; SQLSTATE: HY000
         *
         * Message: Replication '%s' is configured with
         * ASSIGN_GTIDS_TO_ANONYMOUS_TRANSACTIONS = <UUID> where the
         * UUID value is equal to the group_replication_view_change_uuid
         */
        case ER_ANONYMOUS_TO_GTID_UUID_SAME_AS_VIEW_CHANGE_UUID = 4040;
        /**
         * Error number: 4041; Symbol: ER_GRP_RPL_VIEW_CHANGE_UUID_FAIL_GET_VARIABLE; SQLSTATE: HY000
         *
         * Message: Unable to retrieve group_replication_view_change_uuid
         * variable during server checks on replication operations.
         */
        case ER_GRP_RPL_VIEW_CHANGE_UUID_FAIL_GET_VARIABLE = 4041;
        /**
         * Error number: 4042; Symbol: ER_WARN_ADUIT_LOG_MAX_SIZE_AND_PRUNE_SECONDS; SQLSTATE: HY000
         *
         * Message: Both audit_log_max_size and audit_log_prune_seconds are
         * set to non-zero. audit_log_max_size takes precedence and
         * audit_log_prune_seconds is ignored
         */
        case ER_WARN_ADUIT_LOG_MAX_SIZE_AND_PRUNE_SECONDS = 4042;
        /**
         * Error number: 4043; Symbol: ER_WARN_ADUIT_LOG_MAX_SIZE_CLOSE_TO_ROTATE_ON_SIZE; SQLSTATE: HY000
         *
         * Message: audit_log_rotate_on_size is not granular enough for the
         * value of audit_log_max_size supplied. Should be at least %d times
         * smaller.
         */
        case ER_WARN_ADUIT_LOG_MAX_SIZE_CLOSE_TO_ROTATE_ON_SIZE = 4043;
        /**
         * Error number: 4044; Symbol: ER_KERBEROS_CREATE_USER; SQLSTATE: HY000
         *
         * Message: Create/Alter user has failed, Configured user realm as
         * authentication string is empty, Please make sure to configure
         * authentication string as user realm.
         */
        case ER_KERBEROS_CREATE_USER = 4044;
        /**
         * Error number: 4045; Symbol: ER_INSTALL_PLUGIN_CONFLICT_CLIENT; SQLSTATE: HY000
         *
         * Message: Cannot install the %s plugin when the %s plugin is
         * installed.
         */
        case ER_INSTALL_PLUGIN_CONFLICT_CLIENT = 4045;
        /**
         * Error number: 4046; Symbol: ER_DA_ERROR_LOG_COMPONENT_FLUSH_FAILED; SQLSTATE: HY000
         *
         * Message: %d error logging component(s) failed to flush. For
         * file-based logs this can happen when the path or permissions of
         * the log-file have changed. Failure to flush filed-based logs may
         * affect log-rotation.
         */
        case ER_DA_ERROR_LOG_COMPONENT_FLUSH_FAILED = 4046;
        /**
         * Error number: 4047; Symbol: ER_WARN_SQL_AFTER_MTS_GAPS_GAP_NOT_CALCULATED; SQLSTATE: HY000
         *
         * Message: The until clause SQL_AFTER_MTS_GAPS is being used for
         * channel '%s' when GTID_MODE = ON and SOURCE_AUTO_POSITION=1
         * meaning the server did not compute internally what gaps may exist
         * in the relay log transaction execution. To close any execution
         * gaps use either the SQL_BEFORE_GTIDS or SQL_AFTER_GTIDS until
         * clause.
         */
        case ER_WARN_SQL_AFTER_MTS_GAPS_GAP_NOT_CALCULATED = 4047;
        /**
         * Error number: 4048; Symbol: ER_INVALID_ASSIGNMENT_TARGET; SQLSTATE: 42000
         *
         * Message: Invalid target for assignment in INSERT or UPDATE
         * statement '%s'.
         */
        case ER_INVALID_ASSIGNMENT_TARGET = 4048;
        /**
         * Error number: 4049; Symbol: ER_OPERATION_NOT_ALLOWED_ON_GR_SECONDARY; SQLSTATE: HY000
         *
         * Message: This operation cannot be performed on a Group Replication
         * secondary member, it must be done on the group primary.
         */
        case ER_OPERATION_NOT_ALLOWED_ON_GR_SECONDARY = 4049;
        /**
         * Error number: 4050; Symbol: ER_GRP_RPL_FAILOVER_CHANNEL_STATUS_PROPAGATION; SQLSTATE: HY000
         *
         * Message: Unable to propagate the SOURCE_CONNECTION_AUTO_FAILOVER
         * value for channel '%s' to group replication members. Please retry
         * the operation.
         */
        case ER_GRP_RPL_FAILOVER_CHANNEL_STATUS_PROPAGATION = 4050;
        /**
         * Error number: 4051; Symbol: ER_WARN_AUDIT_LOG_FORMAT_UNIX_TIMESTAMP_ONLY_WHEN_JSON; SQLSTATE: HY000
         *
         * Message: audit_log_format_unix_timestamp is applicable only when
         * audit_log_format = JSON.
         */
        case ER_WARN_AUDIT_LOG_FORMAT_UNIX_TIMESTAMP_ONLY_WHEN_JSON = 4051;
        /**
         * Error number: 4052; Symbol: ER_INVALID_MFA_PLUGIN_SPECIFIED; SQLSTATE: HY000
         *
         * Message: Invalid plugin "%s" specified as %d factor during "%s".
         */
        case ER_INVALID_MFA_PLUGIN_SPECIFIED = 4052;
        /**
         * Error number: 4053; Symbol: ER_IDENTIFIED_BY_UNSUPPORTED; SQLSTATE: HY000
         *
         * Message: IDENTIFIED BY clause during "%s" not supported for plugin
         * "%s".
         */
        case ER_IDENTIFIED_BY_UNSUPPORTED = 4053;
        /**
         * Error number: 4054; Symbol: ER_INVALID_PLUGIN_FOR_REGISTRATION; SQLSTATE: HY000
         *
         * Message: This operation is not supported for plugin "%s".
         */
        case ER_INVALID_PLUGIN_FOR_REGISTRATION = 4054;
        /**
         * Error number: 4055; Symbol: ER_PLUGIN_REQUIRES_REGISTRATION; SQLSTATE: HY000
         *
         * Message: Authentication plugin requires registration. Please refer
         * ALTER USER syntax or set --register-factor command line option to
         * do registration.
         */
        case ER_PLUGIN_REQUIRES_REGISTRATION = 4055;
        /**
         * Error number: 4056; Symbol: ER_MFA_METHOD_EXISTS; SQLSTATE: HY000
         *
         * Message: %d factor authentication method exists. Please do ALTER
         * USER... DROP %d factor before doing this operation OR do ALTER
         * USER... MODIFY %d factor... to modify existing %d factor
         * authentication method.
         */
        case ER_MFA_METHOD_EXISTS = 4056;
        /**
         * Error number: 4057; Symbol: ER_MFA_METHOD_NOT_EXISTS; SQLSTATE: HY000
         *
         * Message: %d factor authentication method doesn't exist. Please do
         * ALTER USER... ADD %d factor... before doing this operation.
         */
        case ER_MFA_METHOD_NOT_EXISTS = 4057;
        /**
         * Error number: 4058; Symbol: ER_AUTHENTICATION_POLICY_MISMATCH; SQLSTATE: HY000
         *
         * Message: %d factor authentication method does not match against
         * authentication policy. Please refer @@authentication_policy system
         * variable.
         */
        case ER_AUTHENTICATION_POLICY_MISMATCH = 4058;
        /**
         * Error number: 4059; Symbol: ER_PLUGIN_REGISTRATION_DONE; SQLSTATE: HY000
         *
         * Message: The registration for %d factor authentication method is
         * already completed. You cannot perform registration multiple times.
         */
        case ER_PLUGIN_REGISTRATION_DONE = 4059;
        /**
         * Error number: 4060; Symbol: ER_INVALID_USER_FOR_REGISTRATION; SQLSTATE: HY000
         *
         * Message: The registration operation is not allowed for user
         * '%s'@'%s'. The operation can only be performed in user's own
         * session.
         */
        case ER_INVALID_USER_FOR_REGISTRATION = 4060;
        /**
         * Error number: 4061; Symbol: ER_USER_REGISTRATION_FAILED; SQLSTATE: HY000
         *
         * Message: Authentication plugin's registration failed.
         */
        case ER_USER_REGISTRATION_FAILED = 4061;
        /**
         * Error number: 4062; Symbol: ER_MFA_METHODS_INVALID_ORDER; SQLSTATE: HY000
         *
         * Message: %d factor authentication method should be added before %d
         * factor authentication method.
         */
        case ER_MFA_METHODS_INVALID_ORDER = 4062;
        /**
         * Error number: 4063; Symbol: ER_MFA_METHODS_IDENTICAL; SQLSTATE: HY000
         *
         * Message: Authentication factor should be different.
         */
        case ER_MFA_METHODS_IDENTICAL = 4063;
        /**
         * Error number: 4064; Symbol: ER_INVALID_MFA_OPERATIONS_FOR_PASSWORDLESS_USER; SQLSTATE: HY000
         *
         * Message: The operation "%s" cannot be performed for user '%s'@'%s'
         * configured to connect without a password.
         */
        case ER_INVALID_MFA_OPERATIONS_FOR_PASSWORDLESS_USER = 4064;
        /**
         * Error number: 4065; Symbol: ER_CHANGE_REPLICATION_SOURCE_NO_OPTIONS_FOR_GTID_ONLY; SQLSTATE: HY000
         *
         * Message: GTID_ONLY cannot be enabled for replication channel '%s'.
         * You need GTID_MODE = ON, SOURCE_AUTO_POSITION = 1 and
         * REQUIRE_ROW_FORMAT = 1.
         */
        case ER_CHANGE_REPLICATION_SOURCE_NO_OPTIONS_FOR_GTID_ONLY = 4065;
        /**
         * Error number: 4066; Symbol: ER_CHANGE_REP_SOURCE_CANT_DISABLE_REQ_ROW_FORMAT_WITH_GTID_ONLY; SQLSTATE: HY000
         *
         * Message: REQUIRE_ROW_FORMAT cannot be disabled for replication
         * channel '%s' when GTID_ONLY=1.
         */
        case ER_CHANGE_REP_SOURCE_CANT_DISABLE_REQ_ROW_FORMAT_WITH_GTID_ONLY = 4066;
        /**
         * Error number: 4067; Symbol: ER_CHANGE_REP_SOURCE_CANT_DISABLE_AUTO_POSITION_WITH_GTID_ONLY; SQLSTATE: HY000
         *
         * Message: SOURCE_AUTO_POSITION cannot be disabled for replication
         * channel '%s' when GTID_ONLY=1.
         */
        case ER_CHANGE_REP_SOURCE_CANT_DISABLE_AUTO_POSITION_WITH_GTID_ONLY = 4067;
        /**
         * Error number: 4068; Symbol: ER_CHANGE_REP_SOURCE_CANT_DISABLE_GTID_ONLY_WITHOUT_POSITIONS; SQLSTATE: HY000
         *
         * Message: When disabling GTID_ONLY and SOURCE_AUTO_POSITION FOR
         * CHANNEL '%s' you must provide SOURCE_LOG_FILE and SOURCE_LOG_POS
         * as source positions are invalid.
         */
        case ER_CHANGE_REP_SOURCE_CANT_DISABLE_GTID_ONLY_WITHOUT_POSITIONS = 4068;
        /**
         * Error number: 4069; Symbol: ER_CHANGE_REP_SOURCE_CANT_DISABLE_AUTO_POS_WITHOUT_POSITIONS; SQLSTATE: HY000
         *
         * Message: When disabling SOURCE_AUTO_POSITION FOR CHANNEL '%s' you
         * must provide SOURCE_LOG_FILE and SOURCE_LOG_POS as source
         * positions are invalid.
         */
        case ER_CHANGE_REP_SOURCE_CANT_DISABLE_AUTO_POS_WITHOUT_POSITIONS = 4069;
        /**
         * Error number: 4070; Symbol: ER_CHANGE_REP_SOURCE_GR_CHANNEL_WITH_GTID_MODE_NOT_ON; SQLSTATE: HY000
         *
         * Message: When configuring a group replication channel you must do
         * it when GTID_MODE = ON.
         */
        case ER_CHANGE_REP_SOURCE_GR_CHANNEL_WITH_GTID_MODE_NOT_ON = 4070;
        /**
         * Error number: 4071; Symbol: ER_CANT_USE_GTID_ONLY_WITH_GTID_MODE_NOT_ON; SQLSTATE: HY000
         *
         * Message: Replication cannot start%s with GTID_ONLY = 1 as this
         * server uses @@GLOBAL.GTID_MODE <> ON.
         */
        case ER_CANT_USE_GTID_ONLY_WITH_GTID_MODE_NOT_ON = 4071;
        /**
         * Error number: 4072; Symbol: ER_WARN_C_DISABLE_GTID_ONLY_WITH_SOURCE_AUTO_POS_INVALID_POS; SQLSTATE: HY000
         *
         * Message: The replication positions relative to the source may be
         * out-of-date on channel '%s', due to the use of GTID_ONLY=1. The
         * out-of-date positions can still be used in some cases so, in order
         * to update them, we suggest that you start the replication to
         * receive and apply at least one transaction, which will set the
         * positions to valid values.
         */
        case ER_WARN_C_DISABLE_GTID_ONLY_WITH_SOURCE_AUTO_POS_INVALID_POS = 4072;
        /**
         * Error number: 4073; Symbol: ER_DA_SSL_FIPS_MODE_ERROR; SQLSTATE: HY000
         *
         * Message: SSL fips mode error: %s
         */
        case ER_DA_SSL_FIPS_MODE_ERROR = 4073;
        /**
         * Error number: 4074; Symbol: ER_VALUE_OUT_OF_RANGE; SQLSTATE: HY000
         *
         * Message: %s=%llu is outside the valid range [%llu,%llu]. %llu will
         * be used.
         */
        case ER_VALUE_OUT_OF_RANGE = 4074;
        /**
         * Error number: 4075; Symbol: ER_FULLTEXT_WITH_ROLLUP; SQLSTATE: HY000
         *
         * Message: MATCH does not support ROLLUP columns.
         */
        case ER_FULLTEXT_WITH_ROLLUP = 4075;
        /**
         * Error number: 4076; Symbol: ER_REGEXP_MISSING_RESOURCE; SQLSTATE: HY000
         *
         * Message: Missing locale resource in regular expression library.
         */
        case ER_REGEXP_MISSING_RESOURCE = 4076;
        /**
         * Error number: 4077; Symbol: ER_WARN_REGEXP_USING_DEFAULT; SQLSTATE: HY000
         *
         * Message: Regular expression library used default (root) locale.
         */
        case ER_WARN_REGEXP_USING_DEFAULT = 4077;
        /**
         * Error number: 4078; Symbol: ER_REGEXP_MISSING_FILE; SQLSTATE: HY000
         *
         * Message: Missing data file in regular expression library.
         */
        case ER_REGEXP_MISSING_FILE = 4078;
        /**
         * Error number: 4079; Symbol: ER_WARN_DEPRECATED_COLLATION; SQLSTATE: HY000
         *
         * Message: '%s' is a collation of the deprecated character set %s.
         * Please consider using %s with an appropriate collation instead.
         */
        case ER_WARN_DEPRECATED_COLLATION = 4079;
        /**
         * Error number: 4080; Symbol: ER_CONCURRENT_PROCEDURE_USAGE; SQLSTATE: HY000
         *
         * Message: The %s was called when there was already another
         * concurrent call to this procedure. No action was taken. Wait for
         * other calls to %s to finish before retrying.
         */
        case ER_CONCURRENT_PROCEDURE_USAGE = 4080;
        /**
         * Error number: 4081; Symbol: ER_DA_GLOBAL_CONN_LIMIT; SQLSTATE: HY000
         *
         * Message: Connection closed. Global connection memory limit %llu
         * bytes exceeded. Consumed %llu bytes.
         */
        case ER_DA_GLOBAL_CONN_LIMIT = 4081;
        /**
         * Error number: 4082; Symbol: ER_DA_CONN_LIMIT; SQLSTATE: HY000
         *
         * Message: Connection closed. Connection memory limit %llu bytes
         * exceeded. Consumed %llu bytes.
         */
        case ER_DA_CONN_LIMIT = 4082;
        /**
         * Error number: 4083; Symbol: ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_COLUMN_TYPE_INSTANT; SQLSTATE: HY000
         *
         * Message: Need to rebuild the table to change column type
         */
        case ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_COLUMN_TYPE_INSTANT = 4083;
        /**
         * Error number: 4084; Symbol: ER_WARN_SF_UDF_NAME_COLLISION; SQLSTATE: HY000
         *
         * Message: This function '%s' has the same name as a loadable
         * function (UDF). To invoke the stored function, it is necessary to
         * qualify it with the schema name.
         */
        case ER_WARN_SF_UDF_NAME_COLLISION = 4084;
        /**
         * Error number: 4085; Symbol: ER_CANNOT_PURGE_BINLOG_WITH_BACKUP_LOCK; SQLSTATE: HY000
         *
         * Message: Could not purge binary logs since another session is
         * executing LOCK INSTANCE FOR BACKUP. Wait for that session to
         * release the lock.
         */
        case ER_CANNOT_PURGE_BINLOG_WITH_BACKUP_LOCK = 4085;
        /**
         * Error number: 4086; Symbol: ER_TOO_MANY_WINDOWS; SQLSTATE: HY000
         *
         * Message: Too many windows in SELECT: %d. Maximum allowed is %d.
         * Use named windows to share windows between window functions.
         */
        case ER_TOO_MANY_WINDOWS = 4086;
        /**
         * Error number: 4087; Symbol: ER_MYSQLBACKUP_CLIENT_MSG; SQLSTATE: HY000
         *
         * Message: %s
         */
        case ER_MYSQLBACKUP_CLIENT_MSG = 4087;
        /**
         * Error number: 4088; Symbol: ER_COMMENT_CONTAINS_INVALID_STRING; SQLSTATE: HY000
         *
         * Message: Comment for %s '%s' contains an invalid %s character
         * string: '%s'.
         */
        case ER_COMMENT_CONTAINS_INVALID_STRING = 4088;
        /**
         * Error number: 4089; Symbol: ER_DEFINITION_CONTAINS_INVALID_STRING; SQLSTATE: HY000
         *
         * Message: Definition of %s '%s.%s' contains an invalid %s character
         * string: '%s'.
         */
        case ER_DEFINITION_CONTAINS_INVALID_STRING = 4089;
        /**
         * Error number: 4090; Symbol: ER_CANT_EXECUTE_COMMAND_WITH_ASSIGNED_GTID_NEXT; SQLSTATE: HY000
         *
         * Message: Can't execute the given command when @@SESSION.GTID_NEXT
         * == 'UUID:NUMBER'.
         */
        case ER_CANT_EXECUTE_COMMAND_WITH_ASSIGNED_GTID_NEXT = 4090;
        /**
         * Error number: 4091; Symbol: ER_XA_TEMP_TABLE; SQLSTATE: HY000
         *
         * Message: XA: Temporary tables cannot be accessed inside XA
         * transactions when xa_detach_on_prepare=ON
         */
        case ER_XA_TEMP_TABLE = 4091;
        /**
         * Error number: 4092; Symbol: ER_INNODB_MAX_ROW_VERSION; SQLSTATE: HY000
         *
         * Message: Maximum row versions reached for table %s. No more
         * columns can be added or dropped instantly. Please use
         * COPY/INPLACE.
         */
        case ER_INNODB_MAX_ROW_VERSION = 4092;
        /**
         * Error number: 4094; Symbol: ER_OPERATION_NOT_ALLOWED_WHILE_PRIMARY_CHANGE_IS_RUNNING; SQLSTATE: HY000
         *
         * Message: All queries have been blocked while function
         * 'group_replication_set_as_primary()' is executing. Please refer
         * timeout parameter of function
         * 'group_replication_set_as_primary()'.
         */
        case ER_OPERATION_NOT_ALLOWED_WHILE_PRIMARY_CHANGE_IS_RUNNING = 4094;
        /**
         * Error number: 4095; Symbol: ER_WARN_DEPRECATED_DATETIME_DELIMITER; SQLSTATE: HY000
         *
         * Message: Delimiter '%s' in position %d in datetime value '%s' at
         * row %d is deprecated. Prefer the standard '%c'.
         */
        case ER_WARN_DEPRECATED_DATETIME_DELIMITER = 4095;
        /**
         * Error number: 4096; Symbol: ER_WARN_DEPRECATED_SUPERFLUOUS_DELIMITER; SQLSTATE: HY000
         *
         * Message: Delimiter '%s' in position %d in datetime value '%s' at
         * row %d is superfluous and is deprecated. Please remove.
         */
        case ER_WARN_DEPRECATED_SUPERFLUOUS_DELIMITER = 4096;
        /**
         * Error number: 4097; Symbol: ER_CANNOT_PERSIST_SENSITIVE_VARIABLES; SQLSTATE: HY000
         *
         * Message: Cannot persist SENSITIVE system variable '%s' because
         * keyring component support is unavailable.
         */
        case ER_CANNOT_PERSIST_SENSITIVE_VARIABLES = 4097;
        /**
         * Error number: 4098; Symbol: ER_WARN_CANNOT_SECURELY_PERSIST_SENSITIVE_VARIABLES; SQLSTATE: HY000
         *
         * Message: SENSITIVE system variable '%s' was persisted without
         * encryption. Consider restarting server with keyring component
         * support to persist SENSITIVE variables securely.
         */
        case ER_WARN_CANNOT_SECURELY_PERSIST_SENSITIVE_VARIABLES = 4098;
        /**
         * Error number: 4099; Symbol: ER_WARN_TRG_ALREADY_EXISTS; SQLSTATE: HY000
         *
         * Message: Trigger '%s' already exists on the table '%s'.'%s'.
         */
        case ER_WARN_TRG_ALREADY_EXISTS = 4099;
        /**
         * Error number: 4100; Symbol: ER_IF_NOT_EXISTS_UNSUPPORTED_TRG_EXISTS_ON_DIFFERENT_TABLE; SQLSTATE: HY000
         *
         * Message: Trigger '%s'.'%s' already exists on a different table.
         * The 'IF NOT EXISTS' clause is only supported for triggers
         * associated with the same table.
         */
        case ER_IF_NOT_EXISTS_UNSUPPORTED_TRG_EXISTS_ON_DIFFERENT_TABLE = 4100;
        /**
         * Error number: 4101; Symbol: ER_IF_NOT_EXISTS_UNSUPPORTED_UDF_NATIVE_FCT_NAME_COLLISION; SQLSTATE: HY000
         *
         * Message: This function '%s' has the same name as a native
         * function. The 'IF NOT EXISTS' clause is not supported while
         * creating a loadable function with the same name as a native
         * function.
         */
        case ER_IF_NOT_EXISTS_UNSUPPORTED_UDF_NATIVE_FCT_NAME_COLLISION = 4101;
        /**
         * Error number: 4102; Symbol: ER_SET_PASSWORD_AUTH_PLUGIN_ERROR; SQLSTATE: HY000
         *
         * Message: SET PASSWORD has no significance for user '%s'@'%s' as
         * the authentication method used doesn't store authentication data
         * in the MySQL server. Please consider using ALTER USER instead if
         * you want to change authentication parameters.
         */
        case ER_SET_PASSWORD_AUTH_PLUGIN_ERROR = 4102;
        /**
         * Error number: 4105; Symbol: ER_SRS_INVALID_LATITUDE_OF_ORIGIN; SQLSTATE: SR002
         *
         * Message: Latitude of origin must be within [-90, 90] degrees; specified in the SRS angular unit.
         */
        case ER_SRS_INVALID_LATITUDE_OF_ORIGIN = 4105;
        /**
         * Error number: 4106; Symbol: ER_SRS_INVALID_LONGITUDE_OF_ORIGIN; SQLSTATE: SR002
         *
         * Message: Longitude of origin must be within (-180, 180] degrees; specified in the SRS angular unit.
         */
        case ER_SRS_INVALID_LONGITUDE_OF_ORIGIN = 4106;
        /**
         * Error number: 4107; Symbol: ER_SRS_UNUSED_PROJ_PARAMETER_PRESENT; SQLSTATE: SR002
         *
         * Message: The spatial reference system definition for SRID %u
         * contains unused projection parameter "%s".
         */
        case ER_SRS_UNUSED_PROJ_PARAMETER_PRESENT = 4107;
        /**
         * Error number: 4108; Symbol: ER_GIPK_COLUMN_EXISTS; SQLSTATE: HY000
         *
         * Message: Failed to generate invisible primary key. Column
         * 'my_row_id' already exists.
         */
        case ER_GIPK_COLUMN_EXISTS = 4108;
        /**
         * Error number: 4109; Symbol: ER_GIPK_FAILED_AUTOINC_COLUMN_EXISTS; SQLSTATE: HY000
         *
         * Message: Failed to generate invisible primary key. Auto-increment
         * column already exists.
         */
        case ER_GIPK_FAILED_AUTOINC_COLUMN_EXISTS = 4109;
        /**
         * Error number: 4110; Symbol: ER_GIPK_COLUMN_ALTER_NOT_ALLOWED; SQLSTATE: HY000
         *
         * Message: Altering generated invisible primary key column
         * 'my_row_id' is not allowed.
         */
        case ER_GIPK_COLUMN_ALTER_NOT_ALLOWED = 4110;
        /**
         * Error number: 4111; Symbol: ER_DROP_PK_COLUMN_TO_DROP_GIPK; SQLSTATE: HY000
         *
         * Message: Please drop primary key column to be able to drop
         * generated invisible primary key.
         */
        case ER_DROP_PK_COLUMN_TO_DROP_GIPK = 4111;
        /**
         * Error number: 4112; Symbol: ER_CREATE_SELECT_WITH_GIPK_DISALLOWED_IN_SBR; SQLSTATE: HY000
         *
         * Message: Generating an invisible primary key for a table created
         * using CREATE TABLE ... SELECT ... is disallowed when
         * binlog_format=STATEMENT. It cannot be guaranteed that the SELECT
         * retrieves rows in the same order on source and replica. Therefore; it cannot be guaranteed that the value generated for the generated
         * implicit primary key column will be the same on source and replica
         * for all rows. Use binlog_format=ROW or MIXED to execute this
         * statement.
         */
        case ER_CREATE_SELECT_WITH_GIPK_DISALLOWED_IN_SBR = 4112;
        /**
         * Error number: 4114; Symbol: ER_CTE_RECURSIVE_NOT_UNION; SQLSTATE: HY000
         *
         * Message: Recursive table reference in EXCEPT or INTERSECT operand
         * is not allowed.
         */
        case ER_CTE_RECURSIVE_NOT_UNION = 4114;
        /**
         * Error number: 4115; Symbol: ER_COMMAND_BACKEND_FAILED_TO_FETCH_SECURITY_CTX; SQLSTATE: HY000
         *
         * Message: Error when trying to fetch information from security
         * context object, when trying to connect the server.
         */
        case ER_COMMAND_BACKEND_FAILED_TO_FETCH_SECURITY_CTX = 4115;
        /**
         * Error number: 4116; Symbol: ER_COMMAND_SERVICE_BACKEND_FAILED; SQLSTATE: HY000
         *
         * Message: Error in command service backend interface, because of : "%s"
         */
        case ER_COMMAND_SERVICE_BACKEND_FAILED = 4116;
        /**
         * Error number: 4117; Symbol: ER_CLIENT_FILE_PRIVILEGE_FOR_REPLICATION_CHECKS; SQLSTATE: HY000
         *
         * Message: The PRIVILEGE_CHECKS_USER for channel '%s' would need
         * FILE privilege to execute a LOAD DATA INFILE statement replicated
         * in statement format. Consider using binlog_format=ROW on source.
         * If the replicated events are trusted, recover from the failure by
         * temporarily granting FILE to the PRIVILEGE_CHECKS_USER.
         */
        case ER_CLIENT_FILE_PRIVILEGE_FOR_REPLICATION_CHECKS = 4117;
        /**
         * Error number: 4118; Symbol: ER_GROUP_REPLICATION_FORCE_MEMBERS_COMMAND_FAILURE; SQLSTATE: HY000
         *
         * Message: The 'SET GLOBAL group_replication_force_members=%s'
         * command encountered a failure. %s
         */
        case ER_GROUP_REPLICATION_FORCE_MEMBERS_COMMAND_FAILURE = 4118;
        /**
         * Error number: 4119; Symbol: ER_WARN_DEPRECATED_IDENT; SQLSTATE: HY000
         *
         * Message: Using %s as unquoted identifier is deprecated, please use
         * quotes or rename the identifier.
         */
        case ER_WARN_DEPRECATED_IDENT = 4119;
        /**
         * Error number: 4120; Symbol: ER_INTERSECT_ALL_MAX_DUPLICATES_EXCEEDED; SQLSTATE: HY000
         *
         * Message: Max number of duplicate rows in INTERSECT ALL exceeded.
         */
        case ER_INTERSECT_ALL_MAX_DUPLICATES_EXCEEDED = 4120;
        /**
         * Error number: 4121; Symbol: ER_TP_QUERY_THRS_PER_GRP_EXCEEDS_TXN_THR_LIMIT; SQLSTATE: HY000
         *
         * Message: Query threads count(%u) exceeds transaction threads
         * limit(%u) per group. Please use query threads count per group
         * smaller or equal to max transaction threads limit per group
         */
        case ER_TP_QUERY_THRS_PER_GRP_EXCEEDS_TXN_THR_LIMIT = 4121;
        /**
         * Error number: 4122; Symbol: ER_BAD_TIMESTAMP_FORMAT; SQLSTATE: HY000
         *
         * Message: Invalid timestamp format in %s udf
         */
        case ER_BAD_TIMESTAMP_FORMAT = 4122;
        /**
         * Error number: 4123; Symbol: ER_SHAPE_PRIDICTION_UDF; SQLSTATE: HY000
         *
         * Message: SHAPE_PREDICTION UDF %s got error because of %s.
         */
        case ER_SHAPE_PRIDICTION_UDF = 4123;
        /**
         * Error number: 4124; Symbol: ER_SRS_INVALID_HEIGHT; SQLSTATE: SR002
         *
         * Message: Height parameter must be non negative.
         */
        case ER_SRS_INVALID_HEIGHT = 4124;
        /**
         * Error number: 4125; Symbol: ER_SRS_INVALID_SCALING; SQLSTATE: SR002
         *
         * Message: Scaling parameter must be non negative.
         */
        case ER_SRS_INVALID_SCALING = 4125;
        /**
         * Error number: 4126; Symbol: ER_SRS_INVALID_ZONE_WIDTH; SQLSTATE: SR002
         *
         * Message: Zone width parameter must be an integer between 1-60.
         */
        case ER_SRS_INVALID_ZONE_WIDTH = 4126;
        /**
         * Error number: 4127; Symbol: ER_SRS_INVALID_LATITUDE_POLAR_STERE_VAR_A; SQLSTATE: SR002
         *
         * Message: Latitude of origin must be +-90 degrees, specified in the
         * SRS angular unit, in Polar Stereographic (variant A) projection
         * method (EPSG:9810).
         */
        case ER_SRS_INVALID_LATITUDE_POLAR_STERE_VAR_A = 4127;
        /**
         * Error number: 4128; Symbol: ER_WARN_DEPRECATED_CLIENT_NO_SCHEMA_OPTION; SQLSTATE: HY000
         *
         * Message: The client is using a deprecated CLIENT_NO_SCHEMA client
         * option. CLIENT_NO_SCHEMA will be removed in a future release.
         */
        case ER_WARN_DEPRECATED_CLIENT_NO_SCHEMA_OPTION = 4128;
        /**
         * Error number: 4129; Symbol: ER_TABLE_NOT_EMPTY; SQLSTATE: HY000
         *
         * Message: Table '%s' is not empty.
         */
        case ER_TABLE_NOT_EMPTY = 4129;
        /**
         * Error number: 4130; Symbol: ER_TABLE_NO_PRIMARY_KEY; SQLSTATE: HY000
         *
         * Message: Table '%s' has no primary key.
         */
        case ER_TABLE_NO_PRIMARY_KEY = 4130;
        /**
         * Error number: 4131; Symbol: ER_TABLE_IN_SHARED_TABLESPACE; SQLSTATE: HY000
         *
         * Message: Table '%s' is in a shared tablespace.
         */
        case ER_TABLE_IN_SHARED_TABLESPACE = 4131;
        /**
         * Error number: 4132; Symbol: ER_INDEX_OTHER_THAN_PK; SQLSTATE: HY000
         *
         * Message: Table '%s' has indexes other than primary key.
         */
        case ER_INDEX_OTHER_THAN_PK = 4132;
        /**
         * Error number: 4133; Symbol: ER_LOAD_BULK_DATA_UNSORTED; SQLSTATE: HY000
         *
         * Message: [IN PRIMARY KEY ORDER] specified but data not sorted: '%s'
         */
        case ER_LOAD_BULK_DATA_UNSORTED = 4133;
        /**
         * Error number: 4134; Symbol: ER_BULK_EXECUTOR_ERROR; SQLSTATE: HY000
         *
         * Message: Bulk executor error: %s
         */
        case ER_BULK_EXECUTOR_ERROR = 4134;
        /**
         * Error number: 4135; Symbol: ER_BULK_READER_LIBCURL_INIT_FAILED; SQLSTATE: HY000
         *
         * Message: Bulk reader failed to initialize libcurl
         */
        case ER_BULK_READER_LIBCURL_INIT_FAILED = 4135;
        /**
         * Error number: 4136; Symbol: ER_BULK_READER_LIBCURL_ERROR; SQLSTATE: HY000
         *
         * Message: Bulk reader got libcurl error: %s
         */
        case ER_BULK_READER_LIBCURL_ERROR = 4136;
        /**
         * Error number: 4137; Symbol: ER_BULK_READER_SERVER_ERROR; SQLSTATE: HY000
         *
         * Message: Bulk reader got error response from server: %ld
         */
        case ER_BULK_READER_SERVER_ERROR = 4137;
        /**
         * Error number: 4138; Symbol: ER_BULK_READER_COMMUNICATION_ERROR; SQLSTATE: HY000
         *
         * Message: Bulk reader got error in communication with source
         * server, check the error log for additional details.
         */
        case ER_BULK_READER_COMMUNICATION_ERROR = 4138;
        /**
         * Error number: 4139; Symbol: ER_BULK_LOAD_DATA_FAILED; SQLSTATE: HY000
         *
         * Message: Bulk loader failed in Innodb storage engine, check the
         * error log for additional details.
         */
        case ER_BULK_LOAD_DATA_FAILED = 4139;
        /**
         * Error number: 4140; Symbol: ER_BULK_LOADER_COLUMN_TOO_BIG_FOR_LEFTOVER_BUFFER; SQLSTATE: HY000
         *
         * Message: CSV column too big for leftover buffer.
         */
        case ER_BULK_LOADER_COLUMN_TOO_BIG_FOR_LEFTOVER_BUFFER = 4140;
        /**
         * Error number: 4141; Symbol: ER_BULK_LOADER_COMPONENT_ERROR; SQLSTATE: HY000
         *
         * Message: Bulk loader component error: %s
         */
        case ER_BULK_LOADER_COMPONENT_ERROR = 4141;
        /**
         * Error number: 4142; Symbol: ER_BULK_LOADER_FILE_CONTAINS_LESS_LINES_THAN_IGNORE_CLAUSE; SQLSTATE: HY000
         *
         * Message: The first file being loaded contained less lines than the
         * ignore clause
         */
        case ER_BULK_LOADER_FILE_CONTAINS_LESS_LINES_THAN_IGNORE_CLAUSE = 4142;
        /**
         * Error number: 4143; Symbol: ER_BULK_PARSER_MISSING_ENCLOSED_BY; SQLSTATE: HY000
         *
         * Message: Missing ENCLOSED BY character at row %ld in file '%s'.
         */
        case ER_BULK_PARSER_MISSING_ENCLOSED_BY = 4143;
        /**
         * Error number: 4144; Symbol: ER_BULK_PARSER_ROW_BUFFER_MAX_TOTAL_COLS_EXCEEDED; SQLSTATE: HY000
         *
         * Message: The number of input columns that need to be buffered for
         * parsing exceeded predefined buffer max size for file '%s'.
         */
        case ER_BULK_PARSER_ROW_BUFFER_MAX_TOTAL_COLS_EXCEEDED = 4144;
        /**
         * Error number: 4145; Symbol: ER_BULK_PARSER_COPY_BUFFER_SIZE_EXCEEDED; SQLSTATE: HY000
         *
         * Message: The column data that needed to be copied due to escaped
         * characters exceeded the size of the internal copy buffer for file
         * '%s'.
         */
        case ER_BULK_PARSER_COPY_BUFFER_SIZE_EXCEEDED = 4145;
        /**
         * Error number: 4146; Symbol: ER_BULK_PARSER_UNEXPECTED_END_OF_INPUT; SQLSTATE: HY000
         *
         * Message: Unexpected end of input found at row %ld in file '%s'.
         * Data for some columns is missing.
         */
        case ER_BULK_PARSER_UNEXPECTED_END_OF_INPUT = 4146;
        /**
         * Error number: 4147; Symbol: ER_BULK_PARSER_UNEXPECTED_ROW_TERMINATOR; SQLSTATE: HY000
         *
         * Message: Unexpected row terminator found at row %ld in file '%s'.
         * Data for some columns is missing.
         */
        case ER_BULK_PARSER_UNEXPECTED_ROW_TERMINATOR = 4147;
        /**
         * Error number: 4148; Symbol: ER_BULK_PARSER_UNEXPECTED_CHAR_AFTER_ENDING_ENCLOSED_BY; SQLSTATE: HY000
         *
         * Message: Unexpected characters after ending ENCLOSED BY character
         * found at row %ld in file '%s'.
         */
        case ER_BULK_PARSER_UNEXPECTED_CHAR_AFTER_ENDING_ENCLOSED_BY = 4148;
        /**
         * Error number: 4149; Symbol: ER_BULK_PARSER_UNEXPECTED_CHAR_AFTER_NULL_ESCAPE; SQLSTATE: HY000
         *
         * Message: Unexpected characters after NULL escape (\\N) found at
         * row %ld in file '%s'.
         */
        case ER_BULK_PARSER_UNEXPECTED_CHAR_AFTER_NULL_ESCAPE = 4149;
        /**
         * Error number: 4150; Symbol: ER_BULK_PARSER_UNEXPECTED_CHAR_AFTER_COLUMN_TERMINATOR; SQLSTATE: HY000
         *
         * Message: Unexpected characters after column terminator found at
         * row %ld in file '%s'.
         */
        case ER_BULK_PARSER_UNEXPECTED_CHAR_AFTER_COLUMN_TERMINATOR = 4150;
        /**
         * Error number: 4151; Symbol: ER_BULK_PARSER_INCOMPLETE_ESCAPE_SEQUENCE; SQLSTATE: HY000
         *
         * Message: Unexpected end of input found at row %ld in file '%s'
         * resulting in incomplete escape sequence.
         */
        case ER_BULK_PARSER_INCOMPLETE_ESCAPE_SEQUENCE = 4151;
        /**
         * Error number: 4152; Symbol: ER_LOAD_BULK_DATA_FAILED; SQLSTATE: HY000
         *
         * Message: LOAD BULK DATA into table '%s' failed: %s
         */
        case ER_LOAD_BULK_DATA_FAILED = 4152;
        /**
         * Error number: 4153; Symbol: ER_LOAD_BULK_DATA_WRONG_VALUE_FOR_FIELD; SQLSTATE: HY000
         *
         * Message: Incorrect %s value: '%s' for column '%s' at row %ld in
         * file '%s'
         */
        case ER_LOAD_BULK_DATA_WRONG_VALUE_FOR_FIELD = 4153;
        /**
         * Error number: 4154; Symbol: ER_LOAD_BULK_DATA_WARN_NULL_TO_NOTNULL; SQLSTATE: HY000
         *
         * Message: NULL supplied to NOT NULL column '%s' at row %ld in file
         * '%s'
         */
        case ER_LOAD_BULK_DATA_WARN_NULL_TO_NOTNULL = 4154;
        /**
         * Error number: 4155; Symbol: ER_REQUIRE_TABLE_PRIMARY_KEY_CHECK_GENERATE_WITH_GR; SQLSTATE: HY000
         *
         * Message: On a Group Replication channel, setting
         * REQUIRE_TABLE_PRIMARY_KEY_CHECK to 'GENERATE' is not allowed.
         */
        case ER_REQUIRE_TABLE_PRIMARY_KEY_CHECK_GENERATE_WITH_GR = 4155;
        /**
         * Error number: 4156; Symbol: ER_CANT_CHANGE_SYS_VAR_IN_READ_ONLY_MODE; SQLSTATE: HY000
         *
         * Message: Cannot change the '%s' system variable in read-only mode.
         */
        case ER_CANT_CHANGE_SYS_VAR_IN_READ_ONLY_MODE = 4156;
        /**
         * Error number: 4157; Symbol: ER_INNODB_INSTANT_ADD_DROP_NOT_SUPPORTED_MAX_SIZE; SQLSTATE: HY000
         *
         * Message: Column can't be added or dropped with ALGORITHM=INSTANT
         * as either max possible row size already crosses max permissible
         * row size or may cross it after add. Try ALGORITHM=INPLACE/COPY.
         */
        case ER_INNODB_INSTANT_ADD_DROP_NOT_SUPPORTED_MAX_SIZE = 4157;
        /**
         * Error number: 4158; Symbol: ER_INNODB_INSTANT_ADD_NOT_SUPPORTED_MAX_FIELDS; SQLSTATE: HY000
         *
         * Message: Column can't be added to '%s' with ALGORITHM=INSTANT
         * anymore. Please try ALGORITHM=INPLACE/COPY.
         */
        case ER_INNODB_INSTANT_ADD_NOT_SUPPORTED_MAX_FIELDS = 4158;
        /**
         * Error number: 4159; Symbol: ER_CANT_SET_PERSISTED; SQLSTATE: HY000
         *
         * Message: Failed to set persisted options.
         */
        case ER_CANT_SET_PERSISTED = 4159;
        /**
         * Error number: 4160; Symbol: ER_INSTALL_COMPONENT_SET_NULL_VALUE; SQLSTATE: HY000
         *
         * Message: The value supplied for %s in the SET list cannot be null
         */
        case ER_INSTALL_COMPONENT_SET_NULL_VALUE = 4160;
        /**
         * Error number: 4161; Symbol: ER_INSTALL_COMPONENT_SET_UNUSED_VALUE; SQLSTATE: HY000
         *
         * Message: The assignment of %s in SET doesn't match any of the
         * variables registered by the component(s)
         */
        case ER_INSTALL_COMPONENT_SET_UNUSED_VALUE = 4161;
        /**
         * Error number: 4162; Symbol: ER_WARN_DEPRECATED_USER_DEFINED_COLLATIONS; SQLSTATE: HY000
         *
         * Message: '%s' is a user defined collation. User defined collations
         * are deprecated and will be removed in a future release. Consider
         * using a compiled collation instead.
         */
        case ER_WARN_DEPRECATED_USER_DEFINED_COLLATIONS = 4162;
        /**
         * Error number: 4163; Symbol: ER_USER_LOCK_OVERLONG_NAME; SQLSTATE: 42000
         *
         * Message: User-level lock name '%s' should not exceed %d
         * characters.
         */
        case ER_USER_LOCK_OVERLONG_NAME = 4163;
        /**
         * Error number: 4164; Symbol: ER_WARN_NO_SPACE_VERSION_COMMENT; SQLSTATE: HY000
         *
         * Message: Immediately starting the version comment after the
         * version number is deprecated and may change behavior in a future
         * release. Please insert a white-space character after the version
         * number.
         */
        case ER_WARN_NO_SPACE_VERSION_COMMENT = 4164;
        /**
         * Error number: 4165; Symbol: ER_VALIDATE_PASSWORD_INSUFFICIENT_CHANGED_CHARACTERS; SQLSTATE: HY000
         *
         * Message: The new password must have at least '%u' characters that
         * are different from the old password. It has only '%u' character(s)
         * different. For this comparison, uppercase letters and lowercase
         * letters are considered to be equal.
         */
        case ER_VALIDATE_PASSWORD_INSUFFICIENT_CHANGED_CHARACTERS = 4165;
        /**
         * Error number: 4166; Symbol: ER_WARN_DEPRECATED_WITH_NOTE; SQLSTATE: HY000
         *
         * Message: '%s' is deprecated and will be removed in a future
         * release. %s
         */
        case ER_WARN_DEPRECATED_WITH_NOTE = 4166;
        /**
         * Error number: 4167; Symbol: ER_CANT_RUN_COMMAND_SERVICES_RECURSIVELY; SQLSTATE: HY000
         *
         * Message: Running recursive calls to SQL execution service is not
         * supported
         */
        case ER_CANT_RUN_COMMAND_SERVICES_RECURSIVELY = 4167;
        /**
         * Error number: 4168; Symbol: ER_WARN_SET_OPERATIONS_BUFFER; SQLSTATE: HY000
         *
         * Message: System variable "set_operations_buffer_size" set too low
         * for hashed set operation. Consult optimizer trace for
         * recommendations.
         */
        case ER_WARN_SET_OPERATIONS_BUFFER = 4168;
        /**
         * Error number: 6000; Symbol: ER_LANGUAGE_COMPONENT; SQLSTATE: HY000
         *
         * Message: %s
         */
        case ER_LANGUAGE_COMPONENT = 6000;
        /**
         * Error number: 6001; Symbol: ER_LANGUAGE_COMPONENT_NOT_AVAILABLE; SQLSTATE: HY000
         *
         * Message: Language component: Not available.
         */
        case ER_LANGUAGE_COMPONENT_NOT_AVAILABLE = 6001;
        /**
         * Error number: 6002; Symbol: ER_LANGUAGE_COMPONENT_UNSUPPORTED_LANGUAGE; SQLSTATE: HY000
         *
         * Message: Language component: Unsupported language '%s'
         */
        case ER_LANGUAGE_COMPONENT_UNSUPPORTED_LANGUAGE = 6002;
        /**
         * Error number: 6003; Symbol: ER_LANGUAGE_COMPONENT_CANNOT_UNINSTALL; SQLSTATE: HY000
         *
         * Message: Language component: Cannot uninstall due to connected
         * sessions. Please disconnect all sessions and try again.
         */
        case ER_LANGUAGE_COMPONENT_CANNOT_UNINSTALL = 6003;
        /**
         * Error number: 6004; Symbol: ER_SP_NO_ALTER_LANGUAGE; SQLSTATE: HY000
         *
         * Message: Altering the language of an existing routine is not
         * possible.
         */
        case ER_SP_NO_ALTER_LANGUAGE = 6004;
        /**
         * Error number: 6006; Symbol: ER_EXPLAIN_INTO_IMPLICIT_FORMAT_NOT_SUPPORTED; SQLSTATE: 0A000
         *
         * Message: EXPLAIN INTO does not support implicit FORMAT.
         */
        case ER_EXPLAIN_INTO_IMPLICIT_FORMAT_NOT_SUPPORTED = 6006;
        /**
         * Error number: 6007; Symbol: ER_EXPLAIN_INTO_FORMAT_NOT_SUPPORTED; SQLSTATE: 0A000
         *
         * Message: EXPLAIN INTO does not support FORMAT=%s.
         */
        case ER_EXPLAIN_INTO_FORMAT_NOT_SUPPORTED = 6007;
        /**
         * Error number: 6008; Symbol: ER_NULL_CANT_BE_PERSISTED_FOR_READONLY; SQLSTATE: HY000
         *
         * Message: Trying to persist a NULL into a variable '%s' that's
         * settable only on command line is not supported
         */
        case ER_NULL_CANT_BE_PERSISTED_FOR_READONLY = 6008;
        /**
         * Error number: 6009; Symbol: ER_EXPLAIN_INTO_FOR_CONNECTION_NOT_SUPPORTED; SQLSTATE: 0A000
         *
         * Message: EXPLAIN FOR CONNECTION does not support the INTO clause.
         */
        case ER_EXPLAIN_INTO_FOR_CONNECTION_NOT_SUPPORTED = 6009;
        /**
         * Error number: 6010; Symbol: ER_INNODB_IMPORT_WRONG_DROPPED_ENUM_LENGTH; SQLSTATE: HY000
         *
         * Message: Enum element name length %lu, is invalid for column %s
         */
        case ER_INNODB_IMPORT_WRONG_DROPPED_ENUM_LENGTH = 6010;
        /**
         * Error number: 6011; Symbol: ER_INNODB_IMPORT_WRONG_NUMBER_OF_INDEXES_ZERO; SQLSTATE: HY000
         *
         * Message: Number of indexes in meta-data file is 0
         */
        case ER_INNODB_IMPORT_WRONG_NUMBER_OF_INDEXES_ZERO = 6011;
        /**
         * Error number: 6012; Symbol: ER_INNODB_IMPORT_WRONG_NUMBER_OF_INDEXES_TOO_HIGH; SQLSTATE: HY000
         *
         * Message: Number of indexes in meta-data file is too high: %llu
         */
        case ER_INNODB_IMPORT_WRONG_NUMBER_OF_INDEXES_TOO_HIGH = 6012;
        /**
         * Error number: 6013; Symbol: ER_INNODB_IMPORT_DROP_COL_METADATA_MISMATCH; SQLSTATE: HY000
         *
         * Message: DD metadata for INSTANT DROP column %s in target table
         * doesn't match with CFG.
         */
        case ER_INNODB_IMPORT_DROP_COL_METADATA_MISMATCH = 6013;
        /**
         * Error number: 6014; Symbol: ER_INNODB_IMPORT_ENUM_NULL_TERMINATOR_MISSING; SQLSTATE: HY000
         *
         * Message: Enum/Set element name missing null terminator for column
         * '%s'
         */
        case ER_INNODB_IMPORT_ENUM_NULL_TERMINATOR_MISSING = 6014;
        /**
         * Error number: 6015; Symbol: ER_SIMULATED_INJECTION_ERROR; SQLSTATE: HY000
         *
         * Message: %s %s %zu.
         */
        case ER_SIMULATED_INJECTION_ERROR = 6015;
        /**
         * Error number: 6016; Symbol: ER_WARN_DEPRECATED_DYNAMIC_PRIV_IN_GRANT; SQLSTATE: HY000
         *
         * Message: The privilege '%s' is deprecated.
         */
        case ER_WARN_DEPRECATED_DYNAMIC_PRIV_IN_GRANT = 6016;
        /**
         * Error number: 6017; Symbol: ER_BULK_MULTI_READER_OPEN_FILE_FAILED; SQLSTATE: HY000
         *
         * Message: Bulk Multi Reader: Failed to open file
         */
        case ER_BULK_MULTI_READER_OPEN_FILE_FAILED = 6017;
        /**
         * Error number: 6018; Symbol: ER_BULK_MULTI_READER_READ_FILE_FAILED; SQLSTATE: HY000
         *
         * Message: Bulk Multi Reader: Failed to read file
         */
        case ER_BULK_MULTI_READER_READ_FILE_FAILED = 6018;
        /**
         * Error number: 6019; Symbol: ER_BULK_MERGE_INVALID_CHUNK; SQLSTATE: HY000
         *
         * Message: Bulk Merge Loader: Invalid Chunk
         */
        case ER_BULK_MERGE_INVALID_CHUNK = 6019;
        /**
         * Error number: 6020; Symbol: ER_BULK_MERGE_NOT_ALL_CHUNKS_CONSUMED; SQLSTATE: HY000
         *
         * Message: Bulk Merge Loader: Not all chunks consumed
         */
        case ER_BULK_MERGE_NOT_ALL_CHUNKS_CONSUMED = 6020;
        /**
         * Error number: 6021; Symbol: ER_BULK_WRITER_LIBCURL_INIT_FAILED; SQLSTATE: HY000
         *
         * Message: Bulk writer failed to initialize libcurl
         */
        case ER_BULK_WRITER_LIBCURL_INIT_FAILED = 6021;
        /**
         * Error number: 6022; Symbol: ER_BULK_WRITER_LIBCURL_ERROR; SQLSTATE: HY000
         *
         * Message: Bulk writer got libcurl error: %s
         */
        case ER_BULK_WRITER_LIBCURL_ERROR = 6022;
        /**
         * Error number: 6023; Symbol: ER_BULK_SORTING_LOADER_WRITE; SQLSTATE: HY000
         *
         * Message: Bulk Sorting Loader: Failed to write data to temporary
         * file
         */
        case ER_BULK_SORTING_LOADER_WRITE = 6023;
        /**
         * Error number: 6024; Symbol: ER_BULK_SORTING_LOADER_WAIT; SQLSTATE: HY000
         *
         * Message: Bulk Sorting Loader: Interrupted while waiting
         */
        case ER_BULK_SORTING_LOADER_WAIT = 6024;
        /**
         * Error number: 6025; Symbol: ER_BULK_READER_OPEN_FILE_FAILED; SQLSTATE: HY000
         *
         * Message: Bulk Reader: Failed to access file %s
         */
        case ER_BULK_READER_OPEN_FILE_FAILED = 6025;
        /**
         * Error number: 6026; Symbol: ER_BULK_LOAD_TABLE_HAS_INSTANT_COLS; SQLSTATE: HY000
         *
         * Message: Bulk Loader: Table '%s' has instantly added/dropped
         * columns. Please TRUNCATE TABLE and retry.
         */
        case ER_BULK_LOAD_TABLE_HAS_INSTANT_COLS = 6026;
        /**
         * Error number: 6027; Symbol: ER_BULK_LOAD_RESOURCE; SQLSTATE: HY000
         *
         * Message: Bulk Loader: Not enough memory available. Memory needed
         * for loading %s data: %s for %u threads, %s with minimal
         * configuration. Total configured memory is %s, Available memory is
         * %s.
         */
        case ER_BULK_LOAD_RESOURCE = 6027;
        /**
         * Error number: 6028; Symbol: ER_BULK_LOAD_SECONDARY_ENGINE; SQLSTATE: HY000
         *
         * Message: LOAD DATA with BULK Algorithm is not supported on a table
         * with secondary engine.
         */
        case ER_BULK_LOAD_SECONDARY_ENGINE = 6028;
        /**
         * Error number: 6029; Symbol: ER_BULK_READER_ERROR; SQLSTATE: HY000
         *
         * Message: Bulk reader error: %s
         */
        case ER_BULK_READER_ERROR = 6029;
        /**
         * Error number: 6030; Symbol: ER_BULK_READER_FILE_DOESNT_EXIST; SQLSTATE: HY000
         *
         * Message: File not found, check whether it exists: %s
         */
        case ER_BULK_READER_FILE_DOESNT_EXIST = 6030;
        /**
         * Error number: 6031; Symbol: ER_BULK_READER_COULDNT_RESOLVE_HOST; SQLSTATE: HY000
         *
         * Message: Couldn't resolve host: %s
         */
        case ER_BULK_READER_COULDNT_RESOLVE_HOST = 6031;
        /**
         * Error number: 6032; Symbol: ER_START_REPLICA_CHANNEL_INVALID_CONFIGURATION; SQLSTATE: HY000
         *
         * Message: Cannot start replication channel '%s' because %s.
         */
        case ER_START_REPLICA_CHANNEL_INVALID_CONFIGURATION = 6032;
        /**
         * Error number: 6033; Symbol: ER_CANNOT_EXECUTE_IN_PRIMARY; SQLSTATE: HY000
         *
         * Message: '%s' is not supported
         */
        case ER_CANNOT_EXECUTE_IN_PRIMARY = 6033;
        /**
         * Error number: 6034; Symbol: ER_TOO_MANY_GROUP_BY_MODIFIER_BRANCHES; SQLSTATE: HY000
         *
         * Message: '%s' is supported with maximum %d elements in the GROUP
         * BY list
         */
        case ER_TOO_MANY_GROUP_BY_MODIFIER_BRANCHES = 6034;
        /**
         * Error number: 6035; Symbol: ER_WARN_DEPRECATED_ENGINE_SYNTAX_NO_REPLACEMENT; SQLSTATE: HY000
         *
         * Message: '%s' for '%s' storage engine is deprecated and will be
         * removed in a future release.
         */
        case ER_WARN_DEPRECATED_ENGINE_SYNTAX_NO_REPLACEMENT = 6035;
        /**
         * Error number: 6036; Symbol: ER_QUALIFY_WITHOUT_WINDOW_FUNCTION; SQLSTATE: HY000
         *
         * Message: QUALIFY clause cannot be used without a window function.
         */
        case ER_QUALIFY_WITHOUT_WINDOW_FUNCTION = 6036;
        /**
         * Error number: 6037; Symbol: ER_SUPPORTED_ONLY_WITH_HYPERGRAPH; SQLSTATE: HY000
         *
         * Message: '%s' can be used only if the hypergraph optimizer is
         * enabled.
         */
        case ER_SUPPORTED_ONLY_WITH_HYPERGRAPH = 6037;
        /**
         * Error number: 6038; Symbol: ER_SPECIFIC_ACCESS_DENIED; SQLSTATE: HY000
         *
         * Message: Access denied; you need %s privilege(s) for this
         * operation
         */
        case ER_SPECIFIC_ACCESS_DENIED = 6038;
        /**
         * Error number: 6039; Symbol: ER_CANT_SET_GTID_NEXT_TO_AUTOMATIC_TAGGED_WHEN_GTID_MODE_IS_OFF; SQLSTATE: HY000
         *
         * Message: @@SESSION.GTID_NEXT cannot be set to
         * AUTOMATIC:<TAG> when @@GLOBAL.GTID_MODE = OFF or
         * OFF_PERMISSIVE
         */
        case ER_CANT_SET_GTID_NEXT_TO_AUTOMATIC_TAGGED_WHEN_GTID_MODE_IS_OFF = 6039;
        /**
         * Error number: 6040; Symbol: ER_GTID_NEXT_TAG_GTID_MODE_OFF; SQLSTATE: HY000
         *
         * Message: @@SESSION.GTID_NEXT cannot be set to UUID:TAG:NUMBER when
         * @@GLOBAL.GTID_MODE = OFF.
         */
        case ER_GTID_NEXT_TAG_GTID_MODE_OFF = 6040;
        /**
         * Error number: 6041; Symbol: ER_LH_COL_NOT_NULLABLE; SQLSTATE: HY000
         *
         * Message: Column %d of %s : Column contains null but it is not
         * nullable.
         */
        case ER_LH_COL_NOT_NULLABLE = 6041;
        /**
         * Error number: 6042; Symbol: ER_LH_WARN_COL_MISSING_NOT_NULLABLE; SQLSTATE: HY000
         *
         * Message: Column %d of %s : Column is missing, but it is not
         * nullable and no explicit default value is provided.
         */
        case ER_LH_WARN_COL_MISSING_NOT_NULLABLE = 6042;
        /**
         * Error number: 6043; Symbol: ER_LH_COL_IS_EMPTY; SQLSTATE: HY000
         *
         * Message: Column %d of %s : Column is empty.
         */
        case ER_LH_COL_IS_EMPTY = 6043;
        /**
         * Error number: 6044; Symbol: ER_LH_COL_IS_EMPTY_WARN; SQLSTATE: HY000
         *
         * Message: Column %d of %s : Column is empty, setting default value.
         */
        case ER_LH_COL_IS_EMPTY_WARN = 6044;
        /**
         * Error number: 6045; Symbol: ER_LH_BAD_VALUE; SQLSTATE: HY000
         *
         * Message: Column %d of %s : Invalid %s value.
         */
        case ER_LH_BAD_VALUE = 6045;
        /**
         * Error number: 6046; Symbol: ER_LH_DECIMAL_UNKNOWN_ERR; SQLSTATE: HY000
         *
         * Message: Column %d of %s : Unknown error while parsing decimal.
         */
        case ER_LH_DECIMAL_UNKNOWN_ERR = 6046;
        /**
         * Error number: 6047; Symbol: ER_LH_DECIMAL_OOM_ERR; SQLSTATE: HY000
         *
         * Message: Column %d of %s : Out of memory loading decimal.
         */
        case ER_LH_DECIMAL_OOM_ERR = 6047;
        /**
         * Error number: 6048; Symbol: ER_LH_WARN_DECIMAL_ROUNDING; SQLSTATE: HY000
         *
         * Message: Column %d of %s : Fraction exceeds schema, rounding
         * value.
         */
        case ER_LH_WARN_DECIMAL_ROUNDING = 6048;
        /**
         * Error number: 6049; Symbol: ER_LH_DECIMAL_PRECISION_EXCEEDS_SCHEMA; SQLSTATE: HY000
         *
         * Message: Column %d of %s : decimal precision exceeds schema.
         */
        case ER_LH_DECIMAL_PRECISION_EXCEEDS_SCHEMA = 6049;
        /**
         * Error number: 6050; Symbol: ER_LH_EXCEEDS_MIN; SQLSTATE: HY000
         *
         * Message: Column %d of %s : %s exceeds min.
         */
        case ER_LH_EXCEEDS_MIN = 6050;
        /**
         * Error number: 6051; Symbol: ER_LH_EXCEEDS_MAX; SQLSTATE: HY000
         *
         * Message: Column %d of %s : %s exceeds max.
         */
        case ER_LH_EXCEEDS_MAX = 6051;
        /**
         * Error number: 6052; Symbol: ER_LH_WARN_EXCEEDS_MIN_TRUNCATING; SQLSTATE: HY000
         *
         * Message: Column %d of %s : %s exceeds min, setting to min value
         * possible.
         */
        case ER_LH_WARN_EXCEEDS_MIN_TRUNCATING = 6052;
        /**
         * Error number: 6053; Symbol: ER_LH_WARN_EXCEEDS_MAX_TRUNCATING; SQLSTATE: HY000
         *
         * Message: Column %d of %s : %s exceeds max, setting to max value
         * possible.
         */
        case ER_LH_WARN_EXCEEDS_MAX_TRUNCATING = 6053;
        /**
         * Error number: 6054; Symbol: ER_LH_REAL_IS_NAN; SQLSTATE: HY000
         *
         * Message: Column %d of %s : Real value is NaN.
         */
        case ER_LH_REAL_IS_NAN = 6054;
        /**
         * Error number: 6055; Symbol: ER_LH_OUT_OF_RANGE; SQLSTATE: HY000
         *
         * Message: Column %d of %s : %s value is out of range.
         */
        case ER_LH_OUT_OF_RANGE = 6055;
        /**
         * Error number: 6056; Symbol: ER_LH_DATETIME_FORMAT; SQLSTATE: HY000
         *
         * Message: Column %d of %s : Error while applying %s.
         */
        case ER_LH_DATETIME_FORMAT = 6056;
        /**
         * Error number: 6057; Symbol: ER_LH_WARN_TRUNCATED; SQLSTATE: HY000
         *
         * Message: Column %d of %s : %s value was truncated.
         */
        case ER_LH_WARN_TRUNCATED = 6057;
        /**
         * Error number: 6058; Symbol: ER_LH_CANNOT_CONVERT_STRING; SQLSTATE: HY000
         *
         * Message: Column %d of %s : Cannot convert string %s.
         */
        case ER_LH_CANNOT_CONVERT_STRING = 6058;
        /**
         * Error number: 6059; Symbol: ER_LH_RESOURCE_PRINCIPAL_ERR; SQLSTATE: HY000
         *
         * Message: Resource principal error.
         */
        case ER_LH_RESOURCE_PRINCIPAL_ERR = 6059;
        /**
         * Error number: 6060; Symbol: ER_LH_AWS_AUTH_ERR; SQLSTATE: HY000
         *
         * Message: AWS authentication error.
         */
        case ER_LH_AWS_AUTH_ERR = 6060;
        /**
         * Error number: 6061; Symbol: ER_LH_CSV_PARSING_ERR; SQLSTATE: HY000
         *
         * Message: %s at byte offset %lu: Parsing error. %s
         */
        case ER_LH_CSV_PARSING_ERR = 6061;
        /**
         * Error number: 6062; Symbol: ER_LH_COLUMN_MISMATCH_ERR; SQLSTATE: HY000
         *
         * Message: %s: Mismatch in the number of columns. Expected %u, found
         * %u.
         */
        case ER_LH_COLUMN_MISMATCH_ERR = 6062;
        /**
         * Error number: 6063; Symbol: ER_LH_COLUMN_MAX_ERR; SQLSTATE: HY000
         *
         * Message: %s: More than %u column(s) found.
         */
        case ER_LH_COLUMN_MAX_ERR = 6063;
        /**
         * Error number: 6064; Symbol: ER_LH_CHARSET_UNSUPPORTED; SQLSTATE: HY000
         *
         * Message: Column %d in %s: Charset is not supported.
         */
        case ER_LH_CHARSET_UNSUPPORTED = 6064;
        /**
         * Error number: 6065; Symbol: ER_LH_PARQUET_DECIMAL_CONVERSION_ERR; SQLSTATE: HY000
         *
         * Message: Column %d in %s: Decimal conversion error.
         */
        case ER_LH_PARQUET_DECIMAL_CONVERSION_ERR = 6065;
        /**
         * Error number: 6066; Symbol: ER_LH_STRING_TOO_LONG; SQLSTATE: HY000
         *
         * Message: Column %d in %s: String is too long.
         */
        case ER_LH_STRING_TOO_LONG = 6066;
        /**
         * Error number: 6067; Symbol: ER_LH_RESOURCE_PRINCIPAL_BUCKET_ERR; SQLSTATE: HY000
         *
         * Message: Resource Principal endpoint is not configured. Cannot
         * access following buckets: %s.
         */
        case ER_LH_RESOURCE_PRINCIPAL_BUCKET_ERR = 6067;
        /**
         * Error number: 6068; Symbol: ER_LH_NO_FILES_FOUND; SQLSTATE: HY000
         *
         * Message: No files found corresponding to the following data
         * locations: %s.
         */
        case ER_LH_NO_FILES_FOUND = 6068;
        /**
         * Error number: 6069; Symbol: ER_LH_EMPTY_FILE; SQLSTATE: HY000
         *
         * Message: File %s is empty.
         */
        case ER_LH_EMPTY_FILE = 6069;
        /**
         * Error number: 6070; Symbol: ER_LH_DUPLICATE_FILE; SQLSTATE: HY000
         *
         * Message: File %s was not processed (duplicate).
         */
        case ER_LH_DUPLICATE_FILE = 6070;
        /**
         * Error number: 6071; Symbol: ER_LH_AVRO_SCHEMA_DEPTH_EXCEEDS_MAX; SQLSTATE: HY000
         *
         * Message: File %s: Avro schema depth exceeds max allowed depth.
         */
        case ER_LH_AVRO_SCHEMA_DEPTH_EXCEEDS_MAX = 6071;
        /**
         * Error number: 6072; Symbol: ER_LH_AVRO_HEADER_MISMATCH; SQLSTATE: HY000
         *
         * Message: File %s: Header does not match other files.
         */
        case ER_LH_AVRO_HEADER_MISMATCH = 6072;
        /**
         * Error number: 6073; Symbol: ER_LH_AVRO_ENUM_CANNOT_CONVERT_CHARSET; SQLSTATE: HY000
         *
         * Message: File %s: Enum symbol can't convert to column charset.
         */
        case ER_LH_AVRO_ENUM_CANNOT_CONVERT_CHARSET = 6073;
        /**
         * Error number: 6074; Symbol: ER_LH_AVRO_ENUM_MISMATCH; SQLSTATE: HY000
         *
         * Message: File %s: Enum symbols are not the same, or are not in the
         * same order.
         */
        case ER_LH_AVRO_ENUM_MISMATCH = 6074;
        /**
         * Error number: 6075; Symbol: ER_LH_AVRO_TYPE_CANNOT_CONVERT; SQLSTATE: HY000
         *
         * Message: Column %d in %s: Avro value of physical type %.*s logical
         * type %.*s cannot be converted to mysql type %s.
         */
        case ER_LH_AVRO_TYPE_CANNOT_CONVERT = 6075;
        /**
         * Error number: 6076; Symbol: ER_LH_AVRO_FILE_ENDS_UNEXPECTEDLY; SQLSTATE: HY000
         *
         * Message: File %.*s: Ends unexpectedly.
         */
        case ER_LH_AVRO_FILE_ENDS_UNEXPECTEDLY = 6076;
        /**
         * Error number: 6077; Symbol: ER_LH_AVRO_FILE_DATA_CORRUPT; SQLSTATE: HY000
         *
         * Message: File %.*s: File data might be corrupt.
         */
        case ER_LH_AVRO_FILE_DATA_CORRUPT = 6077;
        /**
         * Error number: 6078; Symbol: ER_LH_AVRO_INVALID_UNION; SQLSTATE: HY000
         *
         * Message: Column %d in %s: Invalid Avro union encountered. Unions
         * are only supported to represent nullable columns. One of the two
         * types of the union must be null.
         */
        case ER_LH_AVRO_INVALID_UNION = 6078;
        /**
         * Error number: 6079; Symbol: ER_LH_AVRO_INVALID_BLOCK_SIZE; SQLSTATE: HY000
         *
         * Message: File %.*s: Invalid avro block size.
         */
        case ER_LH_AVRO_INVALID_BLOCK_SIZE = 6079;
        /**
         * Error number: 6080; Symbol: ER_LH_AVRO_INVALID_BLOCK_RECORD_COUNT; SQLSTATE: HY000
         *
         * Message: File %.*s: Invalid Avro block record count.
         */
        case ER_LH_AVRO_INVALID_BLOCK_RECORD_COUNT = 6080;
        /**
         * Error number: 6081; Symbol: ER_LH_FORMAT_HEADER_NO_MAGIC_BYTES; SQLSTATE: HY000
         *
         * Message: File %.*s: Cannot locate %s specific metadata. Either the
         * file is corrupted or this is not an %s file.
         */
        case ER_LH_FORMAT_HEADER_NO_MAGIC_BYTES = 6081;
        /**
         * Error number: 6082; Symbol: ER_LH_AVRO_HEADER_METADATA_ERR; SQLSTATE: HY000
         *
         * Message: File %.*s: Could not process Avro header metadata. The
         * metadata is corrupted or invalid.
         */
        case ER_LH_AVRO_HEADER_METADATA_ERR = 6082;
        /**
         * Error number: 6083; Symbol: ER_LH_AVRO_HEADER_NO_SCHEMA; SQLSTATE: HY000
         *
         * Message: File %.*s: No schema in Avro header metadata.
         */
        case ER_LH_AVRO_HEADER_NO_SCHEMA = 6083;
        /**
         * Error number: 6084; Symbol: ER_LH_AVRO_NO_CODEC_IN_HEADER; SQLSTATE: HY000
         *
         * Message: File %.*s: No codec in Avro header metadata.
         */
        case ER_LH_AVRO_NO_CODEC_IN_HEADER = 6084;
        /**
         * Error number: 6085; Symbol: ER_LH_AVRO_INVALID_NAME_IN_SCHEMA; SQLSTATE: HY000
         *
         * Message: File %.*s: Invalid name in Avro schema.
         */
        case ER_LH_AVRO_INVALID_NAME_IN_SCHEMA = 6085;
        /**
         * Error number: 6086; Symbol: ER_LH_AVRO_DECODING_ERR; SQLSTATE: HY000
         *
         * Message: File %.*s: Error decoding Avro %.*s. %s
         */
        case ER_LH_AVRO_DECODING_ERR = 6086;
        /**
         * Error number: 6087; Symbol: ER_LH_PARQUET_NON_UTF8_FILE_ENC; SQLSTATE: HY000
         *
         * Message: Column %d in %s: String with non-utf8 file encoding.
         */
        case ER_LH_PARQUET_NON_UTF8_FILE_ENC = 6087;
        /**
         * Error number: 6088; Symbol: ER_LH_PARQUET_SCHEMA_MISMATCH; SQLSTATE: HY000
         *
         * Message: Column %d in %s: Difference in column type among Parquet
         * files.
         */
        case ER_LH_PARQUET_SCHEMA_MISMATCH = 6088;
        /**
         * Error number: 6089; Symbol: ER_LH_PARQUET_ROW_GROUP_SIZE_EXCEEDS_MAX; SQLSTATE: HY000
         *
         * Message: File %s: Size of row group %ld is larger than maximum
         * allowed size (%d).
         */
        case ER_LH_PARQUET_ROW_GROUP_SIZE_EXCEEDS_MAX = 6089;
        /**
         * Error number: 6090; Symbol: ER_LH_PARQUET_CANNOT_LOCATE_OFFSET; SQLSTATE: HY000
         *
         * Message: File %s: Cannot locate offset of row group %ld in
         * metadata.
         */
        case ER_LH_PARQUET_CANNOT_LOCATE_OFFSET = 6090;
        /**
         * Error number: 6091; Symbol: ER_LH_PARQUET_TYPE_CANNOT_CONVERT; SQLSTATE: HY000
         *
         * Message: Column %d in %s: Parquet type cannot be converted to
         * mysql %s.
         */
        case ER_LH_PARQUET_TYPE_CANNOT_CONVERT = 6091;
        /**
         * Error number: 6092; Symbol: ER_LH_PARQUET_CANNOT_LOCATE_SCHEMA; SQLSTATE: HY000
         *
         * Message: Cannot locate schema in %s.
         */
        case ER_LH_PARQUET_CANNOT_LOCATE_SCHEMA = 6092;
        /**
         * Error number: 6093; Symbol: ER_LH_INFER_NUM_COL_MISMATCH; SQLSTATE: HY000
         *
         * Message: Column count mismatch between files: '%s' has %d columns; but '%s' has %d columns.
         */
        case ER_LH_INFER_NUM_COL_MISMATCH = 6093;
        /**
         * Error number: 6094; Symbol: ER_LH_OOM; SQLSTATE: HY000
         *
         * Message: Insufficient memory.
         */
        case ER_LH_OOM = 6094;
        /**
         * Error number: 6095; Symbol: ER_LH_WARN_INFER_SKIPPED_LINES; SQLSTATE: HY000
         *
         * Message: Skipped %lu line(s) due to mismatched num of cols.
         */
        case ER_LH_WARN_INFER_SKIPPED_LINES = 6095;
        /**
         * Error number: 6096; Symbol: ER_LH_WARN_INFER_SKIPPED_FILES; SQLSTATE: HY000
         *
         * Message: Skipped %lu file(s) due to mismatched num of cols.
         */
        case ER_LH_WARN_INFER_SKIPPED_FILES = 6096;
        /**
         * Error number: 6097; Symbol: ER_LH_INFER_FILE_HAS_NO_DATA; SQLSTATE: HY000
         *
         * Message: File %s is skipped because it has no valid data. File is
         * either empty or all rows are skipped.
         */
        case ER_LH_INFER_FILE_HAS_NO_DATA = 6097;
        /**
         * Error number: 6098; Symbol: ER_LH_INFER_NO_DATA; SQLSTATE: HY000
         *
         * Message: No valid data found for processing.
         */
        case ER_LH_INFER_NO_DATA = 6098;
        /**
         * Error number: 6099; Symbol: ER_LH_INFER_NO_FILES; SQLSTATE: HY000
         *
         * Message: No valid files found for processing.
         */
        case ER_LH_INFER_NO_FILES = 6099;
        /**
         * Error number: 6100; Symbol: ER_LH_WARN_INFER_USE_DEFAULT_COL_NAMES; SQLSTATE: HY000
         *
         * Message: Used default column names for column index(es) %s as they
         * are %s.
         */
        case ER_LH_WARN_INFER_USE_DEFAULT_COL_NAMES = 6100;
        /**
         * Error number: 6101; Symbol: ER_LH_PARQUET_CANNOT_READ_HEADER; SQLSTATE: HY000
         *
         * Message: File %s: Unable to read Parquet header.
         */
        case ER_LH_PARQUET_CANNOT_READ_HEADER = 6101;
        /**
         * Error number: 6102; Symbol: ER_LH_INFER_WARN_GOT_EXCEPTION; SQLSTATE: HY000
         *
         * Message: Got an exception while trying to process file task.
         */
        case ER_LH_INFER_WARN_GOT_EXCEPTION = 6102;
        /**
         * Error number: 6103; Symbol: ER_LH_AVRO_CANNOT_PARSE_HEADER; SQLSTATE: HY000
         *
         * Message: File %.*s: Could not parse avro header. Probably
         * corrupted avro file.
         */
        case ER_LH_AVRO_CANNOT_PARSE_HEADER = 6103;
        /**
         * Error number: 6104; Symbol: ER_LH_PARQUET_CANT_OPEN_FILE; SQLSTATE: HY000
         *
         * Message: Parquet reader cannot open %s. %s
         */
        case ER_LH_PARQUET_CANT_OPEN_FILE = 6104;
        /**
         * Error number: 6105; Symbol: ER_LH_TOO_LARGE_VALUE_ERR; SQLSTATE: HY000
         *
         * Message: File %.*s: %s
         */
        case ER_LH_TOO_LARGE_VALUE_ERR = 6105;
        /**
         * Error number: 6106; Symbol: ER_LH_TOO_LARGE_ROW_ERR; SQLSTATE: HY000
         *
         * Message: File %.*s: %s
         */
        case ER_LH_TOO_LARGE_ROW_ERR = 6106;
        /**
         * Error number: 6107; Symbol: ER_TABLESAMPLE_PERCENTAGE; SQLSTATE: 2202H
         *
         * Message: Tablesample percentage should range between 0 and 100.
         */
        case ER_TABLESAMPLE_PERCENTAGE = 6107;
        /**
         * Error number: 6108; Symbol: ER_TABLESAMPLE_ONLY_ON_BASE_TABLES; SQLSTATE: HY000
         *
         * Message: Tablesample can be applied only on base tables.
         */
        case ER_TABLESAMPLE_ONLY_ON_BASE_TABLES = 6108;
        /**
         * Error number: 6110; Symbol: ER_RESULT_SIZE_LIMIT_EXCEEDED; SQLSTATE: HY000
         *
         * Message: Result size limit exceeded.
         */
        case ER_RESULT_SIZE_LIMIT_EXCEEDED = 6110;
        /**
         * Error number: 6111; Symbol: ER_LANGUAGE_COMPONENT_INTERNAL; SQLSTATE: HY000
         *
         * Message: Language component: Internal error.
         */
        case ER_LANGUAGE_COMPONENT_INTERNAL = 6111;
        /**
         * Error number: 6112; Symbol: ER_LANGUAGE_COMPONENT_CONCURRENCY_LIMIT; SQLSTATE: HY000
         *
         * Message: Language component: Concurrency limit (%s) has been
         * reached.
         */
        case ER_LANGUAGE_COMPONENT_CONCURRENCY_LIMIT = 6112;
        /**
         * Error number: 6113; Symbol: ER_LANGUAGE_COMPONENT_RUNTIME; SQLSTATE: HY000
         *
         * Message: %s> %s
         */
        case ER_LANGUAGE_COMPONENT_RUNTIME = 6113;
        /**
         * Error number: 6114; Symbol: ER_LANGUAGE_COMPONENT_TIMEZONE; SQLSTATE: HY000
         *
         * Message: %s> Time zone %s is not supported.
         */
        case ER_LANGUAGE_COMPONENT_TIMEZONE = 6114;
        /**
         * Error number: 6115; Symbol: ER_LANGUAGE_COMPONENT_KEYWORD; SQLSTATE: HY000
         *
         * Message: %s> The identifier '%s' is not valid.
         */
        case ER_LANGUAGE_COMPONENT_KEYWORD = 6115;
        /**
         * Error number: 6116; Symbol: ER_LANGUAGE_COMPONENT_SET_SYSTEM_VARIABLE; SQLSTATE: HY000
         *
         * Message: Language component: System variable '%s' cannot be
         * configured when component is active.
         */
        case ER_LANGUAGE_COMPONENT_SET_SYSTEM_VARIABLE = 6116;
        /**
         * Error number: 6117; Symbol: ER_LANGUAGE_COMPONENT_UNSUPPORTED_TYPE; SQLSTATE: HY000
         *
         * Message: %s> %s
         */
        case ER_LANGUAGE_COMPONENT_UNSUPPORTED_TYPE = 6117;
        /**
         * Error number: 6118; Symbol: ER_LANGUAGE_COMPONENT_CONVERSION; SQLSTATE: HY000
         *
         * Message: %s> %s
         */
        case ER_LANGUAGE_COMPONENT_CONVERSION = 6118;
        /**
         * Error number: 6119; Symbol: ER_WARN_SP_STATEMENT_PARTIALLY_EXECUTED; SQLSTATE: HY000
         *
         * Message: Stored program statement is partially completed. Result
         * set might not contain all the rows.
         */
        case ER_WARN_SP_STATEMENT_PARTIALLY_EXECUTED = 6119;
        /**
         * Error number: 6120; Symbol: ER_STMT_EXECUTION_NOT_ALLOWED_WITHIN_SP_OR_TRG_OR_UDF; SQLSTATE: HY000
         *
         * Message: Executing SQL statement using %s Statement Handle
         * Interface is not allowed within stored function, trigger or
         * loadable function (UDF).
         */
        case ER_STMT_EXECUTION_NOT_ALLOWED_WITHIN_SP_OR_TRG_OR_UDF = 6120;
        /**
         * Error number: 6121; Symbol: ER_LH_JSON_PARSING; SQLSTATE: HY000
         *
         * Message: Column %d of %s : %s
         */
        case ER_LH_JSON_PARSING = 6121;
        /**
         * Error number: 6122; Symbol: ER_ENGINE_CANNOT_BE_DEFAULT; SQLSTATE: HY000
         *
         * Message: Engine %s cannot be set as default_storage_engine.
         */
        case ER_ENGINE_CANNOT_BE_DEFAULT = 6122;
        /**
         * Error number: 6123; Symbol: ER_PARTITION_PREFIX_KEY_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Column '%s.%s.%s' having prefix key part '%s(%u)' in the
         * PARTITION BY KEY() clause is not supported.
         */
        case ER_PARTITION_PREFIX_KEY_NOT_SUPPORTED = 6123;
        /**
         * Error number: 6124; Symbol: ER_WARN_DEPRECATED_NON_STANDARD_KEY; SQLSTATE: HY000
         *
         * Message: Foreign key '%s' refers to non-unique key or partial key.
         * This is deprecated and will be removed in a future release.
         */
        case ER_WARN_DEPRECATED_NON_STANDARD_KEY = 6124;
        /**
         * Error number: 6125; Symbol: ER_FK_NO_UNIQUE_INDEX_PARENT; SQLSTATE: HY000
         *
         * Message: Failed to add the foreign key constraint. Missing unique
         * key for constraint '%s' in the referenced table '%s'
         */
        case ER_FK_NO_UNIQUE_INDEX_PARENT = 6125;
        /**
         * Error number: 6126; Symbol: ER_ACCESS_DENIED_NO_PROXY_GRANT; SQLSTATE: HY000
         *
         * Message: Access denied for user '%s'@'%s', missing proxy
         * privilege.
         */
        case ER_ACCESS_DENIED_NO_PROXY_GRANT = 6126;
        /**
         * Error number: 6127; Symbol: ER_ACCESS_DENIED_NO_PROXY; SQLSTATE: HY000
         *
         * Message: Access denied for user '%s'@'%s', proxied user doesn't
         * exist.
         */
        case ER_ACCESS_DENIED_NO_PROXY = 6127;
        /**
         * Error number: 6128; Symbol: ER_LH_USER_DATA_ACCESS_FAILED; SQLSTATE: HY000
         *
         * Message: Unable to access the following data locations: %s
         */
        case ER_LH_USER_DATA_ACCESS_FAILED = 6128;
        /**
         * Error number: 6129; Symbol: ER_BULK_READER_ZSTD_ERROR; SQLSTATE: HY000
         *
         * Message: ZSTD decompression failed: %s
         */
        case ER_BULK_READER_ZSTD_ERROR = 6129;
        /**
         * Error number: 6130; Symbol: ER_BULK_PARSER_ERROR; SQLSTATE: HY000
         *
         * Message: %s
         */
        case ER_BULK_PARSER_ERROR = 6130;
        /**
         * Error number: 6131; Symbol: ER_LH_INVALID_JSON_FILE_FORMAT_SCHEMA; SQLSTATE: HY000
         *
         * Message: Invalid json file format schema: %s
         */
        case ER_LH_INVALID_JSON_FILE_FORMAT_SCHEMA = 6131;
        /**
         * Error number: 6132; Symbol: ER_LH_INFER_JSON_INVALID_SCHEMA; SQLSTATE: HY000
         *
         * Message: Inferred invalid schema. A single column with JSON type
         * is the only valid schema for JSON file format.
         */
        case ER_LH_INFER_JSON_INVALID_SCHEMA = 6132;
        /**
         * Error number: 6133; Symbol: ER_LH_JSON_FILE_FORMAT_WARN_INFER_SCHEMA; SQLSTATE: HY000
         *
         * Message: Altered the inferred schema to a single JSON column.
         */
        case ER_LH_JSON_FILE_FORMAT_WARN_INFER_SCHEMA = 6133;
        /**
         * Error number: 6134; Symbol: ER_NON_SCALAR_USED_AS_KEY; SQLSTATE: HY000
         *
         * Message: Non-scalar (e.g., vector) column '%s' cannot be used as
         * key.
         */
        case ER_NON_SCALAR_USED_AS_KEY = 6134;
        /**
         * Error number: 6135; Symbol: ER_INCOMPATIBLE_TYPE_AGG; SQLSTATE: HY000
         *
         * Message: Columns aggregated with incompatible types: '%s', '%s'.
         */
        case ER_INCOMPATIBLE_TYPE_AGG = 6135;
        /**
         * Error number: 6136; Symbol: ER_DATA_INCOMPATIBLE_WITH_VECTOR; SQLSTATE: HY000
         *
         * Message: Value of type '%s, size: %zu' cannot be converted to
         * 'vector' type.
         */
        case ER_DATA_INCOMPATIBLE_WITH_VECTOR = 6136;
        /**
         * Error number: 6137; Symbol: ER_EXCEEDS_VECTOR_MAX_DIMENSIONS; SQLSTATE: HY000
         *
         * Message: Data size (%zu Bytes, %u dimensions) exceeds VECTOR max
         * (%zu Bytes, %u dimensions) for column: '%s'
         */
        case ER_EXCEEDS_VECTOR_MAX_DIMENSIONS = 6137;
        /**
         * Error number: 6138; Symbol: ER_TO_VECTOR_CONVERSION; SQLSTATE: HY000
         *
         * Message: Data cannot be converted to a valid vector: '%.*s'
         */
        case ER_TO_VECTOR_CONVERSION = 6138;
        /**
         * Error number: 6140; Symbol: ER_TP_CANNOT_DISABLE_MTL_WITH_DL; SQLSTATE: HY000
         *
         * Message: The variable thread_pool_max_transactions_limit cannot be
         * set to 0 when thread_pool_dedicated_listernes is ON.
         */
        case ER_TP_CANNOT_DISABLE_MTL_WITH_DL = 6140;
        /**
         * Error number: 6400; Symbol: ER_SERVER_OFFLINE_MODE_REASON; SQLSTATE: HY000
         *
         * Message: The server is currently in offline mode since %s, reason: %s
         */
        case ER_SERVER_OFFLINE_MODE_REASON = 6400;
        /**
         * Error number: 6402; Symbol: ER_LH_UNSTRUCTURED_NO_DATA_FOUND; SQLSTATE: HY000
         *
         * Message: No data was extracted from provided files.
         */
        case ER_LH_UNSTRUCTURED_NO_DATA_FOUND = 6402;
        /**
         * Error number: 6403; Symbol: ER_LH_UNSTRUCTURED_FILE_PARSE_ERR; SQLSTATE: HY000
         *
         * Message: File: %.*s Could not be parsed. %s
         */
        case ER_LH_UNSTRUCTURED_FILE_PARSE_ERR = 6403;
        /**
         * Error number: 6404; Symbol: ER_LH_UNSTRUCTURED_ENCODING_ERR; SQLSTATE: HY000
         *
         * Message: Segments %d to %d in file: %.*s Could not be encoded.
         */
        case ER_LH_UNSTRUCTURED_ENCODING_ERR = 6404;
        /**
         * Error number: 6405; Symbol: ER_LH_UNSTRUCTURED_FILE_TYPE_MISMATCH_ERR; SQLSTATE: HY000
         *
         * Message: File: %.*s is not a supported file type.
         */
        case ER_LH_UNSTRUCTURED_FILE_TYPE_MISMATCH_ERR = 6405;
        /**
         * Error number: 6406; Symbol: ER_LH_UNSTRUCTURED_SCHEMA_ERR; SQLSTATE: HY000
         *
         * Message: Defined schema does not match expected for column: %s.
         */
        case ER_LH_UNSTRUCTURED_SCHEMA_ERR = 6406;
        /**
         * Error number: 6407; Symbol: ER_LH_COLUMN_ENGINE_ATTR_ERR; SQLSTATE: HY000
         *
         * Message: Invalid column engine attribute: %s.
         */
        case ER_LH_COLUMN_ENGINE_ATTR_ERR = 6407;
        /**
         * Error number: 6408; Symbol: ER_LH_UNSTRUCTURED_OBJ_READ_ERR; SQLSTATE: HY000
         *
         * Message: File: %.*s Could not be read.
         */
        case ER_LH_UNSTRUCTURED_OBJ_READ_ERR = 6408;
        /**
         * Error number: 6409; Symbol: ER_LH_NO_SEGMENTS_GENERATED; SQLSTATE: HY000
         *
         * Message: File: %.*s did not result in segments.
         */
        case ER_LH_NO_SEGMENTS_GENERATED = 6409;
        /**
         * Error number: 6410; Symbol: ER_LH_UNSTRUCTURED_FILE_TOO_LARGE; SQLSTATE: HY000
         *
         * Message: File: %s is too large.
         */
        case ER_LH_UNSTRUCTURED_FILE_TOO_LARGE = 6410;
        /**
         * Error number: 6411; Symbol: ER_EXCEEDED_MAX_REGULAR_STATEMENT_HANDLE_LIMIT; SQLSTATE: HY000
         *
         * Message: Exceeded limit of %u regular SQL statement handles per
         * session.
         */
        case ER_EXCEEDED_MAX_REGULAR_STATEMENT_HANDLE_LIMIT = 6411;
        /**
         * Error number: 6412; Symbol: ER_EXPLAIN_ANALYZE_JSON_FORMAT_VERSION_NOT_SUPPORTED; SQLSTATE: 0A000
         *
         * Message: EXPLAIN ANALYZE does not support FORMAT=JSON with
         * explain_json_format_version=1.
         */
        case ER_EXPLAIN_ANALYZE_JSON_FORMAT_VERSION_NOT_SUPPORTED = 6412;
        /**
         * Error number: 6413; Symbol: ER_NON_DML_DYNAMIC_PARAMETERS; SQLSTATE: HY000
         *
         * Message: Dynamic parameters can only be used in DML statements.
         */
        case ER_NON_DML_DYNAMIC_PARAMETERS = 6413;
        /**
         * Error number: 6414; Symbol: ER_DEPRECATE_NON_COMPOSABLE_MULTIPLE_ENGINE; SQLSTATE: HY000
         *
         * Message: Combining the storage engines %s and %s is deprecated; but the statement or transaction updates both the %s table %s.%s
         * and the %s table %s.%s.
         */
        case ER_DEPRECATE_NON_COMPOSABLE_MULTIPLE_ENGINE = 6414;
        /**
         * Error number: 6415; Symbol: ER_BULK_JSON_INVALID; SQLSTATE: HY000
         *
         * Message: Bulk load reports invalid JSON: error='%s', table='%s'; field='%s'
         */
        case ER_BULK_JSON_INVALID = 6415;
        /**
         * Error number: 6416; Symbol: ER_BULK_BLOB_TOO_BIG; SQLSTATE: HY000
         *
         * Message: Column data bigger than %zu bytes for column='%s' of
         * table='%s'
         */
        case ER_BULK_BLOB_TOO_BIG = 6416;
        /**
         * Error number: 6417; Symbol: ER_NO_QUERY_PLAN_FOUND; SQLSTATE: HY000
         *
         * Message: No query execution plan was found for the statement.
         */
        case ER_NO_QUERY_PLAN_FOUND = 6417;
        /**
         * Error number: 6418; Symbol: ER_LH_CP_TOO_MANY_CHANGES; SQLSTATE: HY000
         *
         * Message: More than %llu changes detected. Certain changes are
         * ignored.
         */
        case ER_LH_CP_TOO_MANY_CHANGES = 6418;
        /**
         * Error number: 6419; Symbol: ER_LH_CP_NOT_ENABLED; SQLSTATE: HY000
         *
         * Message: Lakehouse Incremental Load is not enabled.
         */
        case ER_LH_CP_NOT_ENABLED = 6419;
        /**
         * Error number: 6420; Symbol: ER_LH_CP_NO_VECTOR_STORE; SQLSTATE: HY000
         *
         * Message: Lakehouse Incremental Load is not supported for vector
         * store tables.
         */
        case ER_LH_CP_NO_VECTOR_STORE = 6420;
        /**
         * Error number: 6421; Symbol: ER_LH_CP_NO_VALIDATION_MODE; SQLSTATE: HY000
         *
         * Message: Lakehouse Incremental Load is not supported with
         * validation mode.
         */
        case ER_LH_CP_NO_VALIDATION_MODE = 6421;
        /**
         * Error number: 6423; Symbol: ER_LH_CP_COMMIT_FAILED; SQLSTATE: HY000
         *
         * Message: Lakehouse Incremental Load commit operation failed.
         */
        case ER_LH_CP_COMMIT_FAILED = 6423;
        /**
         * Error number: 6424; Symbol: ER_LH_UNSTRUCTURED_INVALID_LANGUAGE; SQLSTATE: HY000
         *
         * Message: Invalid language code. %s.
         */
        case ER_LH_UNSTRUCTURED_INVALID_LANGUAGE = 6424;
        /**
         * Error number: 6425; Symbol: ER_LH_VECTOR_TOO_MANY_ENTRIES; SQLSTATE: HY000
         *
         * Message: Column %d in %s: Vector has more entries than its
         * dimension: %s
         */
        case ER_LH_VECTOR_TOO_MANY_ENTRIES = 6425;
        /**
         * Error number: 6426; Symbol: ER_BULK_PARSER_UNEXPECTED_ENCLOSED_BY_CHARACTER; SQLSTATE: HY000
         *
         * Message: Unexpected enclosed by character found inside unenclosed
         * string at row %ld in file '%s' resulting in malformed CSV.
         */
        case ER_BULK_PARSER_UNEXPECTED_ENCLOSED_BY_CHARACTER = 6426;
        /**
         * Error number: 6427; Symbol: ER_CMD_NEED_SUPER_OR_CREATE_SPATIAL_REFERENCE_SYSTEM; SQLSTATE: HY000
         *
         * Message: You need the SUPER or CREATE_SPATIAL_REFERENCE_SYSTEM
         * privilege for command '%s'
         */
        case ER_CMD_NEED_SUPER_OR_CREATE_SPATIAL_REFERENCE_SYSTEM = 6427;
        /**
         * Error number: 6428; Symbol: ER_CLAUSE_IGNORED; SQLSTATE: HY000
         *
         * Message: %s is ignored in %s.
         */
        case ER_CLAUSE_IGNORED = 6428;
        /**
         * Error number: 6429; Symbol: ER_INVALID_CLAUSE_IN_CONTEXT; SQLSTATE: HY000
         *
         * Message: Clause %s is not valid with %s.
         */
        case ER_INVALID_CLAUSE_IN_CONTEXT = 6429;
        /**
         * Error number: 6430; Symbol: ER_INVALID_CLAUSE_COMBINATION; SQLSTATE: HY000
         *
         * Message: Clauses %s and %s cannot be combined.
         */
        case ER_INVALID_CLAUSE_COMBINATION = 6430;
        /**
         * Error number: 6431; Symbol: ER_WARN_REDACTED_PRIVILEGES; SQLSTATE: HY000
         *
         * Message: Result of SHOW was redacted due to insufficient
         * privileges for table %s.
         */
        case ER_WARN_REDACTED_PRIVILEGES = 6431;
        /**
         * Error number: 6432; Symbol: ER_INVALID_OUTER_REFERENCE; SQLSTATE: HY000
         *
         * Message: Outer reference %s in window's ORDER BY or PARTITION BY
         * clause not allowed.
         */
        case ER_INVALID_OUTER_REFERENCE = 6432;
        /**
         * Error number: 6433; Symbol: ER_LIBRARIES_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Libraries are not supported for %s.
         */
        case ER_LIBRARIES_NOT_SUPPORTED = 6433;
        /**
         * Error number: 6434; Symbol: ER_LH_WARN_SUMMARY; SQLSTATE: HY000
         *
         * Message: %s
         */
        case ER_LH_WARN_SUMMARY = 6434;
        /**
         * Error number: 6435; Symbol: ER_LH_WARN_INFER_USE_DEFAULT_DELIMITERS; SQLSTATE: HY000
         *
         * Message: Feature Auto delimiter detection is skipped (%s).
         */
        case ER_LH_WARN_INFER_USE_DEFAULT_DELIMITERS = 6435;
        /**
         * Error number: 6436; Symbol: ER_LIBRARY_INVALID; SQLSTATE: HY000
         *
         * Message: The routine '%s' references a missing library '%s.%s' or
         * definer/invoker of the routine lack rights to use it.
         */
        case ER_LIBRARY_INVALID = 6436;
        /**
         * Error number: 6437; Symbol: ER_CANNOT_PERSIST_TRANSACTION_ISOLATION; SQLSTATE: HY000
         *
         * Message: Cannot persist transaction isolation.
         */
        case ER_CANNOT_PERSIST_TRANSACTION_ISOLATION = 6437;
        /**
         * Error number: 6438; Symbol: ER_LH_AVRO_INVALID_RECORD; SQLSTATE: HY000
         *
         * Message: Column %d in %s: Invalid Avro record encountered. Nested
         * records are not supported.
         */
        case ER_LH_AVRO_INVALID_RECORD = 6438;
        /**
         * Error number: 6439; Symbol: ER_LH_INVALID_VALUE_IN_VECTOR; SQLSTATE: HY000
         *
         * Message: Column %d in %s: Invalid vector: contains a value %s.
         */
        case ER_LH_INVALID_VALUE_IN_VECTOR = 6439;
        /**
         * Error number: 6440; Symbol: ER_LH_WARN_VECTOR_LOSSY_CONVERSION; SQLSTATE: HY000
         *
         * Message: Column %d in %s: Conversion from type Int to type Float
         * could result in loss of precision.
         */
        case ER_LH_WARN_VECTOR_LOSSY_CONVERSION = 6440;
        /**
         * Error number: 6441; Symbol: ER_LH_UNSTRUCTURED_TRUNCATION_ERROR; SQLSTATE: HY000
         *
         * Message: Vector chunks are truncated for file: %.*s
         */
        case ER_LH_UNSTRUCTURED_TRUNCATION_ERROR = 6441;
        /**
         * Error number: 6442; Symbol: ER_LH_UNSTRUCTURED_PAGE_CHUNK_WARN; SQLSTATE: HY000
         *
         * Message: Split by 'page' chunking is changed to 'document'
         * chunking for %.*s because split by 'page' is not possible for
         * docx, doc, html, or txt formats.
         */
        case ER_LH_UNSTRUCTURED_PAGE_CHUNK_WARN = 6442;
        /**
         * Error number: 6443; Symbol: ER_LH_UNSTRUCTURED_TOO_MANY_CHUNKS; SQLSTATE: HY000
         *
         * Message: Too many chunks for file: %.*s
         */
        case ER_LH_UNSTRUCTURED_TOO_MANY_CHUNKS = 6443;
        /**
         * Error number: 6444; Symbol: ER_ACCESS_DENIED_FIREWALL; SQLSTATE: 28000
         *
         * Message: Access denied.
         */
        case ER_ACCESS_DENIED_FIREWALL = 6444;
        /**
         * Error number: 6445; Symbol: ER_LH_DECOMPRESSION_ERR; SQLSTATE: HY000
         *
         * Message: Failed to extract from %s: corrupted file, wrong
         * compression format, or multiple files in archive.
         */
        case ER_LH_DECOMPRESSION_ERR = 6445;
        /**
         * Error number: 6446; Symbol: ER_JDV_INVALID_DEFINITION_WRONG_ANNOTATIONS; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: Invalid, Duplicate
         * or Conflicting annotations for the JSON field.
         */
        case ER_JDV_INVALID_DEFINITION_WRONG_ANNOTATIONS = 6446;
        /**
         * Error number: 6447; Symbol: ER_JDV_ALGO_TEMPTABLE_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: ALGORITHM = TEMPTABLE is not supported for duality views.
         */
        case ER_JDV_ALGO_TEMPTABLE_NOT_SUPPORTED = 6447;
        /**
         * Error number: 6448; Symbol: ER_JDV_WITH_CHECK_OPTION_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: WITH
         * [LOCAL/CASCADED] CHECK OPTION clause is not supported.
         */
        case ER_JDV_WITH_CHECK_OPTION_NOT_SUPPORTED = 6448;
        /**
         * Error number: 6449; Symbol: ER_JDV_INVALID_DEFINITION_NON_SIMPLE_SELECT_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: Invalid JSON
         * duality view definition: Set Operations such as UNION, INTERSECT; EXCEPT and multi-level ORDER are not supported. Object "%s"
         * violates this rule.
         */
        case ER_JDV_INVALID_DEFINITION_NON_SIMPLE_SELECT_NOT_SUPPORTED = 6449;
        /**
         * Error number: 6450; Symbol: ER_JDV_INVALID_DEFINITION_CTE_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: Common Table
         * Expressions (CTE) are not supported. Object "%s" violates this
         * rule.
         */
        case ER_JDV_INVALID_DEFINITION_CTE_NOT_SUPPORTED = 6450;
        /**
         * Error number: 6451; Symbol: ER_JDV_INVALID_DEFINITION_GROUPBY_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: Clauses like GROUP
         * BY, HAVING are not supported. Object "%s" violates this rule.
         */
        case ER_JDV_INVALID_DEFINITION_GROUPBY_NOT_SUPPORTED = 6451;
        /**
         * Error number: 6452; Symbol: ER_JDV_INVALID_DEFINITION_WINDOW_FUNCTION_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: WINDOW functions
         * are not supported. Object "%s" violates this rule.
         */
        case ER_JDV_INVALID_DEFINITION_WINDOW_FUNCTION_NOT_SUPPORTED = 6452;
        /**
         * Error number: 6453; Symbol: ER_JDV_INVALID_DEFINITION_LIMIT_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: LIMIT clause is not
         * supported. Object "%s" violates this rule.
         */
        case ER_JDV_INVALID_DEFINITION_LIMIT_NOT_SUPPORTED = 6453;
        /**
         * Error number: 6454; Symbol: ER_JDV_INVALID_DEFINITION_ORDERBY_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: ORDER BY clause is
         * not supported. Object "%s" violates this rule.
         */
        case ER_JDV_INVALID_DEFINITION_ORDERBY_NOT_SUPPORTED = 6454;
        /**
         * Error number: 6455; Symbol: ER_JDV_INVALID_DEFINITION_MULTI_TABLES_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: FROM clause must
         * include exactly one table. Object "%s" violates this rule.
         */
        case ER_JDV_INVALID_DEFINITION_MULTI_TABLES_NOT_SUPPORTED = 6455;
        /**
         * Error number: 6456; Symbol: ER_JDV_INVALID_DEFINITION_NO_WHERE_CONDITION_IN_SUBOBJECT; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: WHERE clause is
         * mandatory with sub-objects. Object "%s" is missing this clause.
         */
        case ER_JDV_INVALID_DEFINITION_NO_WHERE_CONDITION_IN_SUBOBJECT = 6456;
        /**
         * Error number: 6457; Symbol: ER_JDV_INVALID_DEFINITION_WHERE_CONDITION_IN_ROOTOBJECT; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: WHERE clause is not
         * supported with root object.
         */
        case ER_JDV_INVALID_DEFINITION_WHERE_CONDITION_IN_ROOTOBJECT = 6457;
        /**
         * Error number: 6458; Symbol: ER_JDV_INVALID_DEFINITION_WRONG_WHERE_FORMAT_FOR_SUBOBJECT; SQLSTATE: HY000
         *
         * Message: Invalid JSON Duality View Definition: The WHERE clause in
         * sub-objects must consist of a single condition being an equality
         * comparison between parent object and sub-object's table columns.
         * Object "%s" violates this rule.
         */
        case ER_JDV_INVALID_DEFINITION_WRONG_WHERE_FORMAT_FOR_SUBOBJECT = 6458;
        /**
         * Error number: 6459; Symbol: ER_JDV_INVALID_DEFINITION_WRONG_FIELD_TYPE; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: JSON_DUALITY_OBJECT
         * value must be either a table column or a sub-query. Object "%s"
         * contains an invalid value.
         */
        case ER_JDV_INVALID_DEFINITION_WRONG_FIELD_TYPE = 6459;
        /**
         * Error number: 6460; Symbol: ER_JDV_INVALID_DEFINITION_CONTEXT_PREPARE_FAILED; SQLSTATE: HY000
         *
         * Message: JSON duality view context initialization failed.
         */
        case ER_JDV_INVALID_DEFINITION_CONTEXT_PREPARE_FAILED = 6460;
        /**
         * Error number: 6461; Symbol: ER_JDV_INVALID_DEFINITION_NO_JSON_OBJECT_IN_ROOT; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: Only
         * JSON_DUALITY_OBJECT() is allowed in the select list of root
         * object's query.
         */
        case ER_JDV_INVALID_DEFINITION_NO_JSON_OBJECT_IN_ROOT = 6461;
        /**
         * Error number: 6462; Symbol: ER_JDV_INVALID_DEFINITION_MUSTBE_JSON_OBJECT_FOR_SINGLETON; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: Only
         * JSON_DUALITY_OBJECT() is allowed in the select list of singleton
         * descendant object's query. Object "%s" violates this rule.
         */
        case ER_JDV_INVALID_DEFINITION_MUSTBE_JSON_OBJECT_FOR_SINGLETON = 6462;
        /**
         * Error number: 6463; Symbol: ER_JDV_INVALID_DEFINITION_MUSTBE_JSON_OBJECT_FOR_NESTED; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: Only
         * JSON_ARRAYAGG() is allowed in the select list of nested descendant
         * object's query. Object "%s" violates this rule.
         */
        case ER_JDV_INVALID_DEFINITION_MUSTBE_JSON_OBJECT_FOR_NESTED = 6463;
        /**
         * Error number: 6464; Symbol: ER_JDV_INVALID_DEFINITION_NO_JSON_OBJ_IN_ARRAYAGG; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: Only
         * JSON_DUALITY_OBJECT() is allowed in the argument list of
         * JSON_ARRAYAGG(). Object "%s" violates this rule.
         */
        case ER_JDV_INVALID_DEFINITION_NO_JSON_OBJ_IN_ARRAYAGG = 6464;
        /**
         * Error number: 6465; Symbol: ER_JDV_INVALID_DEFINITION_RELATIONSHIP_RULES_VIOLATED; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: For singleton
         * descendant object, the primary key column of a current object's
         * table must be used in the WHERE condition. For a nested descendant
         * object, the primary key column of the parent object's table must
         * be used in where condition. Object "%s" violates the rule.
         */
        case ER_JDV_INVALID_DEFINITION_RELATIONSHIP_RULES_VIOLATED = 6465;
        /**
         * Error number: 6466; Symbol: ER_JDV_INVALID_DEFINITION_COLUMN_TYPE_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: Object "%s"
         * projecting "%s.%s" includes column "%s" of type "%s". This type of
         * projection is not supported.
         */
        case ER_JDV_INVALID_DEFINITION_COLUMN_TYPE_NOT_SUPPORTED = 6466;
        /**
         * Error number: 6467; Symbol: ER_JDV_INVALID_DEFINITION_NON_BASE_TABLE_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: Only base tables
         * can be used to create JSON DUALITY VIEW. "%s.%s" is not a base
         * table.
         */
        case ER_JDV_INVALID_DEFINITION_NON_BASE_TABLE_NOT_SUPPORTED = 6467;
        /**
         * Error number: 6468; Symbol: ER_JDV_INVALID_DEFINITION_TABLE_WITHOUT_PK_FOUND; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: All participating
         * tables should have a primary key, "%s.%s" does not have it.
         */
        case ER_JDV_INVALID_DEFINITION_TABLE_WITHOUT_PK_FOUND = 6468;
        /**
         * Error number: 6469; Symbol: ER_JDV_INVALID_DEFINITION_TABLE_WITHOUT_PK_PROJECTION_FOUND; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: Primary key column
         * of every table should be projected, object "%s" that projects
         * table "%s.%s" does not.
         */
        case ER_JDV_INVALID_DEFINITION_TABLE_WITHOUT_PK_PROJECTION_FOUND = 6469;
        /**
         * Error number: 6470; Symbol: ER_JDV_INVALID_DEFINITION_ID_KEY_USED_BY_NOT_ROOT_TABLE; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: The key name "_id"
         * can only be used for primary key column of the root object and
         * cannot be assigned to column "%s" of table "%s.%s".
         */
        case ER_JDV_INVALID_DEFINITION_ID_KEY_USED_BY_NOT_ROOT_TABLE = 6470;
        /**
         * Error number: 6471; Symbol: ER_JDV_INVALID_DEFINITION_ID_KEY_NOT_USED_BY_ROOT_TABLE; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: Primary key column
         * of a root object's table must always be projected as "_id".
         */
        case ER_JDV_INVALID_DEFINITION_ID_KEY_NOT_USED_BY_ROOT_TABLE = 6471;
        /**
         * Error number: 6472; Symbol: ER_JDV_INVALID_TABLE_ANNOTATIONS_FOR_SINGLETON_OBJ; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: Incorrect
         * annotations for "%s". For singleton child object linked using
         * primary key column with parent, table annotations must enforce
         * both read-only or INSERT and UPDATE. DELETE is not allowed.
         */
        case ER_JDV_INVALID_TABLE_ANNOTATIONS_FOR_SINGLETON_OBJ = 6472;
        /**
         * Error number: 6473; Symbol: ER_JDV_INVALID_TABLE_ANNOTATIONS_FOR_NESTED_OBJ; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: Incorrect
         * annotations for "%s". Table annotations for Root, Nested child
         * object and Singleton child linked using non-primary key column
         * should enforce read-only or full writability (i.e. usage of
         * UPDATE, INSERT and DELETE tags).
         */
        case ER_JDV_INVALID_TABLE_ANNOTATIONS_FOR_NESTED_OBJ = 6473;
        /**
         * Error number: 6474; Symbol: ER_JDV_INVALID_DEFINITION_DUPLICATE_KEYS_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: Object "%s"
         * projects key "%s" more than once.
         */
        case ER_JDV_INVALID_DEFINITION_DUPLICATE_KEYS_NOT_SUPPORTED = 6474;
        /**
         * Error number: 6475; Symbol: ER_JDV_INVALID_DEFINITION_DUPLICATE_COLUMN_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: Object "%s"
         * projecting table "%s", projects column "%s" more than once.
         */
        case ER_JDV_INVALID_DEFINITION_DUPLICATE_COLUMN_NOT_SUPPORTED = 6475;
        /**
         * Error number: 6476; Symbol: ER_JDV_INVALID_DEFINITION_SAME_TABLE_INCONSISTENT_PROJECTION; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: If a table is
         * projected multiple times, the set of columns projected must be
         * consistent across all instances of the table projection. Table
         * "%s.%s" violates the rule.
         */
        case ER_JDV_INVALID_DEFINITION_SAME_TABLE_INCONSISTENT_PROJECTION = 6476;
        /**
         * Error number: 6477; Symbol: ER_JDV_INVALID_DEFINITION_COLUMN_LIST_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: Specifying column
         * list is not supported for duality views.
         */
        case ER_JDV_INVALID_DEFINITION_COLUMN_LIST_NOT_SUPPORTED = 6477;
        /**
         * Error number: 6478; Symbol: ER_JDV_INVALID_DEFINITION_INCONSISTENT_TABLE_FIELD_IN_THE_OBJECT; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: JSON_DUALITY_OBJECT
         * can only contain columns from the projected table. Object "%s" is
         * expected to project columns from "%s.%s" but includes columns from
         * "%s.%s", violating this rule.
         */
        case ER_JDV_INVALID_DEFINITION_INCONSISTENT_TABLE_FIELD_IN_THE_OBJECT = 6478;
        /**
         * Error number: 6479; Symbol: ER_JDV_INVALID_DEFINITION_WHERE_USES_NON_IMMEDIATE_PARENT; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: The WHERE condition
         * in sub-objects can only reference columns from the table being
         * projected in the current object and columns from the table
         * projected in the parent object. The object "%s" violates this
         * rule.
         */
        case ER_JDV_INVALID_DEFINITION_WHERE_USES_NON_IMMEDIATE_PARENT = 6479;
        /**
         * Error number: 6480; Symbol: ER_JDV_INVALID_DEFINITION_COMPOSITE_KEY_USED; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: Composite primary
         * key is not supported. Object "%s" projecting "%s" table violates
         * the rule.
         */
        case ER_JDV_INVALID_DEFINITION_COMPOSITE_KEY_USED = 6480;
        /**
         * Error number: 6481; Symbol: ER_JDV_INVALID_DEFINITION_ALIAS_NOT_USED_FOR_SAME_TABLES; SQLSTATE: HY000
         *
         * Message: Invalid JSON duality view definition: Parent and child
         * objects cannot project the same table without aliasing at least
         * one of them. Objects "%s" and "%s" violate this rule.
         */
        case ER_JDV_INVALID_DEFINITION_ALIAS_NOT_USED_FOR_SAME_TABLES = 6481;
        /**
         * Error number: 6482; Symbol: ER_JDV_OPERATION_NOT_SUPPORTED; SQLSTATE: 0A000
         *
         * Message: %s is not supported for JSON Duality Views.
         */
        case ER_JDV_OPERATION_NOT_SUPPORTED = 6482;
        /**
         * Error number: 6483; Symbol: ER_JDV_ALTER_OR_REPLACE_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: View '%s.%s' of '%s' type already exists. Replacing view
         * with mismatched type is not supported.
         */
        case ER_JDV_ALTER_OR_REPLACE_NOT_SUPPORTED = 6483;
        /**
         * Error number: 6484; Symbol: ER_JDV_INVALID_JSON_DUALITY_OBJECT_USAGE; SQLSTATE: HY000
         *
         * Message: JSON_DUALITY_OBJECT() can only be used to define a JSON
         * duality view.
         */
        case ER_JDV_INVALID_JSON_DUALITY_OBJECT_USAGE = 6484;
        /**
         * Error number: 6485; Symbol: ER_JDV_UNEXPECTED_JSON_TYPE; SQLSTATE: HY000
         *
         * Message: Path '%s' is not of type '%s'.
         */
        case ER_JDV_UNEXPECTED_JSON_TYPE = 6485;
        /**
         * Error number: 6486; Symbol: ER_JDV_PRIMARY_KEY_MUST_BE_PROVIDED; SQLSTATE: HY000
         *
         * Message: Primary key column %s.%s must be provided as path '%s.%s'
         * (this also applies to auto-generated columns).
         */
        case ER_JDV_PRIMARY_KEY_MUST_BE_PROVIDED = 6486;
        /**
         * Error number: 6487; Symbol: ER_JDV_JOIN_CONDITION_NOT_SATISFIED; SQLSTATE: HY000
         *
         * Message: Join condition is not satisfied as path '%s' for child
         * column %s.%s is not equal to path '%s' for parent column %s.%s.
         */
        case ER_JDV_JOIN_CONDITION_NOT_SATISFIED = 6487;
        /**
         * Error number: 6488; Symbol: ER_JDV_PK_DUPLICATES_NOT_IDENTICAL; SQLSTATE: HY000
         *
         * Message: Path '%s' is a duplicate for primary key column %s.%s but
         * has conflicting values for column %s: path '%s' vs path '%s'
         */
        case ER_JDV_PK_DUPLICATES_NOT_IDENTICAL = 6488;
        /**
         * Error number: 6489; Symbol: ER_JDV_UNMAPPED_KEY; SQLSTATE: HY000
         *
         * Message: Path '%s' is not mapped to any column of %s.
         */
        case ER_JDV_UNMAPPED_KEY = 6489;
        /**
         * Error number: 6490; Symbol: ER_JDV_MISSING_INSERT_TAG; SQLSTATE: HY000
         *
         * Message: Missing INSERT tag on table %s, path '%s'.
         */
        case ER_JDV_MISSING_INSERT_TAG = 6490;
        /**
         * Error number: 6491; Symbol: ER_JDV_MISSING_READONLY_SUBOBJECT; SQLSTATE: HY000
         *
         * Message: Read-only subobject with path '%s', maps to row where
         * %s.%s = (%s), which does not exist.
         */
        case ER_JDV_MISSING_READONLY_SUBOBJECT = 6491;
        /**
         * Error number: 6492; Symbol: ER_JDV_JOIN_CONDITION_VIOLATION; SQLSTATE: HY000
         *
         * Message: Path '%s' references a READ-ONLY subobject for which
         * column %s.%s violates the join condition of the attempted INSERT.
         */
        case ER_JDV_JOIN_CONDITION_VIOLATION = 6492;
        /**
         * Error number: 6493; Symbol: ER_JDV_MISSING_ETAG; SQLSTATE: HY000
         *
         * Message: ETAG missing for updated value
         */
        case ER_JDV_MISSING_ETAG = 6493;
        /**
         * Error number: 6494; Symbol: ER_JDV_ETAG_MISMATCH; SQLSTATE: HY000
         *
         * Message: Cannot update JSON duality view. The ETAG of the document
         * in the database did not match the ETAG '%s' passed in.
         */
        case ER_JDV_ETAG_MISMATCH = 6494;
        /**
         * Error number: 6495; Symbol: ER_JDV_MISSING_VALUE; SQLSTATE: HY000
         *
         * Message: Value was not provided for path '%s' and could not be
         * inferred for column %s.%s.
         */
        case ER_JDV_MISSING_VALUE = 6495;
        /**
         * Error number: 6496; Symbol: ER_JDV_PK_UPDATES_NOT_ALLOWED; SQLSTATE: HY000
         *
         * Message: Cannot update primary key column %s.%s from path '%s'.
         */
        case ER_JDV_PK_UPDATES_NOT_ALLOWED = 6496;
        /**
         * Error number: 6497; Symbol: ER_JDV_MISSING_UPDATE_TAG; SQLSTATE: HY000
         *
         * Message: Missing UPDATE tag on %s.%s, path '%s'.
         */
        case ER_JDV_MISSING_UPDATE_TAG = 6497;
        /**
         * Error number: 6498; Symbol: ER_JDV_MISSING_DELETE_TAG; SQLSTATE: HY000
         *
         * Message: Missing DELETE tag on table %s, path '%s'.
         */
        case ER_JDV_MISSING_DELETE_TAG = 6498;
        /**
         * Error number: 6499; Symbol: ER_JDV_NULL_INSERT_VALUE; SQLSTATE: HY000
         *
         * Message: NULL is not allowed when inserting into a JSON DUALITY
         * VIEW.
         */
        case ER_JDV_NULL_INSERT_VALUE = 6499;
        /**
         * Error number: 6500; Symbol: ER_JDV_INSERT_VALUE_NOT_FIXED; SQLSTATE: HY000
         *
         * Message: Insert value must be fixed (not require resolving).
         */
        case ER_JDV_INSERT_VALUE_NOT_FIXED = 6500;
        /**
         * Error number: 6501; Symbol: ER_JDV_NULL_UPDATE_VALUE; SQLSTATE: HY000
         *
         * Message: NULL is not allowed when updating a JSON DUALITY VIEW.
         */
        case ER_JDV_NULL_UPDATE_VALUE = 6501;
        /**
         * Error number: 6502; Symbol: ER_JDV_UPDATE_VALUE_NOT_FIXED; SQLSTATE: HY000
         *
         * Message: Update values must be fixed (not require resolving).
         */
        case ER_JDV_UPDATE_VALUE_NOT_FIXED = 6502;
        /**
         * Error number: 6503; Symbol: ER_JDV_FEATURE_EDITION_LIMIT; SQLSTATE: HY000
         *
         * Message: Feature not available in this edition.
         */
        case ER_JDV_FEATURE_EDITION_LIMIT = 6503;
        /**
         * Error number: 6504; Symbol: ER_JDV_CANNOT_BE_USED_WITH; SQLSTATE: HY000
         *
         * Message: JSON DUALITY VIEW %s cannot be used with %s.
         */
        case ER_JDV_CANNOT_BE_USED_WITH = 6504;
        /**
         * Error number: 6505; Symbol: ER_JDV_DML_INFO; SQLSTATE: HY000
         *
         * Message: Rows affected: %ld Warnings: %ld.
         */
        case ER_JDV_DML_INFO = 6505;
        /**
         * Error number: 6507; Symbol: ER_JDV_INVALID_BINARY_TYPE_HEADER; SQLSTATE: HY000
         *
         * Message: Path '%s' is mapped to a binary column, but its value
         * does not have a valid base64 type header.
         */
        case ER_JDV_INVALID_BINARY_TYPE_HEADER = 6507;
        /**
         * Error number: 6508; Symbol: ER_ETAG_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: ETAG is not supported with Vector/ Geometry types.
         */
        case ER_ETAG_NOT_SUPPORTED = 6508;
        /**
         * Error number: 6509; Symbol: ER_ENGINE_ATTRIBUTE_CONFLICT; SQLSTATE: HY000
         *
         * Message: ENGINE_ATTRIBUTE conflicts with %s %s.
         */
        case ER_ENGINE_ATTRIBUTE_CONFLICT = 6509;
        /**
         * Error number: 6510; Symbol: ER_EXTERNAL_FORMAT_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: Column '%s': EXTERNAL_FORMAT is only supported for
         * temporal data types.
         */
        case ER_EXTERNAL_FORMAT_NOT_SUPPORTED = 6510;
        /**
         * Error number: 6511; Symbol: ER_EXTERNAL_TABLE_INVALID_OPTION; SQLSTATE: HY000
         *
         * Message: Invalid option specified for %s of external table: %s
         */
        case ER_EXTERNAL_TABLE_INVALID_OPTION = 6511;
        /**
         * Error number: 6512; Symbol: ER_EXTERNAL_TABLE_ENGINE_NOT_SUPPORTED; SQLSTATE: HY000
         *
         * Message: The '%s' storage engine does not support external tables
         */
        case ER_EXTERNAL_TABLE_ENGINE_NOT_SUPPORTED = 6512;
        /**
         * Error number: 6513; Symbol: ER_EXTERNAL_TABLE_ENGINE_NOT_SPECIFIED; SQLSTATE: HY000
         *
         * Message: External storage engine is not specified
         */
        case ER_EXTERNAL_TABLE_ENGINE_NOT_SPECIFIED = 6513;
        /**
         * Error number: 6514; Symbol: ER_LH_NO_FILES_FOUND_NO_SECURE_FILE_PRIV; SQLSTATE: HY000
         *
         * Message: No files found or files provided not under
         * secure-file-priv.
         */
        case ER_LH_NO_FILES_FOUND_NO_SECURE_FILE_PRIV = 6514;
        /**
         * Error number: 6515; Symbol: ER_LH_COL_NAME_MISSING; SQLSTATE: HY000
         *
         * Message: Column %d of %s: Column name is not present in the file
         * header or metadata.
         */
        case ER_LH_COL_NAME_MISSING = 6515;
        /**
         * Error number: 6516; Symbol: ER_LH_COL_NAME_DUPLICATE; SQLSTATE: HY000
         *
         * Message: File %s: Duplicate column name in the file header or
         * metadata.
         */
        case ER_LH_COL_NAME_DUPLICATE = 6516;
        /**
         * Error number: 6517; Symbol: ER_LH_UNSTRUCTURED_OCI_GENAI_FAILURE; SQLSTATE: HY000
         *
         * Message: Error when using OCI GenAI Service: %s
         */
        case ER_LH_UNSTRUCTURED_OCI_GENAI_FAILURE = 6517;
        /**
         * Error number: 6518; Symbol: ER_LH_UNSTRUCTURED_PARTIAL_FILE_PARSE_ERR; SQLSTATE: HY000
         *
         * Message: File: %.*s – Part of the document was parsed. %s.
         */
        case ER_LH_UNSTRUCTURED_PARTIAL_FILE_PARSE_ERR = 6518;
        /**
         * Error number: 6519; Symbol: ER_JDV_EXPLICIT_AUTO_INCREMENT_NOT_ALLOWED; SQLSTATE: HY000
         *
         * Message: Using 0 to request the next value of an AUTO_INCREMENT
         * column is not allowed in JDVs, column %s.%s, referenced by path
         * '%s', key '%s'.
         */
        case ER_JDV_EXPLICIT_AUTO_INCREMENT_NOT_ALLOWED = 6519;
        /**
         * Error number: 6520; Symbol: ER_LH_INFER_COL_NAME_MISMATCH; SQLSTATE: HY000
         *
         * Message: Column '%s' found in file '%s', but not in file '%s'
         * during column name matching.
         */
        case ER_LH_INFER_COL_NAME_MISMATCH = 6520;
        /**
         * Error number: 6521; Symbol: ER_LH_DELTA_SCHEMA_MISMATCH; SQLSTATE: HY000
         *
         * Message: Detected schema mismatch for delta table '%s'.'%s'. %s
         */
        case ER_LH_DELTA_SCHEMA_MISMATCH = 6521;
        /**
         * Error number: 6522; Symbol: ER_LH_DELTA_METADATA_READ_ERROR; SQLSTATE: HY000
         *
         * Message: Error while reading metadata for delta table: %s
         */
        case ER_LH_DELTA_METADATA_READ_ERROR = 6522;
        /**
         * Error number: 6523; Symbol: ER_LH_DELTA_UNSUPPORTED_ERROR; SQLSTATE: HY000
         *
         * Message: Feature %s of delta tables is unsupported
         */
        case ER_LH_DELTA_UNSUPPORTED_ERROR = 6523;
        /**
         * Error number: 6524; Symbol: ER_WARN_ACCOUNT_TRIMMED; SQLSTATE: HY000
         *
         * Message: Leading or trailing spaces have been trimmed from user or
         * host, account: %s.
         */
        case ER_WARN_ACCOUNT_TRIMMED = 6524;
        /**
         * Error number: 6525; Symbol: ER_LH_WARN_DATETIME_MULTIPLE_PARAM_USE; SQLSTATE: HY000
         *
         * Message: Both 'datetime_format' and 'timestamp_format' are
         * specified%s. Only 'datetime_format' will be considered.
         */
        case ER_LH_WARN_DATETIME_MULTIPLE_PARAM_USE = 6525;
        /**
         * Error number: 6526; Symbol: ER_LH_GENCOL_ERROR; SQLSTATE: HY000
         *
         * Message: File %.*s: Error encountered during generated column
         * evaluation
         */
        case ER_LH_GENCOL_ERROR = 6526;
        /**
         * Error number: 6527; Symbol: ER_TEMPORAL_FUNCTION_OVERFLOW; SQLSTATE: 22008
         *
         * Message: %s value is out of range in '%s'
         */
        case ER_TEMPORAL_FUNCTION_OVERFLOW = 6527;
        /**
         * Error number: 6528; Symbol: ER_LH_INFER_COLUMN_MAX_ERR; SQLSTATE: HY000
         *
         * Message: More than %u column(s) found in total.
         */
        case ER_LH_INFER_COLUMN_MAX_ERR = 6528;
        /**
         * Error number: 6529; Symbol: ER_LH_EXTRA_COLUMNS_IN_FILE; SQLSTATE: HY000
         *
         * Message: %s: %u column(s) in file are not present in the table.
         */
        case ER_LH_EXTRA_COLUMNS_IN_FILE = 6529;
        /**
         * Error number: 6530; Symbol: ER_LH_PARQUET_COMPLEX_CONVERSION; SQLSTATE: HY000
         *
         * Message: Column %d in %s: Cannot load column. %s.
         */
        case ER_LH_PARQUET_COMPLEX_CONVERSION = 6530;
        /**
         * Error number: 6531; Symbol: ER_AUDIT_LOG_DISABLED; SQLSTATE: HY000
         *
         * Message: File output is disabled. Enable it with %s = false.
         */
        case ER_AUDIT_LOG_DISABLED = 6531;
        /**
         * Error number: 6532; Symbol: ER_AUDIT_LOG_COMPONENT_JSON_FILTER_PARSING_ERROR; SQLSTATE: HY000
         *
         * Message: %s
         */
        case ER_AUDIT_LOG_COMPONENT_JSON_FILTER_PARSING_ERROR = 6532;
        /**
         * Error number: 6533; Symbol: ER_AUDIT_LOG_FAILED_TO_OPEN_TABLES; SQLSTATE: HY000
         *
         * Message: Failed to open the %s filter tables.
         */
        case ER_AUDIT_LOG_FAILED_TO_OPEN_TABLES = 6533;
        /**
         * Error number: 6534; Symbol: ER_AUDIT_LOG_FAILED_TO_OPEN_TABLE; SQLSTATE: HY000
         *
         * Message: Failed to open '%s.%s' %s table.
         */
        case ER_AUDIT_LOG_FAILED_TO_OPEN_TABLE = 6534;
        /**
         * Error number: 6535; Symbol: ER_AUDIT_LOG_COMPONENT_JSON_FILTER_NAME_CANNOT_BE_EMPTY; SQLSTATE: HY000
         *
         * Message: Filter name cannot be empty.
         */
        case ER_AUDIT_LOG_COMPONENT_JSON_FILTER_NAME_CANNOT_BE_EMPTY = 6535;
        /**
         * Error number: 6536; Symbol: ER_AUDIT_LOG_COMPONENT_USER_NAME_INVALID_CHARACTER; SQLSTATE: HY000
         *
         * Message: Invalid character in the user name.
         */
        case ER_AUDIT_LOG_COMPONENT_USER_NAME_INVALID_CHARACTER = 6536;
        /**
         * Error number: 6537; Symbol: ER_AUDIT_LOG_NO_KEYRING_INSTALLED; SQLSTATE: HY000
         *
         * Message: No keyring installed.
         */
        case ER_AUDIT_LOG_NO_KEYRING_INSTALLED = 6537;
        /**
         * Error number: 6538; Symbol: ER_AUDIT_LOG_COMPONENT_CANNOT_READ_PASSWORD; SQLSTATE: HY000
         *
         * Message: Cannot read password: '%s'.
         */
        case ER_AUDIT_LOG_COMPONENT_CANNOT_READ_PASSWORD = 6538;
        /**
         * Error number: 6539; Symbol: ER_AUDIT_LOG_COMPONENT_HOST_NAME_INVALID_CHARACTER; SQLSTATE: HY000
         *
         * Message: Invalid character in the host name.
         */
        case ER_AUDIT_LOG_COMPONENT_HOST_NAME_INVALID_CHARACTER = 6539;
        /**
         * Error number: 6540; Symbol: ER_AUDIT_LOG_COMPONENT_JSON_USER_NAME_CANNOT_BE_EMPTY; SQLSTATE: HY000
         *
         * Message: User name cannot be empty.
         */
        case ER_AUDIT_LOG_COMPONENT_JSON_USER_NAME_CANNOT_BE_EMPTY = 6540;
        /**
         * Error number: 6541; Symbol: ER_AUDIT_LOG_COMPONENT_KEYRING_ID_TIMESTAMP_VALUE_IS_INVALID; SQLSTATE: HY000
         *
         * Message: Keyring ID timestamp value is invalid: '%s'.
         */
        case ER_AUDIT_LOG_COMPONENT_KEYRING_ID_TIMESTAMP_VALUE_IS_INVALID = 6541;
        /**
         * Error number: 6542; Symbol: ER_AUDIT_LOG_COMPONENT_UDF_INVALID_ARGUMENT_TYPE; SQLSTATE: HY000
         *
         * Message: Invalid argument type.
         */
        case ER_AUDIT_LOG_COMPONENT_UDF_INVALID_ARGUMENT_TYPE = 6542;
        /**
         * Error number: 6543; Symbol: ER_AUDIT_LOG_COMPONENT_UDF_INVALID_ARGUMENT_COUNT; SQLSTATE: HY000
         *
         * Message: Invalid number of arguments.
         */
        case ER_AUDIT_LOG_COMPONENT_UDF_INVALID_ARGUMENT_COUNT = 6543;
        /**
         * Error number: 6544; Symbol: ER_AUDIT_LOG_ABORT; SQLSTATE: HY000
         *
         * Message: Statement was aborted by an audit log filter.
         */
        case ER_AUDIT_LOG_ABORT = 6544;
        /**
         * Error number: 6545; Symbol: ER_AUDIT_LOG_COULD_NOT_RELOAD_FILTERS; SQLSTATE: HY000
         *
         * Message: Could not reload filters.
         */
        case ER_AUDIT_LOG_COULD_NOT_RELOAD_FILTERS = 6545;
        /**
         * Error number: 6546; Symbol: ER_AUDIT_LOG_UDF_INVALID_ARGUMENT_NULL; SQLSTATE: HY000
         *
         * Message: Null value not supported.
         */
        case ER_AUDIT_LOG_UDF_INVALID_ARGUMENT_NULL = 6546;
        /**
         * Error number: 6547; Symbol: ER_AUDIT_LOG_MAX_SIZE_CLOSE_TO_ROTATE_ON_SIZE; SQLSTATE: HY000
         *
         * Message: %s is not granular enough for the value of %s supplied.
         * Should be at least %d times smaller.
         */
        case ER_AUDIT_LOG_MAX_SIZE_CLOSE_TO_ROTATE_ON_SIZE = 6547;
        /**
         * Error number: 6548; Symbol: ER_AUDIT_LOG_MAX_SIZE_AND_PRUNE_SECONDS_PRECEDENCE; SQLSTATE: HY000
         *
         * Message: Both %s and %s are set to non-zero. %s takes precedence
         * and %s is ignored.
         */
        case ER_AUDIT_LOG_MAX_SIZE_AND_PRUNE_SECONDS_PRECEDENCE = 6548;
        /**
         * Error number: 6549; Symbol: ER_AUDIT_LOG_PASSWORD_HAS_NOT_BEEN_SET; SQLSTATE: HY000
         *
         * Message: Encryption password has not been set. Use %s to set a new
         * one.
         */
        case ER_AUDIT_LOG_PASSWORD_HAS_NOT_BEEN_SET = 6549;
        /**
         * Error number: 6550; Symbol: ER_AUDIT_LOG_INVALID_TABLE_DEFINITION; SQLSTATE: HY000
         *
         * Message: Invalid table definition for '%s.%s'.
         */
        case ER_AUDIT_LOG_INVALID_TABLE_DEFINITION = 6550;
        /**
         * Error number: 6551; Symbol: ER_AUDIT_LOG_COMPONENT_FILTER_FAILED_TO_STORE_TABLE_FLDS; SQLSTATE: HY000
         *
         * Message: Could not store field of the '%s.%s' table.
         */
        case ER_AUDIT_LOG_COMPONENT_FILTER_FAILED_TO_STORE_TABLE_FLDS = 6551;
        /**
         * Error number: 6552; Symbol: ER_AUDIT_LOG_COMPONENT_FILTER_FAILED_TO_INIT_TABLE_FOR_READ; SQLSTATE: HY000
         *
         * Message: Could not initialize '%s.%s' table for reading.
         */
        case ER_AUDIT_LOG_COMPONENT_FILTER_FAILED_TO_INIT_TABLE_FOR_READ = 6552;
        /**
         * Error number: 6553; Symbol: ER_AUDIT_LOG_COMPONENT_FILTER_FAILED_TO_DELETE_FROM_TABLE; SQLSTATE: HY000
         *
         * Message: Could not delete from '%s.%s' table.
         */
        case ER_AUDIT_LOG_COMPONENT_FILTER_FAILED_TO_DELETE_FROM_TABLE = 6553;
        /**
         * Error number: 6554; Symbol: ER_AUDIT_LOG_JSON_FILTER_DOES_NOT_EXIST_USER; SQLSTATE: HY000
         *
         * Message: A filter cannot be assigned to user '%s'. The filter '%s'
         * does not exist.
         */
        case ER_AUDIT_LOG_JSON_FILTER_DOES_NOT_EXIST_USER = 6554;
        /**
         * Error number: 6555; Symbol: ER_LH_CUSTOM_DATA_PLACEMENT_OVERRIDES; SQLSTATE: HY000
         *
         * Message: Custom data placement set for '%s.%s' table overrides %s
         * data placement.
         */
        case ER_LH_CUSTOM_DATA_PLACEMENT_OVERRIDES = 6555;
    }
?>