<?
require_once "bootstrap-worker.php";

define('MTGOX_TICKER_URL',  'http://data.mtgox.com/api/2/BTCUSD/money/ticker');
define('MTGOX_STATUS_OK',   'success');
define('SQL_MTGOX_INSERT',  'INSERT INTO bitcoin_exchange_rate (date, usd, source_id, field) VALUES (:date, :usd, :source_id, :field)');
define('HTTP_STATUS_OK',    200);


$response = Requests::get(MTGOX_TICKER_URL);

if($response->success && $response->status_code == HTTP_STATUS_OK){
  $json_response = $response->body;
  $decode = json_decode($json_response);
  if($decode->result == MTGOX_STATUS_OK){
    $mtgox_insert_statement = $db->prepare(SQL_MTGOX_INSERT);
    $mtgox_insert_statement->bindValue(':date', microtime(true));
    $mtgox_insert_statement->bindValue(':usd', (float)$decode->data->avg->value);
    $mtgox_insert_statement->bindValue(':source_id', 1);
    $mtgox_insert_statement->bindValue(':field', 'avg');
    $result = $mtgox_insert_statement->execute();
  }
}else{
  print "Bad status code";
}