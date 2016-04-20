<!DOCTYPE html>
<html>
<head>
    <title>Add article</title>
    <meta charset = "utf-8">
    <link rel = "stylesheet" href = "../style.css">
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
    
    <div class = "container">
        <form action = "index.php?action=edit&id=<?=$article['id']?>" method = "post">
            <input type = "text" value = "<?=$article['title']?>" reuired name = "title"  autofocus class = "form-item"> <br>
            <textarea name = "content" class = "form-item" required><?=$article['content']?></textarea><br>
            <input type = "hidden" value = "<?=$article['date']?>" name = "date">
            <input type = "submit" value = "Proceed">
            
            
        </form>
        <p><?php echo date('Y/m/d');?></p>
    </div>
    
    
    
    
    
    
    
    
    
    
    
</body>
<footer>
    <p>My first blog <br> Copyright &copy; 2016</p>
</footer>
</html>