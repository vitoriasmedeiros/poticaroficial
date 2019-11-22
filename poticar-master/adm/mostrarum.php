<a type="button" href="mostrarcarro.php">Voltar</a>
<?php
session_start();
include_once("conexao.php");
$idCarro = $_GET["idCarro"];
$sql = "SELECT * FROM carro where id = $idCarro";
$sqlSelect =  mysqli_query($conn,$sql);
while ($array = mysqli_fetch_array($sqlSelect)) {
  $idCarro = $array['id'];
  $modeloCarro = $array['modelo'];
  $precoCarro = $array['preco'];
  $anoCarro = $array['ano_fabricaco'];
  $corCarro = $array['cor'];
  $imagemCarro = $array['imagem'];

?>
<p><?php echo "$modeloCarro"; ?></p>
<p><?php echo "$precoCarro"; ?></p>
<p><?php echo "$anoCarro"; ?></p>
<p><?php echo "$corCarro"; ?></p>
<img src="uploadCarro/<?php echo "$imagemCarro"; ?>" alt="">
<a type="button" href="">Comprar</a>

<?php  }  ?><!--fechar while-->