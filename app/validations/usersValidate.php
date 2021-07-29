<?php


##===================== Validate register request ====================##
function registerUser()
{
    $firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
    $firstName = filter_var($firstName, FILTER_VALIDATE_REGEXP,array("options" => array("regexp" => "/^([a-z\s])+$/i")));

    $lastName =filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
    $lastName = filter_var($lastName, FILTER_VALIDATE_REGEXP,array("options" => array("regexp" => "/^([a-z\s])+$/i")));

    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    
    
    $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    // Call the function create to verify if email is already existing
    $verifyEmail = create($email);

    //Check if user inputs is empty
    if(empty($email) || empty($password) || empty($firstName) || empty($lastName) || empty($address) || empty($phone))
    {
        $error = "<span class='error-message'> Must be an empty or invalid fields </span>";
        echo json_encode(['status'=>'empty', 'error'=>$error]);
        exit();
    }
    $phone = filter_var($phone, FILTER_VALIDATE_REGEXP,array("options" => array("regexp" => "/^([\d])+$/")));
    // Check if the user enters a valid phone numbers
    if(!$phone)
    {
        $error = "<span class='error-message'> Not a valid phone number <span>";
        echo json_encode(['status'=>'phn', 'error'=>$error]);
        exit();
    }

        $Phone = $phone;

    //Check if email id already existing
    if($verifyEmail)
    {
        $error = "<span class='error-message'> email already exists </span>";
        echo json_encode(['status'=>'eml', 'error'=>$error]);
        exit();
    }
    
        $Email = $email;
    
    //Check if password lenght is greater than 8 characters
    if(strlen($password) < 6)
    {
        $error = "<span class='error-message'> password must be more than 8 characters <span>";
        echo json_encode(['status'=>'pwd', 'error'=>$error]);
        exit();
    }
    
        $hashPass = password_hash($password, PASSWORD_DEFAULT,['cost'=>10]);
        $hashPass = substr($hashPass, 0, 60);
        $Password = $hashPass;   
    
    //Return data to database query
    if($Email && $Password && $Phone)
    {
        $data = ['email' => $Email, 'password' => $Password];
        insertUser( $data );
        
        // Call function create to fetch users ID and set the $_SESSION['id']
        $userData = create( $Email );
        $_SESSION['id'] = $userData['id'];
        
        // Insert user data to user profile
        $data = [ 'id'=>$_SESSION['id'], 'firstName'=>$firstName, 'lastName'=>$lastName, 'address'=>$address, 'phone'=>$Phone];
        createProfile( $data );
        
        echo json_encode(['status'=>'success']);
        exit();
    }    
}
