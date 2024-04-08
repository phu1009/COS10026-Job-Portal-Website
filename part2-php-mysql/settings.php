<?php

    $db_name =''; 
        $server_name ='';
        $username ='';
        $pwd ='';
        $table_name ='';
        $eoi_column ='';
        $ref_column ='';
        $firstname_column ='';
        $lastname_column ='';
        $address_column ='';
        $email_column ='';
        $phone_number_column ='';
        $skills_column ='';
        $other_column = '';

        $host = "localhost";
        $user = "your_db_user"; // your user name
        $pwd = "your_db_password"; // your password
        $sql_db = "your_database"; // your database
        
        $conn = @mysqli_connect($host, $user, $pwd, $sql_db);


?>