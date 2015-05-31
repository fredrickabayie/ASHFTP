<?php //

/**
 * author:
 * date:
 * description: 
 */

define("FTP_SERVER", 'cs.ashesi.edu.gh');
define("FTP_USERNAME", 'fredrick-abayie@cs.ashesi.edu.gh');
define("FTP_PASSWORD", '16!hEi2As');
define("FTP_PORT", 21);

//require_once 'FTPCLIENTINTERFACE.php';

/*
 * Ftp class
 */
class ftp {

    var $ftp_stream;
    var $result;

    
    /*
     * Constructor
     */
    public function __construct ( ) {
        $this->ftp_stream = false;
        $this->result = false;
    }
      
    

    
    /**
     * Function to connect to server
     */
    function connect ( $host, $username, $password ) {
        $this->ftp_stream = ftp_connect ( $host );
        if ( !$this->link_identifier ) {
            return false;
        }
        if ( !ftp_login ( $this->link_identifier, $username, $password ) ) {
            return false;
        }
        return true;
    }
    
    
    function getFolderNames ( $directory ) {
        if ( is_array ( $children = ftp_nlist ( $this->link_identifier, $directory ) ) ) {
            $items = array ( );
            foreach ( $children as $key => $child ) {
                $items[$key] = $child;
            }
            return $items;
        }
    }
    
    
    function folders ( $directory ) {
//        ftp_chdir ( $this->conn, $directory );
       if ( is_array ( $children = ftp_rawlist ( $this->link_identifier, $directory ) ) ) { 
            $items = array ( ); 

            foreach ( $children as $child ) { 
                
                $chunks = preg_split ( "/\s+/", $child ); 
                
                list ( $item['rights'], $item['number'], $item['user'], $item['group'], $item['size'], 
                        $item['month'], $item['day'], $item['time'], $item['name'] ) = $chunks; 
                
                $item['type'] = $chunks[0]{0} === 'd' ? 'directory' : 'file'; 
                array_splice($chunks, 0, 8); 
                $items[implode(" ", $chunks)] = $item; 
            }
            return $items; 
        }
    }
    
    
    function currentDirectory ( ) {
        if ( $this->link_identifier ) {
            ftp_pwd ( $this->link_identifier );
            return getcwd();
        }
        return false;
    }
    
    
    function chDir ( $directory ) {
        ftp_chdir ( $this->link_identifier, $directory );
        return ftp_pwd ( $this->link_identifier );
    }
    
    
}