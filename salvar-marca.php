<br>
<?php
	switch ($_REQUEST["acao"]) {
		case 'inserir':
			$NOME = $_REQUEST["NOME"];
			$COR = $_REQUEST["COR"];
			$COR = $_REQUEST["PRECO"];
			$sql = "INSERT INTO produtos.preco (NOME,COR,PRECO) VALUES ('{$NOME}','{$COR}','{$PRECO}')";
			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<div class='alert alert-success'><p>Cadastrou com sucesso! :)</p></div>";
			}else{
				print "<div class='alert alert-danger'><p>Não foi possível cadastrar. :(</p></div>";
			}
			break;
		
		case 'editar':
			$NOME = $_REQUEST["NOME"];
			$COR = $_REQUEST["COR"];
			$sql = "UPDATE produtos SET NOME = '{$NOME}',COR = '{$COR}' WHERE ID_PROD = ".$_REQUEST["ID_PROD"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<div class='alert alert-success'><p>Editou com sucesso! :)</p></div>";
			}else{
				print "<div class='alert alert-danger'><p>Não foi possível editar. :(</p></div>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM produtos WHERE ID_PROD = ".$_REQUEST["ID_PROD"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<div class='alert alert-success'><p>Excluiu com sucesso! :)</p></div>";
			}else{
				print "<div class='alert alert-danger'><p>Não foi possível excluir. :(</p></div>";
			}
			break;
		
	}
?>
<button type="button" onclick="location.href='?page=home';" class="btn btn-primary">Voltar</button>