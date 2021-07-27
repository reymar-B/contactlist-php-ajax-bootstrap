<?php
session_start();
require_once "app/model/connect.php";
require_once "app/model/contactsQuery.php";
require_once "app/model/usersQuery.php";
require_once "app/validations/contactsValidate.php";

if(isset($_POST['addContacts']))
{
  validateInsert();
}
elseif(isset($_POST['contactId']))
{
  edit();
}
elseif(isset($_POST['upContacts']))
{
  validateUpdate();
}
elseif(isset($_POST['delContacts']))
{
  deleteQuery();
}
elseif(isset($_POST['show']))
{
  require_once "public/view/displayData.php";
}


