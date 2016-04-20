<!DOCTYPE html>
<html>
    <head>
        <title> MY BLog</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
    </head>
    <body>
        <div class = "container">
            <h1>My first blog</h1>
            <a href = "admin">Administrator panel</a>
            <div>
                <?php foreach($articles as $a): ?>
                    <div class = "article">
                        <h3><a href = "article.php?id=<?=$a['id']?>"> <?=$a['title']?></a></h3>
                        <em> Published: <?=$a['date']?></em>
                        <p><?=articles_intro($a['content'])?></p>
                    </div>
                    <?php endforeach ?>
            </div>
            <footer>
                <p>My first blog <br> Copyright &copy; 2016</p>
            </footer>
        </div>
    
    
    
    
    
    
    
    </body>
</html>