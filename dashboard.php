<?php

session_start();
if($_SESSION['ADMIN']){
    echo "<h1>hello admin</h1>";
}


echo "<a href='logout.php'>logout </a>"









?>