<?php

class Database {

    public $connection;

    public $config = [
        "host" => "localhost",
        'dbname' => 'ecommerce'
    ];

    function __construct(){        
        
        $dsn = "mysql:".http_build_query($this->config,'',';');
        
        $this->connection = new PDO($dsn,'root','',[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC 
        ]);
    }

    public function registerUserQuery($query){

        $statement = $this->connection->prepare($query);
        $statement->execute();
        
    }

    public function fetchQuery($query){
        
        $statement = $this->connection->prepare($query);
        $statement->execute();
        
        $users = $statement->fetchAll();

        return $users;
    }
}
