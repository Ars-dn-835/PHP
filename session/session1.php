<?php
session_start();
echo 'id='.session_id().'</br>';

$_SESSION['num']=100;
    echo 'From first file num=' .$_SESSION['num'].'</br>';
?>
<a href='session2.php'>Forward</a>