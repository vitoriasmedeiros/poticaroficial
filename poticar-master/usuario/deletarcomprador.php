<?php
	include_once("conexao.php");

	$id = $_GET["id"];

	$sql = "DELETE from comprador where id = '$id'";
	$resultado = mysqli_query($conn, $sql);

	header("location:mostrarcomprador.php");