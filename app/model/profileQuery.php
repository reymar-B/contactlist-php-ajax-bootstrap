<?php

function createProfile( $data )
{
    $user_id = $data['id'];
    
    $firstName = $data['firstName'];
    
    $lastName = $data['lastName'];

    $address = $data['address'];

    $phone = $data['phone'];
    
    $db = cons();
    
    $query = " insert into users_profile( users_id, first_name, last_name, address, contact_num ) values ( ?, ?, ?, ?, ?)";

    $statement = $db->prepare($query);

    $results = $statement->execute(array( $user_id, $firstName, $lastName, $address, $phone ));
    
    return $results;
}

function showProfile()
{
    
    $db = cons();
 
    $id = $_SESSION['id'];

    $query = "select * from users_profile where users_id =? ";
 
    $statement = $db->prepare($query);
 
    $statement->execute(array($id));
 
    $results = $statement->fetch();

    if($results > 0)
    {
        $profile[0] = $results['users_id'];
        $profile[1] = $results['first_name'];
        $profile[2] = $results['last_name'];
        $profile[3] = $results['address'];
        $profile[4] = $results['contact_num'];
        echo json_encode( $profile );
    }
    return false;
    
}
