
<?php
 if(isset($_GET['bill_Cal']))
 {
     $consumer_id = @$_GET['cons_idn'];
     $name = @$_GET['con_name'];
     $address = @$_GET['address'];
     $bill_month = @$_GET['bill_month'];
     $due_date = @$_GET['due_date'];
     $l_rent = @$_GET['line_rent'];
     $ll_minutes = @$_GET['L_line'];
     $mob_min = @$_GET['mbl_charges'];
     $int_min = @$_GET['inter_charges'];

     $land_line=3.2;
     $mobile=2.3;
     $international=12.3;
     /*
     $l_charges=350;
     $mbl_charges=250;
     $int_charges=150; */
 
     $l_per_mint=$land_line*$ll_minutes ;
     $mbl_pe_rmint=$mobile* $mob_min;
     $int_per_mint=$international*$int_min;
     $tax_on_call=6%
     $line_rent=450;
     $total=$l_per_mint+$mbl_pe_rmint+$int_per_mint;
     $tax=$total*6/100;
     $total_call_charges=$total+$line_rent+$tax;

   /* echo  $consumer_id;
    echo "<br>";
    echo  $name;
    echo "<br>";
    echo $address;
    echo "<br>";
    echo $bill_month ;
    echo "<br>";
    echo $due_date;
    echo "<br>";
    echo $l_rent;
    echo "<br>";
    echo  $l_per_mint;
    echo "<br>";
    echo   $mbl_pe_rmint;
    echo "<br>";
    echo  $int_per_mint;*/

}?>

<table width="400"  cellpadding="20" cellspacing="20" border="5" align="center" >
    <tr>
        <th>Consumer Name</th>
        <th><?php echo $consumer_id; ?></th>
    </tr>
