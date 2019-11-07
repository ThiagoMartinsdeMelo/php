<?php
require 'Conn.php';
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8" />
</head>
    <body>
    <h1>Listar Usuario</h1>
    <?php
        $conn = new Conn();
        $conn->getConn();
        $result_user = "SELECT * FROM usuarios";
        $resultado_user = $conn->getConn()->prepare($result_user);
        $resultado_user->execute();
        while($row_user = $resultado_user->fetch(PDO::FETCH_ASSOC)){
            echo "ID: " . $row_user['id'] . "<br/>";
            echo "Nome: " . $row_user['nome'] . "<br/>";
            echo "E-mail: " . $row_user['email'] . "<br/>";
            echo "Usuario: " . $row_user['usuario'] . "<br/>";
            echo "Inserido: " . date('d/m/Y H:i:s', strtotime($row_user['created'])) . "<br/>";
            if(!empty($row_user['modified'])){
                echo "Alterado: " . date('d/m/Y H:i:s', strtotime($row_user['modified'])) . "<br/>";
            }
            echo "<hr>";
        }
    ?>
    </body>
</html>