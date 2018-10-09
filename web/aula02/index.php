<?php
require 'bd.php';
?>
<a href="adicionar.php">Adicionar Novo Usuário</a>
<table border="0" width="100%">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Login</th>
        <th>Status</th>
        <th>&nbsp</th>
    </tr>
    <?php
         $sql = "SELECT * FROM usuarios";
         $result = $conn->query($sql);
        if($result->num_rows() > 0){
            foreach($sql->fetchAll() as $usuario){
                echo '<tr>';
                echo '<td>'.$usuario['ID'].'</td>';
                echo '<td>'.$usuario['nome'].'</td>';
                echo '<td>'.$usuario['login'].'</td>';
                echo '<td>'.$usuario['status'].'</td>';
                echo'<td><a href="editar.php?id='.$usuarios['id'].'">Editar</a>-<a href="excluir.php?id='.$usuarios['id'].'">Excluir</a></td>';
                echo '</tr>';
            }
        }
        
        $conn->close();
    ?>
</table>