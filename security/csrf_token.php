<?php
    session_start();

    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = md5(time().rand(0,999));
    }

    if (!empty($_POST['email'])) {
        $email =  $_POST['email'];
        $password = $_POST['password'];

        if ($_POST['csrf_token'] == $_SESSION['csrf_token']) {
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
        } else {
           echo 'This form was submitted from another site.'; 
        }
        echo '<hr/>';
    }
?>
<form method="post">
    E-mail:<br/>
    <input type="email" name="email" /><br/><br/>
    Senha:<br/>
    <input type="password" name="password"><br/><br/>
    <input type="hidden" name="csrf_token" value=<?php echo $_SESSION['csrf_token']; ?> />
    <input type="submit" name="Enviar">
</form>