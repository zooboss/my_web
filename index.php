<?php
    require_once(dirname(__FILE__)."/database.php");
    require_once(dirname(__FILE__)."/models/articles.php");

    $link = db_connect();   
        
    $articles = articles_all($link);
    
    include(dirname(__FILE__)."/veiws/articles.php");

?>