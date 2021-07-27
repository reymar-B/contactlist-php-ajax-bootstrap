<?php

require_once "app/model/contactsQuery.php";
require_once "app/model/usersQuery.php";
require_once "app/validations/contactsValidate.php";

// if(isset($_POST['addContacts']))
// {
//     // $addContacts = insertValidate($_POST);
//     // if( is_array($addContacts))
//     // {
//     //     insertQuery( insertValidate($_POST) );
//     //     header("location: / ");
//     // }
//     // elseif (!is_array($addContacts)) 
//     // {
//     //     print_r(insertValidate($_POST));
//     // }

// }
// elseif(isset($_POST['update']))
// {
//     $updtContacts = validateUpdate($_POST);
//     if( is_array($updtContacts))
//     {
//         update( validateUpdate($_POST) );
//         header("location: / ");
//     }
//     elseif (!is_array($updtContacts)) 
//     {
//         print_r( validateUpdate($_POST));
//     }
    
// }
// elseif(isset($_GET['edit']))
// {

//     $data = edit($_GET['edit']) ;
    
//     require "public/view/updateView.php";
    
// }
// elseif(isset($_GET['delete']))
// {

//     deleteQuery($_GET['delete']);
//     header("location: / ");

// }


