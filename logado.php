<?php 

include "connect.php";

session_start();

$email = $_POST['email'];
$pass = $_POST['senha'];

$stmt = $connect->prepare("SELECT * FROM users2 WHERE email = :email AND senha = :email");
// o que estiver no banco de dados
$stmt->bindParam(":email", $email);
$stmt->bindParam(":senha", $pass);

$stmt->execute();

if($stmt->rowCount() ==1){

	$_SESSION['logado'] = true;

	header(" Location: logadoOK.php");
}
else{
	header("Location: index.php");
}

 ?>