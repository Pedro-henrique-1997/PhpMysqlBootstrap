<?php

include "conexao.php";
$id = $_GET['id'];

$sql = "SELECT * FROM estoque WHERE id_estoque = $id ";
$edit = mysqli_query($conexao, $sql);
while($array = mysqli_fetch_array($edit)){
        //var_dump($array);
	$id_estoque = $array['id_estoque'];
	$nroproduto = $array['nroproduto'];
	$nomeproduto = $array['nomeproduto'];
	$quantidade = $array['quantidade'];
	$categoria = $array['categoria'];
	$fornecedor = $array['fornecedor'];

	?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario de Edição</title>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

		<style type="text/css">
			#TamanhoContainer{
				width: 500px;

			}

			#botao{
				background-color: #FF1168;
				font-weight: bold;
			}

			.form-control{
				margin: 15px;
			}

			label{
				margin-left: 20px;
			}
		</style>
	</head>
	<body>
		<div id="TamanhoContainer" class="container" style="margin-top: 20px">
			<form action="update_produto.php" method="post" style="margin-top: 20px">		
				<h4>Formulario de Edição de produto</h4>
				<div class="form-group">
					<label>Nro Produto</label>
					<input type="number" class="form-control"  placeholder="Numero do Produto" name="nroproduto" value="<?php echo $array['nroproduto']?>" disabled>
				</div>

				<input type="hidden" name="id" value="<?php echo $array['id_estoque']?>">

				<div class="form-group">
					<label>Nome Produto</label>
					<input type="text" class="form-control"  placeholder="Nome do Produto" name="nomeproduto" value="<?php echo $array['nomeproduto']?>">
				</div>

				<div class="form-group">
					<label>Quantidade</label>
					<input type="number" class="form-control"  placeholder="Quantidade" name="quantidade" value="<?php echo $array['quantidade']?>">
				</div>

				<div class="form-group">
					<label for="exampleFormControlSelect1">Categorias</label>
					<select class="form-control" name="categoria" value="<?php echo $categoria?>">
						
						<option>Softawers</option>
						<option>Celulares</option>
						<option>Hardware</option>
						<option>Periféricos</option>					</select>
					</div>

					<div class="form-group">
						<label >Fornecedor</label>
						<select class="form-control" name="fornecedor" value="<?php echo $fornecedor?>">
							
							<option>Fornecedor A</option>
							<option>Fornecedor B</option>
							<option>Fornecedor C</option>
							<option>Fornecedor D</option>				
						</select>
					</div>

					<div style="text-align: right;" >
						<button type="submit" type="button" id="botao" class="btn btn-success">Success</button>
					</div>
					
				<?php } ?>
			</form>
		</div>

		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</body>
	</html>