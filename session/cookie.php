<?php

if(!isset($_COOKIE['name'])) {
    setcookie("name", "JoHnnie Walker", time() +60*60*24, "/", "", 0);
    setcookie("volume", "1", time() +60*60*24, "/", "", 0);
}
else{
    $_COOKIE['volume']=$_COOKIE['volume']+1;
    setcookie("volume", $_COOKIE['volume']);
}
echo'Name:'.$_COOKIE['name'].'</be>';
echo'Volume:'.$_COOKIE['volume'].'</br>';
?>
<a href="cooki.php">Increase</a>