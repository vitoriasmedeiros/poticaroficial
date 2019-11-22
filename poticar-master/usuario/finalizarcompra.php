<?php
include_once("conexao.php");
$dataCompra = date("y-m-d");
//$formaPagamento = $_POST["formaPagamento"];
$formaPagamento = filter_input(INPUT_POST, 'formaPagamento',FILTER_SANITIZE_NUMBER_INT);
$comprador_id = filter_input(INPUT_POST, 'comprador_id',FILTER_SANITIZE_NUMBER_INT);
$usuario_id = filter_input(INPUT_POST, 'usuario_id',FILTER_SANITIZE_NUMBER_INT);
$carro_id = $_GET["carro_id"];




$result_compra = ("INSERT INTO COMPRA(dataCompra, formaPagamento, comprador_id, carro_id,usuario_id) VALUES ('$dataCompra', '$formaPagamento','$comprador_id','$carro_id', '$usuario_id')") or
die("O sistema não foi capaz de executar a query"); 
$resultado_compra = mysqli_query($conn, $result_compra);



    //header("location:mostrarcarro.php");
//}
//  $msg = "Você não realizou o upload de forma satisfatória.";
//}

