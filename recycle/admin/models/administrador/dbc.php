<?php
    $dbc = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    
    mysqli_set_charset($dbc, 'utf8');
