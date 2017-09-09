$ (document).ready(function() {
  fixIframe();
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
})

window.onresize = fixIframe(); 

function fixIframe() {
  //Set window width
    var windowWidth = $(window).width();
  // if extra small screen
    if ( windowWidth < 544 ) {
        document.getElementById("main_iframe").height = 300;
    }
}
