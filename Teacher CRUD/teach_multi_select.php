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
    <h1 align=center>Record Of Teachers</h1>
    <table border=2px> 
        <thead>
            <tr>
               
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Qualification</th>
            <th>Experience</th>
            <th>Country</th>
            <th>Pictures</th>
            <th>Delete</th>
            <th>Update</th>
            </tr>   
        </thead>
        <?php
           $sql="SELECT * FROM `teac-rec-multi`";
           $run=mysqli_query($conn,$sql);
           while($fet=mysqli_fetch_assoc($run)){
        ?>
        <tbody>
            <tr>
                
                <td><?php echo $fet['fname'];?></td>
                <td><?php echo $fet['lname'];?></td>
                <td><?php echo $fet['email']; ?></td>
                <td><?php echo $fet['quali']; ?></td>
                <td><?php echo $fet['exp'] ;?></td>
                <td><?php echo $fet['country'] ;?></td>
                
                <td>
                    <?php
                    $pic=unserialize($fet['pic']);
                    foreach($pic as $p){
                        ?>
                        <img width="50" height="50" src="<?php echo "./pictures/" . $p ; ?>" />
                        <?php
                    }
                    ?>
                </td>
                <td> <a href="./teach_multi_delete.php?teaid=<?php echo $fet['teaid']; ?>" class="btn" >DELETE</a></td>
                <td> <a href="./multi_update.php?teaid=<?php echo $fet['teaid']; ?>" class="btn2" >UPDATE</a></td>
            </tr>
        </tbody>
        <?php
           }
           ?>
    </table>
</body>
</html>