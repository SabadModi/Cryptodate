<?php
include('./app/database/db.php');
$table = 'users';

if(isset($_POST['submitRegister'])){
    unset($_POST['submitRegister'], $_POST['passwordConf']);

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['email'] = $_POST['email'];

    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $user_id = create($table, $_POST);
    $user = selectOne($table, ['id'=>$user_id]);
    
    header('location: admin/dashboard.php');
}

if(isset($_POST['loginSubmit'])){
    
    $user = selectOne($table, ['email'=>$_POST['email']]);
    if($user && password_verify($_POST['password'], $user['password'])){
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['email'] = $_POST['email'];    
        header('location: admin/dashboard.php');
    }
    

    dd($users);
}



?>