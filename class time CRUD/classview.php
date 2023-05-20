<?php
include("./connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Time</title>
</head>
<body>
<h1 align="center">Class Time</h1>
    <table width="900" border="1" align="center" cellspacing="15" cellpadding="15"
        style="background-color:skyblue; color: black;">
        <tr><th>Class Time</th>
        <th>Date</th>
        <th>Update</th>
        <th>Delete</th>
</tr>
<?php 
    $sql="SELECT * FROM `class`";
    $run=mysqli_query($conn,$sql);
    while($fet=mysqli_fetch_assoc($run)){
?>
        <tr align=center>
            <td><?php echo $fet['ctime'] ;?></td>
            <td><?php echo $fet['cdate'] ;?></td>
            <td><a  href="./cupdate.php?ctid=<?php echo $fet['ctid'] ?>">UPDATE</a></td>
            <td><a  href="./cdelete.php?ctid=<?php echo $fet['ctid'] ?>">DELETE</a></td>
        </tr>
<?php
    }
    ?>
</table>
</body>
</html>