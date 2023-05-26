<!DOCTYPE html>
<html>
<body>

<?php
$tz=timezone_open("Asia/Taipei");
$dateTimeOslo=date_create("now",timezone_open("Europe/Oslo"));
echo timezone_offset_get($tz,$dateTimeOslo);
?>

</body>
</html>
