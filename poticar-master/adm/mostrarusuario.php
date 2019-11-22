<!DOCTYPE html>
<html>
  <title>Poticar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <body>
    <a type="button" href="paginaprincipaladm.php">Voltar</a>
    <?php
      session_start();
      include_once("conexao.php");
      $sql = "SELECT * FROM usuario where tipo = 2";
      $sqlSelect =  mysqli_query($conn,$sql);
      while ($array = mysqli_fetch_array($sqlSelect)) {
        $id = $array['id'];
        $nome = $array['nome'];
        $login = $array['login'];
        $senha = $array['senha'];
      ?>
        
    <p><?php echo "Nome"; ?></p>
    <p><?php echo "$nome"; ?></p>
    <p><?php echo "Login"; ?></p>
    <p><?php echo "$login"; ?></p>
    
    <a type="button" href="atualizarusuario.php?id=<?php echo "$id"; ?>">Atualizar</a>
    <a type="button" href="enviardeletarusuario.php?id=<?php echo "$id"; ?>">Deletar</a>

    <?php  }  ?><!--fechar while-->
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