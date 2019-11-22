<?php
	/*session_start();**/
	include_once("conexao.php");

	$id = $_GET["id"];

	$sql = "DELETE from usuario where id = '$id'";
	$resultado = mysqli_query($conn, $sql);
	header("location:mostrarusuario.php");
	
	$msg = "Carro deletado";