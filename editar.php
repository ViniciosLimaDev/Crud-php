<?php

include_once './conn.php';

$id = filter_input(INPUT_GET, 'id');

$user = [];

if ($id) {

    $sql = $conn->prepare("SELECT * FROM cadastro WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $user = $sql->fetch(PDO::FETCH_ASSOC);

        // print_r($user);
    } else {
        header('Location: index.php');
        exit;
    }
}



?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <h1>Editar usuário</h1>


    <form action="editar-action.php" method="POST">
        <input type="hidden" name="id" value="<?=$user['id'] ?>">
        <input type="text" name="nome" placeholder="Nome completo" value="<?=$user['nome'] ?>">
        <input type="text" name="endereco" placeholder="Endereço" value="<?=$user['endereco'] ?>">
        <input type="number" name="tel" placeholder="Telefone" value="<?=$user['tel'] ?>">
        <button type="submit"> Enviar </button>
    </form>
</body>


</html>