
<?php 
session_start();
include_once("conexao.php");
$carro_id = $_GET["carro_id"];
$query = "SELECT * FROM comprador";
$result1 = mysqli_query($conn, $query);

$query2= "SELECT * FROM usuario where tipo = 2";
$result2 = mysqli_query($conn, $query2);

?>
<!DOCTYPE html>
<html>
<head><title>Formulários em HTML5</title>
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
                    <?php if(!empty($msg)){
                        echo "$msg";
                    } ?>
                
                    <form class="form" method="POST"  action="finalizarcompra.php">            
                        <h1 class="title">REALIZAR COMPRA</h1>
                            <div class="campos">  
                                <a class=title>DADOS DO CLIENTE</a>                        
                                <select name="comprador_id">
                                    <?php while($row1 = mysqli_fetch_array($result1)):;?>
                                    <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
                                    <?php endwhile;?>
                                </select>     

                                <select name="usuario_id">
                                    <?php while($row2 = mysqli_fetch_array($result2)):;?>
                                    <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>
                                    <?php endwhile;?>
                                </select>                   
                            
                                <a class=title>DADOS DA COMPRA</a>
                                    <p>Cartão de crédito<p>
                                    <input type="radio" name="formaPagamento" value="1">  
                                    <p>Cheque<p>
                                    <input type="radio" name="formaPagamento" value="2">  
                                    <p>Financiamento<p>
                                    <input type="radio" name="formaPagamento" value="3">  
                                    <p>À vista<p>
                                    <input type="radio" name="formaPagamento" value="4">                          
                        </div>
                        <div class="btn">        
                            <input class="btn-i" type="reset" value="Limpar">
                            <input class="btn-i" type="button" value="Cancelar">
                        </div>                        
                            <?php
                                include_once("conexao.php");
                                $sql = "SELECT * FROM carro where id ='$carro_id'";
                                $sqlSelect =  mysqli_query($conn,$sql);                        
                                $sql2 = "SELECT * FROM compra";
                                $sqlSelect2=  mysqli_query($conn,$sql2);  
                                while(($array = mysqli_fetch_array($sqlSelect) and ($array2 = mysqli_fetch_array($sqlSelect2)))){
                                    $carro_id = $array['id'];
                                    $formaPagamento_id = $array2['formaPagamento'];
                                    $comprador_id = $array2['formaPagamento'];
                                    echo $formaPagamento_id;
                                

                                ?>
                                <a   href="finalizarcompra.php?carro_id=<?php echo "$carro_id"; ?>">Comprar</a>
                                <input class="btn-i" type="submit" value="Limpar">
                            <?php  }  ?><!--fechar while-->  
                            
                    <form>                           
             </div>
            <div class="col-md-4"></div>
        </div>
    </main>    
</body>
</html>