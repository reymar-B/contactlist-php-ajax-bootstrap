<?php

require_once "connect.php";


function create( $data )
{
    $email = $data;

    $db = cons();

    $query = "select * from users where email =? ";
                
    $statement = $db->prepare($query);

    $statement->execute(array($email));

    $results = $statement->fetch();

    return $results;
    
}

function insertUser( $data )
{
    $email = $data['email'];
    
    $password = $data['password'];
    
    $db = cons();
    
    $query = " insert into users( email, password ) values ( ?, ?)";

    $statement = $db->prepare($query);

    $results = $statement->execute(array( $email, $password ));
    
    return $results;
}