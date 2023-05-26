<?php


$reg=1000;
$cand1=300;
$cand2=400;
$cand3=200;
$total=$cand1+$cand2+$cand3;
$totalinterest=$total*100/$reg;
echo "registered vots: " . $reg;
echo "<br>";
echo "candidate1: " . $cand1;
echo "<br>";
echo "candidate2: " . $cand2;
echo "<br>";
echo "candidate3: " . $cand3;
echo "<br>";
echo "total votes caste: " . $total;
echo "<br>";
echo "total interest of vote caste: " . $totalinterest;
echo "<br>";
$tv=$total;
echo "total reserved votes: " . $tv;
$cand1int=$cand1*100/$tv;
$cand2int=$cand2*100/$tv;
$cand3int=$cand3*100/$tv;
echo "<br>";
echo "candidate1 interest: " . $cand1int;
echo "<br>";
echo "candidate2 interest: " . $cand2int;
echo "<br>";
echo "candidate3 interest: " . $cand3int;





?>