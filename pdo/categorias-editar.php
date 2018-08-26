	<?php
	
		require_once 'global.php';

		try {
			$id = $_GET['id'];
			$categoria = new Categoria($id);
			$categoria->carregar();
		} catch (Exception $e) {
			Erro::trataErro($e);
		}

		require_once 'cabecalho.php';
	?>
	<div class="container">
		<div class="principal">
			<div class="row">
				<div class="col-mod-12">
					<h4>Inserir Categorias</h4>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="col-4">
					<a href="categorias.php" class="btn btn-outline-primary" role="button">Categorias</a>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="col-12">
					<form action="categorias-editar-post.php" method="POST">
						<div class="form-group">
							<input type="hidden" name="id" value="<?php echo $categoria->id ?>" readonly>
							<label for="nome">Nome da Categoria</label>
							<input type="text" name="nome" value="<?php echo $categoria->nome ?>" placeholder="Nome da Categoria" class="form-control" />
						</div>
						<div class="form-group">
							<input type="submit" value="Atualizar" class="btn btn-warning" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php 
		require_once 'rodape.php';
	?>