	<?php

		require_once 'global.php';

		try {
			$list_cat = Categoria::listar();
		} catch (Exception $e) {
			Erro::trataErro($e);
		}

		require_once 'cabecalho.php';
	?>
	<div class="container">
		<div class="principal">
			<div class="row">
				<div class="col-mod-12">
					<h4>Inserir Produto</h4>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="col-4">
					<a href="produtos.php" class="btn btn-outline-primary" role="button">Produtos</a>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="col-12">
					<?php if (count($list_cat) > 0): ?>
						<form action="produtos-criar-post.php" method="POST">
							<div class="form-group">
								<label for="nome">Nome do Produto</label>
								<input type="text" name="nome" placeholder="Nome do Produto" class="form-control" />
							</div>
							<div class="form-group">
								<label for="nome">Preço do Produto</label>
								<input type="text" name="preco" placeholder="Preço do Produto" class="form-control" />
							</div>
							<div class="form-group">
								<label for="nome">Quantidade do Produto</label>
								<input type="text" name="quantidade" placeholder="Quantidade do Produto" class="form-control" />
							</div>
							<div class="form-group">
								<label for="nome">Categoria do Produto</label>
	                			<select class="form-control" name="categoria_id">
	                				<?php foreach ($list_cat as $key => $value): ?>
	                    				<option value="<?= $value['id'] ?>"><?= $value['nome'] ?></option>
	                    			<?php endforeach ?>
	                			</select>
							</div>
							<div class="form-group">
								<input type="submit" value="Cadastrar" class="btn btn-primary" />
							</div>
						</form>
					<?php else: ?>
						<p>Nenhuma categoria cadastrada no sistema. Por favor, crie uma categoria antes de cadastrar um produto!</p>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
	<?php 
		require_once 'rodape.php';
	?>