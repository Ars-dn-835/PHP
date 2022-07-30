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
            <label for="formGroupExampleInput" class="form-label">Ім'я</label>
            <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Ім'я">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">email</label>
            <input type="text" class="form-control" name="email" id="formGroupExampleInput2" placeholder="email">
        </div>
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Відправити</button>
    </form>
    </br>

    <h3>Upload Form</h3>
<?php
if(!isset($_POST['uppbtn']))
{
?> 
<form action="index.php?page=2" method="post" enctype="multipart/form-data"> 
<div class="form-group">
    <label for="myfile">Select file for upload:</label>
    <input type="hidden" name="MAX_FILE_SIZE" value="20000" />
    <input type="file" class="form-control" name="myfile" accept="image/*">
</div>
<button type="submit" class="btn btn-primary" name="uppbtn">Send File</button>
</form>
<?php
}
else
{
   if(isset($_POST['uppbtn']))
   {
      //errors handling
      if($_FILES['myfile']['error'] != 0)
      {
         echo "<h3/><span style='color:red;'>Upload error code: " . $_FILES['myfile']['error'] .
          "</span><h3/>";
         exit();
      }
     //does the file exist on server in temp folder?
     if(is_uploaded_file($_FILES['myfile']['tmp_name'])) 
     {
        //remove the file from temp folder into images folder with origin name
        move_uploaded_file($_FILES['myfile']['tmp_name'],		
		"./images/".$_FILES['myfile']['name']);
        
     }
     echo "<h3/><span style='color:green;'>File Uploaded Successfuly!</span><h3/>";
   }
}	
?>



    <?php
        echo 'ФОРМА НА PHP'.'</br>';
        $name = $_GET['name'];
        $email = $_GET['email'];
        echo $name.'</br>';
        echo $email.'</br>';


        /*
        $arr = range(2645, 2667);
        var_dump($arr);
        echo '</br>';

        //echo array_sum($arr).'</br>';

        //echo count($arr).'</br>';

        $rtx = range(0, 100);


        $a =array();
        foreach($arr as $arrs){
            if ($arrs%2 == 0){
                $a[].=$arrs;
            }
        }

        echo count($a).'</br>';

        for($rt=1;$rt<100;$rt++)
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
        */
    ?>
</body>
</html>