<?php
$servidor = "gerenciamentousuario_db_1";
$usuario = "root";
$senha = "phprs";
$banco = "users";

try {
    $pdo = new PDO ($servidor, $usuario, $senha, $banco);
}catch(PDOException $e){
    echo "Falhou a conexão: ".$e->getMessage();
}
?>
