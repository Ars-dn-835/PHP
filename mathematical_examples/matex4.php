<?php
//http://old.code.mu/tasks/php/base/rabota-s-konstrukciyami-if-else-switch-case-v-php.html
//1
$a = 0;
if($a == 1){
    echo "Так правильно \$a = 1"."</br>";
} else{
    echo "Не правильно \$a = 1"."</br>";
}
if($a == 0){
    echo "Так правильно \$a = 0"."</br>";
} else{
    echo "Не правильно \$a = 0"."</br>";
}
if($a == -3){
    echo "Так правильно \$a = -3"."</br>";
} else{
    echo "Не правильно \$a = -3"."</br>";
}
/*
// можна виввести це через switch???    
    switch ($a){
        case [$a = 1]:
            echo "Так все нравильно \$a = 1"."</br>";
        break;
        case [$a = 0]:
            echo "Так все нравильно \$a = 0"."</br>";
        break;
        case [$a = -3]:
            echo "Так все нравильно \$a = -3"."</br>";
        break;
    }
*/
//2
if($a > 1){
    echo "Так правильно \$a > 1"."</br>";
} else{
    echo "Не правильно \$a > 1"."</br>";
}
if($a > 0){
    echo "Так правильно \$a > 0"."</br>";
} else{
    echo "Не правильно \$a > 0"."</br>";
}
if($a > -3){
    echo "Так правильно \$a > -3"."</br>";
} else{
    echo "Не правильно \$a > -3"."</br>";
}
//3
if($a < 1){
    echo "Так правильно \$a < 1"."</br>";
} else{
    echo "Не правильно \$a < 1"."</br>";
}
if($a < 0){
    echo "Та правильно \$a < 0"."</br>";
} else{
    echo "Не правильно \$a < 0"."</br>";
}
if($a < -3){
    echo "Так правильно \$a < -3"."</br>";
} else{
    echo "Не правильно \$a < -3"."</br>";
}
//4
if($a >= 1){
    echo "Так правильно \$a >= 1"."</br>";
} else{
    echo "Не правильно \$a >= 1"."</br>";
}
if($a >= 0){
    echo "Так правильно \$a >= 0"."</br>";
} else{
    echo "Не правильно \$a >= 0"."</br>";
}
if($a >= -3){
    echo "Так правильно \$a >= -3"."</br>";
} else{
    echo "Не правильно \$a >= -3"."</br>";
}
//5
if($a <= 1){
    echo "Так правильно \$a <= 1"."</br>";
} else{
    echo "Не правильно \$a <= 1"."</br>";
}
if($a <= 0){
    echo "Так правильно \$a <= 0"."</br>";
} else{
    echo "Не правильно \$a <= 0"."</br>";
}
if($a <= -3){
    echo "Так правильно \$a <= -3"."</br>";
} else{
    echo "Не правильно \$a <= -3"."</br>";
}
//6
if($a != 1){
    echo "Так правильно \$a != 1"."</br>";
} else{
    echo "Не правильно \$a != 1"."</br>";
}
if($a != 0){
    echo "Так правильно \$a != 0"."</br>";
} else{
    echo "Не нравильно \$a != 0"."</br>";
}
if($a != -3){
    echo "Так правильно \$a != -3"."</br>";
} else{
    echo "Не правильно \$a != -3"."</br>";
}
//7
if($a == 'test'){
    echo "Так правильно \$a = test"."</br>";
} else{
    echo "Не правильно \$a = test"."</br>";
}
if($a == 'тест'){
    echo "Так правильно \$a = тест"."</br>";
} else{
    echo "Не нравильно \$a = тест"."</br>";
}
if($a == 3){
    echo "Так правильно \$a = 3"."</br>";
} else{
    echo "Не правильно \$a = 3"."</br>";
}
//8
if($a == true){
    echo "Так правильно \$a = true"."</br>";
} else{
    echo "Не правильно \$a = true"."</br>";
}
if($a == 1){
    echo "Так правильно \$a = 1"."</br>";
} else{
    echo "Не нравильно \$a = 1"."</br>";
}
if($a == 3){
    echo "Так правильно \$a = 3"."</br>";
} else{
    echo "Не правильно \$a = 3"."</br>";
}
//13
$var = true;
if($var == true){
    echo "Так правильно \$var = true"."</br>";
} else{
    echo "Не правильно \$var = true"."</br>";
}
if($var == false){
    echo "Так правильно \$var = false"."</br>";
} else{
    echo "Не правильно \$var = false"."</br>";
}
if($var == 1){
    echo "Так правильно \$var = 1"."</br>";
} else{
    echo "Не правильно \$var = 1"."</br>";
}
if($var == 0){
    echo "Так правильно \$var = 0"."</br>";
} else{
    echo "Не правильно \$var = 0"."</br>";
}
//14
$var = true;
if($var == true){
    echo "Не правильно \$var = true"."</br>";
} else{
    echo "Так правильно \$var = true"."</br>";
}
if($var == false){
    echo "Не правильно \$var = false"."</br>";
} else{
    echo "Так правильно \$var = false"."</br>";
}
if($var == 1){
    echo "Не правильно \$var = 1"."</br>";
} else{
    echo "Так правильно \$var = 1"."</br>";
}
if($var == 0){
    echo "Не правильно \$var = 0"."</br>";
} else{
    echo "Так правильно \$var = 0"."</br>";
}
//15
if($a > 0){
    if($a < 5){
        echo 'Вірно \$a > 0 i < 5'."</br>";
    }
}else{
    echo 'Не вірно \$a > 0 i < 5'."</br>";
}
//16
if($a = 0){
    if($a = 2){
        echo 'Вірно \$a = 0 i = 2'."</br>";
    }
}else{
    echo 'Не вірно \$a = 0 i = 2'."</br>";
}
//17
$b = 3;
if($a > 1 and $a = 1 and $b > 3 and $b = 3){
    $c = $a + $b;
    echo $c."Вірно \$a > 1, = 1, \$b > 3, = 3"."</br>";
}else{
    echo "Не вірно \$a > 1, = 1, \$b > 3, = 3"."</br>";
}
//18
if($a > 2 and $a < 11 and $b > 6 and $b = 6 and $b < 14){
    $c = $a + $b;
    echo $c."Вірно \$a > 2, < 11, \$b > 6, = 6, < 14"."</br>";
}else{
    echo "Не вірно \$a > 2, < 11, \$b > 6, = 6, < 14"."</br>";
}
//19
$num = true;
switch ($num) {
    case '1':
        $result = ['Зима'];
        echo 'Зима'."</br>";
    break;
    case '2':
        $result = ['Весна'];
        echo 'Весна'."</br>";
    break;
    case '3':
        $result = ['Літо'];
        echo 'Літо'."</br>";
    break;
    case '4':
        $result = ['Осінь'];
        echo 'Осінь'."</br>";
    break;
}
print_r($result);
?>