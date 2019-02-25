<?php

function articles_all() {
    $article = artiles_get();    
    return $article;
}

function articles_single($id) {
    $article = artiles_get();    
    return $article[$id-1];
}

function artiles_get() {
    $arr1 = array("id" => 1, "title" => "Title 1", "date" => "2019-01-30", "content" => "Content 1");
    $arr2 = array("id" => 2, "title" => "Title 2", "date" => "2019-01-30", "content" => "<p><img src='https://24.kg/thumbnails/81ec9/7f063/102921_w263_h198.jpeg'><br/>Депутаты Жогорку Кенеша в&nbsp;законопроекте «Об&nbsp;амнистии» нашли ошибки. Об&nbsp;этом стало известно сегодня на&nbsp;заседании.</p>");
    $article[0] = $arr1;
    $article[1] = $arr2;
    return $article;
}

?>