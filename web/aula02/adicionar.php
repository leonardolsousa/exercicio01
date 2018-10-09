<?php
require 'bd.php';

if(isset($_POST)['nome']) && !empty($_POST['nome']) == false){
    $nome = addslashes($_POST['nome']);
    $login = addslashes($_POST['login']);
    $senha = md5(addslashes($_POST['senha']));

    $sql = "INSERT INTO usuarios SET nome = '$nome', login = '$login', senha = '$senha'";
    $result = $conn->query($sql);

    header("Location: index.php");
}
?>

<form method="POST">
    Nome:<br/>
    <input type="text" name="nome" /><br/><br/>
    Login:<br/>
    <input type="text" name="email" /><br/><br/>
    Senha:<br/>
    <input type="password" name="senha" /><br/><br/>

    <input type="submit" value="Cadastrar" />
</form>