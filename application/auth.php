<?php
if(isset($_POST['exit_btn']))
{
    unset($_SESSION['user']);
}

if(isset($_POST['btn']))
{
    if(isset($_POST['login']) && isset($_POST['password']))
    {
        $login    = cleanInput($_POST['login']);
        $password = md5(cleanInput($_POST['password']));
        $user     = \app\models\User::findAll()[0];

        if($login == $user->login && $password == $user->password)
        {
            $_SESSION['user'] = $login;
            header('location: /');
        }
    }
}
?>
<?php include 'views/header.php' ?>

<title>Авторизация</title>

<div class="container">
    <div class="panel panel-default opacity">

        <div class="panel-heading">
            <h4 class="title-panel-imp-note">Авторизация</h4>
        </div>

        <div class="panel-body">
            <form action="auth.php" method="post"  style="width: 50%;">
                <div class="input-group">
                    <span class="input-group-addon">Логин</span>
                    <input type="text" name="login" class="form-control" placeholder="">
                </div>
                <br/>
                <div class="input-group">
                    <span class="input-group-addon">Пароль</span>
                    <input type="password" name="password" class="form-control" placeholder="">
                </div>
                <br>
                <input type="submit" value="Войти" name="btn" class="btn btn-default">
            </form>
        </div>

    </div>
</div>