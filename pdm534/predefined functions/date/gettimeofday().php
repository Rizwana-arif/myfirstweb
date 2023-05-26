<!DOCTYPE html>
<html>
<body>

<?php
// Print the array from gettimeofday()
print_r(gettimeofday());
echo "<br><br>";

// Print the float from gettimeofday()
echo gettimeofday(true) . "<br><br>";

// Return current time; then format the output
$mytime=gettimeofday();
echo "$mytime[sec].$mytime[usec]";

?>

</body>
</html>
