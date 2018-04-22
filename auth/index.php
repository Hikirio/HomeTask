<?php
require_once "function.php";
if (isset($_POST) && !empty($_POST)) {
    login($_POST);
} elseif (isset($_GET)) {
    /*if  (isste($_GET) && key_exists('logout',$_GET)){
         session_destroy();
         header('Location: /HomeTask/auth/index.php');
         exit;}

*/
    logout();

}

if ($_SESSION['access']) {
    header('Location: /HomeTask/auth/blog.php');
    exit;
}


?>


<form method="POST">
    <div class="input-group">
        <span class="input-group-addon">Введите Логин:</span>
        <input type="text" name="login" value="">
        <br/>
        <span class="input-group-addon">Введите Пароль :</span>
        <input type="password" name="password" value="">
    </div>
    <p><input type="submit" value="Войти"></p>

</form>
