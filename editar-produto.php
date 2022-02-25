<h1>Editar </h1>
<?php
	$sql = "SELECT * FROM produtos as p INNER JOIN preco as pr ON p.ID_PROD = pr.ID_PROD WHERE pr.ID_PROD = ".$_REQUEST["ID_PROD"];

	$res = $conn->query($sql) or die($conn->error);

	$row = $res->fetch_object();
?>
<form action="?page=salvar-marca" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="ID_PROD" value="<?php print $row->ID_PROD; ?>">
	<div class="form-group">
		<label>Nome</label>
		<input type="text" name="NOME" value="<?php print $row->NOME; ?>" class="form-control">
	</div>

	<div class="form-group">
		<label>Preço</label>
		<input type="text" name="PRECO" value="<?php print $row->PRECO; ?>" class="form-control">
	</div>

	<div class="form-group">
		<label>Cor</label>
		<input type="text" name="COR" value="<?php print $row->COR; ?>" class="form-control" required>
	</div>
	<div class="form-group">
		<button class="btn btn-success" type="submit">Enviar</button>
	</div>
</form>





