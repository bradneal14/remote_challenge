//
//
// var token = "BEA05F186A92733E182B83C9025CA56FD22DE9560C17DA21F2FD4AE53151FFC85398AA68217F4BDBA8DDBCE45DF58E594D1AEC7E3DD135260FAD7D373E0FCEE8E8AC82F8CD197CEC96AC8E2B537F6C838A84B488978ABFB5273431D0AE9EDC7C70B13386CA7B46A1505F075402BC8AADBE404FCECDAEFFF9315D210041BD82C9"
//
//
// $.ajax({
//       url: "http://www.expensify.com/api",
//
//       data:{
//         command: "GET",
//         authToken: token,
//         returnValueList: "transactionList",
//       },
//       success: this.handleSuccess(),
//     });
//
//
// function handleSuccess(response){
//     console.log(response, "response");
// }
//
// function handleFailure(data){
//   console.log(data, "failure")
// }


// var user = "expensifytest@mailinator.com";
// var pass =  'hire_me';

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

function toggleSignin(){
	console.log("we made it into the function")
	var signin = document.getElementById("signin-page");
	var main = document.getElementById("main-page");
	signin.className = signin.className.replace(/\bvisi\b/,'hide');
	main.className = main.className.replace(/\bhide\b/,'visi');
}

function showSignin(){
  console.log("trying to show sign in")
  var signin = document.getElementById("signin-page");
	var main = document.getElementById("main-page");
  signin.className = signin.className.replace(/\bhide\b/,'visi');
}

function showMainPage(){
  console.log("trying to show main page")
  var signin = document.getElementById("signin-page");
	var main = document.getElementById("main-page");
  main.className = main.className.replace(/\bhide\b/,'visi');
}

function checkStatus(){
  console.log("checking status")
  function processCookie(authToken){
    if (authToken !== ""){
      console.log("we have a token")
      showMainPage();
    } else {
      showSignin();
    }
  }
  var authToken = getCookie(processCookie);
}

checkStatus();





function setCookie(cname, cvalue) {
    console.log("setting cookie");
    var d = new Date();
    d.setTime(d.getTime() + (60*1*1000/2)); //30 seconds
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}



function displayLoginError(){
  //this should grab the area in the top half underneath the expensify logo
  //and put a little error message in there that says invalid username and password
}

function goToMainPage(){
  //this should just be the same as "toggle signin"
}


function authenticateUser(event){
  event.preventDefault();
  var user = document.getElementById("userEmail").value;
  var pass = document.getElementById("userPass").value;
  $.ajax({
    url: "http://localhost:8000/proxy.php",
    type: "GET",
    dataType: "json",
    data: {
      command: "Authenticate",
      partnerName: "applicant",
      partnerUserID: user,
      partnerPassword: "d7c3119c6cdab02d68d9",
      partnerUserSecret: pass
    },
    success: function(data){
      var data = JSON.parse(data);
      console.log(data.jsonCode === 200);
      if (data.jsonCode === 200){
        setCookie("authToken", data.authToken);
        toggleSignin();
      }
      // console.log("in ajax")
      // console.log(data);
      // console.log(JSON.parse(data), "success");
      // this.setCookie();
      // this.goToMainPage();

    },
    failure: function(){
      console.log("failure");
      // this.displayLoginError();
    }
  });
}



$('#signinButton').click(authenticateUser);



//from proxy php
// <?php
//   $hostname = "http://www.expensify.com/api?"
//   $method = 'Get';
//   $command: "Authenticate";
//   $partnerName: "applicant";
//   $partnerUserID: "expensifytest@mailinator.com";
//   $partnerPassword: "d7c3119c6cdab02d68d9";
//   $partnerUserSecret: 'hire_me'
//
//   $url = $hostname . ""
//
//   echo $url
//   // echo json_encode(file_get_contents($url));
//   // echo json_encode(file_get_contents($url));
//   // echo 2;
// ?>

// <!--
// <?php
//   if (isset($_GET)){
//     $hostname = "http://www.expensify.com/api?"
//     $method = 'Get';
//     $command: "Authenticate";
//     $partnerName: "applicant";
//     $partnerUserID: "expensifytest@mailinator.com";
//     $partnerPassword: "d7c3119c6cdab02d68d9";
//     $partnerUserSecret: 'hire_me'
//
//     $url = $hostname . 'command=' . $command . '&' . 'partnerName=' . $partnerName . "&" . 'partnerUserID=' . $partnerUserID .
//     '&' . 'partnerUserSecret=' . $partnerUserSecret . '&' . 'partnerPassword=' . $partnerPassword;
//
//     // echo $url
//     echo json_encode(file_get_contents($url));
//     // echo json_encode(file_get_contents($url));
//     // echo 2;
//   }
// ?> -->
