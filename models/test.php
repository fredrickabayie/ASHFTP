<?php 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'ftp.php';

$ftp = new ftp ( );

session_start();
 $ftp_conn = $_SESSION['conn'];
 echo $ftp_conn;

$ftp_folder = $ftp->folders();
print_r ($ftp_folder);