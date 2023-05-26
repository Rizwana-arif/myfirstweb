<!DOCTYPE html>
<html>
<body>

<?php
$tzlist = DateTimeZone::listAbbreviations();
print_r($tzlist["acst"]);
?>

</body>
</html>
