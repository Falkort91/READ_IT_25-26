<?php
namespace App\Controllers\UsersController;

use \PDO;
use \App\Models\UsersModel;

function loginFormAction(){
    global $content, $tilte;
    $title = "User Connection";
    ob_start();
    include '../app/views/users/loginForm.php';
    $content = ob_get_clean();
}

function loginAction(PDO $connection, array $data){
    
    include_once '../app/models/usersModel.php';
    $user= UsersModel\findOneByEmailAndPassword($connection, $data);


    if($user):
        $_SESSION['user']=$user;
        header('Location:'.ADMIN_BASE_URL.'dashboard');
    else:
        header('Location: '.PUBLIC_BASE_URL.'users/login-form');
    endif;
}