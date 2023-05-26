<!DOCTYPE html>
<html>
<body>

<?php
echo(gmstrftime("%B %d %Y, %X %Z",mktime(20,0,0,12,31,98))."<br>");

setlocale(LC_ALL,"hu_HU.UTF8");
echo(gmstrftime("%Y. %B %d. %A. %X %Z"));
?>

</body>
</html>
