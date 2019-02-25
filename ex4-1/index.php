<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
    </head>
    <body>
        <?php
        require_once 'controllers/article_controller.php';
        $articles = articles_all();
        include 'views/articles.php';
        ?>

    </body>
</html>
