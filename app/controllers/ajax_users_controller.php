<?php
session_start();
require_once "app/model/connect.php";
require_once "app/model/usersQuery.php";
require_once "app/validations/usersValidate.php";


if(isset($_POST['register']))
{
    registerUser();
}