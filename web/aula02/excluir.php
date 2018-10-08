<?php
require 'bd.php';

if(isset($_GET['ID']) && empty($_GET['ID']) == false){
    $id = addslashes($_GET['ID']);

    $sql = "DELETE FROM usuarios WHERE ID = '$id'";
    $pdo->query($sql);

    header("Location: index.php");
}else{
    header("Location: index.php");
}
?>

