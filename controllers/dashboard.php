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
        
        case 2:
            change_directory ( );
            break;
        
        case 3:
            changed_directory ( );
            break;

        default:
            echo '{"result":0, "message": "Invalid Command Entered"}';
            break;
    }
} else {
     echo '{"result":0, "message": "Command not set"}';
}


function load_folders ( ) {
//        require_once '../models/ftp.php';
        $ftp = new model();
        $dir = "/";
         $changeD = $ftp->changeDirectory ( $dir );  
        $folder = $ftp->getFolders ( $dir );        
//        $currentD = $ftp->currentDirectory();
        
        $result =  '{"result":1, "folders": [';
        $i=0;
        foreach ( $folder as $key => $val ) {
            if ( $i != 0 ) {
                $result .= ',';
            }
            $user = substr($folder[$key]['user'], 0, -17 );
            $result .= '{"name":"'.$folder[$key]['name'].'", "rights":"'.$folder[$key]['rights'].'", '
                    . '"time":"'.$folder[$key]['time'].'", "user":"'.$user.'", '
                    . '"group":"'.$folder[$key]['group'].'", "size":"'.$folder[$key]['size'].'", '
                    . '"day":"'.$folder[$key]['day'].'", "month":"'.$folder[$key]['month'].'", "currentD":"'.$changeD.'"}';
            $i++;
        }
        $result .= ']}';
        echo $result;
}



function change_directory ( ) {
//    if ( isset($_REQUEST['directory'])) {
//        $result = '';
        $ftp = new model();
            $dir = $_REQUEST['directory'];
            
            $changeD = $ftp->changeDirectory ( $dir );        
//            $currentD = $ftp->currentDirectory();
            $folder = $ftp->getFolders($changeD);
            
         $result =  '{"result":1, "folders": [';
        $i=0;
        foreach ( $folder as $key => $val ) {
            if ( $i != 0 ) {
                $result .= ',';
            }
            $user = substr($folder[$key]['user'], 0, -17 );
            
            $result .= '{"name":"'.$folder[$key]['name'].'", "rights":"'.$folder[$key]['rights'].'", '
                    . '"time":"'.$folder[$key]['time'].'", "user":"'.$user.'", '
                    . '"group":"'.$folder[$key]['group'].'", "size":"'.$folder[$key]['size'].'", '
                    . '"day":"'.$folder[$key]['day'].'", "month":"'.$folder[$key]['month'].'", "currentD":"'.$changeD.'"}';
            $i++;
        }
        $result .= ']}';
        echo $result;
//    }
}


function changed_directory ( ) {
//    if ( isset($_REQUEST['directory'])) {
//        $result = '';
        $ftp = new model();
            $dir = $_REQUEST['directory'];
            
            $changeD = $ftp->changeDirectory ( $dir );        
//            $currentD = $ftp->currentDirectory();
            $folder = $ftp->getFolders("/hci".$changeD);
            
         $result =  '{"result":1, "folders": [';
        $i=0;
        foreach ( $folder as $key => $val ) {
            if ( $i != 0 ) {
                $result .= ',';
            }
            $user = substr($folder[$key]['user'], 0, -17 );
            
            $result .= '{"name":"'.$folder[$key]['name'].'", "rights":"'.$folder[$key]['rights'].'", '
                    . '"time":"'.$folder[$key]['time'].'", "user":"'.$user.'", '
                    . '"group":"'.$folder[$key]['group'].'", "size":"'.$folder[$key]['size'].'", '
                    . '"day":"'.$folder[$key]['day'].'", "month":"'.$folder[$key]['month'].'", "currentD":"'.$changeD.'"}';
            $i++;
        }
        $result .= ']}';
        echo $result;
//    }
}