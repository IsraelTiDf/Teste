<h1 class="site-heading text-center text-white d-none d-lg-block">
    
      <span class="site-heading-lower">Cadastrar marca</span>
  </h1>
<form action="?page=salvar-marca" method="POST">
	<input type="hidden" name="acao" value="inserir">
	<div class="form-group">
		<label>Nome</label>
		<input type="text" name="NOME" class="form-control" required>
	</div>

	<div class="form-group">
		<label>Preço</label>
		<input type="text" name="PRECO" class="form-control" required>
	</div>

	<div class="form-group">
		<label>Cor</label>
		<input type="text" name="COR" class="form-control" required>
	</div>
	<div class="form-group">
		<button class="btn btn-success" type="submit">Enviar</button>
	</div>
</form>