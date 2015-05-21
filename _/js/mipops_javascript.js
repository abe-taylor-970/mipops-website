$( document ).ready(function() {
    var heights = $(".blog_video").map(function() {
        return $(this).height();
    }).get(),

    maxHeight = Math.max.apply(null, heights);

    $(".blog_video").height(maxHeight);
});
