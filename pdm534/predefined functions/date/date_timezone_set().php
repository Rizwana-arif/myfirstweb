<!DOCTYPE html>
<html>
<body>

<?php
$date=date_create("2013-05-25",timezone_open("Indian/Kerguelen"));
echo date_format($date,"Y-m-d H:i:sP") . "<br>";

date_timezone_set($date,timezone_open("Europe/Paris"));
echo date_format($date,"Y-m-d H:i:sP");
?>

</body>
</html>
