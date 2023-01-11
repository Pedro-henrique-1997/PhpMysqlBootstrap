<?php

include_once("conexao.php");

$nroproduto =  $_POST['nroproduto'];
$nomeproduto =  $_POST['nomeproduto'];
$quantidade =  $_POST['quantidade'];
$categoria =  $_POST['categoria'];
$fornecedor =  $_POST['fornecedor'];

$sql = "INSERT INTO `estoque` (`nroproduto`, `nomeproduto`, `quantidade`, `categoria`, `fornecedor`) VALUES ($nroproduto, '$nomeproduto', $quantidade, '$categoria', '$fornecedor');";

$inserir = mysqli_query($conexao, $sql);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<div class="container" style="width: 500; margin-top: 20px">
	

	<div style="padding-top: 20px">
		<center>
			<h4>Produto Adicionado com Sucesso</h4>
			<a href="listar-produtos.php" class="btn btn-info" role="button">Voltar</a>
		</center>
	</div>
</div>