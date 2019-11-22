<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Poticar</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../estilos/styleMP.css">
    <link rel="stylesheet" type="text/css" href="../estilos/FormCadastro.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">    
</head>
<body>
    <main> 
        <div class="row no-gutters">
            <div class="col-md-4"></div>
            <div class="container col-md-4"> 
            <?php include "enviarusuario.php"; ?> 
            <?php if(!empty($msg)){
                echo "$msg";
            } ?> 
                <form class="form" method="POST" enctype="multipart/form-data" action="">            
                    <h1 class="title">Cadastrar Usuários</h1>
                    <div class="campos">  
                        <input class="campo-i" type="text" id="nome" name="nome" placeholder="Nome" required>
                        <input class="campo-i" type="text" id="login" name="login" placeholder="Login" required>
                        <input class="campo-i" type="password" id="senha" name="senha" placeholder="Senha" required>                
                    </div>
                    <div class="btn">
                        <input class="btn-i" type="submit" value="Cadastrar">
                        <input class="btn-i" type="reset" value="Limpar">
                        <a class="btn-i" type="button" href="paginaprincipaladm.php">Cancelar</a>
                    </div>
                <form>                 
            </div>
        <div class="col-md-4"></div>
    </div>
    </main>
</body>
</html>