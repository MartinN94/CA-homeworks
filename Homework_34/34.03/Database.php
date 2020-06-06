<?php
class DB {
    public $host = "127.0.0.1";
    public $server = "homestead";
    public $pass = "secret";
    public $database = "register_db";

    function __costruct($host, $server, $pass, $database){
        $this->host = $host;
        $this->server = $server;
        $this->pass = $pass;
        $this->database = $database;

    }

    function connectDB(){
       return mysqli_connect($this->host, $this->server, $this->pass, $this->database);
    }

    function createUser($name, $username, $email, $browser, $createdAt){
        $sql = "INSERT INTO users (firstname, username, email, browser, created_at) VALUES('$name', '$username', '$email', '$browser', '$createdAt');";
        mysqli_query($this->connectDB(), $sql);

        mysqli_close($this->connectDB());
    }

}
