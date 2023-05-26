<!DOCTYPE html>
<html>
<body>

<?php
$str = "Hello world! وّه";
echo $str . "<br>";
echo convert_cyr_string($str,'w','a'); 
?> 

<p>In this example we convert a string from the character-set "w" (windows-1251) to "a" (x-cp866).</p>

</body>
</html>
