<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
    </head>
    <body>
        <div>
            <ul>
                <?php
                require_once 'controllers/article_controller.php';
                $articles = articles_all();
                // print_r($articles);
                include 'views/articles.php';

               
                ?>

            </ul>
        </div>

    </body>
</html>
