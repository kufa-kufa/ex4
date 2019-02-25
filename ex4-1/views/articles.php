
    <div class="container">
        <h1>мой первый блог</h1>
        <div>
            <div class="article">
                
                <?php foreach ($articles as $article) {
                    $url = base64_encode($article["id"]);
                    $url = urlencode($url);
                    echo '<li><a href=article.php?id='.$url.'>'.$article["title"].'</a></li>';
                }
                ?>
               
             </div>
          </div>
        </div>
      



