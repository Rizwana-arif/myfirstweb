
<?php 
 /*
	$id = @$_GET['identity'];
	$name = @$_GET['con_name'];
	$address = @$_GET['con_address'];
	$month = @$_GET['month'];
	$due_date = @$_GET['due_date'];
	$line_rent = @$_GET['l_rent'];
	$land_line = @$_GET['lline'];
	$mobile = @$_GET['mob'];
	$international = @$_GET['inter'];
	
*/
?>
<?php
/**
$consumer_id = 3333;
$name = "Asad";
$address = "Kareem Park  Lahore";
$bill_month = "FEB 2023";

$due_date = '20 Mar 2023';
$line_rent = 350;


$ll_minutes = 260;
$mob_min = 270;
$int_min = 150 ;  */

if(isset($_GET['bill_Cal']))
{
$consumer_id = @$_GET['identity'];
	$name = @$_GET['con_name'];
	$address = @$_GET['con_address'];
	$bill_month = @$_GET['month'];
	$due_date = @$_GET['due_date'];
	$line_rent = @$_GET['l_rent'];
	$ll_minutes = @$_GET['lline'];
	$mob_min = @$_GET['mob'];
	$int_min = @$_GET['inter'];

$land_line_rate = 2.7;
$mob_call_rate = 3.6;
$int_call_rate = 11.3;

 $call_charges_ll =  $land_line_rate*$ll_minutes;
 $call_charges_mob = $mob_call_rate*$mob_min;
 $call_charges_int = $int_call_rate*$int_min;
 $total_bill = $call_charges_ll+$call_charges_mob+$call_charges_int ;
 $tax_call = $total_bill*7/100;
 $net_bill = $total_bill +  $tax_call +$line_rent;
?>

	<table width="800" cellpadding="20" cellspacing="20" border="5" align="center">
	
		<tr>
			<th>Consumer ID</th>
			<th><?php echo $consumer_id ; ?></th>
			<th>Consumer Name</th>
			<th><?php echo $name ; ?></th>

		</tr>
		<tr>
		<th>Consumer Address</th>
		<th colspan="3"><?php echo $address ; ?></th>
		</tr>
		<tr>
		<th>Bill Month</th>
		<td><?php echo $bill_month ; ?></td>			
		
		<th>Due Date</th> 
		<td><?php echo $due_date ; ?></td>

		</tr>
		
	</table>
<?php } ?>