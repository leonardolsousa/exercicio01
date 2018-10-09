<?php
require 'bd.php';

$id = 0;
if(isset($_GET['ID']) && empty($_GET['ID']) == false){
    $id = addslashes($_GET['ID']);
}

if(isset($_POST['nome']) && empty($_POST['nome']) == false){
    $senha = md5(addslashes($_POST['senha']));


    $sql = "UPDATE usuarios SET senha = '$senha'";
    $result = $conn->query($sql);

    header("Location: index.php");
}

    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $dado = $sql->fetch();
    }else{
        header("Location: index.php");
    }

}else{
    header("Location: index.php");
}
?>

<form method="POST">
Senha:<br/>
<input type="password" name="senha" value="<?php echo $dado['senha']; ?>" /><br/><br/>

<input type="submit" value="Atualizar" />
</form>
