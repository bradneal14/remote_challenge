if (isset($_POST)) {
  $apiKey = $_POST['apiKey'];
  $cid = $_POST['cid'];
  $minorRev = 99;

  $url = 'http://api.ean.com/ean-services/rs/hotel/v3/list?' . 'cid='. $cid . '&' . 'minorRev=' . $minorRev . '&' . 'apiKey=' . $apiKey;

  echo json_encode(file_get_contents($url));
 }
