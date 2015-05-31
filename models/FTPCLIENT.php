<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FTPCLIENT
 * @version 1.0.0
 * @author fredrick.abayie
 */

require_once 'FTPCLIENTINTERFACE.php';


class FTPCLIENT implements FTPCLIENTINTERFACE {
    
    /**
     * Intializing instance/global variables
     * @var type 
     */
    var $ftp_stream;
    var $result;
    
    
    /**
     * Constructor for FTPCLIENT
     */
    function __construct ( ) {
        $this->ftp_stream;
        $this->result;
    }//end of __construct()
    
    
    /**
     * Destructor for FTPCLIENT
     * @return Resource Closing the ftp connection stream
     */
//    public function __destruct ( ) {
//        return ftp_close ( $this->ftp_stream );
//    }//end of __destruct()
    
    
    /**
     * Function to establish a connection
     * @param String $host Server to connect
     * @param String $username FTP username
     * @param String $password FTP password
     * @return boolean True if connection is established
     */
    public function establish_connection ( $host, $username, $password, $port = 21 ) {
        if ( !$this->ftp_stream = ftp_connect ( $host, $port ) ) {
            return false;
        }
        if ( !ftp_login ( $this->ftp_stream, $username, $password ) ) {
            return false;
        }
        if ( !ftp_pasv ($this->ftp_stream, true ) ) {
            return false;
        }
        return true;
    }//end of connect($host,$username,$password)
    
    
    /**
     * Function to display list of files in a directory
     * @param String $directory The directory to load files
     * @return Array The list of available files in the directory
     */
    public function directory_files ( $directory = "/" ) {
         if ( is_array ( $children = ftp_rawlist ( $this->ftp_stream, $directory ) ) ) { 
            $items = array ( ); 
            foreach ( $children as $child ) {                
                $chunks = preg_split ( "/\s+/", $child );                
                list ( $item [ 'rights' ], $item [ 'number' ], $item [ 'user' ], $item [ 'group' ] , $item [ 'size' ], 
                        $item [ 'month' ], $item [ 'day' ], $item [ 'time' ], $item [ 'name' ] ) = $chunks;                 
                $item [ 'type' ] = $chunks [ 0 ] { 0 } === 'd' ? 'directory' : 'file'; 
                array_splice ( $chunks, 0, 8 ); 
                $items [ implode ( " ", $chunks ) ] = $item; 
            }
            return $items; 
        }
    }
    
    
}//end of FTPCLIENT()

//$test = new FTPCLIENT();
//$test->establish_connection( "cs.ashesi.edu.gh", "fredrick-abayie@cs.ashesi.edu.gh", "16!hEi2As");
//session_start();
//$_SESSION['test'] = $test;

//$test2 = $_SESSION['test'];
//$files = $test2->directory_files ( );
//print_r($files);