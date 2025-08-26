<?php

//Route par défaut:
//PATTERN: /
//CTRL: postsController
//Action: index

include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($connection);