<?php
require 'Conn.php';
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8" />
</head>
    <body>
    <h1>Cadastrar Usuario</h1>
    <?php
        $conn = new Conn();
        $conn->getConn();

        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (!empty($dados['SendCadUser'])) {
            unset($dados['SendCadUser']);
            $result_cadastrar = "INSERT INTO usuarios (nome, email, usuario, senha, created) 
            VALUES (:nome, :email, :usuario, :senha, NOW())";
            $cadastrar = $conn->getConn()->prepare($result_cadastrar);
            $cadastrar->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $cadastrar->bindParam(':email', $dados['email'], PDO::PARAM_STR);
            $cadastrar->bindParam(':usuario', $dados['usuario'], PDO::PARAM_STR);
            $cadastrar->bindParam(':senha', $dados['senha'], PDO::PARAM_STR);
            $cadastrar->execute();
            if($cadastrar->rowCount()){
                echo 'Cadastrado com sucesso.';
            }
        }
    ?>
    <form name="CadUsuario" action="" method="POST">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Nome Completo">
        <br/>
        <label>E-mail: </label>
        <input type="text" name="email" placeholder="Seu Melhor E-mail">
        <br/>
        <label>Usuario: </label>
        <input type="text" name="usuario" placeholder="Nome Login">
        <br/>
        <label>Senha: </label>
        <input type="text" name="senha" placeholder="Senha">
        <br/>
        <input type="submit" value="Cadastrar" name="SendCadUser">
    </form>
    </body>
</html>