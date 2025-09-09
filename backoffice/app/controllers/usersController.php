<?php

namespace App\Controllers\UsersController;

use \PDO;

function logoutAction(){
    //On tue la session
    unset($_SESSION['user']);
    //Redirection
    header('Location: '.PUBLIC_BASE_URL.'users/login-form');
};