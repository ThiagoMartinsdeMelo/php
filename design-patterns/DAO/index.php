<?php

require_once 'UserDAO.php';

$usuarioDAO = new UserDAO();

$usuarioDAO->insert(array(
	'name' => 'Beltrano',
	'email' => 'beltrano@gmail.com',
	'pass' => md5('123')
));

$usuarios = $usuarioDAO->get();

echo '<pre>';
print_r($usuarios);
echo '</pre>';
