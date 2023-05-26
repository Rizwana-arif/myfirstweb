<!DOCTYPE html>
<html>
<body>

<?php
$number = 9;
$str = "Beijing";
$txt = vsprintf("There are %u million bicycles in %s.",array($number,$str));
echo $txt;
?>

</body>
</html>
