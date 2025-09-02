<?php

use \App\Controllers\PostsController;

include_once '../app/controllers/postsController.php';

switch ($_GET['posts']):
    case 'show':
        PostsController\showAction($connection, $_GET['id']);
    break;
    default:
        PostsController\indexAction($connection);
    break;
    endswitch;