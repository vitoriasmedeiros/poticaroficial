<?php 
  include_once("conexao.php");

  $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
  $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
  
  $teste = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";   
  $testeusu = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha' and tipo = 2";  
  $verifica = mysqli_query($conn, $teste);
  $verificausu = mysqli_query($conn, $testeusu);

  if (mysqli_num_rows($verifica) <= 0){
     echo"<script language='javascript' type='text/javascript'>
     alert('Login ou senha incorretos');window.location
     .href='paginainicial.php';</script>";
     die();}
  else{
    if(mysqli_num_rows($verificausu) <= 0) {

      header("location:adm/paginaprincipaladm.php");
      
    }
    else{
      header("location:usuario/paginainicialusuario.php");
    }
   
  }
?>