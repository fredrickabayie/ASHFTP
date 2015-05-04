<?php

/**
 * author:
 * date:
 * description: A root class for all manage classes. This class communicates with DB
 */

/*
 * Ftp class
 */
class ftp
{
    /*
     * Initializing instance variables
     */
    var $link;
    /* query result resource*/
    var $result;
    
    var $folder;

    
    /*
     * Constructor
     */
    function ftp ( ) {
        $this->link = false;
        $this->result = false;
        $this->folder = false;
    }   
    
    
    /*
     * Function to connect to server
     */
    function connection ( $ftp_server ) {     
        if ( $this->link ) {
            return true;
        }
        $this->link = ftp_connect ( $ftp_server );
        if ( !$this->link ) {
            return false;
        }
        return true;
    }
    
    
    /*
     * Function to login
     */
    function login ( $ftp_username, $ftp_password ) {
        if ( $this->link ) {
            return true;
        }
        $this->result = ftp_login ( $this->link, $ftp_username, $ftp_password );
        if ( !$this->result ) {
            return false;
        }
        return true;
    }
    
    
    function folders ( ) {
//        session_start();
        $host = $_SESSION['host'];
        $ftp_server = ftp_connect($host);
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $ftp_login = ftp_login($ftp_server, $username, $password);
        if ( $this->link ) {
            return true;
        }
        $folder = ftp_nlist ( $ftp_server, "." );
        
        if ( !$this->folder ) {
            return false;
        }
        return print_r ( $folder );
    }

    
    /**
     * Function to close the ftp conection
     */
//    function close_connection ( ) {
//        return ftp_close ( $this->link );
//    }

}