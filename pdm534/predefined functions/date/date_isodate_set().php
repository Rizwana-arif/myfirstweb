<!DOCTYPE html>
<html>
<body>

<?php
$date=date_create();

date_isodate_set($date,2013,5);
echo date_format($date,"Y-m-d") . "<br>";

date_isodate_set($date,2013,5,2);
echo date_format($date,"Y-m-d");
?>

</body>
</html>
