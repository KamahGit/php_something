<?php
class dbHandler
{
    private $conn;
    private const DB_HOST = "sql5.freemysqlhosting.net";
    private const DB_USER = "sql5481859";
    private const DB_PASS = "1939CNNkTv";
    private const DB_NAME = "sql5481859";

    /**
     * MySQL database connection
     */


    public function __construct()
    {
        $this->conn = new mysqli (self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);
        if ($this->conn->connect_error) {
            echo 'Connection Aborted : [' . $this->conn->connect_errno . '] '. $this->conn->connect_error, 'error';

        }
        return $this;
    }

    /**
     * returns mySQli connection
     */
    public function getConn()
    {
        return $this->conn;
    }

}