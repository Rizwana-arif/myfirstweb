<!DOCTYPE html>
<html>
<body>

<?php
$timezone = new DateTimeZone("Europe/Paris");
// Procedural style
print_r(reset(timezone_transitions_get($timezone)));

echo "<br><br>";

// Object oriented style
print_r(reset($timezone->getTransitions()));
?>

</body>
</html>
