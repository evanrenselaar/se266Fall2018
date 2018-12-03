
<html>
<head>
<title>Page Title</title>
</head>
<body>
    <?php
        session_start();
        var_dump ($_SESSION);
        $c = "";
        if (isset($_POST['showBtn'])) {
            $c  = filter_input(INPUT_POST, 'disneyCharacter');
            $_SESSION['disneyCharacter'] = $c;
        } else if (isset( $_SESSION['disneyCharacter'])) {
            $c =  $_SESSION['disneyCharacter'];
        }

    ?>

    <form method="post" action="test1Session.php">
        Disney Character: <input type="text" name="disneyCharacter" value="<?php echo $c; ?>" />
        <input type="submit" value="Show this Character" name="showBtn" />
    </form>
    <a href="test2Session.php">Other page</a>
</body>
</html>

