<?php

//Route posts.show:
//URL: /posts/id/titre-du-post
//PATTERN: ?posts=show&id=x
if (isset($_GET['posts'])):
    include_once '../app/routers/posts.php';

//Route par défaut:
//PATTERN: /
//CTRL: postsController
//Action: index
else:
include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($connection);
endif;