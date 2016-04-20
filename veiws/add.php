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
        <form action = "index.php?action=add" method = "post">
            <input type = "text" value = "title" reuired name = "title"  autofocus class = "form-item"> <br>
            <textarea name = "content" class = "form-item" required></textarea><br>
            <input type = "hidden" value = "<?=date('Y-m-d')?>" name = "date">
            <input type = "submit" value = "Proceed">
            <input type = "reset" value = "Reset">
            
        </form>
        <p><?php echo date('Y/m/d');?></p>
    </div>
    
    
    
    
    
    
    
    
    
    
    
</body>
<footer>
    <p>My first blog <br> Copyright &copy; 2016</p>
</footer>
</html>