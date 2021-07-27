<?php
$routes=
[

    'GET'=>
    [

        '' => 'public/view/home.php',
    
        'login' => 'public/view/login.php',

        'logout' => 'app/controllers/logout.php',

    ############# ERROR PAGE  #################
        'error' => 'public/view/errorPage.php',
    
    ],

    'POST'=>
    [
        
    'login' => 'app/controllers/ajax_login_controller.php',

    'contacts' => 'app/controllers/ajax_contacts_controller.php',

    'users' => 'app/controllers/ajax_users_controller.php',

    ],
    
  
];

