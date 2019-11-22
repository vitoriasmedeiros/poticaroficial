<!DOCTYPE html>
<html>
<title>Poticar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../estilos/styleMP.css">
  <link rel="stylesheet" type="text/css" href="../estilos/carroscadastrados.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <body >
    <header><a href="paginainicialusuario.php">POTICAR</a></header>
    <main class="container">
    <?php
      session_start();
      include_once("conexao.php");
      $sql = "SELECT * FROM carro";
      $sqlSelect =  mysqli_query($conn,$sql);
      while ($array = mysqli_fetch_array($sqlSelect)) {
        $carro_id = $array['id'];
        $modeloCarro = $array['modelo'];
        $precoCarro = $array['preco'];
        $anoCarro = $array['ano_fabricaco'];
        $corCarro = $array['cor'];
        $imagemCarro = $array['imagem'];
    ?>
        <div class="box">
          <div class=""><img class="image" src="../uploadCarro/<?php echo "$imagemCarro"; ?>"></div>
          <div class="box-body">
            <h1 class="title"><?php echo "$modeloCarro"; ?></h1>
            <a class="text"><?php echo "$corCarro"; ?> - </a>
            <a class="text"><?php echo "$anoCarro"; ?></a>
            <p>R$ <?php echo "$precoCarro"; ?></p>        
          </div>
          <div class="box-btn">
            <a class="btn-i" type="button" href="realizarcompra.php?carro_id=<?php echo "$carro_id"; ?>">Comprar</a>
          </div>
        </div>
        <?php  }  ?><!--fechar while-->
    </main>    
</body>
</html>

<!--<div class="w3-container">
  <h2>Photo Card</h2>

  <div class="w3-card-4" style="width:50%">
    <img src="img_snowtops.jpg" alt="Alps" style="width:100%">
    <div class="w3-container w3-center">
      <p>The Italian / Austrian Alps</p>
    </div>
  </div>
</div> -->