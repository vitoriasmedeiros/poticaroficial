<!DOCTYPE html>
<html>
<head><title>Poticar</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../estilos/styleMP.css">
    <link rel="stylesheet" type="text/css" href="../estilos/FormCadastro.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">    
 
</head>
<body>
    <main> 
        <div class="row no-gutters">
            <div class="col-md-4"></div>
            <div class="container col-md-4">  
            <?php include "enviaratualizacaocarro.php"; ?> 
            <?php if(!empty($msg)){
                echo "$msg";
            } ?> 
                <form class="form" method="POST" enctype="multipart/form-data" action="">            
                    <h1 class="title">Atualizar Carros</h1>
                    <div class="campos">  
                        <input class="campo-i" type="text" id="preco" name="preco" placeholder="Preço" required>
                        <input class="campo-i" type="text" id="modelo" name="modelo" placeholder="Modelo" required>
                        <input class="campo-i" type="text" id="cor" name="cor" placeholder="Cor" required>
                        <input class="campo-i" type="text" id="anofabri" name="anofabri" placeholder="Ano de Fabricação" required> 
                        <input class="campo-file" type="file" id="imagem" name="imagem" accept="imagem"/>
                
                    </div>
                    <div class="btn">
                        <input class="btn-i" type="submit" value="Atualizar">
                        <input class="btn-i" type="reset" value="Limpar">
                        <a class="btn-i" type="button" href="mostrarcarro.php">Cancelar</a>
                    </div>
                <form>                 
            </div>
        <div class="col-md-4"></div>
    </div>
    </main>
</body>
</html>