<?php

/**
 * author:
 * date:
 * description: A root class for all manage classes. This class communicates with DB
 */
require_once 'ftp.php';


class model extends ftp
{
    
    /*
    * Function to sanitize command sent
    */
//   function sanitizeString ( $val )
//   {
//       $val = stripslashes ( $val );
//       $val = strip_tags ( $val );
//       $val = htmlentities ( $val );
//       return $val;
//   }//end of sanitizeString()
    
//    function model ( ) {
//        echo "constructor";
//        return $this->get_connection();
//    }
    
    public function connection ( ) {
        
        return $this->connect($ftp_server);
    }
    
    
       public function folders ( $directory = '.' ) {
        
       if ( is_array ( $children = ftp_rawlist ( $this->conn, $directory ) ) ) { 
            $items = array(); 

            foreach ($children as $child) { 
                $chunks = preg_split("/\s+/", $child); 
                list($item['rights'], $item['number'], $item['user'], $item['group'], $item['size'], 
                        $item['month'], $item['day'], $item['time']) = $chunks; 
                $item['type'] = $chunks[0]{0} === 'd' ? 'directory' : 'file'; 
                array_splice($chunks, 0, 8); 
                $items[implode(" ", $chunks)] = $item; 
            } 

            return $items; 
        }
    }
   

}

//include_once 'ftp.php';
//
//$ftp = new model ( );
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