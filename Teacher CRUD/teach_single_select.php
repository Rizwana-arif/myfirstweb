<?php 
include ("./connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers record</title>
    <style>
        table {
            
            border-collapse: collapse;
            margin-left: 50px;
            font-size: 0.9em;
            min-width: 600px;
            border-radius: 15px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px #d6b5b5;
            }
            table thead tr {
            background-color: rgb(214, 114, 97);
            color: white;
            text-align: left;
            font-weight: bold;
        }
        table th,
        table td{
            padding: 15px 20px;
        }
        .btn , .btn2{
            background :  skyblue;
            color : darkred;
            font-size : 1.2em;
            padding : 5px 30px;
        }
       .btn:hover{
        background : darkred;
        color : #fff;
       }
       .btn2:hover{
        background : green;
        color : #fff;
       }
       </style>
</head>
<body>
    <h1 align=center>Our Respected Teachers</h1>
    <table border=2px align=center>
            <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>First name</th>
                    <th>Last Name</th>
                    <th>Qualification</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Experience</th>
                    <th>Picture</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
<?php
                $sql="SELECT * FROM `teac-rec-single` ";
                $run=mysqli_query($conn,$sql);
                while($fet=mysqli_fetch_assoc($run)){
?>
                <tbody>
                    <tr>
                        <td><?php echo $fet['teaid']; ?></td>
                        <td><?php echo $fet['fname']; ?></td>
                        <td><?php echo $fet['lname']; ?></td>
                        <td><?php echo $fet['degree']; ?></td>
                        <td><?php echo $fet['email']; ?></td>
                        <td><?php echo $fet['exp']; ?></td>
                        <td><?php echo $fet['pic']; ?></td>
                        <td><img width=100px height=100px src="<?php echo "./pictures/" . $fet['pic']; ?> "/></td>
                        <td>
                            <a href="./single_update.php?teaid=<?php echo $fet['teaid']; ?>" class="btn2">UPDATE</a>
                        </td>
                        <td>
                            <a href="./teach_single_delete.php?teaid=<?php echo $fet['teaid']; ?>" class="btn">DELETE</a>
                        </td>
                    </tr>
                </tbody>
<?php 
                }
?>
    </table>
</body>
</html>