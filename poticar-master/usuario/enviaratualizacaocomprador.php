<?php
	include_once("conexao.php");

	$id =  $_GET["id"];
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING); 
	$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING); 
	$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING); 

	if($nome != null && $cpf != null && $telefone != null){
	    $result= ("UPDATE comprador set nome = '$nome', cpf = '$cpf', telefone = '$telefone' WHERE id = '$id'") 
	    or die("O sistema não foi capaz de executar a query"); 
	    $resultado = mysqli_query($conn, $result);
	    header("location:mostrarcomprador.php");
	}
	else { 
	    $msg = "Você não realizou o upload de forma satisfatória.";
	} 