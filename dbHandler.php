<?php
class dbHandler
{
    private $conn;
    private const DB_HOST = '127.0.0.1';
    private const DB_USER = 'root';
    private const DB_PASS = '';
    private const DB_NAME = 'voting_system';

    /**
     * MySQL database connection
     */


    public function __construct()
    {
        $this->conn = new mysqli (self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);
        if ($this->conn->connect_error) {
            echo 'Connection Aborted : [' . $this->conn->connect_errno . '] '. $this->conn->connect_error, 'error';
        }
        else {echo 'connection successful';}
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