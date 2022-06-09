<?php

include_once './conn.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$endereco = filter_input(INPUT_POST, 'endereco');
$tel = filter_input(INPUT_POST, 'tel');


if ($id&&$nome&& $endereco&& $tel){

    $sql = $conn->prepare("UPDATE cadastro SET nome = :nome, endereco = :endereco, tel = :tel WHERE id = :id");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':endereco', $endereco);
    $sql->bindValue(':tel', $tel);
    $sql->bindValue(':id', $id);

    $sql->execute();

    header('Location: index.php');
    exit;

}else{
    header('location: editar.php?erro');
    exit;
}








?>