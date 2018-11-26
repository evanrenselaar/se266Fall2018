<?php

$colors = array();
array_push ($colors, "red");
array_push ($colors, "blue");
array_push ($colors, "green");
$idx = $_POST['idx'];
$str = json_encode ($colors[$idx]);

echo $idx;  
?>

