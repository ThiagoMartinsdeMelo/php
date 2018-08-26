	<?php

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
					<form action="categorias-criar-post.php" method="POST">
						<div class="form-group">
							<label for="nome">Nome da Categoria</label>
							<input type="text" name="nome" placeholder="Nome da Categoria" class="form-control" />
						</div>
						<div class="form-group">
							<input type="submit" value="Cadastrar" class="btn btn-primary" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php 
		require_once 'rodape.php';
	?>