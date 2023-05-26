<?php
/*$ar=array(55,78,5,90,12,34,23);
echo max($ar);*/

$student=array('ali'=>89,'aliyan'=>90,'azaan'=>34,'asim'=>66,'asfand'=>92);
echo "Highest marks : " .max($student) . "<br>";
echo "Student Name :  " .array_search(max($student),$student);



?>




<?php
/*$high=array(5,3,7,9,1,6,2,8,4);
$temo="";
for( $i=0;$i<count($high);$i++)
{
    for($j=0;$j<count($high)-1;$j++)
    {
        if($high[$j]>$high[$j+1])
        {
            $temp=$high[$j];
            $high[$j]=$high[$j+1];
            $high[$j+1]=$temp;
        }
    }
}
print_r($high);*/
?>