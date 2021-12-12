<?php
/*
 * Fonction pour intégrer les cookies
 */

function tagForCookies(){
   echo '<script>
window.axeptioSettings = {
  clientId: "61b60a0d0c9ed4377d951b63",
  cookiesVersion: "thau-elagage34-base",
};
 
(function(d, s) {
  var t = d.getElementsByTagName(s)[0], e = d.createElement(s);
  e.async = true; e.src = "//static.axept.io/sdk.js";
  t.parentNode.insertBefore(e, t);
})(document, "script");
</script>' ;

}
