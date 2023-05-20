<?php
include ("./connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record</title>
</head>
<body>
    <h1>Student Record</h1>
    <table border=1>
        <tr>
            <th>Student Name</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Phone no</th>
            <th>Picture</th>
            <th>delete</th>
            <th>Update</th>
        </tr>
    <?php
            $sql="SELECT * FROM `registration`";
            $run=mysqli_query($conn,$sql);
            while ($fet=mysqli_fetch_assoc($run)){
    ?>
            <tr>
                <td><?php echo $fet['sname'] ;?></td>
                <td><?php echo $fet['uname'] ;?></td>
                <td><?php echo $fet['email'] ;?></td>
                <td><?php echo $fet['phone'] ;?></td>
                <td><img width=100 height=100 src="<?php echo "./pictures/" . $fet['spic'];?>"  /></td>
                <td><a  href="./single_delete.php?sname=<?php echo $fet['sname'] ?>">Delete</a></td>
                <td><a  href="./singleupdate.php?sname=<?php echo $fet['sname'] ?>">UPDATE</a></td>

            </tr>
    <?php
            }
    ?>
    </table>
</body>
</html>