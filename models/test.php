<?php 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'test2.php';

//$test2 = new FTPCLIENT ( );

//session_start();
// $test2 = $_SESSION['test'];
// echo $ftp_conn;
function display(){
$test2 = $_SESSION['test'];
$files = $test2->directory_files ( );
//print_r($files);
var_dump($files);
}
display ( );