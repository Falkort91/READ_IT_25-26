<?php

use \App\Controllers\UsersController;
include_once '../app/controllers/usersController.php';

//ROUTE users
//PATERN:/users/logout
//CTRL: usersController
//ACTION: logoutAction

switch (isset($_GET['users'])):
    case 'logout':
        UsersController\logoutAction();
    break;
endswitch;