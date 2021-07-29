<?php

function loginValidate()
{   
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    
    //Fetch data from db users
    $usersData = create($email);
    //CHECK REQUEST
    if( empty($password) || empty($email) )
    {
        $error = "<span class='error-message'> must be an invalid or empty fields </span>";
        echo json_encode([ 'error'=>$error]);
        exit();
    }
    //CHECK IF USER IS REGISTERED
    if(!$usersData)  
    {
        $error = "<span class='error-message'> incorrect email or password </span>";
        echo json_encode([ 'error'=>$error]);
        exit();
    }
    //Verify password
    if(!password_verify( $password, $usersData['password'] ?? $password))
    {
        $error = "<span class='error-message'> incorrect password </span>";
        echo json_encode([ 'error'=>$error]);
        exit();
    }

    $_SESSION['id'] = $usersData['id'];
    
    echo json_encode([ 'success'=>'success']);
    exit();
}

