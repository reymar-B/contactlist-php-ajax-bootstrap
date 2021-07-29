<?php

function createContacts( $data, $email )
{
    $db = cons();

    $id = $data;
    
    $query = "select * from contact_lists where users_id =? and contact_email=?";
    
    $statement = $db->prepare( $query );
    
    $statement->execute(array( $id, $email ));
    
    $results = $statement->fetch();

    return $results;
    
}

function show()
{
    $db = cons();
    
    $id = $_SESSION['id'];

    $query = "select * from contact_lists where users_id =? order by id DESC ";
    
    $statement = $db->prepare($query);
    
    $statement->execute(array($id));
    
    $results = $statement->fetchAll();
    if($results > 1) return $results;
    
}

function insert($data)
{
    $name = $data['name'];
    
    $email = $data['email'];
    
    $contactNum = $data['phone'];
    
    $id = $_SESSION['id'];

    $db = cons();
    
    $query = " insert into contact_lists( users_id, contact_name, contact_email, contact_number ) values ( ?, ?, ?, ? )";
    
    $statement = $db->prepare($query);
    
    $results = $statement->execute(array( $id, $name, $email, $contactNum ));
    
    return $results;
}


function edit()
{
    $db = cons();
 
    $id = $_POST['contactId'];

    $query = "select * from contact_lists where id =? ";
 
    $statement = $db->prepare($query);
 
    $statement->execute(array($id));
 
    $results = $statement->fetch();
 
    if($results > 0)
    {
        $contact[0] = $results['id'];
        $contact[1] = $results['contact_name'];
        $contact[2] = $results['contact_email'];
        $contact[3] = $results['contact_number'];
        echo json_encode($contact);
    }
   return false;
}


function update( $data )
{
    $usersId = $_SESSION['id'];

    $name = $data['name'];
    
    $email = $data['email'];
    
    $phone = $data['phone'];
    
    $id = $data['id'];
    
    $db = cons();
    
    $query = " update contact_lists set contact_name=?, contact_email=?, contact_number=? where id=? and users_id = ?";
    
    $statement = $db->prepare($query);
    
    $results = $statement->execute(array($name, $email, $phone, $id,  $usersId ));
    
    return $results;
   
}


function deleteQuery()
{
    $id = $_POST['delid'];
    
    $db = cons();
    
    $query = "delete from contact_lists where id =? ";
    
    $statement = $db->prepare( $query );
    
    $results = $statement->execute(array( $id ));
    
    return $results;
}

