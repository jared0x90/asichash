<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<link href="style.css" rel="stylesheet" media="all">
<title>ASIChash - BitCoin ASIC Performance, ROI</title>
<?php
define('QUERY_CURRENT_EXCHANGE_RATE', "SELECT * FROM bitcoin_exchange_rate");
define('DATE_DAY_STRING', "M jS, Y");
define('DATE_TIME_STRING', "g:i:s A");
# date_default_timezone_set('America/New_York');
date_default_timezone_set('UTC');





$db = new PDO('sqlite:asic.sqlite');
$results = $db->query(QUERY_CURRENT_EXCHANGE_RATE);
foreach($results as $row){
    # var_dump($row);
}
?>
<h1>ASIC hash</h1>
<h2>BitCoin ASIC Performance, ROI Calculator</h2>
<?php
echo date(DATE_DAY_STRING) . "<br>\n" . date(DATE_TIME_STRING);

?>
<footer>
BitCoin: <a href="bitcoin:1HbQedyYZaw5kAVMDEX9xyS89E5wimKgSK">1HbQedyYZaw5kAVMDEX9xyS89E5wimKgSK</a><br>
<a href="https://cex.io/r/1/jared0x90/0/">Hosted Mining</a>
</footer>
</html>