<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            $myvar = 'hello';
            $myvar2 = 'world';
            var_dump ($myvar);
            exit;
        ?>
        
        <h1>
            <?php echo $myvar . ' ' . $myvar2; ?>
        </h1>
    </body>
</html>
