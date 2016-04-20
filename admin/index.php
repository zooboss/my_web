<?php
    require_once(dirname(__FILE__).'/../database.php');
    require_once(dirname(__FILE__).'/../models/articles.php');
    
        
    $link = db_connect();

    if(isset($_GET['action']))
    {
        $action = $_GET['action'];    
    }
    else 
    {
        $action = "";
    }

    switch($action)
    {
        case "add":
            if (!empty($_POST))
            {
                articles_new($link, $_POST['title'], $_POST['date'], $_POST['content']);
                header("Location: index.php");
            }
            include ("../veiws/add.php");
            break;
        case "delete":
            articles_delete($link, $_GET['id']);
            header("Location: index.php");
            break;
        case "edit":
            if(!empty($_POST)){
                articles_edit($link, $_GET['id'], $_POST['title'], $_POST['date'], $_POST['content']);
                header("Location: index.php");
            }
            $article = articles_get($link, $_GET['id']);
            include ("../veiws/edit.php");
            break;
        default:
            $articles = articles_all($link);
            include("../veiws/articles_admin.php");
    }



?>