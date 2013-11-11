<?php
    $live = false;    
    $contact_email = 'fco.manah@gmail.com';
    $user = "mfer";
    //echo __DIR__ . '</br>';
    define ('BASE_URI', __DIR__ );
    //echo $_SERVER['HTTP_USER_AGENT'] . " " . $_SERVER['REMOTE_ADDR'] . '</br>';    
    //echo $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . '</br>';
    define ('BASE_URL', "http://" . $_SERVER['SERVER_NAME'] . '/' . $user . '/');
    
    session_start();

// Omit the closing PHP tag to avoid 'headers already sent' errors!