<?php
/**
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 23.04.2018
 * Time: 17:39
 */


require_once "func.php";
if ($_SESSION['access']) {
    header('Location: /HomeTask/myFunc/vseok.php');
    exit;
}
?>

<form   method="POST">
    <div class="input-group">
        <p>Вопрос №1</p>
        <span >Что такое PHP?</span>
        <input type="text" name="answer" value="">
        <br/>
        <p>опрос №2</p>
        <span class="input-group-addon">Что такое ХТМЛ?</span>
        <input type="text" name="ans" value="">
    </div>
    <p><input type="submit" value="Войти"></p>

</form>
