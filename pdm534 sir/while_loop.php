<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop Table</title>
</head>
<body>
<table cellpadding="15" cellspacing="15" border="2" style="background-color:black;color:white;" width="50%"  align="center" >

<?php
$tab=6;
$i=30;
{
    ?>
    <tr align="center">
        <td><?php echo $tab; ?></td>
        <td><?php echo "x"; ?></td>
        <td><?php echo $i; ?></td>
        <td><?php echo $tab*$i; ?></td>
     </tr>

<?php
$i++;
}while ($i <= 10):
endwhile;
?>
</table>
</body>
</html>