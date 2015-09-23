$(document).ready(function() {
//Set window heights and widths
    var windowWidth = $(window).width();
//if large screen
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

        var one = "#similar1";
        var two = "#similar2";
        sameHeight(one,two);        

        one = "#similar3";
        two = "#similar4";
        sameHeight(one,two);        

        // set boxes to be same height
        var boxesHeights = $(".boxes").map(function() {
            return $(this).outerHeight(true);
        }).get(); 
        maxbHeight = Math.max.apply(null, boxesHeights);
        $(".boxes").height(maxbHeight);
    }
// if extra small screen
    if ( windowWidth < 768 ) {
        document.getElementById("main_iframe").height = 225;
        document.getElementById("main_iframe").width = 300;
    }
//Deal with IE10
    var isIE10 = false;
    /*@cc_on
        if (/^10/.test(@_jscript_version)) {
            isIE10 = true;
        }
    @*/
//LOOK AT THIS LATER    console.log(isIE10);
    if (isIE10) {
      alert("You are using Internet Explorer 10, which is not currently supported by this website.");       
    }
});

function sameHeight(first, second) {
        var firstHeight = $(first).outerHeight(true);
        var secondHeight = $(second).outerHeight(true);

        var maxfsHeight = Math.max(firstHeight, secondHeight); 
        if ( firstHeight < maxfsHeight ) {
            $(first).height(maxfsHeight);
        }
        if ( secondHeight < maxfsHeight ) {
            $(second).height(maxfsHeight);
        }
}
