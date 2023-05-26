<!DOCTYPE html>
<html>
<body>

<?php
$date=date_create(null,timezone_open("Europe/Paris"));
$tz=date_timezone_get($date);
echo timezone_name_get($tz);
?>

</body>
</html>
