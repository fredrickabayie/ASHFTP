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
            load_folders ( );
            break;

        default:
            echo '{"result":0, "message": "Invalid Command Entered"}';
            break;
    }
} else {
     echo '{"result":0, "message": "Command not set"}';
}


function load_folders ( ) {
    session_start ( );
    if ( $_SESSION ['username'] ) {
        require_once '../models/ftp.php';
//        $object = new ftp ( );
//        $host = $_SESSION ['host'];
//        $folder = $object->folders ( );
//        var_dump($folder);
//        print_r($folder);
             $host = $_SESSION['host'];
        $ftp_server = ftp_connect($host);
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $ftp_login = ftp_login($ftp_server, $username, $password);
         $folder = ftp_nlist ( $ftp_server, "." );
        $result =  '{"result":1, "folders": [';
        $i=0;
        foreach ( $folder as $x => $val ) {
            if ( $i != 0 ) {
                $result .= ',';
            }
            $result .= '{"key":"'.$x.'", "folder":"'.$val.'"}';
            $i++;
        }
        $result .= ']}';
        echo $result;
    }
}