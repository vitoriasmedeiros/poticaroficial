<?php
	/*session_start();**/
	include_once("conexao.php");

	$id = $_GET["idCarro"];

	//echo "E-mail: $email <br>";

	$sql = "DELETE from carro where id = '$id'";
	$resultado = mysqli_query($conn, $sql);
	header("location:mostrarcarro.php");
	
	$msg = "Carro deletado";
