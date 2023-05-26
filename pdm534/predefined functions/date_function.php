<?php
echo "<h1>Date function in PHP  </h1>";
//Check if several dates are valid Gregorian dates:
echo "<h2>1:checkdate() </h2>";
var_dump(checkdate(12,31,-400));
echo "<br>";
var_dump(checkdate(2,29,2003));
echo "<br>";
var_dump(checkdate(2,29,2004));
//adds some days, months, years, hours, minutes, and seconds to a date.
echo "<h2>2:date_add() </h2>";
$date=date_create("2013-03-15");
date_add($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"Y-m-d");
//Return a new DateTime object formatted according to the specified format:
echo "<h2>3:date_create_from_format() </h2>";
$date=date_create_from_format("j-M-Y","15-Mar-2013");
echo date_format($date,"Y/m/d");
//Return a new DateTime object, and then format the date:
echo "<h2>4:date_create() </h2>";
$date=date_create("2013-03-15");
echo date_format($date,"Y/m/d");
//Return a new DateTime object, set a new date, and then format the date:
echo "<h2>5:date_date_set() </h2>";
$date=date_create();
date_date_set($date,2020,10,30);
echo date_format($date,"Y/m/d");
//Return the default timezone:
echo "<h2>6:date_default_timezone_get() </h2>";
echo date_default_timezone_get();
//Set the default timezone:
echo "<h2>7:date_default_timezone_set() </h2>";
date_default_timezone_set("Asia/karachi");
echo date_default_timezone_get();
// the difference between two dates:
echo "<h2>8:date_diff() </h2>";
$date1=date_create("2013-03-15");
$date2=date_create("2023-12-12");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
//Return a new DateTime object, and then format the date:
echo "<h2>9:date_format() </h2>";
$date=date_create("2013-03-15");
echo date_format($date,"Y/m/d H:i:s");
//Return the warnings and errors while parsing a date string
echo "<h2>10:date_get_last_errors() </h2>";
date_create("gyuiyiuyui%&&/");
echo "<pre>";
print_r(date_get_last_errors());
echo "</pre>";
//sets up a DateInterval from the relative parts of the string.
echo "<h2>11:date_interval_create_from_date_string() </h2>";
$date = date_create('2019-01-01');
date_add($date, date_interval_create_from_date_string('1 year 35 days'));
echo date_format($date, 'Y-m-d');
//

?>