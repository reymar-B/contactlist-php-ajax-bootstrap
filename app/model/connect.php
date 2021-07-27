<?php 

    function cons()
    {
        $dsn = 'mysql:host=localhost;dbname=contact_list';

        $username = 'root';

        $password = '';

        try {
            
                $db = new PDO($dsn, $username, $password);

                return $db;
            
            } catch (PDOException $e) {
                
                $error_message = 'Database Error: ';
                
                $error_message .= $e->getMessage();
                
            }

    }