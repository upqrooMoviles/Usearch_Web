<?php
    require_once 'include/DB_Functions.php';
    $db = new DB_Functions();
$pwd = $db->hashSSHA($_GET['pass']);
var_dump($pwd);

?>