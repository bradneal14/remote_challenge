function getCookie(callback) {
    var name = 'authToken=';
    var ca = document.cookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          callback(c.substring(name.length,c.length));
          console.log(c.substring(name.length,c.length));
            return c.substring(name.length,c.length);
        }
    }
    callback("")
    console.log("none");
    return "";
}

function checkStatus(){
  function processCookie(authToken){
    if (authToken !== ""){
      console.log("we have a token");
      // toggleSignin();
    } else {
      console.log("there is no cookie");
    }
  }
  var authToken = getCookie(processCookie);
}


// function setCookie(cname, cvalue) {
//     console.log("setting cookie");
//     var d = new Date();
//     d.setTime(d.getTime() + (60*1*1000/2)); //30 seconds
//     var expires = "expires="+ d.toUTCString();
//     document.cookie = cname + "=" + cvalue + "; " + expires;
// }


checkStatus();
