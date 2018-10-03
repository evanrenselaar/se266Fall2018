
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="test" method="post">
            <input type="text" value="20" name="myNumber">
            <input type="submit" value="Click Me" name="clickMe">
            
            
        </form>
        <?php
            
            if (isset($_POST ['myNumber'])) {
                echo $_POST ['myNumber'];
            } else {
                echo "First time here";
            }
            
            
        ?>
    </body>
</html>
