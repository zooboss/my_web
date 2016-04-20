<!DOCTYPE html>
<html>
    <head>
        <title> Admin panel</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
    </head>
    <body>
        <div class = "container">
           <div class= "container-admin">
                <?php foreach($articles as $a): ?>
                    <div class = "articles-admin">
                        <ul>
                            <li> <?=$a['date']?> </li>
                            <li> <a href = "../article.php?id=<?=$a['id']?>"> <?=$a['title']?> </a> </li>
                            <li><a href = "index.php?action=edit&id=<?=$a['id']?>">EDIT</a></li>
                            <li><a href = "index.php?action=delete&id=<?=$a['id']?>">DELETE</a></li>
                        </ul>
                    </div>
                    <?php endforeach ?>
            </div>
            <footer>
                <p><a href = "index.php?action=add">Add article</a></p>
                <p>My first blog <br> Copyright &copy; 2016</p>
                <p><a href="../index.php">Return</a></p>
            </footer>
        </div>
    
    
    </body>
</html>