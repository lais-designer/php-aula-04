<?php 

//variaveis
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "blog";


try{
	 $connect = new PDO ("mysql:host=".$host. ";dbname=". $dbname, $user, $pass);
	echo "conexão realizada com sucesso, você é foda!";
}catch( Exception $err){
		echo "erro de conexão, burra!";
}

 ?>