<?php
session_start();
require_once "app/model/connect.php";
require_once "app/model/usersQuery.php";
require_once "app/model/profileQuery.php";
require_once "app/validations/loginValidate.php";


if(isset($_POST['login']))
{
    loginValidate();
}
