$(document).ready(function() {
    // set blog to be same height as video
    var videoHeight = $("#video").outerHeight(true);
    var blogHeight = $("#blog").outerHeight(true);
    var maxvdHeight = Math.max(videoHeight, blogHeight); 
    $("#blog").height(maxvdHeight);
    $("#video").height(maxvdHeight);
    // set boxes to be same height
    var boxesHeights = $(".boxes").map(function() {
        return $(this).outerHeight(true);
    }).get(); 

    maxbHeight = Math.max.apply(null, boxesHeights);

    $(".boxes").height(maxbHeight);

});
