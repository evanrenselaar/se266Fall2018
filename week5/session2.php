<?php
    // Start the session
    session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
    // Set session variables
    $_SESSION["favoriteDisneyCharacter"] = "Mickey Mouse";
    
?>
    <h1><?php echo $_SESSION["favoriteDisneyCharacter"]; ?></h1>

</body>
</html>

