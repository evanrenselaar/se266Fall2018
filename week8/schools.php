<?php

    include './functions/dbconnect.php';

    $db = dbconnect();

   
    $stmt = $db->prepare("SELECT schoolState, COUNT(*) AS SchoolCount from schools
                            GROUP BY schoolstate
                            ORDER BY COUNT(*) DESC LIMIT 10");

      
    $results = array();
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    $results = json_encode($results);
    
    echo $results;
?>