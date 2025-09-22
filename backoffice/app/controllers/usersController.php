<?php

namespace App\Controllers\UsersController;

use \App\Models\UsersModel;
use \PDO;

function logoutAction(){
    //On tue la session
    unset($_SESSION['user']);
    //Redirection
    header('Location: '.PUBLIC_BASE_URL.'users/login-form');
};

function indexAction(PDO $connection){
    include_once '../app/models/usersModel.php';
    $users=UsersModel\findAll($connection);
    global $title, $content;
    $title="Users List";
    ob_start();
    include '../app/views/users/index.php';
    $content=ob_get_clean();
}

function newAction(){
    global $title, $content;
    $title = 'Add a user';
    ob_start();
    include '../app/views/users/new.php';
    $content = ob_get_clean();
}

function createAction(PDO $connection, array $data){
    include_once '../app/models/usersModel.php';
    $reponse = UsersModel\create($connection, $data);
    header('Location: '. ADMIN_BASE_URL .'users');
}