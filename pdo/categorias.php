	<?php
		
		require_once 'global.php';

		try {
			$list = Categoria::listar();
		} catch (Exception $e) {
			Erro::trataErro($e);
		}

		require_once 'cabecalho.php';

	?>
	<div class="container">
		<div class="principal">
			<div class="row">
				<div class="col-mod-12">
					<h4>Categorias</h4>
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
					<table class="table">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nome</th>
								<th class="acao">Editar</th>
								<th class="acao">Excluir</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach ($list as $key => $value): ?>
									<tr>
										<td><a href="categorias-detalhe.php?id=<?= $value['id'] ?>" class="btn btn-link"><?= $value['id'] ?></a></td>
										<td><a href="categorias-detalhe.php?id=<?= $value['id'] ?>" class="btn btn-link"><?= $value['nome'] ?></a></td>
										<td><a href="categorias-editar.php?id=<?= $value['id'] ?>" class="btn btn-info">Editar</a></td>
										<td><a href="categorias-excluir-post.php?id=<?= $value['id'] ?>" class="btn btn-danger">Excluir</a></td>
									</tr>
							<?php									
								endforeach
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php 
		require_once 'rodape.php';
	?>