<?php 

class DB
{
    //db config
    private $db_username = "root";
    private $db_password = "";
    private $db_host = "localhost";
    private $db_name = "drivingSchool";
    public $db_query ;
    public $db_connection;

    public function __construct(){
        //connection
        try {
            $this->db_connection = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name, $this->db_username, $this->db_password);
            return true;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    //function query
    public function select($query){

        $stmt = $this->db_connection->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    //function update
    public function SQLexec($query , $data = NULL ){

        $stmt = $this->db_connection->prepare($query);
        $stmt->execute($data);
        return $stmt;
    }

}