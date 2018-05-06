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
        <?php $articles = getArticles(); ?>
        <?php foreach ($articles

        as $article) { ?><!--   { это : -->
        <div class="article">
            <a href="singleArticle.php?title=<?php echo $article['title']; ?> &content=<?php echo $article['content']; ?>">
                <h1><?php echo $article['title']; ?></h1>
            </a>
            <p><?php echo $article['content']; ?></p>
            <h1>title</h1>
            <p>content</p>
            <?php } ?>
        </div>
    </div>
</body>
</html>