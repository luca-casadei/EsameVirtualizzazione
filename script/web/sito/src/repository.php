<?php

require './dbconnector.php';

class Repository{
    private $connection;
    
    public function __construct($connector)
    {
        $this->connection = $connector;
    }

    public function get_elements(){
        $response = $this->connection->query("SELECT * FROM elementi");
        return $response->fetch_all(MYSQLI_ASSOC);
    }
    
    public function add_element($nome, $cognome){
        $stmt = $this->connection->prepare("INSERT INTO elementi(Nome, Cognome) VALUES(?,?)");
        $stmt->bind_param("ss", $nome, $cognome);
        $stmt->execute();
    }
}

$repo = new Repository($conn)

?>