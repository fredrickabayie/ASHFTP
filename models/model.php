<?php

/**
 * author:
 * date:
 * description: A root class for all manage classes. This class communicates with DB
 */

class model
{
    
    /*
    * Function to sanitize command sent
    */
   function sanitizeString ( $val )
   {
       $val = stripslashes ( $val );
       $val = strip_tags ( $val );
       $val = htmlentities ( $val );
       return $val;
   }//end of sanitizeString()
   

}