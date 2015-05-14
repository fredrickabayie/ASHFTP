<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <title>ashesiFTP</title>
        <meta charset="UTF-8">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>
         <!--<link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css"/>-->
         <link type="text/css" rel="stylesheet" href="../assets/css/custom.css"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
         <!--<link href="assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
    </head>
    <body style="background-color: whitesmoke">
        <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="../assets/js/jquery-2.1.3.js"></script>
      <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
      <!--<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>-->
      <!--<script type="text/javascript" src="../controllers/dashboard.js"></script>-->
      
      <div style="background-color: lightgray; padding: 0" class="container-fluid">
          
          <div style="background-color: #4b4b4b" class="navbar navbar-inverse">
              <!--<div class="navbar navbar-header">-->
              <a class="navbar navbar-brand" href="#"></a>
              <!--</div>-->
              
          </div>
          
          <div class="container-inner">
              <?php
                require_once 'loginview.php';
              ?>
          </div>
          
          <div class="navbar navbar-inverse-bottom">
              <p>©Ashesi University College. All rights reserved.</p>
              <p>1 University Avenue, Berekuso; PMB CT 3, Cantonments, Accra, Ghana | Phone: +233.302.610.330</p>              
          </div>
          
      </div>
      
      
        <!--<div class="container">-->
<!--        <div id="currentD" class="row"></div>
            <div id="display" class="row">
                
                </div>        -->
            <!--</div>-->
        <!--</div>-->
        
    </body>
</html>