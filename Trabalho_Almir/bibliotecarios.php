<?php
include 'Conexao.php';
$sql = "select * from bibliotecarios ;";
$con = Conexao::conectar();
$bibliotecarios = $con ->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotecarios</title>
</head>
<body>
    <h1>Bibliotecarios</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        </tr>
            <?php foreach($bibliotecarios as $bibliotecarios){?>
                <tr>
                    <td><?php echo $bibliotecarios ['id'];?></td>
                    <td><?php echo $bibliotecarios['nome'];?></td>
                    <td><?php echo $bibliotecarios ['telefone'];?></td>
                </tr>
                <?php } ?>
    </table>
</body>
</html>