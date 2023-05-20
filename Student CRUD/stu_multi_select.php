<?php
include ("./connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record of Students</title>
    <style>
       table {
            
            border : 2px;
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
        .btn{
            background :  lightblue;
            color : darkred;
            font-size : 1.2em;
            padding : 5px 30px;
        }
       .btn:hover{
        background : darkred;
        color : #fff;
       }
       
    </style>
</head>
<body>
    <h1 align=center>Our Students</h1>
    <table border=2px> 
        <thead>
            <tr>
               
            <th>Student Name</th>
            <th>Father Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>CNIC</th>
            <th>Gender</th>
            <th>Pictures</th>
            <th>Update</th>
            <th>Delete</th>
            </tr>   
        </thead>
        <?php
           $sql="SELECT * FROM `stu-rec-multi`";
           $run=mysqli_query($conn,$sql);
           while($fet=mysqli_fetch_assoc($run)){
        ?>
        <tbody>
            <tr>
                
                <td><?php echo $fet['sname'];?></td>
                <td><?php echo $fet['fname'];?></td>
                <td><?php echo $fet['sadd']; ?></td>
                <td><?php echo $fet['smail']; ?></td>
                <td><?php echo $fet['snic'] ;?></td>
                <td><?php echo $fet['sgen'] ;?></td>
                <td>
                    <?php
                    $pic=unserialize($fet['spic']);
                    foreach($pic as $p){
                        ?>
                        <img width="50" height="50" src="<?php echo "./pictures/" . $p ; ?>" />
                        <?php
                    }
                    ?>
                </td>
                <td> <a href="./multi_update.php?sid=<?php echo $fet['sid']; ?>" class="btn" >UPDATE</a></td>
                <td> <a href="./stu_multi_delete.php?sid=<?php echo $fet['sid']; ?>" class="btn" >DELETE</a></td>
            </tr>
        </tbody>
        <?php
           }
           ?>
    </table>
</body>
</html>