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
    <style>
        table {
            
            border-collapse: collapse;
            margin-left: 50px;
            font-size: 0.9;
            min-width: 450px;
            
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
            padding: 5px 5px;
        }
        .btn , .btn2{
            background :  skyblue;
            color : darkred;
            font-size : 0.9em;
            padding : 5px 5px;
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
    <h1 align=center>STUDENT RECORD</h1>
    <table border=2px align=center>
            <thead>
                <tr>
                    <th>Teaher name</th>
                    <th>Qualification</th>
                    <th>Class Date</th>
                    <th>Class Time</th>
                    <th>Student Name</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>Picture</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
<?php
                // $sql="SELECT * FROM `stu-rec-single` s left JOIN `teac-rec-single` t ON s.techid=t.teaid 
                // UNION SELECT * FROM `stu-rec-single` s right JOIN `teac-rec-single` t ON s.techid=t.teaid ";
                $sql="SELECT * FROM `stu-rec-single` s INNER JOIN `teac-rec-single` t ON s.techid=t.teaid INNER JOIN `class` c ON s.classtime=c.ctid";
                $run=mysqli_query($conn,$sql);
                while($fet=mysqli_fetch_assoc($run)){
?>
                <tbody>
                    <tr>
                        <td><?php echo $fet['fname']; ?></td>
                        <td><?php echo $fet['degree']; ?></td>
                        <td><?php echo $fet['cdate']; ?></td>
                        <td><?php echo $fet['ctime']; ?></td>
                        <td><?php echo $fet['sname']; ?></td>
                        <td><?php echo $fet['uname']; ?></td>
                        <td><?php echo $fet['semail']; ?></td>
                        <td><?php echo $fet['phone']; ?></td>
                        <td><?php echo $fet['spass']; ?></td>
                        <td><?php echo $fet['sgen']; ?></td>
                        <td><img width=50px height=50px src="<?php echo "./pictures/" . $fet['spic']; ?> "/></td>
                        <td> <a href="./single_update.php?sid=<?php echo $fet['sid']; ?>" class="btn2" >UPDATE</a></td>
                        <td>
                            <a href="./stu_single_delete.php?sid=<?php echo $fet['sid']; ?>" class="btn">DELETE</a>
                        </td>
                    </tr>
                </tbody>
<?php 
                }
?>
    </table>
</body>
</html>