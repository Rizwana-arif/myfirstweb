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
            <th>Father Name</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Mobile no</th>
            <th>Age</th>
            <th>CNIC</th>
            <th>Pictures</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
    <?php
            $sql="SELECT * FROM `student record`";
            $run=mysqli_query($conn,$sql);
            while ($fet=mysqli_fetch_assoc($run)){
    ?>
            <tr>
                <td><?php echo $fet['sname'] ;?></td>
                <td><?php echo $fet['fname'] ;?></td>
                <td><?php echo $fet['sadd'] ;?></td>
                <td><?php echo $fet['sgen'] ;?></td>
                <td><?php echo $fet['smail'] ;?></td>
                <td><?php echo $fet['smob'] ;?></td>
                <td><?php echo $fet['sage'] ;?></td>
                <td><?php echo $fet['snic'] ;?></td>
                <td>
                    <?php
                    $pic=unserialize($fet['spic']);
                    foreach($pic as $p){
                        ?>

                        <img width=100 height=100 src="<?php echo "./pictures/" . $p;?>"  />
                    <?php
                    }
                    ?>
                
                </td>
                <td><a href="./multiupdate.php?sid=<?php echo $fet['sid']; ?>" >Update</a></td>
                <td><a href="./multi_delete.php?sid=<?php echo $fet['sid'] ; ?>">Delete</a></td>
            </tr>
    <?php
            }
    ?>
    </table>
</body>
</html>