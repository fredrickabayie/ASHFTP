<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'FTPCLIENT.php';
session_start();
connect();
function connect () {
$test = new FTPCLIENT();
$test->establish_connection( "cs.ashesi.edu.gh", "fredrick-abayie@cs.ashesi.edu.gh", "16!hEi2As");
//var_dump($test);
$_SESSION['test'] = $test;
}
$test3 = "Working";

//var_dump($test);