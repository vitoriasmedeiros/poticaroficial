<a type="button" href="mostrarcomprador.php">Voltar</a>
<?php

	session_start();
	include_once("conexao.php");
	$idCarro = $_GET["idCarro"];
	$sql = "SELECT * FROM carro where id = $carro_id";
	$sqlSelect =  mysqli_query($conn,$sql);
	while ($array = mysqli_fetch_array($sqlSelect)) {
	  $carro_id = $array['id'];
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
	<a type="button" href="vendercarro.php?carro_id=<?php echo "$carro_id"; ?>">Comprar</a>

<?php  }  ?><!--fechar while-->