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
        var_dump($conn);
    ?>
    </body>
</html>