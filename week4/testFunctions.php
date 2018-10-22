<?php

echo __DIR__;
exit;
include_once './functions/dbData.php';

$allResults = getAllTestData();
$res = getSearchData ("phone", "128");

var_dump ($res);
var_dump ($allResults);
?>