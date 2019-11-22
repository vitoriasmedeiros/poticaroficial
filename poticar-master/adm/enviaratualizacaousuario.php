<?php
	/*session_start();**/
	include_once("conexao.php");

	$id =  $_GET["id"];
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING); 
	$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING); 
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING); 

	if($nome != null && $login != null && $senha != null){
	    $result= ("UPDATE usuario set nome = '$nome', login = '$login', senha = '$senha' WHERE id = '$id'") or die("O sistema não foi capaz de executar a query"); 
	    $resultado = mysqli_query($conn, $result);
	    header("location:mostrarusuario.php");
	}
	else { 
	    $msg = "Você não realizou o upload de forma satisfatória.";
	} 