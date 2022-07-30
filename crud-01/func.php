<?php
    include 'config.php';

    $name = $_POST['name'];
    $post = $_POST['post'];
//записує в базу даних дані які водить користувач
    if (isset($_POST['submit'])) {
        $sql = ("INSERT INTO `users`(`name`, `post`) VALUES(?,?)");
        $query = $pdo->prepare($sql);
        $query->execute([$name, $post]);
        $success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Данные успешно отправлены!</strong> Вы можете закрыть это сообщение.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>';
        
    }

// Виводить дані з бази даних

    $sql = $pdo->prepare("SELECT * FROM `users`");
    $sql->execute();
    $result = $sql->fetchAll();

// переписування оновлення даних
    $edit_name = $_POST['edit_name'];
    $edit_post = $_POST['edit_post'];
    $get_id = $_GET['id'];
    if (isset($_POST['edit-submit'])) {
        $sqll = "UPDATE users SET name=?, post=? WHERE id=?";
        $querys = $pdo->prepare($sqll);
        $querys->execute([$edit_name, $edit_post, $get_id]);
        header('Location: '. $_SERVER['HTTP_REFERER']);
    }

// Видаляє дані з бд

    if (isset($_POST['delete_submit'])) {
        $sql = "DELETE FROM users WHERE id=?";
        $query = $pdo->prepare($sql);
        $query->execute([$get_id]);
        header('Location: '. $_SERVER['HTTP_REFERER']);
    }

?>