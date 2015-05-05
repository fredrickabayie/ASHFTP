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
            div += '<div><p>\n\
                        <input type="checkbox"/>';
             div += '<label for="test5"></label>\n\
                      </p></div>';
             div += '<span class="activator"><i class="mdi-file-folder large"></i></span>';
             div +=  '</div>';
              div +=          '<div id="obi" class="card-content">';
            div +=              '<span class="card-title activator blue-text text-darken-4">'+object.folders[index].folder_name+'<i class="mdi-navigation-more-vert right"></i></span>';
            div +=              '<p><a id="'+object.folders[index].folder_name+'" class="btn waves-effect waves-light directory">Open</a></p>';
            div +=            '</div>';
           div +=             '<div class="card-reveal">';
          div +=                '<span class="card-title blue-text text-darken-4">'+object.folders[index].folder_name+'<i class="mdi-navigation-close right"></i></span>\n\
                                    <a class="collection-item">subfolders<span class="new badge">4</span></a>';
        div += '<p>sdjfsdf</p>';
            div += '</div>';
            div += '</div>';
            div += '</div>';

//            div +=  '<div class="row">\n\
//        div += '<div class="col s2">';
//         div += '<div class="card">\n\
//            <div class="card-image">';
//           div += '<span><i class="mdi-file-folder large"></i></span>\n\
//              <span class="card-title">'+object.folders[index].folder+'</span>';
//           div += '</div>\n\
//            <div class="card-content">';
//             div += '<p>I am a very simple card.</p>\n\
//            </div>';
//            div += '<div class="card-action">\n\
//              <a href="#">Open</a>';
//             div += '<a href="#">Delete</a>\n\
//            </div>';
//          div += '</div>\n\
//        </div>';
//     div += '</div>';
        }
        $("#display").html(div);
    }
    else {
    console.log ( "Not connected" );
    }
}//end of makeRequest()


//Function to make an ajax request
//function changeDirectory ( ) {
$(function ( ) {
    $(".directory").click( function ( ) {
    //Initializing variables
   var divContainer = $ ( this ).parents ( "#display" );
    var icondelete = $ ( this ).children ( "#obi" );
    var directory = $ ( this ).attr ( "id" );  
    console.log ( directory );
    var url = "";
    var object = "";
    
    url = "../controllers/dashboard.php?cmd=2&directory="+directory;
    object = syncAjax ( url );
    var div = "";
    if ( object.result === 1 ) {
        for ( var index in object.folders ) {
//            div += "<p>"+object.folders[index].folder+"</p>";
         div += '<div id="display" class="col s2">';
            div += '<div class="card small">';
            div += '<div class="card-image waves-effect waves-block waves-light">';
            div += '<div><p>\n\
                        <input type="checkbox"/>';
             div += '<label for="test5"></label>\n\
                      </p></div>';
             div += '<span class="activator"><i class="mdi-file-folder large"></i></span>';
             div +=  '</div>';
              div +=          '<div id="obi" class="card-content">';
            div +=              '<span class="card-title activator blue-text text-darken-4">'+object.folders[index].folder+'<i class="mdi-navigation-more-vert right"></i></span>';
            div +=              '<p><a id="'+object.folders[index].folder+'" class="btn waves-effect waves-light directory">Open</a></p>';
            div +=            '</div>';
           div +=             '<div class="card-reveal">';
          div +=                '<span class="card-title blue-text text-darken-4">'+object.folders[index].folder+'<i class="mdi-navigation-close right"></i></span>\n\
                                    <a class="collection-item">subfolders<span class="new badge">4</span></a>';
        div += '<p>sdjfsdf</p>';
            div += '</div>';
            div += '</div>';
            div += '</div>';
            
//            div +=  '<div class="row">\n\
//       div += '<div class="col s2">';
//         div += '<div class="card">\n\
//            <div class="card-image">';
//           div += '<img src="images/sample-1.jpg">\n\
//              <span class="card-title">'+object.folders[index].folder+'</span>';
//           div += '</div>\n\
//            <div class="card-content">';
//             div += '<p>I am a very simple card. I am good at containing small bits of information.</p>\n\
//            </div>';
//            div += '<div class="card-action">\n\
//              <a href="#">This is a link</a>';
//             div += '<a href="#">This is a link</a>\n\
//            </div>';
//          div += '</div>\n\
//        </div>';
//     div += '</div>';
        }
        $("#display").html(div);
    }
    else {
    console.log ( "Not connected" );
    }
      });
});//end of makeRequest()


//Function to make an ajax request
//function changeDirectory ( ) {
$(function ( ) {
    $(".directory2").click( function ( ) {
    //Initializing variables
   var divContainer = $ ( this ).parents ( "#display" );
    var icondelete = $ ( this ).children ( "#obi" );
    var directory = $ ( this ).attr ( "id" );  
    console.log ( directory );
    var url = "";
    var object = "";
    
    url = "../controllers/dashboard.php?cmd=2&directory="+directory;
    object = syncAjax ( url );
    var div = "";
    if ( object.result === 1 ) {
        for ( var index in object.folders ) {
//            div += "<p>"+object.folders[index].folder+"</p>";
         div += '<div id="display" class="col s2">';
            div += '<div class="card small">';
            div += '<div class="card-image waves-effect waves-block waves-light">';
            div += '<div><p>\n\
                        <input type="checkbox"/>';
             div += '<label for="test5"></label>\n\
                      </p></div>';
             div += '<span class="activator"><i class="mdi-file-folder large"></i></span>';
             div +=  '</div>';
              div +=          '<div id="obi" class="card-content">';
            div +=              '<span class="card-title activator blue-text text-darken-4">'+object.folders[index].folder+'<i class="mdi-navigation-more-vert right"></i></span>';
            div +=              '<p><a id="'+object.folders[index].folder+'" class="btn waves-effect waves-light directory">Open</a></p>';
            div +=            '</div>';
           div +=             '<div class="card-reveal">';
          div +=                '<span class="card-title blue-text text-darken-4">'+object.folders[index].folder+'<i class="mdi-navigation-close right"></i></span>\n\
                                    <a class="collection-item">subfolders<span class="new badge">4</span></a>';
        div += '<p>sdjfsdf</p>';
            div += '</div>';
            div += '</div>';
            div += '</div>';

//            div +=  '<div class="row">\n\
//        <div class="col s12 m7">';
//         div += '<div class="card">\n\
//            <div class="card-image">';
//           div += '<img src="images/sample-1.jpg">\n\
//              <span class="card-title">'+object.folders[index].folder+'</span>';
//           div += '</div>\n\
//            <div class="card-content">';
//             div += '<p>I am a very simple card. I am good at containing small bits of information.</p>\n\
//            </div>';
//            div += '<div class="card-action">\n\
//              <a href="#">This is a link</a>';
//             div += '<a href="#">This is a link</a>\n\
//            </div>';
//          div += '</div>\n\
//        </div>';
//     div += '</div>';
        }
        $("#display").html(div);
    }
    else {
    console.log ( "Not connected" );
    }
      });
});//end of makeRequest()

//Function to send an ajax request
function syncAjax ( url ) {
    var object = "";
    var result = "";
    
    object = $.ajax ( { url: url, async: false } );
    result = $.parseJSON ( object.responseText );
    return result;
}//end of syncAjax()