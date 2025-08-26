<?php

//Route posts.show:
//URL: /posts/id/titre-du-post
//PATTERN: ?posts=show&id=x


//Route par défaut:
//PATTERN: /
//CTRL: postsController
//Action: index
include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($connection);