<?php
if(isset ($_GET['users'])):

include_once '../app/routers/users.php';

else:
//ROUTE par défaut:
//PATTERN: /
//CTRL: pageController
//ACTION: dashboard
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\dashboardAction($connection);

endif;