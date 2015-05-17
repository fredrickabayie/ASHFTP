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
    //put your code here
    
    /**
     * Constructor for FTPCLIENTINTERFACE
     */
    public function __construct ( );
    //end of __construct();
    
    
    /**
     * Destructor for FTPCLIENTINTERFACE
     */
    public function __destruct ( );
    //end of __destruct

    
   /**
     * Function to establish a connection
     * @param String $host Server to connect
     * @param String $username FTP username
     * @param String $password FTP password
     */
    public function establish_connection ( $host, $username, $password );
    //end of establish_connection($host, $username, $password);
    
    
}
