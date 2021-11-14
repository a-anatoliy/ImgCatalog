<?php

Class Database {

/*
    // Database Connection
    public $dbc = '';

    // Connection options
    // private $opts;

    // Statement Handle.
    // public $sth = null;

    // An SQL query.
    // public static $query = '';

    public function __construct() {
        $dbConf = require_once DB_CONFIG;
        // show($dbConf);
        // $cfg = array_merge(
        //     require_once CONFIG,
        //     require_once DB_CONFIG
        // );

        $this->cfg = $dbConf['db'];

        $this->opts = [
            // turn off emulation mode for "real" prepared statements
            PDO::ATTR_EMULATE_PREPARES   => false,

            //turn on errors in the form of exceptions
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,

            //make the default fetch be an associative array
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];
        // $this->getPDOConnection();
    }

    public function db_connect() {

        try {
            $dsn = sprintf("mysql:host=%s;dbname=%s;charset=utf8mb4",$this->cfg['hst'],$this->cfg['tbl']);
            show($dsn);
            $dbc = new PDO($dsn,$this->cfg['usr'],$this->cfg['pss'],$this->opts);
            return $dbc;
            // return $this->dbc;
        } catch(PDOException $e) {
            die(__LINE__.' -- '.$e->getMessage());
        }
    }
*/

    // Database Connection
    public $dbc;

    // Connection options
    private $opts;

    /**
     * Statement Handle.
     */
    public $sth = null;

    /**
     * An SQL query.
     */
    public static $query = '';

    /* function __construct
     * Opens the database connection
     * @param $config is an array of database connection parameters
     */
    public function __construct() {

        $dbConf = require DB_CONFIG;
        $this->cfg  = $dbConf['db'];
        $this->opts = [
            // turn off emulation mode for "real" prepared statements
            PDO::ATTR_EMULATE_PREPARES   => false,

            //turn on errors in the form of exceptions
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,

            //make the default fetch be an associative array
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];
        $this->getPDOConnection();
    }

    /* Function __destruct
     * Closes the database connection
     */
    public function __destruct() {
        $this->dbc = NULL;
    }

    /* Function getPDOConnection
     * Get a connection to the database using PDO.
     */
    private function getPDOConnection() {
        // Check if the connection is already established
        if ($this->dbc == NULL) {
            // Create new connection
            $dsn = sprintf("mysql:host=%s;dbname=%s;charset=utf8mb4",$this->cfg['hst'],$this->cfg['tbl']);
            try {
                $this->dbc = new PDO($dsn,$this->cfg['usr'],$this->cfg['pss'],$this->opts );
            } catch( PDOException $e ) {
                echo __LINE__.$e->getMessage();
            }
        }
        return $this->dbc;
    }



    public function read($query,$data = []) {
        try { $stm = $this->dbc->prepare($query); }
        catch(PDOException $e) {
            die(__LINE__.' -- '.$e->getMessage());
        }

        if(count($data) > 0) {
            $check = $stm->execute($data);
        } else {
            $stm = $this->dbc->query($query);
            $check = 0;
            if($stm) {
                $check = 1;
            }
        }

        if($check) {
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        return false;
    }

    public function write($query,$data = []) {
        $stm = $this->dbc->prepare($query);
        if (count($data) > 0) {
            $check = $stm->execute($data);
        } else {
            $stm = $this->dbc->query($query);
            $check = 0;
            if($stm) {
                $check = 1;
            }
        }

        if ($check) {
            return true;
        }
        return false;
    }
}