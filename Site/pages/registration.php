<h3>Registration Form</h3>
<?php
if(!isset($_POST['regbtn']))
{
?>
<form action="index.php?page=4" method="post"> 
	<div class="form-group">
    <label for="login">Login:</label>
    <input type="text" class="form-control" name="login">
  </div>
  <div class="form-group">
    <label for="pass1">Password:</label>
    <input type="password" class="form-control" name="pass1">
  </div>
  <div class="form-group">
    <label for="pass2">Confirm Password:</label>
    <input type="password" class="form-control" name="pass2">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email">
  </div>
  <button type="submit" class="btn btn-primary" name="regbtn">Register</button>
</form>
<?php
}
else
{
	if(register($_POST['login'],$_POST['pass1'],$_POST['email']))
	{
		echo "<h3/><span style='color:green;'>New User Added!</span><h3/>";
    echo "<h3/><span style='color:green;'>New User Added!</span><h3/>";
    $login = $_POST['login'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $email = $_POST['email'];
    echo $login." Твоє імя".'</br>';
    echo $pass1." Твій пароль".'</br>';
    echo $email." Твій емаіл".'</br>';
    //або так вивести все по черзі
/*
$name = $_POST['login'];
echo "Hello ". $name;
$pass1 = $_POST['pass1'];
echo "твій пароль  - ". $pass1;
$email = $_POST['email'];
echo "твій email  - ". $email;
	}
}
*/
	}
}
?>
