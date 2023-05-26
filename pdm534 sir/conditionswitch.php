<?php 

       $name="Hamza";
       $fname="Ali";
       $class="BSCS";
       $eng=95;
       $urdu=97;
       $math=95;
       $physics=90;
       $chemistry=90;
       $total=500;
       $ob=$eng+$math+$urdu+$physics+$chemistry;
       $per=round($ob/$total*100);
       switch(true){

        case ($per>=90 && $per<=100):
            $r="A+";
            break;
            case ($per>=80 && $per<90):
                $r="A";
                break;
                case ($per>=70 && $per<80):
                    $r="B";
                    break;
                    case ($per>=60 && $per<70):
                        $r="C";
                        break;
                        case ($per>=44 && $per<60):
                            $r="D";
                            break;
                            default:
                            $r="F";
       }
        
         
        

    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> If Statement Table</title>
</head>
<body>
    <table cellpadding="15" cellspacing="15" border="2" bgcolor="drakred" width="50%"  align="center" >
<tr>
    <th style="font-size:20; font-weight:bold ;color:pink;letter-spacing:5" colspan="12	">Student Result  Record</th>
</tr>
    		

         
       <tr>
     <th>Name</th>
     <th>Father Name</th>
     <th>Class</th>
     <th>English</th>
     <th>Urdu</th>
     <th >Math</th>
     <th>physics</th>
     <th>chemistry</th>
     <th>Total Marks</th>
     <th>Ob Marks</th>
     <th>Percentage	</th>
     <th>Result</th>
     

</tr>
<tr>
   
     <td><?php echo $name ?></td>
     <td><?php echo $fname ?></td>
     <td><?php echo $class ?></td>
     <td><?php echo $eng ?></td>
     <td><?php echo $urdu ?></td>
     <td><?php echo $math ?></td>
     <td><?php echo $physics ?></td>
     <td><?php echo $chemistry ?></td>
     <td><?php echo $total ?></td>
     <td><?php echo $ob ?></td>
     <td><?php echo $per ."%" ?></td>
     <td><?php echo $r ?></td>

     <tr>

<th colspan="7" style="letter-spacing:5;color:pink;font-style:italic" >Your grade</th>
<td  colspan="5" style="text-align: center;font-size:20;font-family:'Times New Roman', Times, serif; 	"><?php echo $r ?></td>
</tr>
	
        
    

        </table>     
</body>
</html>