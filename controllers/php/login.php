<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../models/model.php';

if ( filter_input ( INPUT_GET, 'cmd' ) ) {
    $model = new model();
    $cmd = $model->sanitizeString ( filter_input ( INPUT_GET, 'cmd' ) );
    
    switch ($cmd) {
        case 1:
            establish_connection ( );
            break;

        default:
            echo '{"result":0, "message": "Invalid Command Entered"}';
            break;
    }
}

function establish_connection ( ) {    
//    if ( filter_input ( INPUT_GET, 'username' ) && filter_input ( INPUT_GET, 'password' ) &&
//            filter_input ( INPUT_GET, 'host' ) && filter_input ( INPUT_GET, 'port' )  ) {
        
        require_once '../models/ftp.php';
        
        $object = new ftp ( );
        $username = sanitizeString ( filter_input ( INPUT_GET, 'username' ) );
        $password = sanitizeString ( filter_input ( INPUT_GET, 'password' ) );
        $host = sanitizeString ( filter_input ( INPUT_GET, 'host' ) );
        $port = sanitizeString ( filter_input ( INPUT_GET, 'port' ) );
        
        if ( $object->connection ( $host ) ) {
            echo '{"result":1, "message":"Connected to server"}';
        }
         echo '{"result":0, "message":"Failed to connect to server"}';
        
//    }
}