<!DOCTYPE html>
<?php
	include("cabecalho.php");
	include("conecta.php");
	include("banco-categoria.php");
	include("banco-produto.php");

	$categorias = listaCategorias($conexao);
	
?>
<html>
<body>

<h1>Formulário de Produto</h1>

<form action="adiciona-produto.php" method="post">

	<table class="table">
		<tr>		
			<td>Nome</td>
			<td><input class="form-control" type="text" name="nome"></td>
		</tr>

		<tr>
			<td>Preço</td>
			<td><input class="form-control" type="number" name="preco"></td>
		</tr>
		<tr>
			<td>Descrição</td>
			<td><textarea name="descricao" class="form-control"></textarea> </td>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="usado" value="true">Usado</td>
		</tr>
		<tr>
			<td>Categoria</td>
			<td>
				<select name="categoria_id" class="form-control">
				<?php foreach ($categorias as $categoria) : ?>
					<option value="<?= $categoria['id']?>">
					<?= $categoria['nome'] ?> <br/>
					</option>
					<?php endforeach ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<button class="btn btn-primary" type="submit" name="cadastrar">Cadastrar</button>
			</td>
		</tr>

	</table>
</form>


</body>

</html>