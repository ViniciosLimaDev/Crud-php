<?php 

include_once './conn.php';


// echo $_POST['nome'];

if(isset($_POST['nome'])){
   $nome = $_POST['nome'];
   $endereco =  $_POST['endereco'];
   $tel = $_POST['tel'];


   $sql = $conn->prepare('INSERT INTO cadastro (nome,endereco,tel) VALUE (:nome,:endereco,:tel)');
   $sql->bindValue(':nome',$nome);
   $sql->bindValue(':endereco',$endereco);
   $sql->bindValue(':tel',$tel);

   $sql->execute();

   header('location: index.php');
}



?>