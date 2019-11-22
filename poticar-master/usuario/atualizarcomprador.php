<!DOCTYPE html>
<html>
<head><title>Poticar</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styleMP.css">
    <link rel="stylesheet" type="text/css" href="FormCadastro.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">    
 
</head>
<body>
    <main> 
        <div class="row no-gutters">
            <div class="col-md-4"></div>
            <div class="container col-md-4">   
            <?php include "enviaratualizacaocomprador.php"; ?> 
            <?php if(!empty($msg)){
                echo "$msg";
            } ?> 
                <form class="form" method="POST" enctype="multipart/form-data" action="">            
                    <h1 class="title">Atualizar Comprador</h1>
                    <div class="campos">  
                        <input class="campo-i" type="text" id="nome" name="nome" placeholder="Nome" required>
                        <input class="campo-i" type="text" id="cpf" name="cpf" placeholder="CPF" required>
                        <input class="campo-i" type="text" id="telefone" name="telefone" placeholder="Telefone" required>                
                    </div>
                    <div class="btn">
                        <input class="btn-i" type="submit" value="Atualizar">
                        <input class="btn-i" type="reset" value="Limpar">
                        <input class="btn-i" type="button" value="Cancelar">
                    </div>
                <form>                 
            </div>
        <div class="col-md-4"></div>
    </div>
    </main>
</body>
</html>