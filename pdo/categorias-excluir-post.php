<?php

require_once 'global.php';

try{
	$id = $_GET['id'];
	$categoria = new Categoria($id);
	$categoria->excluir();
	header('Location: categorias.php');
} catch (Excepion $e) {
	Erro::trataErro($e);
}

