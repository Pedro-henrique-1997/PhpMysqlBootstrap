<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Produtos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/74b7d7745b.js" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
		<h3 class="text-center">Listagem de Produtos</h3>

<br>

<div class="text-center">
  <a  href="index.php"><button type="button" class="btn btn-success">Cadastrar</button>
</a>
</div>

		<table class="table">
  <thead>
    <tr>
      <th scope="col">nroproduto</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Categoria</th>
     <th scope="col">Fornecedor</th>
     <th scope="col" class="text-center">Ações</th>  
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
      include "conexao.php";
      $sql = "SELECT * FROM estoque";
      $busca = mysqli_query($conexao, $sql);

      while($array = mysqli_fetch_array($busca)){
        //var_dump($array);
       $id_estoque = $array['id_estoque'];
       $nroproduto = $array['nroproduto'];
       $nomeproduto = $array['nomeproduto'];
       $quantidade = $array['quantidade'];
       $categoria = $array['categoria'];
       $fornecedor = $array['fornecedor'];
      ?>
    
    <td><?php echo $nroproduto?></td>
    <td><?php echo $nomeproduto?></td>
    <td><?php echo $quantidade?></td>
    <td><?php echo $categoria?></td>
    <td><?php echo $fornecedor?></td>
    <td><a href="editar_produto.php?id=<?php echo $array['id_estoque']?>"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>Editar</button></a></td>
     <td><a href="excluir_produto.php?id=<?php echo $array['id_estoque']?>"><button type="button" class="btn btn-danger">Excluir</button></a></td>
    </tr>
    <?php }?>
  </tbody>
</table>
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>