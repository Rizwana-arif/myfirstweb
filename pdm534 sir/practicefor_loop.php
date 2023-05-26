<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop page</title>
</head>
<body>
<h1> Even No. </h1>
<table cellpadding="15" cellspacing="15" border="2" style="background-color:black;color:white;" width="50%"  align="center" >
<h1> Even No. </h1>
    <?php
$tab=100;
$i=2;
{
 ?>   
     
   
        <tr align="center">
        <td><?php echo $tab; ?></td>
        <td><?php echo "$i%2==0"; ?></td>
        <td><?php echo $i; ?></td>
        <td><?php echo'('.$i.')'.""; ?></td>
     </tr> 
     <?php
      $i++;
} ( $i =>100 ;)
       

    <?     
    </table>
    </body>
    </html>

echo "<br>";
echo "<h1> ODD No. </h1>";
for ($i=0; $i=>100) { 
    if ($i%2!==0) {
        echo '['.$i.']'."";
    }
}

?>
</table>
</body>
</html>