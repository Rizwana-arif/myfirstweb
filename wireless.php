<?php
$land_line=3.2;
$mobile=2.3;
$international=12.3;
$l_charges=35;
$mbl_charges=2;
$int_charges=10;
$l_per_mint=$land_line*$l_charges;
$mbl_pe_rmint=$mobile*$mbl_charges;
$int_per_mint=$international*$int_charges;
$tax_on_call=6%
$line_rent=450;
$total=$l_per_mint+$mbl_pe_rmint+$int_per_mint;
$tax=$total*6/100;
$total_bill=$total+$line_rent+$tax;
$extra_tax=$total*10/100;
$total_bill_extra=$total_bill+$extra_tax;


echo "Consumer_ID: " . 12345668889;
echo "<br>";
echo "Name: " . "RIZWANA";
echo "<br>";
echo "Address:" . "dhudi wala jaranwala road FSD";
echo "<br>";
echo "Bill Month:" . "Febraury";
echo "<br>";
echo "Due Date:" . 20_02_2023;
echo "<br>";
echo "<br>";
echo "<br>";
echo "Land line (per mint) charges:" . $land_line;
echo "<br>";
echo "Mbl (per mint) charges:" . $mobile;
echo "<br>";
echo "international (per mint) charges:" . $international;
echo "<br>";
echo "<br>";
echo "<br>";
echo "land line call minutes: " . $l_charges ;
echo "<br>";
echo "mobile call minutes: " . $mbl_charges;
echo "<br>";
echo "international call minutes: "  . $int_charges;
echo "<br>";
echo "<br>";

echo "Line Rent: " . $line_rent;
echo "<br>";
echo "tax: " . $tax_on_call;
echo "<br>";
echo "Land line charges:" . $l_per_mint;
echo "<br>";
echo "mobile call charges:" . $mbl_pe_rmint;
echo "<br>";
echo "international call charges:" . $int_per_mint;
echo "<br>";
echo "<br>";
echo "<br>";



if ($total_bill>2000){
   echo "total-bill : " . $total_bill_extra ; 
   echo "<br>";}
else {
    echo "Total call charges: " . $total_bill; 
}


?>
 
