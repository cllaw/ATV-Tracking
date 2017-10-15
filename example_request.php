<!-- This is the example_request.php file for INFO263 by GroupDev N -->

<?php //database.php
require_once 'include/config.php';
require_once 'requests.php';
require_once 'database.php';
require_once 'vehicle_query.php';

$url = "https://api.at.govt.nz/v2/public/realtime/vehiclelocations";
# if we had query parametets say, trip_ids, we would include an array of them like below
$trip_ids = array('4001043088-20170918162843_v58.15','4001043088-20170918164808_v58.16','4002080514-20170918162843_v58.15','4002080514-20170918164808_v58.16','4003069332-20170918162843_v58.15','4003069332-20170918164808_v58.16','15095569-20170918164808_v58.16','4005080516-20170918162843_v58.15','4005080516-20170918164808_v58.16','3083131-20170918162843_v58.15','3083131-20170918164808_v58.16','4006080519-20170918162843_v58.15','4006080519-20170918164808_v58.16','15085105-20170918162843_v58.15','15085105-20170918164808_v58.16','4007083197-20170918162843_v58.15','4007083197-20170918164808_v58.16','15096531-20170918164808_v58.16','15087381-20170918162843_v58.15','15087381-20170918164808_v58.16','3083132-20170918162843_v58.15','3083132-20170918164808_v58.16');
$params = array("trip_id" => $trip_ids);
# $params = array();
$results = apiCall($APIKey, $url, $params);
// Tell the browser we are sending back json
header('Content-Type: application/json');
print $results[0];

?>
