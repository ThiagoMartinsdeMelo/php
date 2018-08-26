<?php

// PDO
$dsn = "mysql:dbname=loja_teste;host=localhost";
$dbuser = "root";
$dbpass = "";

?>

<?php

try {

	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$nome_produto = $_POST['nome_produto'];
	$preco_produto = $_POST['preco_produto'];

	$sql = "INSERT INTO produtos VALUES (null, '{$nome_produto}', {$preco_produto})";
	$sql = $pdo->query($sql);

	echo '<div class="alert alert-success" role="alert">';
	echo 	'Produto inserido com sucesso!';
	echo '</div>';


} catch (PDOException $e) {

	echo '<div class="alert alert-danger" role="alert">';
	echo "Falhou: " . $e->getMessage();
	echo '</div>';

}

?>