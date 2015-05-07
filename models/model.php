<?php

/**
 * author:
 * date:
 * description: A root class for all manage classes. This class communicates with DB
 */
require_once 'ftp.php';

/*
 * Class model and extends the ftp class
 */
class model extends ftp
{
        
    /*
     * Constructor for the class
     */
    function __construct ( ) {
        return $this->connect ( );
    }
    
    
    /*
     * Destructor for the class
     */
    function __destruct ( ) {
        return $this->close ( );
    }
    
    
    /*
     * Function to change directory
     */
    function getFolders ( $dir ) {
        return $this->folders ( $dir );
    }
    
    
    function changeDirectory ( $directory ) {
        return $this->chDir ( $directory );
    }
    
    /*
    * Function to sanitize command sent
    */
   function sanitizeString ( $val )
   {
       $val = stripslashes ( $val );
       $val = strip_tags ( $val );
       $val = htmlentities ( $val );
       return $val;
   }//end of sanitizeString()
   
    
}

//include_once 'ftp.php';
//
//$ftp = new model ( );
//////$ftp->_construct();
//$dir = ".";
//$fol = $ftp->change($dir);
//print_r($fol);
//foreach ( $fol as $key => $val ) {
//   
//    print_r (" Name ".$fol[$key]['name']. " Rights ".$fol[$key]['rights']);
//}
    
//}

//for ( $i = 0; $i < $folength; $i++ ) {
//    print_r(array($i,$fol['name']));
//}

//var_dump($fol[$i].name);
//echo $fol;



//$ftp_server = "50.63.128.135";
//$ftp_username = "fredrick-abayie@cs.ashesi.edu.gh";
//$ftp_password = "16!hEi2As";
//
//$ftp_conn = $ftp->connect($ftp_server);
//$ftp_result = $ftp->login($ftp_username, $ftp_password);
//$ftp_folder = folders();
//
//session_start();
//$_SESSION['conn'] = $ftp_conn;

//print_r ( $_SESSION )."<br/>";
//print_r ($ftp_folder)."<br/>";
//print_r ($ftp_conn)."<br/>";