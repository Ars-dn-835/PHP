<?php
    $int = 5;
    $out = -5;
    
    echo "Hello World"."</br>"; //1

    echo "Hello ";
    echo "World"."</br>"; //2.a
    
    echo "Hello "."\n";
    echo "World"."\n"."</br>"; //2.b

    echo "\"Hello World. \\\"It's my page!\"\\\""."</br>"; //2.c

    echo "<h1>Hello</h1><h3>World</h3> <b></b> <i>am</i> <u> a new PHP developer</u>"."</br>"; //2.d

    echo "<script>alert('Hello World');</script>"."</br>"; //2.e

    echo "input$int output$out"."</br>"; //3
    
    $int +=4;
    echo $int."</br>";
    $int -=6;
    echo $int."</br>";
    $int *=7;
    echo $int."</br>";
    $int /=8;
    echo $int."</br>";
    $int %=9;
    echo $int."</br>"; //4

    echo "input$out output$int"."</br>"; //5


// робота на ураці
$name = 'Arsen';
$age = 21;
$rcy = 17;
echo 'Hello! My name is \' '.$name. '\' '; //1
echo 'I\'m '.$age."</br>"; //2
$sum = $age + $rcy;
echo '\'$age\'+\'$rcy\'='.$sum."</br>"; //3


$name .="I'm";
    echo $name;

?>