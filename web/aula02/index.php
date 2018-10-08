<?php
require 'bd.php';
?>
<a href="adicionar.php">Adicionar Novo Usuário</a>;
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
        $sql = $pdo->query($sql);
        if($sql->rowCount() > 0){
            foreach($sql->fetchAll() as $usuarios){
                echo '<tr>';
                echo '<td>'.$users['ID'].'</td>';
                echo '<td>'.$users['Nome'].'</td>';
                echo '<td>'.$users['Login'].'</td>';
                echo '<td>'.$users['Status'].'</td>';
                echo "<td><a href='editar.php?id=".$usuarios.['ID']."'>Editar</a> - <a href='excluir.php?id=".$usuarios.['ID']."'>Excluir</a>'</td>'";
                echo '</tr>';
            }
        }
    ?>
</table>