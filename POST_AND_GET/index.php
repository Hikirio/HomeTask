<?php
/**
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 20.04.2018
 * Time: 18:09
 */
require_once "result.php";
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Основы WEB</title>
</head>
<body>
<form  method="POST">
    <div class="input-group">
        <span class="input-group-addon">Что такое HTML? :</span>
        <input type="text" name="q1"
               value="<?php echo isset($_POST['q1']) ? $_POST['q1'] : ''; ?>">
        <span class="input-group-addon">Что такое PHP? :</span>
        <input type="text" name="q2"
               value="<?php echo isset($_POST['q2']) ? $_POST['q2'] : ''; ?>">
        <span class="input-group-addon">Что такое JS :</span>
        <input type="text" name="q3"
               value="<?php echo isset($_POST['q3']) ? $_POST['q3'] : ''; ?>">
    </div>
    <p><input type="submit" value="Узнать результат"></p>

</form>
<p>Результат : <?php e() ?></p>