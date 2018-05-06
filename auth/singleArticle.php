<?php
require_once "function.php";
require_once "functionBlog.php";
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
    <!-- ; это endif
    = это echo
    -->
    <p>Hello "<?php echo viewUserName() ?>"</p>
    <a href="index.php">Выход</a>
    <div class="blog">
        <?php $article = $_GET; ?>
        <?php if ($article) { ?>
            <div class="article">
                <h1><?php echo $article['title']; ?></h1>
                <p><?php echo $article['content']; ?></p>
            </div>
        <?php } ?>


    </div>

</body>
</html>