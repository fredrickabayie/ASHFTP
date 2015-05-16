/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//Function to send an ajax request
function syncAjax ( url ) {
    var object = "";
    var result = "";
    
    object = $.ajax ( { url: url, async: false } );
    result = $.parseJSON ( object.responseText );
    return result;
}//end of syncAjax()


$(document).ready ( function ( ) {
    makeRequest ( );
});


//Function to make an ajax request
function makeRequest ( ) {
    //Initializing variables
    var url = "";
    var object = "";
    
    url = "../controllers/php/dashboard.php?cmd=1";
    object = syncAjax ( url );
    var div = "";
    if ( object.result === 1 ) {
        for ( var index in object.folders ) {
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
            div +=              '<span class="card-title activator blue-text text-darken-4">'+object.folders[index].name+'<i class="mdi-navigation-more-vert right"></i></span>';
//            var yo = "object.folders[index].name";
//                    var name = '"'+object.folders[index].name+'"';
            div +=              "<p><a onclick='changeDirectory("+ '"'+object.folders[index].name+'"'+")' class='btn waves-effect waves-light directory'>Open</a></p>";
            div +=            '</div>';
           div +=             '<div class="card-reveal">';
          div +=                '<span class="card-title red-text text-darken-4">Details<i class="mdi-navigation-close right"></i></span>\n\
                                <span><a>Size:</a> '+object.folders[index].size+'</span><br/>';
                      div +=  '<span><a>Date:</a> '+object.folders[index].day+'/'+object.folders[index].month+'</span><br/>';
        div += '<span><a>Time:</a> '+object.folders[index].time+'</span><br/>';
        div += '<span><a>User:</a> '+object.folders[index].user+'</span><br/>';
        div += '<span><a>Group:</a> '+object.folders[index].group+'</span><br/>';
        div += '<span><a>Rights:</a> '+object.folders[index].rights+'</span>';
            div += '</div>';
            div += '</div>';
            div += '</div>';
        }
//        alert (object.folders[index].name);
        $("#currentD").text ( object.folders[index].currentD );
        $("#display").html(div);
    }
    else {
    console.log ( "Not connected" );
    }
}//end of makeRequest()


function make ( d ) {
//    $(this).attr("id");
//    var w = d;
    console.log(d);
    alert(d);
}

//Function to make an ajax request
function changeDirectory ( d ) {
//$(function ( ) {
//    $(".directory").click( function ( ) {
  
//var directory = "";
//    directory = $ ( this ).attr ( "id" ).val();  
    console.log ( d );
    var url = "";
    var object = "";
    
    url = "../controllers/php/dashboard.php?cmd=2&directory="+d;
    object = syncAjax ( url );
    var div = "";
    if ( object.result === 1 ) {
        for ( var index in object.folders ) {
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
            div +=              '<span class="card-title activator blue-text text-darken-4">'+object.folders[index].name+'<i class="mdi-navigation-more-vert right"></i></span>';
            div +=              "<p><a id='"+object.folders[index].name+"' onclick='changeDirectory("+ '"'+object.folders[index].name+'"'+")' class='btn waves-effect waves-light changedirectory'>Open</a></p>";
            div +=            '</div>';
           div +=             '<div class="card-reveal">';
          div +=                '<span class="card-title red-text text-darken-4">Details<i class="mdi-navigation-close right"></i></span>\n\
                                <span><a>Size:</a> '+object.folders[index].size+'</span><br/>';
                      div +=  '<span><a>Date:</a> '+object.folders[index].day+'/'+object.folders[index].month+'</span><br/>';
        div += '<span><a>Time:</a> '+object.folders[index].time+'</span><br/>';
        div += '<span><a>User:</a> '+object.folders[index].user+'</span><br/>';
        div += '<span><a>Group:</a> '+object.folders[index].group+'</span><br/>';
        div += '<span><a>Rights:</a> '+object.folders[index].rights+'</span>';
            div += '</div>';
            div += '</div>';
            div += '</div>';
            
        }
        $("#currentD").text ( object.folders[index].currentD );
        $("#display").html(div);
    }
    else {
    console.log ( "Not connected" );
    }
//      });
}//end of makeRequest()





//Function to make an ajax request
//function changedDirectory ( d ) {
////$(function ( ) {
////    $(".directory").click( function ( ) {
//  
////var directory = "";
////    directory = $ ( this ).attr ( "id" ).val();  
//    console.log ( d );
//    var url = "";
//    var object = "";
//    
//    url = "../controllers/dashboard.php?cmd=3&directory="+d;
//    object = syncAjax ( url );
//    var div = "";
//    if ( object.result === 1 ) {
//        for ( var index in object.folders ) {
//            div += '<div id="display" class="col s2">';
//            div += '<div class="card small">';
//            div += '<div class="card-image waves-effect waves-block waves-light">';
//            div += '<div><p>\n\
//                        <input type="checkbox"/>';
//             div += '<label for="test5"></label>\n\
//                      </p></div>';
//             div += '<span class="activator"><i class="mdi-file-folder large"></i></span>';
//             div +=  '</div>';
//              div +=          '<div id="obi" class="card-content">';
//            div +=              '<span class="card-title activator blue-text text-darken-4">'+object.folders[index].name+'<i class="mdi-navigation-more-vert right"></i></span>';
//            div +=              "<p><a id='"+object.folders[index].name+"' onclick='changeDirectory("+ '"'+object.folders[index].name+'"'+")' class='btn waves-effect waves-light changedirectory'>Open</a></p>";
//            div +=            '</div>';
//           div +=             '<div class="card-reveal">';
//          div +=                '<span class="card-title red-text text-darken-4">Details<i class="mdi-navigation-close right"></i></span>\n\
//                                <span><a>Size:</a> '+object.folders[index].size+'</span><br/>';
//                      div +=  '<span><a>Date:</a> '+object.folders[index].day+'/'+object.folders[index].month+'</span><br/>';
//        div += '<span><a>Time:</a> '+object.folders[index].time+'</span><br/>';
//        div += '<span><a>User:</a> '+object.folders[index].user+'</span><br/>';
//        div += '<span><a>Group:</a> '+object.folders[index].group+'</span><br/>';
//        div += '<span><a>Rights:</a> '+object.folders[index].rights+'</span>';
//            div += '</div>';
//            div += '</div>';
//            div += '</div>';
//            
//        }
//        $("#currentD").text ( object.folders[index].currentD );
//        $("#display").html(div);
//    }
//    else {
//    console.log ( "Not connected" );
//    }
////      });
//}//end of makeRequest()
