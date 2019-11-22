<?php
	include_once("conexao.php");

	$id = $_GET["idCarro"];

	$sql = "DELETE from carro where id = '$id'";
	$resultado = mysqli_query($conn, $sql);

	header("location:mostrarcarro.php");
