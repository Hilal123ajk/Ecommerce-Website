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

    public function query($query){

        $statement = $this->connection->prepare($query);
        $statement->execute();

        // This will return the rest of methods of the same class means: Database;
        return $this;
        
    }



    
}
