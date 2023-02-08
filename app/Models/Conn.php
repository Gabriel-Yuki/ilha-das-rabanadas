<?php


namespace App\Models;

use Exception;
use PDO;

class Conn
{


    private object $connect;

    private string $dbName = "rabanada";
    private string $host = "localhost";
    private string $user = "root";
    private string $password = "";


    public function connect()
    {
        try {
            //code...
            $this->connect = new PDO(
                'mysql:host=' .
                    $this->host . ';dbname=' .
                    $this->dbName,
                    $this->user,
                    $this->password
            );
            return $this->connect;
            ;
        } catch (Exception $ex) {
            die("ERR: CONTATE O ADM->>$ex");
        }
    }
}