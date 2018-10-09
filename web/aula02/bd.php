<?php
            $servidor = "gerenciamentousuario_db_1";
            $usuario = "root";
            $senha = "phprs";
            $banco = "usuarios";

            $conn = new mysqli($servidor, $usuario, $senha, $banco);

            if($conn->connect_error){
                die("Falha de conexão: " .  $conn->connect_error);
            }
?>