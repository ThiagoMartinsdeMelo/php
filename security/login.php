<?php
    session_start();

    if (!empty($_POST['email'])) {
        $email =  $_POST['email'];
        $password = $_POST['password'];
        if (isset($_SESSION['login_attempts']) && $_SESSION['login_attempts'] >= 3) {
            echo 'Your access is blocked';
        } else {
            if ($email == 'test@test.com' && $password == '123') {
                echo 'Access ok!';
            } else {
                if (!isset($_SESSION['login_attempts'])) {
                    $_SESSION['login_attempts'] = 0;
                }
                $_SESSION['login_attempts']++;
                echo 'Wrong password. Attempts: '.$_SESSION['login_attempts'];
            }
        }
        echo '<hr/>';
    }
?>
<form method="post">
    E-mail:<br/>
    <input type="email" name="email" /><br/><br/>
    Senha:<br/>
    <input type="password" name="password"><br/><br/>
    <input type="submit" name="Enviar">
</form>