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
            <form class="row row-cols-lg-auto g-3 align-items-center" metohod = 'get' action = "http://site/index.php?page=2">
            <div class="col-12">
                <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                <div class="input-group">
                <div class="input-group-text">@</div>
                <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username" name="username">
                </div>
            </div>

            <div class="col-12">
                <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                <select class="form-select" id="inlineFormSelectPref" name="choose">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                </select>
            </div>

            <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="inlineFormCheck" name="rememberme">
                <label class="form-check-label" for="inlineFormCheck">
                    Remember me
                </label>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
    <?php
        session_start();
        echo 'id='.session_id().'</br>';
        $username['username'] = $_GET['username'];
        $choose['choose'] = $_GET['choose'];
        $rememberme['rememberme'] = $_GET['rememberme'];

        echo $username['username'].'</br>';
        echo $choose['choose'].'</br>';
        echo $rememberme['rememberme'].'</br>';
    ?>
    <a href='index.php?page=2'>Forward</a>
</body>
</html>
