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
    }
//if medium or larger
    if ( windowWidth >= 992 ) {
        // set boxes to be same height
        var boxesHeights = $(".boxes").map(function() {
            return $(this).outerHeight(true);
        }).get(); 
        var maxbHeight = Math.max.apply(null, boxesHeights);
        $(".boxes").height(maxbHeight);
    }
// if extra small screen
    if ( windowWidth < 768 ) {
        document.getElementById("main_iframe").height = 225;
        document.getElementById("main_iframe").width = 300;
    }
//Deal with IE versions less than 11
  var IE = (function () {
      "use strict";

      var ret, isTheBrowser,
          actualVersion,
          jscriptMap, jscriptVersion;

      isTheBrowser = false;
      jscriptMap = {
          "5.5": "5.5",
          "5.6": "6",
          "5.7": "7",
          "5.8": "8",
          "9": "9",
          "10": "10"
      };
      jscriptVersion = new Function("/*@cc_on return @_jscript_version; @*/")();

      if (jscriptVersion !== undefined) {
          isTheBrowser = true;
          actualVersion = jscriptMap[jscriptVersion];
      }

      ret = {
          isTheBrowser: isTheBrowser,
          actualVersion: actualVersion
      };

      return ret;
  }());

  if (IE.isTheBrowser) {
    if (IE.actualVersion <= 8) {
      alert("You are using an Internet Explorer version that is currently not supported by this website. Please use a different browser such as Chrome or Firefox, or use Internet Explorer 9 or later.");       
    }
  }
//Fix for IE Mobile with bootstrap
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
  var msViewportStyle = document.createElement('style')
  msViewportStyle.appendChild(
    document.createTextNode(
      '@-ms-viewport{width:auto!important}'
    )
  )
  document.querySelector('head').appendChild(msViewportStyle)
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
