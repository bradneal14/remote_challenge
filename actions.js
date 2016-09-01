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



$.ajax({
  url: "http://remoteprogrammingch-env.us-west-2.elasticbeanstalk.com/proxy.php",
  type: "GET",
  dataType: "json",
  data: {
    command: "Authenticate",
    partnerName: "applicant",
    partnerUserID: "expensifytest@mailinator.com",
    partnerPassword: "d7c3119c6cdab02d68d9",
    partnerUserSecret: 'hire_me'
  },
  success: function(data){
    console.log("in ajax")
    console.log(data);
    console.log(JSON.parse(data), "success");
  },
  failure: function(){
    console.log("failure");
  }
});



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
