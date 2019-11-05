<?php
require 'Conn.php';
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8" />
</head>
    <body>
    <?php
        $conn = new Conn();
        $conn->getConn();
        $email = 'teste@teste.com.br';
        $usuario = 'teste';
        $senha = '123';
        try{
            $result_cadastrar = "INSERT INTO usuarios (email, usuario, senha, created) VALUES (:email, :usuario, :senha, NOW())";
            $cadastrar = $conn->getConn()->prepare($result_cadastrar);
            $cadastrar->bindParam(':email', $email, PDO::PARAM_STR);
            $cadastrar->bindParam(':usuario', $usuario, PDO::PARAM_STR);
            $cadastrar->bindParam(':senha', $senha, PDO::PARAM_STR);
            $cadastrar->execute();
            if($cadastrar->rowCount()){
                echo 'Cadastrado com sucesso.';
            }
        } catch (Exception $ex) {
        }
    ?>
    </body>
</html>