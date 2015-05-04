/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Function to get the values in the login input fields
function getValues ( ) {
    //Initializing variables
    var username = "";
    var password = "";
    var host = "";
    var port = "";
    
    username = $ ( "#username" ).val( );
    password = $ ( "#password" ).val( );
    host = $ ( "#host" ).val( );
    port = $ ( "#port" ).val( );
    makeRequest ( username, password, host, port );
}//end of getValues()


//Function to make an ajax request
function makeRequest ( username, password, host, port ) {
    //Initializing variables
    var url = "";
    var object = "";
    
    url = "../controllers/login.php?cmd=1&username="+username+
            "&password="+password+"&host="+host+"&port="+port;
    object = syncAjax ( url );
    
    if ( object.result === 1 ) {
        window.location.replace( "../views/dashboard.html" );
        $("#result").text ( "Connected" );
        console.log ( "Connectd" );
    }
    else {
    console.log ( "Not connected" );
    }
}//end of makeRequest()


//Function to send an ajax request
function syncAjax ( url ) {
    var object = "";
    var result = "";
    
    object = $.ajax ( { url: url, async: false } );
    result = $.parseJSON ( object.responseText );
    return result;
}//end of syncAjax()


//Function called when connect button is clicked
$ (function ( ) {
    $ ( "#connect" ).click ( function ( ev ) {
        ev.preventDefault ( );
        getValues ( );
        console.log ( "Connect Clicked" );
//        var username = $ ( "#username" ).val( );
//        console.log ( getValues( ) );
    });
});


//$(document).ready(function(){
////    $('#modal1').openModal();
//    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
//    $('#modal1').openModal( {
//    dismissible: false, // Modal can be dismissed by clicking outside of the modal
//      opacity: .2, // Opacity of modal background
//      in_duration: 300, // Transition in duration
//      out_duration: 200, // Transition out duration
////      ready: function() { alert('Ready'); }, // Callback for Modal open
////      complete: function() { alert('Closed'); } // Callback for Modal close
//  });
//  });
