<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<link href="style.css" rel="stylesheet" media="all">
<title>ASIChash - BitCoin ASIC Performance, ROI</title>
<?
require_once('bootstrap.php');

define('QUERY_CURRENT_EXCHANGE_RATE', "SELECT * FROM bitcoin_exchange_rate");
define('DATE_DAY_STRING', "M jS, Y");
define('DATE_TIME_STRING', "g:i:s A");

$results = $db->query(QUERY_CURRENT_EXCHANGE_RATE);

?>
<h1>ASIC hash</h1>
<h2>BitCoin, LiteCoin, *coin - ASIC, GPU, CPU Performance; ROI Calculator</h2>
<?
foreach($results as $row){
  var_dump($row);
}
# echo date(DATE_DAY_STRING) . "<br>\n" . date(DATE_TIME_STRING);
?>
<footer>
BitCoin: <a href="bitcoin:1HbQedyYZaw5kAVMDEX9xyS89E5wimKgSK">1HbQedyYZaw5kAVMDEX9xyS89E5wimKgSK</a><br>
<a href="https://cex.io/r/1/jared0x90/0/">Hosted Mining</a>
</footer>
</html>