	<?php
		
		require_once 'global.php';

		try {
			$produto = new Produto();
			$list = $produto->listar();
		} catch (Exception $e) {
			Erro::trataErro($e);
		}

		require_once 'cabecalho.php';

	?>
	<div class="container">
		<div class="principal">
			<div class="row">
				<div class="col-mod-12">
					<h4>Produtos</h4>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="col-4">
					<a href="produtos-criar.php" class="btn btn-outline-primary" role="button">Cadastrar Produto</a>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="col-12">
					<?php 
						if (count($list) > 0): ?>
							<table class="table">
								<thead>
									<tr>
										<th>Id</th>
										<th>Nome</th>
										<th>Preço</th>
										<th>Quantidade</th>
										<th>Categoria</th>
										<th class="acao">Editar</th>
										<th class="acao">Excluir</th>
									</tr>
								</thead>
								<tbody>
									<?php
										foreach ($list as $key => $value): ?>
											<tr>
												<td><a href="produtos-detalhe.php"><?= $value['id'] ?></a></td>
												<td><a href="produtos-detalhe.php"><?= $value['nome'] ?></a></td>
												<td><a href="produtos-detalhe.php">R$ <?= $value['preco'] ?></a></td>
												<td><a href="produtos-detalhe.php"><?= $value['quantidade'] ?></a></td>
												<td><a href="produtos-detalhe.php"><?= $value['categoria_nome'] ?></a></td>
												<td><a href="produtos-editar.php?id=<?= $value['id'] ?>" class="btn btn-info">Editar</a></td>
												<td><a href="produtos-excluir-post.php?id=<?= $value['id'] ?>" class="btn btn-danger">Excluir</a></td>
											</tr>
									<?php									
										endforeach
									?>
								</tbody>
							</table>
						<?php else: ?>
							<p>Nenhum produto cadastrado.</p>
						<?php endif ?>
				</div>
			</div>
		</div>
	</div>
	<?php 
		require_once 'rodape.php';
	?>