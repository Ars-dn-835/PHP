<?php
// Переміна $name;
// Оператори + - / * < > = == ===;
// Умовні оператори якщо то if else;
// Цикли for ($i=0; $i<10; i++) {}
// Масиви array[];
// Оператор для масивів forerach ($array as $arrays) {} виводиться масив по одному елементу
// Строкові 'текст' "текст";
// Функції function name () {} один раз викликається і потім посторно застосовується name();
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Получаем данные форму</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
      <form action="" method="post">
         <p>Имя: <input name="name" type="text"></p>
         <p>Фамилия: <input name="surname" type="text"></p>
         <p>E-mail: <input name="email" type="text"></p>
         <p>Сообщение: <br /><textarea name="message" cols="30" rows="5"></textarea></p>
         <p><input type='submit' value='Отправить'></p>
      </form>
   </body>
</html>
<?php
   $name = $_POST['name'];
   $surname = $_POST['surname'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   echo $name.'</br>';
   echo $surname.'</br>';
   echo $email.'</br>';
   echo $message.'</br>';

// Перевірка (очистка) на злояякісний код якщо в формі є код з тегами і символами воно їх забереі
function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}

// Функція на провірку довжини строки
function check_length($value = "", $min, $max) {
   $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
   return !$result;
}

// Тепер потрібно прогнати переміні через ці функції
$name = clean($name);
$surname = clean($surname);
$email = clean($email);
$message = clean($message);

if(!empty($name) && !empty($surname) && !empty($email) && !empty($message)) {
   $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL); 

   if(check_length($name, 2, 25) && check_length($surname, 2, 50) && check_length($message, 2, 1000) && $email_validate) {
       echo "Дякую за повідомлення";
   } else {
       echo "Введені дані не коректні";
   }
} else {
   echo "Заповніть пусті поля";
}
?>