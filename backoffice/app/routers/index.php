<?php

//ROUTE par défaut:
//PATTERN: /
//CTRL: pageController
//ACTION: dashboard

include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\dashboardAction($connection);