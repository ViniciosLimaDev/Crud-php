<?php 

include_once './conn.php';

$sql = $conn->query('SELECT * FROM  cadastro');

$list = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<h1>lista de usuarios</h1>

<button><a href="cadastro.php">Cadastar Usuário</a></button>



<table>
    <thead>
    <tr>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>
    </thead>

    <tbody>
        <?php foreach($list as $user) : ?>
            <tr>
                <td><?= $user['nome'] ?></td>
                <td><?= $user['endereco'] ?></td>
                <td><?= $user['tel'] ?></td>
                <td><a href="editar.php?id=<?= $user['id'] ?>">Editar</a><br>
                <a href="excluir.php?id=<?= $user['id'] ?>">Excluir</a></td>
                
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>
    
</body>





</html>