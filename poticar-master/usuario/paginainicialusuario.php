<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Poticar</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../estilos/styleMP.css">
    <link rel="stylesheet" type="text/css" href="../estilos/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">    
</head>
<body>
    <main>
        <div class="row no-gutters">
            <div class="col-md-4"></div>
            <div class="container col-md-4"> 
                <form class="form" method="POST" enctype="multipart/form-data" action="">            
                    <h1 class="title">POTICAR</h1>
                    <h3 class="sub-title">Bem-Vindo!</h3>
                    <div class="btn">
                        <a type="button" class="btn-i" href="mostrarcarro.php">Realizar Compra</a>                       
                        <a type="button" class="btn-i" href="mostrarcomprador.php">Clientes Cadastrados</a>
                        <a type="button" class="btn-i" href="cadastrarcomprador.php">Cadastrar Cliente</a>
                    </div>
                <form>                 
            </div>
        <div class="col-md-4"></div>
    </div>
    </main>
</body>
</html>