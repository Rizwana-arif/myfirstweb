<!DOCTYPE html>
<html>
<body>

<?php
$date=date_create_from_format("j-M-Y","15-Mar-2013");
echo date_format($date,"Y/m/d");
?>

</body>
</html>
