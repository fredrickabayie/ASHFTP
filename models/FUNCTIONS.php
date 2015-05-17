<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FUNCTIONS
 *
 * @author fredrick.abayie
 */
class FUNCTIONS {
    //put your code here
    
    
    /**
     * Function to sanitize a string(through http requests)
     * @param type $str
     * @return type
     */
    public function sanitize_strings ( $str ) {
        $stripslashes = stripslashes ( $str );
        $strip_tags = strip_tags ( $stripslashes );
        $htmlentites = htmlentities ( $strip_tags );
        return $htmlentites;
    }//end of sanitize_strings($str);
    
}//end of FUNCTIONS
