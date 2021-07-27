<?php


##===================== Validate register request ====================##
function registerUser()
{
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    
    $verifyEmail = create($email);
    //Check if user inputs is empty
    if(empty($email) || empty($password))
    {
        $error = "<span class='error-message'> Must be an empty or invalid fields </span>";
        echo json_encode(['status'=>'empty', 'error'=>$error]);
        exit();
    }
    //Check if email id already existing
    if($verifyEmail)
    {
        $error = "<span class='error-message'> email already exists </span>";
        echo json_encode(['status'=>'eml', 'error'=>$error]);
        exit();
    }
    
        $Email = $email;
    
    //Check if password lenght is greater than 8 characters
    if(strlen($password) < 2)
    {
        $error = "<span class='error-message'> password must be more than 8 characters <span>";
        echo json_encode(['status'=>'pwd', 'error'=>$error]);
        exit();
    }
    
        $hashPass = password_hash($password, PASSWORD_DEFAULT,['cost'=>10]);
        $hashPass = substr($hashPass, 0, 60);
        $Password = $hashPass;   
    
    //Return data to database query
    if($Email && $Password)
    {
        $data = [ 'email' => $Email, 'password' => $Password];
        insertUser( $data );
        $userData = create($Email);
        $_SESSION['id'] = $userData['id'];
        
        echo json_encode(['status'=>'success']);
        exit();
    }    
}
