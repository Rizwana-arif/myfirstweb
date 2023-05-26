<!DOCTYPE html>
<html>
<body>

<?php
$tz=timezone_open("Asia/Taipei");
print_r(timezone_location_get($tz));
?>

</body>
</html>
