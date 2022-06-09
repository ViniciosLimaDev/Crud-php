<?php 


include_once './conn.php';

$id = filter_input(INPUT_GET, 'id');

if ($id) {

    $sql = $conn->prepare("DELETE FROM cadastro WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

        header('Location: index.php');
        exit;
    }

?>