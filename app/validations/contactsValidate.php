<?php


function validateInsert()
{
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $name = filter_var($name, FILTER_VALIDATE_REGEXP,array("options" => array("regexp" => "/^([a-z\s])+$/i")));
    
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    
    $phone = filter_var($_POST['phone'], FILTER_VALIDATE_REGEXP,array("options" => array("regexp" => "/^([\d])+$/")));
    
##========================CHECK IF EMAIL ALREADY EXISTS===========================================================##
    $checkEmail = createContacts( $_SESSION['id'] ,$email);
    if(!$name || !$email || !$phone)
    {
        echo "<span class='error-message' > Fill in all fields </span>";

    }elseif($name || $email || $phone)
    {
        if($checkEmail > 0)
        {
            echo "<span class='error-message' > Email already exists </span>";
        }
        else
        {
            $Email = $email;
        }
        if(strlen($phone) < 5)
        {
            echo "<span class='error-message' > Enter a valid phone number!!! ";
        }
        else
        {
            $Phone = $phone;
        }
        if(!empty($Email) && !empty($Phone))
        {
            echo "<span class='success-message' > Added successfully </span>";
            $data = ['name'=>$name, 'email'=>$Email, 'phone'=>$Phone];
            return insert($data);
        }
    }
}   


function validateUpdate()
{
    $id = $_POST['upid'];
    $upName = filter_var($_POST['upName'], FILTER_SANITIZE_STRING);
    $upName = filter_var($upName, FILTER_VALIDATE_REGEXP,
    array("options" => array("regexp" => "/^([a-z\s])+$/i")));

    $upEmail = filter_var($_POST['upEmail'], FILTER_SANITIZE_EMAIL);
    $upEmail = filter_var($upEmail, FILTER_VALIDATE_EMAIL);

    $upPhone = filter_var($_POST['upPhone'], FILTER_VALIDATE_REGEXP,
    array("options" => array("regexp" => "/^([\d\s])+$/i")));
    
    if(empty($upPhone) || empty($upEmail) || empty($upName) )
    {
        echo "<span class='error-message'> Fields must not be empty </span>";
    }else {
        if(!$upPhone || strlen($upPhone) < 5)
        {
            echo "<span class='error-message'> enter a valid phone number </span>";
        }
        if(!$upName)
        {
            echo " <span class='error-message' > enter a valid name </span> ";
        }
        if(!$upEmail)
        {
            echo " <span class='error-message' > enter a valid email </span> ";
        }
        if($upPhone && $upEmail && $upName )
        {
            echo "<span class='success-message' > Updated successfully </span>";
            $data = ['name'=>$upName, 'email'=>$upEmail, 'phone'=>$upPhone, 'id' =>$id];
            return update( $data );
        }    
    }

   
}








###=============== Validate inserted contacts Request===========================##
// function insertValidate($request)
// {   
// ##=================================VALIDATE POST REQUEST=============================================================##
//     $name = filter_var($request['name'], FILTER_SANITIZE_STRING);
//     $name = filter_var($name, FILTER_VALIDATE_REGEXP,array("options" => array("regexp" => "/^([a-z\s])+$/i")));
    
//     $email = filter_var($request['email'], FILTER_SANITIZE_EMAIL);
//     $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    
//     $phone = filter_var($request['phone'], FILTER_VALIDATE_REGEXP,array("options" => array("regexp" => "/^([\d])+$/")));
    
// ##========================CHECK IF EMAIL ALREADY EXISTS===========================================================##
//     $verifyEmail = createContacts($_SESSION['id']);

//     if(!$email)  return $error = "<h2> Empty or invalid fields! </h2>";
    
//     if ( $verifyEmail['contact_email'] === $email)
//     {
//         return $error = "<h2> Email already exists </h2>";
//     }
//     elseif ($verifyEmail['email'] < 1)
//     {
//         $Emailverified = $email;
//     }

//     if(!$phone || strlen($phone) < 5 ) return "<h2> enter a valid phone number!! </h2>";
//     if(!$name) return " <h2> enter a valid name </h2> ";
   
//     return $data = ['name'=>$name, 'email'=>$Emailverified, 'phone'=>$phone];
// }

###=============== Validate Update contacts Request===========================##
// function validateUpdate($update)
// {
//     $name = filter_var($update['name'], FILTER_SANITIZE_STRING);
//     $name = filter_var($name, FILTER_VALIDATE_REGEXP,
//     array("options" => array("regexp" => "/^([a-z\s])+$/i")));

//     $email = filter_var($update['email'], FILTER_SANITIZE_EMAIL);
//     $email = filter_var($email, FILTER_VALIDATE_EMAIL);

//     $phone = filter_var($update['phone'], FILTER_VALIDATE_REGEXP,
//     array("options" => array("regexp" => "/^([\d\s])+$/i")));
    
//     if(!$phone || strlen($phone) < 5) return "<h2> enter a valid phone number!! </h2>";
//     if(!$name) return " <h2> enter a valid name </h2> ";
//     if(!$email) return " <h2> enter a valid email </h2> ";
   
//     $id = $update['id'];
//     return $data = ['name'=>$name, 'email'=>$email, 'phone'=>$phone, 'id' =>$id];
// }