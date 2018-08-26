	<?php

	require_once 'global.php';

	try {
		$id = $_GET['id'];
		$categoria = new Categoria($id);
		$categoria->carregarProdutos();
		$listaProdutos = $categoria->produtos;
	} catch (Exception $e) {
		Erro::trataErro($e);
	}

	require_once 'cabecalho.php';

	?>
	<div class="container">
		<div class="principal">
			<div class="row">
				<div class="col-mod-12">
					<h4>Detalhes da Categoria</h4>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="col-4">
					<a href="categorias-criar.php" class="btn btn-outline-primary" role="button">Cadastrar Categoria</a>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="col-12">
					<dl>
						<dt>ID</dt>
						<dd><?= $categoria->id; ?></dd>
						<dt>Nome</dt>
						<dd><?= $categoria->nome; ?></dd>
						<dt>Produtos</dt>
						<?php if (count($listaProdutos) > 0): ?>
						<dd>
							<ul>
								<?php foreach($listaProdutos as $linha): ?>
								<li><a href="produtos-editar.php?id=<?php echo $linha['id'] ?>"><?php echo $linha['nome'] ?></a></li>
							<?php endforeach ?>
						</ul>
					</dd>
				<?php else: ?>
				<dd>Não existem produtos para esta categoria</dd>
			<?php endif ?>
		</dl>
	</div>
</div>
</div>
</div>
<?php 
require_once 'rodape.php';
?>