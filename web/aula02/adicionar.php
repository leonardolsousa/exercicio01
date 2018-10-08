<?php
require 'db.php';

if(isset($_POST)['Nome']) && empty($_POST['Nome']) == false){
    $nome = addslashes($_POST['Nome']);
    $login = addslashes($_POST['Login']);
    $senha = md5(addslashes($_POST['Senha']));

    $sql = "INSERT INTO usuarios SET nome = '$nome', login = '$login', senha = '$senha'";
    $pdo->query($sql);

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