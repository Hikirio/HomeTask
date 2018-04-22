<?php
require_once "function.php";
if (!$_SESSION['access']) {
    header('Location: /HomeTask/auth/access_denied.php');
    exit;
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>БЛОГ</title>
</head>

<body>

<div>
    <p>Hello "<?php echo viewUserName() ?>"</p>
    <a href="index.php">Выход </a>

</div>

</body>
</html>