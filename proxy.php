



<?php
// echo 1;
// echo 2;

// if (preg_match('/\b(https?|ftp):\/\/*/', $url) !== 1) die;
$hostname = "http://www.expensify.com/api?";
$method = 'Get';
$command = $_GET["command"];
$partnerName = $_GET['partnerName'];
$partnerUserID = $_GET['partnerUserID'];
$partnerPassword = $_GET["partnerPassword"];
$partnerUserSecret = $_GET['partnerUserSecret'];

$url = $hostname . 'command=' . $command . '&' . 'partnerName=' . $partnerName . "&" . 'partnerUserID=' . $partnerUserID .
'&' . 'partnerUserSecret=' . $partnerUserSecret . '&' . 'partnerPassword=' . $partnerPassword;
// echo $url;
echo json_encode((file_get_contents($url)));

// if ($_COOKIE['testCookie']){
//   echo $_COOKIE["testCookie"];
//   setcookie("testCookie","test cookie found",time()-1);
// } else {
//   echo "nope";
//   $int = 60 * 60;
//   //set time for one hour (60 seconds times 60 minutes)
//   setcookie("testCookie","test cookie found",time()+$int);
// };
?>
