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
    public function __destruct ( ) {
        return ftp_close ( $this->ftp_stream );
    }//end of __destruct()
    
    
    /**
     * Function to establish a connection
     * @param String $host Server to connect
     * @param String $username FTP username
     * @param String $password FTP password
     * @return boolean True if connection is established
     */
    public function establish_connection ( $host, $username, $password ) {
        if ( !$this->ftp_stream = ftp_connect ( $host ) ) {
            return false;
        }
        if ( !ftp_login ( $this->ftp_stream, $username, $password ) ) {
            return false;
        }
        return true;
    }//end of connect($host,$username,$password)
    
    
}//end of FTPCLIENT()
