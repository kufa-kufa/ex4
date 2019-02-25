<!Doctype html>
<html>
<head>
    <meta charset="utf8">
    <title>Мой первый Блог</title>
</head>
<body>    
    <div class="container">
        <h1><?=$article['title']?></h1>
        <div>
            <div class="article">  
                <em>Опубликовано: <?=$article['created']?></em>
                <p><?=$article['content']?></p>
             </div>
            <a href="index.php">Назад</a>
          </div>
        </div>
        
        </body>
        </html>  
                
    


