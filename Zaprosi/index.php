<?php require_once 'calc.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <title>NOT FIRST FORM:(</title>
</head>
<body>


//var_dump($_REQUEST['val1']);//когда не знает с чего будут даные get ли post

<form method="POST">
    <div class="input-group">
        <span class="input-group-addon">Введите первое число :</span>
        <input type="number" name="val1" value="<?php echo isset($_POST['val1']) ? $_POST['val1'] : ''; ?>"
               placeholder="первое число">
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon">Введите второе число :</span>
        <input type="number" name="val2" value="<?php echo isset($_POST['val2']) ? $_POST['val2'] : ''; ?>"
               placeholder="второе число">
    </div>

    <br>

    <div class="input-group">
        <span class="input-group-addon">Введите операнд :</span>
    </div>
    <br>
    <select name="operand">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <p><input type="submit" value="Посчитать"></p>
    <p>Результат : <?php calculator() ?> </p>

</form>

</body>
</html>
