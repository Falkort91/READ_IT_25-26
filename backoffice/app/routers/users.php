<?php

use \App\Controllers\UsersController;
include_once '../app/controllers/usersController.php';

switch ($_GET['users']):
    case 'logout':
        UsersController\logoutAction();
        break;

    case 'new':
        UsersController\newAction();
        break;

    case 'create':
        UsersController\createAction($connection, $_POST);
        break;
        
    default:
        UsersController\indexAction($connection);
        break;
endswitch;