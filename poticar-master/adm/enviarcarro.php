<?php
	/*session_start();**/
	include_once("conexao.php");

	$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT);
	$modelo= filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
	$cor= filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING); 
	$ano_fabricacao= filter_input(INPUT_POST, 'anofabri', FILTER_SANITIZE_STRING); 

	//echo "E-mail: $email <br>";

	if(isset($_FILES['imagem'])){
	    $extensao = strtolower(substr($_FILES['imagem']['name'],-4));
	    $novoNome = $_POST["modelo"].$extensao;
	    $diretorio = "../uploadCarro/";
	    move_uploaded_file($_FILES['imagem']['tmp_name'],$diretorio.$novoNome);
	    $result_carro2 = ("INSERT INTO CARRO(preco, modelo, cor, ano_fabricaco,imagem) VALUES ('$preco', '$modelo','$cor','$ano_fabricacao','$novoNome')") or
	    die("O sistema não foi capaz de executar a query"); 
	    $resultado_carro2 = mysqli_query($conn, $result_carro2);
	    header("location:mostrarcarro.php");
	}
	else { 
	    $msg = "Você não realizou o upload de forma satisfatória.";
	} 
