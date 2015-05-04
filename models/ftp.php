<?php

/**
 * author:
 * date:
 * description: A root class for all manage classes. This class communicates with DB
 */

class ftp
{
    var $link;
    /* query result resource*/
    var $result;

    function ftp ( )
    {
        $this->link=false;
        $this->result = false;
    }   
    
    function connection ( $ftp_server ) {        
        if ( $this->link ) {
            return true;
        }
        
        $this->link = ftp_connect ( $ftp_server );
        
        return true;
    }
    
    function login ( $ftp_username, $ftp_password ) {
        $this->result = ftp_login ( $this->link, $ftp_username, $ftp_password );
        return true;
    }  

    /**
     * Function to close the sql connection
     */
    function close_connection ( ) {
        return ftp_close ( $this->link );
    }

}