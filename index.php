<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario de Cadastro</title>
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

	<form action="inserir_produto.php" method="post" style="margin-top: 20px">
		<div id="TamanhoContainer" class="container" style="margin-top: 20px">
			<h4>Formulario de Cadastros</h4>
			<div class="form-group">
				<label>Nro Produto</label>
				<input type="number" class="form-control"  placeholder="Numero do Produto" name="nroproduto">
			</div>

			<div class="form-group">
				<label>Nome Produto</label>
				<input type="text" class="form-control"  placeholder="Nome do Produto" name="nomeproduto">
			</div>

			<div class="form-group">
				<label>Quantidade</label>
				<input type="number" class="form-control"  placeholder="Quantidade" name="quantidade">
			</div>

			<div class="form-group">
				<label for="exampleFormControlSelect1">Categorias</label>
				<select class="form-control" name="categoria">
					<option>Softawers</option>
					<option>Celulares</option>
					<option>Hardware</option>
					<option>Periféricos</option>				
				</select>
			</div>

			<div class="form-group">
				<label for="exampleFormControlSelect1">Fornecedor</label>
				<select class="form-control" name="fornecedor">
					<option>Fornecedor A</option>
					<option>Fornecedor B</option>
					<option>Fornecedor C</option>
					<option>Fornecedor D</option>				
				</select>
			</div>

          <div style="text-align: right;" >
          	<button type="submit" type="button" id="botao" class="btn btn-success">Success</button>
          </div>
			
		</div>

		
	</form>


	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>