<?php
    class Database
    {
        private $serverName = "localhost";
        private $dbName = "desarrolloweb2023";
        private $user = "root"; 
        private $password = "";
        public $connection;

        public function connect()
        {   //Connects to the data base
            $this->connection = new mysqli($this->serverName, $this->user, $this->password, $this->dbName);

            if($this->connection->connect_error)
            {
                die("Conexion fallida: " . $this->connection->connect_error);
            }
        }

        public function closeConnection()
        {
            $this->connection->close();
        }

        

    }
?>