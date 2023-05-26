
    <?php 
    $phy="70";
    $che="89";
    $bio="59";
    $com="87";
    $total=$phy+$che+$bio+$com;
    $per=$total*100/400;

    if($per>=90 && $per=100){
         $grade="A+";
    }
    elseif($per>=80 && $per<=90 )
    {
         $grade="A";
    }
    elseif($per>=60 && $per<=80 )
    {
         $grade="B";
    }
    elseif($per>=50 && $per<=60 )
    {
        $grade="C";
    }
    elseif($per>=40 )
    {
        $grade="D";
    }
    else{
        echo "Your grade is F.Please try again!";
    }
    ?>
    
    <table cellspacing="2" cellpadding="2" border="2" style="background-color:grey;color:white;" width=50% align="center">
        <tbody><tr>
            <th>Name</th>
            <td>Rizwana</td>
            <th>Father Name</th>
            <td>Arif Ali</td>

        </tr>
        
            <tr >
                <th colspan="2">subjects</th>
                <th>Total Marks</th>
                <th>Obtained Marks</th>
            </tr>
            <tr >
                <th colspan="2">Physics</th>
                <th>100</th>
                <th><?php echo $phy; ?></th>
            </tr>
            <tr >
                <th colspan="2">Biology</th>
                <th>100</th>
                <th><?php echo $bio; ?></th>
            </tr>
            <tr >
                <th colspan="2">Chemistry</th>
                <th>100</th>
                <th><?php echo $che; ?></th>
            </tr>
            <tr >
                <th colspan="2">Computer</th>
                <th>100</th>
                <th><?php echo $com; ?></th>
            </tr>
            <tr>
                <td colspan="4"><?php echo "Total obtained marks : " . $total ; ?></td>
            </tr>
            <tr>
            <td colspan="2"><?php echo "Percentage: " . $per ; ?></td>
            <td colspan="2"><?php echo "Your grade is :  " . $grade ; ?></td>
            </tr>
        </tbody>
    </table>




<?php




?>
