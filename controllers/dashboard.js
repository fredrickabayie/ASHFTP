/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready ( function ( ) {
    makeRequest ( );
});


//Function to make an ajax request
function makeRequest ( ) {
    //Initializing variables
    var url = "";
    var object = "";
    
    url = "../controllers/dashboard.php?cmd=1";
    object = syncAjax ( url );
    var div = "";
    if ( object.result === 1 ) {
        for ( var index in object.folders ) {
//            div += "<p>"+object.folders[index].folder+"</p>";
            div += '<div id="display" class="col s2">';
            div += '<div class="card small">';
            div += '<div class="card-image waves-effect waves-block waves-light">';
             div += '<img class="activator" src="../pic.jpg">';
             div +=  '</div>';
              div +=          '<div class="card-content">';
            div +=              '<span class="card-title activator grey-text text-darken-4">'+object.folders[index].folder+'<i class="mdi-navigation-more-vert right"></i></span>';
            div +=              '<p><a href="#">Open</a></p>';
            div +=            '</div>';
           div +=             '<div class="card-reveal">';
          div +=                '<span class="card-title grey-text text-darken-4">'+object.folders[index].folder+'<i class="mdi-navigation-close right"></i></span>';
        div += '<p>Here is some more information about this product that is only revealed once clicked on.</p>';
            div += '</div>';
            div += '</div>';
            div += '</div>';
        }
        $("#display").html(div);
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