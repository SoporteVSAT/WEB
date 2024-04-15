<?php

       
            $server = "localhost";
            $username = "root";
            $password = "nachitoota13";
            $dbname = "phpdb";

            $conexion = new mysqli($server, $username, $password,$dbname);

            $conexion->set_charset("utf8");
            if ($conexion->connect_errno){
                die("Conexion Fallida" . $conexion->connect_errno);
            } else{
                
                

            }
           
        
    





?>