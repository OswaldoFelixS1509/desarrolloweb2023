<?php
    include_once(dirname(__DIR__)."/models/database.php");

    class user
    {
        private $nombre;
        private $apellidos;
        private $nombreCompleto;
        private $id;

        public function login($email, $password)
        {
            $database = new Database();
            $database->connect();

            $sql = "SELECT id, nombre, apellidos, nombreCompleto FROM users WHERE email = '" . $email ."' AND password = '" . $password . "' AND id_status = 1";
    
            $result = $database->connection->query($sql);

            $database->closeConnection();

            if( $result->num_rows > 0)
            {
                $row = mysqli_fetch_assoc($result);
                // print_r($row);
                $this->nombre = $row['nombre'];
                $this->apellidos = $row['apellidos'];
                $this->nombreCompleto = $row['nombreCompleto'];
                $this->id = $row['id'];

                return true;
            }

            
            return FALSE;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getApellidos()
        {
            return $this->apellidos;
        }
        public function getNombreCompleto()
        {
            return $this->nombreCompleto;
        }
    }