/*$(document).ready(function(){
    var htmlCode = "<p>Prova<p>";
    var response;
    response = loadImg().split("~");
    if (response != null) {
        for(var i=0; i<response.length; i++){
            htmlCode += '<a href="'+response[i]+'">';
            htmlCode += '<img class="card-img-top img-thumbnail" src="'+response[i]+'"/>';
            htmlCode += '</a>';
        }
    }
    document.getElementById('gallery').innerHTML = htmlCode;
});*/

$(document).ready(function(){
    loadImages("Coca Cola");
});

function loadImages(txt)
{
    // Create a URI for the Flickr web service API call
    var urlFlickr = "http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?";
    $.getJSON(urlFlickr,
        {
            tags: txt,
            tagmode:"all",
            format: "json"
        },
        function(data) {
            var htmlCode = "";
            $.each(data.items, function(i,item){
                htmlCode += '<a href="'+item.media.m+'">';
                htmlCode += '<img class="card-img-top img-thumbnail" src="'+item.media.m+'"/>';
                htmlCode += '</a>';
                if ( i == 3 ){
                    document.getElementById('gallery').innerHTML = htmlCode;
                    return false;
                } 
            });
        }
    );
}