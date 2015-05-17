<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../../models/FUNCTIONS.php';

if ( filter_input ( INPUT_GET, 'cmd' ) ) {
    $function = new FUNCTIONS ( );
    $cmd = $function->sanitize_strings ( filter_input ( INPUT_GET, 'cmd' ) );
    
    switch ($cmd) {
        case 1:
            connect ( );
            break;

        default:
            echo '{"result":0, "message": "Invalid Command Entered"}';
            break;
    }
}


/*
 * Function to control connection to server
 */
function connect ( ) {
    if ( filter_input ( INPUT_GET, 'username' ) && filter_input ( INPUT_GET, 'password' ) &&
            filter_input ( INPUT_GET, 'host' ) ) {
        require_once '../../models/FTP.php';
        require_once '../../models/FUNCTIONS.php';
        
        $function = new FUNCTIONS ( );
        $ftp = new FTP ( );
        
        $username = $function->sanitize_strings ( filter_input ( INPUT_GET, 'username' ) );
        $password = $function->sanitize_strings ( filter_input ( INPUT_GET, 'password' ) );
        $host = $function->sanitize_strings ( filter_input ( INPUT_GET, 'host' ) );
//        $port = $model->sanitizeString ( filter_input ( INPUT_GET, 'port' ) );
        
        if ( $ftp->connection ( $host, $username, $password ) ) {
//                sessions ( $host, $username, $password );
                return '{"result":1, "message":"Connected to server"}';                
            }
    } else {
        return '{"result":0, "message":"Variables not set"}';
    }
}//end of establish_connection()


/*
 * Function to store session variables
 */
//function sessions ( $host, $username, $password ) {
////    session_id ( "login" );
////    session_start ( );
//    
//    $_SESSION ['host'] = $host;
//    $_SESSION ['username'] = $username;
//    $_SESSION ['password'] = $password;
//}