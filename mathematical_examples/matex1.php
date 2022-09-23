<?php
//Задачи на функции работы с массивами в PHP http://old.code.mu/tasks/php/base/rabota-s-funkciyami-dlya-massivov-v-php.html

//1
echo "Завдіння №1".'</br>';
    $arr = range(2645, 2667);
    echo count($arr).'</br>';
//2
echo "Завдіння №2".'</br>';
    echo end($arr).'</br>';
//3
echo "Завдіння №3".'</br>';
    $result = in_array(3, $arr);
	var_dump($result);
    echo '</br>';
//4
echo "Завдіння №4".'</br>';
    $q = [1, 2, 3, 4, 5];
    echo array_sum($q).'</br>';
//5
echo "Завдіння №5".'</br>';
    echo array_product($q).'</br>';
//6
echo "Завдіння №6".'</br>';
    $w = (array_sum($q) / count($q));
    echo $w.'</br>';
//7
echo "Завдіння №7".'</br>';
    $e = range(1, 100);
    var_dump($e);
    echo '</br>';
//8
echo "Завдіння №8".'</br>';
    $r = range('a', 'z');
    var_dump($r);
    echo '</br>';
//9
echo "Завдіння №9".'</br>';
    echo implode('-', $r).'</br>';
//10
echo "Завдіння №10".'</br>';
    echo array_sum($e).'</br>';
//11
echo "Завдіння №11".'</br>';
    $t = range(1, 10);
    print max ($t) * max ($t);
    echo '</br>';
//12
echo "Завдіння №12".'</br>';
    $y = ['a', 'b', 'c'];
    $u = [1, 2, 3];
    $result = array_merge($y, $u);
    var_dump($result);
    echo '</br>';
//13
echo "Завдіння №13".'</br>';
    for($rt=1;$rt<5;$rt++)
    {
        if($rt % 2)
        {
            echo '</br>';
        }
        else
        {
            echo $rt.'</br>';
        }
    }
//14
echo "Завдіння №14".'</br>';
    $i = [1, 2, 3, 4, 5];
	$results = array_splice($i, -2, 3);
    var_dump($result);
    echo '</br>';
//15
echo "Завдіння №15".'</br>';
    $resultss = array_splice($i, 1, 3);
	var_dump($result);
    echo '</br>';
//16
echo "Завдіння №16".'</br>';
    $resultsss = array_splice($i, 1, 0, ['a', 'b', 'c']);
    var_dump($i);
    echo '</br>';
//17
echo "Завдіння №17".'</br>';
    /*
    foreach ($i as $is){
        $i = $is .+ $o = range('a', 'e');    
    }
    var_dump($i);
    echo '</br>';
    */
//18
echo "Завдіння №18".'</br>';
    $o = ['a'=>1, 'b'=>2, 'c'=>3,];
        
    $resultssss = array_keys($o);
    var_dump($resultssss);
    echo '</br>';
//19
echo "Завдіння №19".'</br>';
    $keys = ['a' , 'b', 'c', 'd', 'e'];
    $elems = [1, 2, 3, 4, 5];

    $resultq = array_combine($keys, $elems);
    var_dump($resultq);
    echo '</br>';
//20
echo "Завдіння №20".'</br>';
    $a = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];
    var_dump(array_flip($a));
    echo '</br>';
//21
echo "Завдіння №21".'</br>';
    var_dump(array_reverse($elems));
    echo '</br>';
//22
echo "Завдіння №22".'</br>';
    $s = ['a', '-', 'b', '-', 'c', '-', 'd'];
    $d = array_search('-', $s);
    echo $d;
    echo '</br>';
//23
echo "Завдіння №23".'</br>';
    $f = array_splice($s, $d);
    var_dump($f);
    echo '</br>';
//24
echo "Завдіння №24".'</br>';
    $g = array_replace($keys, [0=>'!', 3=>'!!!']);
    var_dump($g);
    echo '</br>';
//25
echo "Завдіння №25".'</br>';
    $h = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    sort($h);
    var_dump($h);
    echo '</br>';
//26
echo "Завдіння №26".'</br>';
    $keysi = array_rand($o);
    echo $o[$keysi];
    echo '</br>';
//27
echo "Завдіння №27".'</br>';
    echo array_rand($o);
    echo '</br>';
//28
echo "Завдіння №28".'</br>';
    shuffle($y);
    var_dump($y);
    echo '</br>';
//29
echo "Завдіння №29".'</br>';
    $j = range(1, 25);
    shuffle($j);
    var_dump($j);
    echo '</br>';
//30
echo "Завдіння №30".'</br>';
    shuffle($r);
    var_dump($r);
    echo '</br>';
//31
echo "Завдіння №31".'</br>';
    $k = range('a', 'e');
    shuffle($k);
    var_dump($k);
    echo '</br>';
//32
echo "Завдіння №32".'</br>';
    $l = ['a', 'b', 'c', 'b', 'a'];
    var_dump(array_unique($l));
    echo '</br>';
//33
echo "Завдіння №33".'</br>';
    $z = array_shift($elems).array_pop($elems);
    var_dump($elems);
    echo '</br>';
//34
echo "Завдіння №34".'</br>';
    $c = [1, 2, 3, 4, 5];
    array_unshift($c, '0');
    array_unshift($c, '6');
    var_dump($c);
    echo '</br>';
//35
echo "Завдіння №35".'</br>';
    $m = [1, 2, 3, 4, 5, 6, 7, 8];
    $n = '';
    while (count($m) > 0) {
        $n .= array_shift($m);
        $n .= array_pop($m);
    }
    echo $n;
    echo '</br>';
//36
echo "Завдіння №36".'</br>';
    $Q =  ['a', 'b', 'c'];
    $QS = array_pad($Q, 6, '-');
	var_dump($QS);
    echo '</br>';
//37
echo "Завдіння №37".'</br>';
    $QSS = array_pad($Q, 13, 'x');
    var_dump($QSS);
    echo '</br>';
//38
echo "Завдіння №38".'</br>';
    $W = range(1, 20);
    $WS = array_chunk($W, 5);
    var_dump($WS);
    echo '</br>';
//39
echo "Завдіння №39".'</br>';
    $E = ['a', 'b', 'c', 'b', 'a'];
    var_dump(array_count_values($E));
    echo '</br>';
//40
echo "Завдіння №40".'</br>';
    $R = [1, 2, 3, 4, 5];
    $RS = array_map('sqrt', $R);
    var_dump($RS);
    echo '</br>';
//41
echo "Завдіння №41".'</br>';
    $T = ['<b>php</b>', '<i>html</i>'];
    $TS = array_map('strip_tags', $T);
    var_dump($TS);
    echo '</br>';
//42
echo "Завдіння №42".'</br>';
    $Y = [' a ', ' b ', ' с '];
    $YS = array_map('trim', $Y);
    var_dump($YS);
    echo '</br>';
//43
echo "Завдіння №43".'</br>';
    $U = [1, 2, 3, 4, 5];
    $U2 = [3, 4, 5, 6, 7];
    $US = array_intersect($U, $U2);
    var_dump($US);
    echo '</br>';
//44
echo "Завдіння №44".'</br>';
    $USS = array_diff ($U, $U2);
    var_dump($USS    );
    echo '</br>';
//45
echo "Завдіння №45".'</br>';
    $I = '1234567890';
    $IS = str_split($I);
    echo array_sum($IS).'</br>';
//46
echo "Завдіння №46".'</br>';
    $O = range(1, 26);
    $P = range('a', 'z');
    $OP = array_combine($P, $O);
	var_dump($OP);
    echo '</br>';
//47
echo "Завдіння №47".'</br>';
    $A = range(1, 9);
    $AS = array_chunk($A, 3);
    var_dump($AS);
    echo '</br>';
//48
echo "Завдіння №48".'</br>';
    $R = [1, 2, 4, 4, 5];
    sort($R);
    $RS = count($R) - 2;
    echo $R[$RS];
?>