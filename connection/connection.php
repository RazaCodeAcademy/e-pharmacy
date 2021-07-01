<?php

    // user roles mentioned here.
    // 1. Admin
    // 2. Manager
    // 3. Pharmacists
    // 4. Salesman
class Database{

    public $conn;

    public function __construct(){
        $this->conn = mysqli_connect(
            'localhost',    //server name
            'root',         //username
            '',             //password
            'e_pharmacy'    //database
        );
    
        if(!$this->conn){
            echo 'Connection not successfuly!';
        }
    }
}

$obj = new Database();

?>