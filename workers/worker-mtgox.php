<?
require_once "bootstrap-worker.php";

define('MTGOX_TICKER_URL',  'http://data.mtgox.com/api/2/BTCUSD/money/ticker');
define('MTGOX_STATUS_OK',   'success');
define('HTTP_STATUS_OK',    200);


$response = Requests::get(MTGOX_TICKER_URL);

if($response->success && $response->status_code == HTTP_STATUS_OK){
  $json_response = $response->body;
  $decode = json_decode($json_response);
  if($decode->result == MTGOX_STATUS_OK){
    var_dump($decode);
  }
  
}else{
  print "Bad status code";
}