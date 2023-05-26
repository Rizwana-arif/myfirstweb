<?php
// total 51
date_default_timezone_set("asia/karachi");
$y=date("Y");
echo "<h3>Years : $y</h3>";
$m=date("M");
echo "<h3>Months : $m</h3>";
$d=date("D");
echo "<h3>Days : $d</h3>";
$h=date("h");
echo "<h3>Hours : $h</h3>";
$i=date("i");
echo "<h3>Minutes : $i</h3>";
$s=date("s");
echo "<h3>Seconds : $s</h3>";

var_dump(checkdate(12,29,2003));
echo "</br>";
$date=date_create("2022-08-20");
date_add($date,date_interval_create_from_date_string("125 days"));
echo date_format($date,"Y-m-d");

echo "</br>";
$date1=date_create("22-09-2001");
$date2=date_create("29-03-2023");
$diff=date_diff($date1,$date2);
echo $diff->format("years : %y , Months : %m , Days : %d");
echo "</br>";
$date=date_create("2023-03-30");
echo date_format($date,"Y/m/d H:i:s");
echo "</br>";
/* generate date automatically count days and weeks 
date_isodate_set(object, year, week, day)
*/
$date=date_create();
date_isodate_set($date,2023,5);
echo date_format($date,"Y-m-d");






?>