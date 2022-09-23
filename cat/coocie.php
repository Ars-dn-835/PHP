<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
    <div class="row">
    <form metohod = 'get' action>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Дата народження Кота</label>
            <input type="date" class="form-control" name="cat_date" id="formGroupExampleInput">
        </div>
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Відправити</button>
    </form>
    </br>
    <?php
        $cat_date = $_GET['cat_date'];
        echo "Кіт ти народився :".$cat_date.'</br>';

        $date2 = "2022-01-22";

        $diff = abs(strtotime($date2) - strtotime($cat_date));

        $years = floor($diff / (360*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diff - $yers * 365*60*6*24 -$months*30*60*60*24)/ (60*60*24));

        printf("Кіт ти вже прожив: "."%d років, %d місяців, %d днів\n", $years, $months, $days);
        echo '</br>';



        // $arr = explode('.', $cat_date);
        //$tm=mktime(0, 0, 0, $arr[1], $arr[0], date('Y'));
        //if($tm<time()) $tm=mktime(0, 0, 0, $arr[1], $arr[0], date('Y')+1);
        //echo intval( ($tm-time())/86400 ).'</be>';
        //str_split($cat_date);
        //$today = date("d.m.y");
        //$cat_dates = $today - $cat_date;
        //echo floor($cat_dates/(60*60*24)).'</br>';



        if(!isset($_COOKIE['name'])) {
            setcookie("name", "Кіт", time() +60*60*24, "/", "", 0);
            setcookie("volume", "1", time() +60*60*24, "/", "", 0);
        }
        else{
            $_COOKIE['volume']=$_COOKIE['volume']+1;
            setcookie("volume", $_COOKIE['volume']);
        }
        echo'Шановний '.$_COOKIE['name'].'</be>';
        echo' Ви відвідали наш сайт: '.$_COOKIE['volume'].'</br>';
    ?> 
</body>
</html>