<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While Loop</title>
</head>
<body>
<table cellpadding="15" cellspacing="15" border="2" style="background-color:black;color:white;" width="50%"  align="center" >

    
<?php
$tab=8;
$a=30;
 do{ 
?>
     <tr align="center">
        <td><?php echo $tab; ?></td>
        <td><?php echo "x"; ?></td>
        <td><?php echo $a; ?></td>
        <td><?php echo $tab*$a; ?></td>
     </tr>
<?php
    $a++;
}while( $a <=20 )

?>
</table>
</body>
</html>