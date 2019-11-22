<!DOCTYPE html>
<html>
  <title>Poticar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <body>
    <a type="button" href="paginainicialusuario.php">Voltar</a>
    <?php
      session_start();
      include_once("conexao.php");
      $sql = "SELECT * FROM comprador";
      $sqlSelect =  mysqli_query($conn,$sql);
      while ($array = mysqli_fetch_array($sqlSelect)) {
        $id = $array['id'];
        $nome = $array['nome'];
        $cpf = $array['cpf'];
        $telefone = $array['telefone'];
    ?>
    <p><?php echo "Nome"; ?></p>
    <p><?php echo "$nome"; ?></p>
    <p><?php echo "CPF"; ?></p>
    <p><?php echo "$cpf"; ?></p>
    <p><?php echo "Telefone"; ?></p>
    <p><?php echo "$telefone"; ?></p>
    <a type="button" href="atualizarcomprador.php?id=<?php echo "$id"; ?>">Atualizar</a>
    <a type="button" href="deletarcomprador.php?id=<?php echo "$id"; ?>">Deletar</a>

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