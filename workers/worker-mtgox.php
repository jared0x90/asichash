<?
require_once "bootstrap-worker.php";

define('MTGOX_TICKER_URL',  'http://data.mtgox.com/api/2/BTCUSD/money/ticker');
define('HTTP_STATUS_OK',    200);

$response = Requests::get(MTGOX_TICKER_URL);

if($response->success && $response->status_code == HTTP_STATUS_OK){
  $json_response = $response->body;
  print_r($json_response);
}else{
  print "Bad status code";
}