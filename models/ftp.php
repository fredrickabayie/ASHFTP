<?php

/**
 * author:
 * date:
 * description: A root class for all manage classes. This class communicates with DB
 */

/*
 * Ftp class
 */
class ftp {
    /*
     * Constructor
     */
    function ftp ( ) {
        $this->conn = false;
        $this->result = false;
    }

    
    /*
     * Function to connect to server
     */
    function connect ( $ftp_server ) {
        $this->conn = ftp_connect ( $ftp_server );
        if ( $this->conn ) {
            return $this->conn;
        }
        return null;
    }
    

    /*
     * Function to login
     */
    function login ( $ftp_username, $ftp_password ) {
//        $connect = get_connection ();
        $this->result = ftp_login ( $this->conn , $ftp_username, $ftp_password );
        if ( $this->result === false ) {
            echo 'Failed to login';
        }
        return $this->result;
    }
    
    
//    function folders ( $directory = '.' ) {
//        
//       if ( is_array ( $children = ftp_rawlist ( $this->conn, $directory ) ) ) { 
//            $items = array(); 
//
//            foreach ($children as $child) { 
//                $chunks = preg_split("/\s+/", $child); 
//                list($item['rights'], $item['number'], $item['user'], $item['group'], $item['size'], 
//                        $item['month'], $item['day'], $item['time']) = $chunks; 
//                $item['type'] = $chunks[0]{0} === 'd' ? 'directory' : 'file'; 
//                array_splice($chunks, 0, 8); 
//                $items[implode(" ", $chunks)] = $item; 
//            } 
//
//            return $items; 
//        }
//    }
    
}