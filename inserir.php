<?php 
// ORDEM: PREPARAR , TROCA E EXECUTAR
include_once('connect.php');
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	// mettodo prepare
$stmt= $connect->prepare("INSERT INTO users2 (nome, email, senha) VALUES(:nome, :email, :senha)");
$stmt->bindParam('nome', $nome);
$stmt->bindParam('email', $email);
$stmt->bindParam('senha', $senha);
$stmt->execute ();

echo "Cadastrado";



 ?>