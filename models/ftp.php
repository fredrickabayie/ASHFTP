<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FTP
 *
 * @author fredrick.abayie
 */

require_once 'FTPCLIENT.php';

class FTP extends FTPCLIENT {
    //put your code here
    
    
    /**
     * 
     */
    public function __construct ( ) {
        parent::__construct ( );
    }
    
    
    /**
     * 
     */
//    public function __destruct ( ) {
//        parent::__destruct ( );
//    }
    
    /**
     * 
     * @param type $host
     * @param type $username
     * @param type $password
     * @return type
     */
    public function connection ( $host, $username, $password ) {
        return $this->establish_connection ( $host, $username, $password );
    }
    
    
    public function display_directory_files ( $directory ) {
        return $this->directory_files ( $directory );
    }
}
