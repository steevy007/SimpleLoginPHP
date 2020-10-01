<?php
if (!function_exists('connect')) {
    function connect()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';

        //On établit la connexion
        try{
            $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo 'connexion reussi';
        }catch(PDOException $e){
            die("Erreur =>".$e);
        }
        return $conn;
    }
}

