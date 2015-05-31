<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * @version 1.0.0
 * @author fredrick.abayie
 */
interface FTPCLIENTINTERFACE {
    
    
    /**
     * Constructor for FTPCLIENTINTERFACE
     */
    public function __construct ( );
    //end of __construct();
    
    
    /**
     * Destructor for FTPCLIENTINTERFACE
     */
//    public function __destruct ( );
    //end of __destruct

    
   /**
     * Function to establish a connection
     * @param String $host Server to connect
     * @param String $username FTP username
     * @param String $password FTP password
     */
    public function establish_connection ( $host, $username, $password, $port = 21 );
    //end of establish_connection($host, $username, $password);
    
    
   /**
     * Function to display list of files in a directory
     * @param String $directory The directory to load files
     */
    public function directory_files ( $directory );
    //end of directory_files($directory);
    
    
}
