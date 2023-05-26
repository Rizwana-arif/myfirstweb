<?php
echo "<h1>Basic Information</h1>";
echo "Employ ID :  " . 1234467;
echo "<br>";
echo "Name :  " . "Rizwana";

$city="lhr";
echo "<br>";
echo "City :  " . $city;
echo "<br>";
$scale=7;
if ($scale==1)
{
    $salary=6500;
    echo "B.Pay :  " . $salary;
}
elseif($scale==7)
{
    $salary=18000;
    echo "B.Pay :  " . $salary;
}
elseif($scale==8)
{
    $salary=21000;
    echo "B.Pay :  " . $salary;
}
elseif($scale==9)
{
    $salary=28000;
    echo "B.Pay :  " . $salary;
}
elseif($scale==11)
{
    $salary=38000;
    echo "B.Pay :  " . $salary;
}
echo "<br>";
echo "<h1>Allownces</h1>";
$h_rent=25%
$canvance=12%
$medical=15%
$h_allo=$salary*25/100;
$canv_allo=$salary*12/100;
$med_allo=$salary*15/100;
$wash_allo=1000;


echo "H.Rent :  " . $h_allo ;
echo "<br>";
echo "Canvance :  " . $canv_allo;
echo "<br>";
echo "Medical :  " .  $med_allo;
echo "<br>";
if($scale==1)
{
    echo "Washing : " . $wash_allo;
}
else{
    $wash_allo=0;
    echo "Washing :  " . $wash_allo;
}
echo "<br>";

if($city=="lhr" || $city=="karachi" || $city=="peshawar" || $city=="quetta")
{
    $B_C_A=$salary*10/100;
    echo "B.C.A :  " . $B_C_A;
}
else{
    $B_C_A=0;
    echo "B.C.A :  " . $B_C_A;
}
$total_allo=$h_allo+$canv_allo+$med_allo+$wash_allo+$B_C_A;
echo "<br>";
echo "Total Allownces :  " . $total_allo;
$gross_pay=$salary+$total_allo;
echo "<br>";
echo "Gross Pay :  " . $gross_pay;

echo "<h1>Deductions</h1>";

$income_tax=$salary*10/100;
$gp_fund=$salary*2.5/100;
$union=$salary*1/100;
echo "Income Tax :  " . $income_tax;
echo "<br>";
echo "G.P Fund :  " . $gp_fund;
echo "<br>";
echo "Union :  " . $union;

$total_ded=$income_tax+$gp_fund+$union;
echo "<br>";
echo "Total Deduction  :  " . $total_ded;

$net_pay=$gross_pay-$total_ded;
echo "<br>";
echo "<br>";
echo "<b>Net Pay  :  </b>" . $net_pay;

?>