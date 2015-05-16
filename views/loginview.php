<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
  <html>
    <head>
        <title>ASHFTP</title>
        
        <link rel="icon" href="../images/ashftp-02.png" sizes="50x50">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="../assets/js/jquery/jquery-2.1.3.js"></script>
      <script type="text/javascript" src="../assets/js/materialize/materialize.min.js"></script>
      <script type="text/javascript" src="../controllers/js/login.js"></script>
      
      <style type="text/css">
          body {
              color: #000000;
              /*line-height: 1.3;*/
              /*background: #aa9c77;*/
              background: #4b4b4b;
              font-size: 12px; 
              font-family: Verdana, Arial, Helvetica, sans-serif;
              /*text-align: center*/
          }
          
          
          .btn {
              background: #993233;
          }
          
          .btn:hover {
              background: #993233;
          }
          
          .btn:focus {
              background: #993233;
          }
          
/* 
    label focus color 
*/   .input-field input[type=text]:focus + label {
     color: #993233;
   }
   
   /*
    label underline focus color 
*/   .input-field input[type=text]:focus {
     border-bottom: 1px solid #993233;
     box-shadow: 0 1px 0 0 #993233;
   }
   
   /* 
    label focus color 
*/   .input-field input[type=password]:focus + label {
     color: #993233;
   }
   
   /*
    label underline focus color 
*/   .input-field input[type=password]:focus {
     border-bottom: 1px solid #993233;
     box-shadow: 0 1px 0 0 #993233;
   }
   
/*   .waves-effect .waves- {
       background-color: #993233;
   }*/
      </style>
      
      <!--<div class="container">-->
          
          <div class="row" style="margin:0;padding: 0">
              
        <div class="col m10 s12 l5">
            
            <!--<p class="z-depth-5"></p>-->
            <div class="card" style="margin:0;padding: 0; border-radius: 4px">
                <div class="card-content black-text" style="text-align: center; margin: 0; padding: 15px">
                    <span class="card-title"><img style="width: 96px; height: 76px" src="../images/logo.jpg"></span>
                <div class="row" style="margin:0;padding: 0">
              
              <!--<form class="col s12" name="login">-->
              <!--<div class="row">-->
                  
                <div class="input-field col s12 m12 l6">
                  <!--<i class="mdi-action-perm-identity prefix"></i>-->
                    <input id="username" type="text" class="validate" form="login" required="">
                  <label for="icon_prefix">Username</label>
                </div>
                  
                <div class="input-field col s12 m12 l6">
                  <!--<i class="mdi-communication-vpn-key prefix"></i>-->
                  <input id="password" type="password" class="validate" form="login" required="">
                  <label for="icon_telephone">Password</label>
                </div>
                  
                <div class="input-field col s12 m12 l6">
                  <!--<i class="mdi-action-settings-input-antenna prefix"></i>-->
                  <input id="host" type="text" class="validate" form="login" required="">
                  <label for="icon_telephone">Host</label>
                </div>
                  
                <div class="input-field col s12 m12 l6">
                  <!--<i class="mdi-action-settings-input-hdmi prefix"></i>-->
                    <input id="port" type="text" class="validate" form="login" value="21" required="">
                  <label for="icon_telephone">Port</label>
                </div>
                  
                  <!--<div class="divider" style="background-color: black; width: 20px; height: 20px"></div>-->
                  <!--<div class="input-field col s12">-->
                 
                    <div class="card-action">
                        <!--<div class="input-field">-->
                         <p>
                             <input type="checkbox" id="test5"/>
                            <label for="test5">Remember Details</label>
                          </p>
                        <!--</div>-->
                        <button id="connect" style="top: 10px" class="btn waves-effect waves-light" type="submit" form="login">
                            Connect
                          <!--<i class="mdi-content-send right"></i>-->
                       </button>
                    </div>
                                    
                  <!--</div>-->
                                  
              </div>
                
                 <div class="divider"></div>
                 
                 <div style="margin:0px;padding:0; height: 2px; background: transparent; display: none" class="progress">
                     <div style="color:  #993233; background-color:  #993233" class="indeterminate"></div>
                </div>
                 
                    <div style="text-align: center; font-size: 11px;  line-height: .8em; padding-top: 8px;">
                        <p style="padding-bottom: 2px">Version 1.0.0</p>
                      <p style="padding-top: 2px">©Ashesi University College. All rights reserved.</p>
                    </div>
                 
            <!--</form>-->
              
          </div>
                
                  </div>
        </div>
      </div>
          
      <!--</div>-->
          
               
      <!--</div>-->
      
      <div id="result">
          
      </div>
      
<!--      <script type="text/javascript">
          $(function (){
              $("#connect").click( function (){
                $(".progress").show();
              });
          });
      </script>-->
      
    </body>
  </html>
