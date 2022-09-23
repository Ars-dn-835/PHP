<?php
    echo "SSID:Wind3 HUB-653649"."</br>";
    echo "Пароль:96vgqqzfqiqmp33e"."</br>";
    echo "Безпека:WPA"."</br>";
    echo "</br>";
    echo "</br>";
    echo "</br>";
?>





<?php
//http://old.code.mu/tasks/php/base/rabota-s-konstrukciyami-if-else-switch-case-v-php.html

//1
	$a = 56;
	if ($a == 51) {
		echo 'Yes'."</br>";
	} else {
		echo 'No'."</br>";
	}
//2
$min = 10;
	if ($min >= 0 and $min <= 14) {
		echo 'перша'."</br>";
	}

	if ($min <= 15 and $min >= 30) {
		echo 'друга'."</br>";
	}

	if ($min <= 31 and $min >= 45) {
		echo 'третя'."</br>";
	}

	if ($min >= 46 and $min <= 59) {
		echo 'четверта'."</br>";
	}
//3
$lang = 'ua';
if ($lang == 'ua') {
    $arr = ['колір', 'змія', 'дерево', 2, 4, 6, 8];
}
if ($lang == 'en') {
    $arr = ['color', 'snake', 'tree', 1, 3, 5, 9];
}
var_dump($arr)."</br>";
echo ''."</br>";
// http://old.code.mu/tasks/php/base/rabota-so-strokovymi-funkciyami-v-php.html

//16
$dt = '31-12-2013';
	$arr = explode('-', $dt);
	echo $arr[0].'.'.$arr[1].'.'.$arr[2]."</br>";
//17
$str = 'aaajksbbbfgndsccfcg';
echo str_replace(['a', 'b', 'c'], [1, 2, 3], $str)."</br>";
//18
  $text = "1a2b3c4b5d6e7f8g9h0";
  $allowed = "/[^a-z\\040\\.\\-\/]/i";
  $text=  preg_replace($allowed,"",$text);
  echo $text."</br>";
//19
echo str_replace(['a', 'b', 'c'], [1, 2, 3], 'aaajksbbbfgndsccfcg')."</br>";
//20
echo substr_replace('ksbbbfgndsccfcg', '!!!', 3)."</br>";
//21
echo strpos('abc abc abc', 'b')."</br>";
//22
echo strpos('abc abc abc', 'b', 6)."</br>";
//23
echo strpos('abc abc abc', 'b', 3)."</br>";
//24
echo strpos('aaa aaa aaa aaa aaa', ' ', 4)."</br>";
//25
$rp = "five..";
    switch ($rp){
        case 'five...':
            echo "no"."</br>";
        break;
        case 'esfeawd':
            echo "no"."</br>";
        break;
        case 'esawdfe':
            echo "no"."</br>";
        break;
        case 'ewadsfe':
            echo "no"."</br>";
        break;
        case 'five..':
            echo "yea</br>"."</br>";
        break;
        case 'esawdfe':
            echo "no"."</br>";
        break;   
    }
//26
$trip = "site.ru/folder1/folder2/page.html";
    if ($trip == 'http://site.ru/folder1/folder2/page.html'){
        echo 'Yes'."</br>";
    } else{
        echo 'no'."</br>";
    }
//27
$hps = 'html-css-php';
var_dump (explode('-', $hps))."</br>";
echo ''."</br>";
//28
$arrm = explode('-', 'html-css-php');
echo $arrm[0].','.$arrm[1].','.$arrm[2]."</br>";
//29
$date = '2013-12-31';
$datee = explode('-', $date);
echo $datee[2].'.'.$datee[1].'.'.$datee[0]."</br>";
//30
$cif = '1234567890';
$mas = str_split($cif, 1);
var_dump($mas)."</br>";
echo ''."</br>";
//31
$mass = str_split($cif, 2);
var_dump($mas)."</br>";
echo ''."</br>";
//32  не получається ;(
//$masss = str_split($cif, 2);
//print_r($masss[0].','.$masss[1].','$masss[2].','$masss[3].','$masss[4]);
//echo $masss[0].','.$masss[1].','$masss[2].','$masss[3].','$masss[4]."</br>";
//33
echo rtrim('jsdjkdsfj   ')."</br>";
//34
echo trim('/php/', '/')."</br>";
//35
$slov = 'slova-slova-slova';
$slovv = explode('-', $slov);
echo $slovv[0]." ".$slovv[1]." ".$slovv[2].'.'."</br>";
//36
echo strrev("12345")."</br>";
//37
echo strrev("madam, otto, kayak, nun, level")."</br>";
//38
echo str_shuffle(1234567890)."</br>";
//39
echo str_shuffle('gfntndhthzd')."</br>";
//40
echo number_format(1234567)."</br>";
//41
echo str_repeat('x', 1)."</br>";
echo str_repeat('x', 2)."</br>";
echo str_repeat('x', 3)."</br>";
echo str_repeat('x', 4)."</br>";
echo str_repeat('x', 5)."</br>";
echo str_repeat('x', 6)."</br>";
echo str_repeat('x', 7)."</br>";
echo str_repeat('x', 8)."</br>";
echo str_repeat('x', 9)."</br>";
//42
echo str_repeat('1', 1)."</br>";
echo str_repeat('2', 2)."</br>";
echo str_repeat('3', 3)."</br>";
echo str_repeat('4', 4)."</br>";
echo str_repeat('5', 5)."</br>";
echo str_repeat('6', 6)."</br>";
echo str_repeat('7', 7)."</br>";
echo str_repeat('8', 8)."</br>";
echo str_repeat('9', 9)."</br>";
//43
echo strip_tags ('html, <b>php</b>, js')."</br>";
//44
echo htmlspecialchars('html, <b>php</b>, <i>php</i>, js')."</br>";
//45
echo htmlspecialchars('html, <b>php</b>, js')."</br>";
//46
$or = ['a', 'b', 'c', ' .'];
foreach ($or as $orr){
    $orr = ord($orr);
    print_r($orr)."</br>";
}
//47
echo chr(000)."</br>";
echo chr(127)."</br>";
//48
echo chr(33)."</br>";
//49
echo ord('M')."</br>";
//50
$j = 'j';
echo ord($j)."</br>";
//51
if($j == 'j'){
    echo 'Yes min'."</br>";
}else{
    echo 'No max'."</br>";
}
//52
echo strchr('ab-cd-ef', '-')."</br>";
//53
echo strrchr('ab-cd-ef', '-')."</br>";
//54
echo strchr('ab--cd--ef', '-')."</br>";
//55
$inp = 'var_test_text';
$inpp = explode('_', $inp);
echo $inpp[0].ucfirst($inpp[1]).ucfirst($inpp[2])."</br>";
//56
$m = [40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55];
foreach ($m as $mm){
    $mm."</br>";
    $mm = "$mm"."</br>";
    if (strstr("$mm", "3")){
        echo $mm;
    }
}
?>