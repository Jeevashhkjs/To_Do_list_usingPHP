<?php
class DBconnectionClass
{

    public $dbConnection;

    public function __construct(){

        try{
            $this->dbConnection = new PDO(
                'mysql:host=localhost;dbname=ToDoList',
                'root',
                'jeeva143'
                );
        }
        catch(PDOException $e)
        {
            die("connection error".$e->getMessage());
        }

    }
}

?>