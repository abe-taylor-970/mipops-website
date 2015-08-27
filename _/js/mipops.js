$(document).ready(function() {
    var windowWidth = $(window).width();
    if ( windowWidth >= 1200 ) {
        // set blog to be same height as video
        var videoHeight = $("#video").outerHeight(true);
        var blogHeight = $("#blog").outerHeight(true);

        var maxvdHeight = Math.max(videoHeight, blogHeight); 
        if ( blogHeight < maxvdHeight ) {
            $("#blog").height(maxvdHeight);
        }
        if ( videoHeight < maxvdHeight ) {
            $("#video").height(maxvdHeight - 30);
        }

        // set boxes to be same height
        var boxesHeights = $(".boxes").map(function() {
            return $(this).outerHeight(true);
        }).get(); 
        maxbHeight = Math.max.apply(null, boxesHeights);
        $(".boxes").height(maxbHeight);
    }
});
