<?php

    // user roles mentioned here.
    // 1. Admin
    // 2. Manager
    // 3. Pharmacists
    // 4. Salesman

    $conn = mysqli_connect(
        'localhost',    //server name
        'root',         //username
        '',             //password
        'e_pharmacy'    //database
    );

    if(!$conn){
        echo 'Connection not successfuly!';
    }

?>