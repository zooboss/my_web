<!DOCTYPE html>
<html>
    <head>
        <title> MY BLog</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
   
    </head>
    <body>
        <div class = "container">
           <div class = "article">
                <h3> <?=$article['title']?></h3>
                <em> Published: <?=$article['date']?></em>
                <p><?=$article['content']?></p>
            </div>
            <footer>
                <p>My first blog <br> Copyright &copy; 2016</p>
                <a href = "index.php">Return</a>
            </footer>
        </div>
        
    </body>
</html>