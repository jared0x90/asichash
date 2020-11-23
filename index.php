<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<link href="style.css" rel="stylesheet" media="all">
<title>ASIChash - BitCoin ASIC Performance, ROI</title>
<?
require_once('bootstrap.php');

define('SQL_CURRENT_MTGOX_AVG_EXCHANGE_RATE', "SELECT * FROM bitcoin_exchange_rate WHERE source_id = 1 AND field = 'avg' ORDER BY date DESC LIMIT 1");
define('SQL_CURRENT_MTGOX_HIGH_EXCHANGE_RATE', "SELECT * FROM bitcoin_exchange_rate WHERE source_id = 1 AND field = 'avg' ORDER BY date DESC LIMIT 1");
define('SQL_CURRENT_MTGOX_LOW_EXCHANGE_RATE', "SELECT * FROM bitcoin_exchange_rate WHERE source_id = 1 AND field = 'avg' ORDER BY date DESC LIMIT 1");
define('DATE_DAY_STRING', "M jS, Y");
define('DATE_TIME_STRING', "g:i:s A");

$results = $db->query(SQL_CURRENT_MTGOX_AVG_EXCHANGE_RATE);
$data = $results->fetch(PDO::FETCH_ASSOC);

var_dump($data);
?>
<h1>ASIC hash</h1>
<h2>BitCoin, LiteCoin, *coin - ASIC, GPU, CPU Performance; ROI Calculator</h2>
<footer>
BitCoin: <a href="bitcoin:1HbQedyYZaw5kAVMDEX9xyS89E5wimKgSK">1HbQedyYZaw5kAVMDEX9xyS89E5wimKgSK</a><br>
<a href="https://cex.io/r/1/jwd83/0/">Hosted Mining</a>
</footer>
</html>
