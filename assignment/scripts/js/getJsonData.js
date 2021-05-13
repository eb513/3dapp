$(document).ready(function(){

    $.getJSON('./model/data.json', function(jsonObj){
        console.log(jsonObj);

        $('#title_home').html('<h2>' + jsonObj.pageTextData[0].title + '</h2>');
        $('#subtitle_home').html('<h3>' + jsonObj.pageTextData[0].subtitle + '</h3>');
        $('#description_home').html('<p>' + jsonObj.pageTextData[0].description + '</p>');
        
        $('#title_left').html('<h2>' + jsonObj.pageTextData[1].title + '</h2>');
        $('#subtitle_left').html('<h3>' + jsonObj.pageTextData[1].subtitle + '</h3>');
        $('#description_left').html('<p>' + jsonObj.pageTextData[1].description + '</p>');
        
        $('#title_centre').html('<h2>' + jsonObj.pageTextData[2].title + '</h2>');
        $('#subtitle_centre').html('<h3>' + jsonObj.pageTextData[2].subtitle + '</h3>');
        $('#description_centre').html('<p>' + jsonObj.pageTextData[2].description + '</p>');

        $('#title_right').html('<h2>' + jsonObj.pageTextData[3].title + '</h2>');
        $('#subtitle_right').html('<h3>' + jsonObj.pageTextData[3].subtitle + '</h3>');
        $('#description_right').html('<p>' + jsonObj.pageTextData[3].description + '</p>');
        
        $('.title_gallery').html('<h2>' + jsonObj.pageTextData[7].galleryTitle + '</h2>');
        $('.description_gallery').html('<p>' + jsonObj.pageTextData[7].galleryDescription + '</p>');

        $('.x3dCameraTitle').html('<h2>' + jsonObj.pageTextData[8].CameraTitle + '</h2>');
        $('.x3dCameraSubtitle').html('<p>' + jsonObj.pageTextData[8].CameraSubtitle + '</p>');
    });

});