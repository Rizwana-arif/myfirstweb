<!DOCTYPE html>
<html>
<body>

<?php
//Calculate the sunrise time for Lisbon, Portugal
//Latitude: 38.4 North
//Longitude: 9 West
//Zenith ~= 90
//offset: +1 GMT

echo("<h2>Lisbon, Portugal</h2>");
echo("Date: " . date("D M d Y"));
echo("<br>Sunrise time: ");
echo(date_sunrise(time(),SUNFUNCS_RET_STRING,38.4,-9,90,1));
echo("<br>Sunset time: ");
echo(date_sunset(time(),SUNFUNCS_RET_STRING,38.4,-9,90,1));
?>

</body>
</html>
