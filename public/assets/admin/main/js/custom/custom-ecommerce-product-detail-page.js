/*
--------------------------------------
    : Custom - eCommerce Page js :
--------------------------------------
*/
"use strict";
var summernote;
$(document).ready(function() {
    if($('.summernote').length > 0)
        summernote = $('.summernote').summernote({
            height: 200,
            minHeight: null,
            maxHeight: null,
            focus: true ,
            callbacks: {
                onImageUpload: function(image) {
                    uploadImage(image[0]);
                },
                onChange : function (params) {
                    $('input[name="long_desc"]').val(summernote.summernote('code'));
                }
            }
        });
});

function uploadImage(image) {
    var data = new FormData();
    data.append("file", image);
    data.append("userFileType", 'posts');
    $.ajax({
        url: "/FileUpload/upload",
        cache: false,
        contentType: false,
        processData: false,
        data: data,
        type: "POST",
        success: function(fileFullPatha) {
            var new_image = $('<img>').attr('src', fileFullPatha).addClass("img-fluid");
            $('.summernote').summernote("insertNode", new_image[0]);
        },
        error: function(data) {
            console.log(data);
        }
    });
}
// $(document).ready(function() {
//     $('.summernote').summernote({
//         height: 200,
//         minHeight: null,
//         maxHeight: null,
//         focus: true 
//     });
// });