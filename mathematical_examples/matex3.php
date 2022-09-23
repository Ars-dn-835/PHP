<?php
//1
$a = 10;
$b = 3;
$ostatokpomodul = $a % $b;
echo "Залишок ".$ostatokpomodul."</br>";
//2
if ($ostatokpomodul == 0){
    echo 'Ділиться 10 на 3 без залишку по модулю'."</br>";
}else{
    echo 'Ділиться 10 на 3 з залишком по модую'."</br>";
}
//3
echo pow(2, 10)."</br>";
//4
echo sqrt(245)."</br>";
//5
$maszel = [4, 2, 5, 19, 13, 0, 10];
$summasuv = 0;
foreach ($maszel as $maszell){
    $summasuv = $maszell + $summasuv;
    echo $summasuv;
}
print_r($summasuv);
echo ''."</br>";
//6
$tris = sqrt(379);
echo "Ціле".round($tris, 0)."</br>";
echo "Десяткову".round($tris, 1)."</br>";
echo "Сотня".round($tris, 2)."</br>";
//7
$pits = sqrt(587);
$vel = round($pits, 10);
$mal = round($pits, 0);
$vell ["floor"] = $vel;
$mall ["ceil"] = $mal;
print_r($vell);
echo ''."</br>";
print_r($mall);
echo ''."</br>";
//8
$arr = [4, -2, 5, 19, -130, 0, 10];
echo max($arr)."</br>";
echo min($arr)."</br>";
//друга половина номерація збита в завдані

//7
echo strlen('html css php')."</br>";
//8
$password = strlen('lbtldjr');
if($password > 5 and $password < 10){
        echo "Пароль підходить"."</br>";
} else {
    echo "Пароль не підходить"."</br>";
}
//9
$strok = 'html,css,php';
	$riz = explode(',', $strok);
	echo $riz[0]."</br>";
    echo $riz[1]."</br>";
    echo $riz[2]."</br>";
//10
echo substr('abcksfgndskjgnde', -3)."</br>";
//11
$a = strstr('https://code.mu/ru/php/manual/string/strstr/', 'http://');
if( $a == true){
echo 'yea'."</br>";
} else {
echo 'no'."</br>";
}
//12
$b = strstr('https://code.mu/ru/php/manual/string/strstr/', 'https://');
if( $a == true and $b == true){
echo 'yea'."</br>";
} else {
echo 'no'."</br>";
}
//13
$fb = strstr('dbvlevmr.php', 'php');
if( $fb == true){
echo 'yea'."</br>";
} else {
echo 'no'."</br>";
}
//14
$jp = strstr('dbvlevmr.php', 'php', 'jpg');
if( $jp == true){
echo 'yea'."</br>";
} else {
echo 'no'."</br>";
}
//15
$rym = 'jzdfnvjsdnvldbsu';
$rymp = strlen($rym);
if($rymp > 5){
    $rympp = substr($rym, 1, 5);
    echo $rympp.'...'."</br>";
}else {
    echo $rymp."</br>";
}
?>