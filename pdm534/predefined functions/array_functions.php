<?php
// total 78
//array 
echo "<h2>1:Array function </h2>";
$fvrt=array('maths','statistics','computer');
echo "My Favourite books are :". $fvrt[0] ."," . $fvrt[1] . "," . $fvrt[2]; 
// there are two functions to count array values in php are count() and sizeof() 
// are used in loop where we need to count the number of arrays and then end the loop
echo "<h2>For counting array string values</h2>";
$a=array('red','blue','green','purple','red','white','black','offwhite','skyblue','navyblue');
echo "<h3>2: Count()</h3>";
echo count($a);
echo "<h3>3: sizeof()</h3>";
$color=array(
    'dark'=> array('red','green','blue','black'),
    'light'=>array('skyblue','yellow','white','offwhite')
);
echo sizeof($color,1);
echo "</br>";
echo sizeof($color['dark']);
echo "<h3>4: array_count_values()</h3>";
echo "<pre>";
print_r (array_count_values($a));
echo "</pre>";
echo "<h3>Used counted value in loop</h3>";
$len=count($a);
for($i=0; $i<$len; $i++){
    echo "<pre>";
    echo $a[$i];
    echo "</pre>";
}
// changing all keys in upper case and lowercase
$age=array("ali"=>"21","hamid"=>"25","hina"=>"21","faheem"=>"23");
echo "<h2>5: array_change_key_case(array, case)</h2>";
echo "<pre>";
print_r (array_change_key_case($age,CASE_UPPER));
print_r(array_change_key_case($age,CASE_LOWER));
echo "</pre>";
// splits arrays in chunks like an array of 10 strings we split it into 2 2
// parts like first two strings are considerd one array at 0 index there are two arrays
// in place of preserve_key used true it shows the real counting of strings
echo "<h2>6: array_chunk(array, size, preserve_key)</h2>";
echo "<pre>";
print_r (array_chunk($a,4,true));
echo "</pre>";
// returns the values from a single column in the input array.
echo "<h2>7: array_column() </h2>";
$students=array(
    array('first-name'=>'ali','last-name'=>'asad','age'=>21),
    array('first-name'=>'hamid','last-name'=>'ali','age'=>26),
    array('first-name'=>'hani','last-name'=>'ahmad','age'=>21)
);
$last_names = array_column($students, 'last-name');
print_r($last_names);
//Create an array by using the elements from one "keys" array and one "values" array:
echo "<h2>8: array_combine </h2>";
$name=array('ali','hani','roman','hareem','haram');
$age=array('2','3','1','4','6');
$comb=array_combine($name,$age);
echo "<pre>";
 print_r($comb);
 echo "</pre>";
 //Compare the values of two arrays, and return the differences:
    echo "<h2>9: array_diff</h2>";
    $a1=array('a'=>'red','b'=>'blue','c'=>'green','d'=>'purple','e'=>'orange','f'=>'white',);
    $a2=array('a'=>'red','g'=>'yellow','c'=>'green','b'=>'skyblue','e'=>'orange','m'=>'navyblue',);
    $diff=array_diff($a1,$a2);
    echo "<pre>";
print_r($diff);
    echo "</pre>";
    //Compare the keys and values of two arrays, and return the differences:
echo "<h2>10: array_diff_assoc</h2>";
$dif=array_diff_assoc($a1,$a2);
echo "<pre>";
print_r($dif);
echo "<pre>";
//Compare the keys of two arrays, and return the differences:
    echo "<h2>11 : array_diff_key</h2>";
    $difk=array_diff_key($a1,$a2);
    echo "<pre>";
    print_r($difk);
    echo "<pre>";
    //Fill an array with values: starting value means start from where and second value means that how many
    //string are take
    echo "<h2>12 : array_fill</h2>";
    $afill=array_fill(2,4,'red');
    echo "<pre>";
    print_r($afill);
    echo "<pre>";
    //Fill an array with values, specifying keys in array and values are assigned by using function 
    echo "<h2>13 : array_fill_key</h2>";
    $keys=array('a','b','c','d');
    $kfill=array_fill_keys($keys,'red');
    echo "<pre>";
    print_r($kfill);
    echo "<pre>";
    //Flip all keys with their associated values in an array
    echo "<h2>14 : array_flip</h2>";
    $flip=array_flip($a1);
    echo "<pre>";
    print_r($flip);
    echo "<pre>";
    //Compare the values of two arrays, and return the matches:
    echo "<h2>15 : array_intersect</h2>";
    $comp=array_intersect($a1,$a2);
    echo "<pre>";
    print_r($comp);
    echo "<pre>";
    //Compare the keys and values of two arrays, and return the matches
    echo "<h2>16 : array_intersect_assoc</h2>";
    $combine=array_intersect_assoc($a1,$a2);
    echo "<pre>";
    print_r($combine);
    echo "<pre>";
    //Compare the keys of two arrays, and return the matches:
    echo "<h2>17 : array_intersect_key</h2>";
    $compkey=array_intersect_key($a1,$a2);
    echo "<pre>";
    print_r($compkey);
    echo "<pre>";
    //checks an array for a specified key, and returns true if the key exists and 
    //false if the key does not exist.
    echo "<h2>18 : array_intersect_key</h2>";
    $compkey=array_key_exists('a',$a2);
    if($compkey){
        echo "value exist";
    }
    else{
        echo "value doesn't exist";
    }
    //Return an array containing the keys
    echo "<h2>19 : array_keys</h2>";
    echo "<pre>";
    print_r(array_keys($a1));
    echo "<pre>";
    //Send each value of an array to a function, multiply each value by itself, and return an array with the new values:
    // used when we want to find square
    echo "<h2>20 : array_map</h2>";
    function myfunction($v){
        return($v*$v);
    }
    $arr=array(1,2,3,4,5);
    echo "<pre>";
    print_r(array_map("myfunction",$arr));
    echo "<pre>";
    // Merge two arrays into one array
    echo "<h2>21 : array_merge</h2>";
    $ar1=array('red','blue');
    $ar2=array('green','purple');
    echo "<pre>";
    print_r(array_merge($ar1,$ar2));
    echo "<pre>";
    // The array_merge_recursive() function merges one or more arrays into one array.
    // The difference between this function and the array_merge() function is when two or more
    // array elements have the same key. Instead of override the keys, the array_merge_recursive() 
    // function makes the value as an array.
    echo "<h2>22 : array_merge_recursive</h2>";
    echo "<pre>";
    print_r(array_merge_recursive($a1,$a2));
    echo "<pre>";
    //Return a sorted array in ascending order:
    echo "<h2>23 : array_multisort</h2>";
    $sort=array('red','blue','green','apple','corn');
    array_multisort($sort);
    echo "<pre>";
    print_r($sort);
    echo "<pre>";
    // inserts a specified number of elements, with a specified value, to an array.
    // If you assign a negative size parameter, the function will insert new elements BEFORE the original elements
    echo "<h2>24 : array_pad</h2>";
    echo "<pre>";
    print_r(array_pad($ar1,5,'purple'));
    echo "<pre>";
    // Delete the last element of an array:
    echo "<h2>25 : array_pop</h2>";
    echo "<pre>";
    print_r(array_pop($ar1));
    echo "<pre>";
    //Calculate and return the product of an array:
    echo "<h2>26 : array_product</h2>";
    echo (array_product($arr));
    //inserts one or more elements to the end of an array
    echo "<h2>27 : array_push</h2>";
    array_push($ar1,'purple','orange');
    echo "<pre>";
    print_r($ar1);
    echo "</pre>";
    //Return an array of random keys
    echo "<h2>28 : array_rand</h2>";
    $random=array_rand($sort,4);
    echo $sort[$random[0]]."<br>";
    echo $sort[$random[1]];
    //Send the values in an array to a user-defined function and return a string
    echo "<h2>29 : array_reduce</h2>";
    function myfunction2($V1,$V2){
        return $V1 . "-" . $V2;
    }
   print_r (array_reduce($a,"myfunction2"));
   //Replace the values of the first array ($a1) with the values from the second array ($a2):
   echo "<h2>30 : array_replace</h2>";
   echo "<pre>";
   print_r(array_replace($ar1,$ar2));
   echo "</pre>";
   //Replace the values of the first array with the values from the second array recursively
   echo "<h2>31 : array_replace_recursive</h2>";
   $A1=array("a"=>"red","b"=>array("green","blue"),);
    $A2=array("a"=>"yellow","b"=>array("black"));
    print_r(array_replace_recursive($A1,$A2));
    //Return an array in the reverse order:
    echo "<h2>32 : array_reverse</h2>";
    echo "<pre>";
    print_r(array_reverse($a1));
    echo "</pre>";
    // for searching an array there are two functions in array are in_array() and array_search()
    //array_search()Search an array for the value "red" and return its key
    echo "<h2>33: array_search</h2> ";
    echo (array_search('red',$a1));
    //searches an array for a specific value.
    //If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.
    echo "<h2>34: in_array</h2> ";
    if (in_array("purple", $a1))
    {
    echo "Match found";
    }
    else    
    {
    echo "Match not found";
    }
    // removes the first element from an array, and returns the value of the removed element
    echo "<h2>35: array_shift</h2> ";
    echo array_shift($a);
    echo "<pre>";
    print_r ($a);
    echo "</pre>";
    //returns selected parts of an array.
    echo "<h2>36: array_slice</h2> ";
    echo "<pre>";
    print_r (array_slice($a,3));
    echo "</pre>";
    //Remove elements from an array and replace it with new elements
    // removes selected elements from an array and replaces it with new elements. 
    //The function also returns an array with the removed elements.
    echo "<h2>37: array_splice</h2> ";
    array_splice($a1,0,4,$a2);
    echo "<pre>";
    print_r ($a1);
    echo "</pre>";
    //returns the sum of all the values in the array
    echo "<h2>38: array_sum</h2> ";
    echo array_sum($arr);
    //Remove duplicate values from an array:
    echo "<h2>39: array_unique</h2> ";
    echo "<pre>";
    print_r (array_unique($a1));
    echo "</pre>";
    // inserts new elements to an array. The new array values will be inserted in the beginning of the array.
    echo "<h2>40: array_unshift</h2> ";
    $AR=array('red','blue');
    array_unshift($AR,'purple');
    echo "<pre>";
    print_r ($AR);
    echo "</pre>";
    //Return all the values of an array (not the keys)
    echo "<h2>41: array_values</h2> ";
    echo "<pre>";
    print_r (array_values($a1));
    echo "</pre>";
    //Run each array element in a user-defined function
    echo "<h2>42: array_walk</h2> ";
    function myfunction3($key,$val2){
        echo "the key $val2 has the value $key" . "</br>" ;
    }
    array_walk($a1,"myfunction3");
    //Run each array element in a user-defined function
    echo "<h2>43: array_walk_recursive</h2> ";
    function myfunction4($value,$key)
    {
    echo "The key $key has the value $value<br>";
    }
    $array=array("a"=>"red","b"=>"green");
    $arra=array($array,"1"=>"blue","2"=>"yellow");
    array_walk_recursive($arra,"myfunction4");
    //Sort an associative array in descending order, according to the value:
    echo "<h2>44: arsort</h2> ";
    arsort($a1);
    foreach($a1 as $x=>$x_values){
        echo "key=" . $x . ",value=" . $x_values;
        echo "</br>";
    }
    //Sort an associative array in ascending order, according to the value:
    echo "<h2>45: asort</h2> ";
    asort($a1);
    foreach($a1 as $x=>$x_values){
        echo "key=" . $x . ",value=" . $x_values;
        echo "</br>";
    }
    //Create an array from variables and their values:
    echo "<h2>46: compact</h2> ";
    $firstname="rizwana";
    $lastname="arif ali";
    $age=21;
    $compact=compact('firstname','lastname','age');
    echo "<pre>";
    print_r ($compact);
    echo "</pre>";
    //Return the number of elements in an array:
    echo "<h2>47: count</h2> ";
    echo count($a);
    //Output the value of the current element in an array:
    echo "<h2>48: current</h2> ";
    echo current($a);
    //Output the value of the current and the last element in an array
    echo "<h2>49: end</h2> ";
    $people = array("ali", "hani", "haram", "hareem");
    echo current($people) . "<br>";
    echo end($people);
    // uses array keys as variable names and values as variable values.
    // For each element it will create a variable in the current symbol table.
    echo "<h2>50: extract</h2> ";
    $a = "Original";
    $my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
    extract($my_array);
    echo "\$a = $a; \$b = $b; \$c = $c";
    //Return the element key from the current internal pointer position
    echo "<h2>51: key</h2> ";
    $peo = array("ali", "hani", "haram", "hareem");
    echo "The key from the current position is: " . key($peo);
    //Sort an associative array in descending order, according to the key:
    echo "<h2>52: krsort</h2> ";
    krsort($a1);
    foreach($a1 as $x=>$x_values){
        echo "key=" . $x . ",value=" . $x_values;
        echo "</br>";
    }
    //Sort an associative array in ascending order, according to the key:
    echo "<h2>53: krsort</h2> ";
    ksort($a1);
    foreach($a1 as $x=>$x_values){
        echo "key=" . $x . ",value=" . $x_values;
        echo "</br>";
    }
    //s used to assign values to a list of variables in one operation.
    echo "<h2>54: list</h2> ";
    $m_array=array('dog','cat','horse');
    list($a, $b, $c) = $m_array;
    echo "I have several animals, a $a, a $b and a $c.";
    //The natsort() function sorts an array by using a "natural order" algorithm. The values keep their original keys
    echo "<h2>55: natsort</h2> ";
    $temp_files = array("temp15","temp10","temp1","temp22","temp2");
    sort($temp_files);
    echo "Standard sorting: ";
    print_r($temp_files);
    echo "<br>";

    natsort($temp_files);
    echo "Natural order: ";
    print_r($temp_files);
    //sorts an array by using a "natural order" algorithm. The values keep their original keys
    echo "<h2>56: natcasesort</h2> ";
    $temp_files = array("temp15.txt","Temp10.txt","temp1.txt","Temp22.txt","temp2.txt");

    natsort($temp_files);
    echo "Natural order: ";
    print_r($temp_files);
    echo "<br />";

    natcasesort($temp_files);
    echo "Natural order case insensitve: ";
    print_r($temp_files);
    //Output the value of the current and the next element in the array:
    echo "<h2>57: next</h2> ";
    echo current($peo) . "<br>";
    echo next($peo);
    //Output the value of the current element in an array
    echo "<h2>58: pos</h2> ";
    $persons=array('ali','hamid','asad','azim');
    echo pos($persons) . "<br>";
    //Output the value of the current, next and previous element in the array:
    echo "<h2>59: prev</h2> ";
    echo current($persons) . "<br>";
    echo next($persons) . "<br>";
    echo prev($persons);
    //creates an array containing a range of elements
    echo "<h2>60: range</h2> ";
    $number = range(0,5);
    print_r ($number);
    //moves the internal pointer to the first element of the array
    echo "<h2>61: reset</h2> ";
    echo current($persons) . "<br>";
    echo next($persons) . "<br>";
    echo reset($persons);
    //sorts an indexed array in descending order.
    echo "<h2>62: rsort</h2> ";
    $cars=array("Volvo","BMW","Toyota");
    rsort($cars);
    $clength=count($cars);
    for($x=0;$x<$clength;$x++)
    {
    echo $cars[$x];
    echo "<br>";
    }
    //Randomize the order of the elements in the array:
    //Refresh the page to see how shuffle() randomizes the order of the elements in the array
    echo "<h2>63: shuffle</h2> ";
    shuffle($persons);
    echo "<pre>";
    print_r ($persons);
    echo "</pre>";
    //sorts an indexed array in ascending order
    echo "<h2>64: sort</h2> ";
    sort($cars);
    foreach ($cars as $key => $val) {
        echo "cars[" . $key . "] = " . $val . "<br>";
    }
    //sorts an array by values using a user-defined comparison function and maintains the index association.
    echo "<h2>65: uasort</h2> ";
    function my_sort($a, $b) {
        if ($a == $b) return 0;
        return ($a < $b) ? -1 : 1;
      }
      
      $arrs = array("a"=>4, "b"=>2, "c"=>8, "d"=>6);
      uasort($arrs, "my_sort");
      
      foreach($arrs as $key => $value) {
        echo "[" . $key . "] => " . $value;
        echo "<br>";
      }
      //Sort the elements of an array by keys using a user-defined comparison function:
      echo "<h2>66: uksort</h2> ";
      function mysort($a, $b) {
        if ($a == $b) return 0;
        return ($a < $b) ? -1 : 1;
      }
      uksort($arrs, "mysort");
      
      foreach($arrs as $key => $value) {
        echo "[" . $key . "] => " . $value;
        echo "<br>";
      }
      //Sort the elements of an array by values using a user-defined comparison function
      echo "<h2>67: usort</h2> ";
      
      
      $a = array(4, 2, 8, 6);
      
      usort($a,"mysort");
      
      foreach($a as $key => $value) {
        echo "[" . $key . "] => " . $value;
        echo "<br>";
      }
      //Compare the keys and values of two arrays (use a user-defined function to compare the keys), and return the differences
      echo "<h2>68: array_diff_uassoc</h2> ";
      function mfunction($a,$b)
        {
        if ($a===$b)
        {
        return 0;
        }
        return ($a>$b)?1:-1;
        }
        $result=array_diff_uassoc($a1,$a2,"mfunction");
        print_r($result);
        //Compare the keys of two arrays (using a user-defined key comparison function), and return the differences
        echo "<h2>69: array_diff_ukey</h2> ";
        $AB=array("a"=>"red","b"=>"green","c"=>"blue");
        $AB2=array("a"=>"blue","b"=>"green","e"=>"blue");

        $result=array_diff_ukey($AB,$AB2,"mfunction");
        print_r($result);
        //Filter the values of an array using a callback function:
        echo "<h2>70: array_filter</h2> ";
        function test_odd($var)
        {
        return($var & 1);
        }
        $a1=array(1,3,2,3,4);
        print_r(array_filter($a1,"test_odd"));
        //Compare the keys and values of two arrays, and return the matches (using a user-defined key comparison function):
        echo "<h2>71: array_intersect_uassoc</h2> ";
        $res=array_intersect_uassoc($AB,$AB2,"mfunction");
        print_r($res);
        //Compare the keys of two arrays (using a user-defined key comparison function), and return the matches
        echo "<h2>72: array_intersect_ukey</h2> ";
        $result=array_intersect_ukey($AB,$AB2,"mfunction");
        print_r($result);
        //Compare the values of two arrays (use a user-defined function to compare the values) and return the differences
        echo "<h2>73: array_udiff</h2> ";
        $result=array_udiff($AB,$AB2,"mfunction");
        print_r($result);
        //Compare the keys and values of two arrays (using a built-in function to compare the keys and a user-defined function 
        //to compare the values) and return the differences:
        echo "<h2>74: array_udiff_assoc</h2> ";
        $a11=array("a"=>"red","b"=>"green","c"=>"blue");
        $a22=array("a"=>"red","b"=>"blue","c"=>"green");
        $result=array_udiff_assoc($a11,$a22,"mfunction");
        print_r($result);
        //Compare the keys and values of two arrays (using two user-defined functions for comparison) and return the differences:
        echo "<h2>75: array_udiff_uassoc</h2> ";
        function myfunction_key($a,$b)
        {
        if ($a===$b)
        {
        return 0;
        }
        return ($a>$b)?1:-1;
        }

        function myfunction_value($a,$b)
        {
        if ($a===$b)
        {
        return 0;
        }
        return ($a>$b)?1:-1;
        }

        $a0=array("a"=>"red","b"=>"green","c"=>"blue");
        $a00=array("a"=>"red","b"=>"green","c"=>"green");

        $result=array_udiff_uassoc($a0,$a00,"myfunction_value","myfunction_key");
        print_r($result); 
        //Compare the values of two arrays (use a user-defined function to compare the values) and return the matches
        echo "<h2>76: array_uintersect</h2> "; 
        $result=array_uintersect($AB,$AB2,"mfunction");
        print_r($result);
        //Compare the keys and values of two arrays (using a built-in function to compare the keys and a user-defined function to compare the values) and return the matches:
        echo "<h2>77: array_uintersect_assoc</h2> "; 
        $result=array_uintersect_assoc($AB,$AB2,"mfunction");
        print_r($result);
        //Compare the keys and values of two arrays (using two user-defined functions for comparison) and return the matches:
            echo "<h2>78: array_uintersect_uassoc</h2> "; 
            $result=array_uintersect_uassoc($a0,$a00,"myfunction_value","myfunction_key");
            print_r($result); 

?>