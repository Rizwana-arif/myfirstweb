

<form>
    <input type="text" name="val"/>
    <input type="submit" name="submitt" />
</form>

<style>
        table {
            
            border-collapse: collapse;
            margin: 25px 0;
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
        table tbody tr{
            border-bottom: 1px solid #d6b5b5;
        }
        table tbody tr:nth-of-type(even){
            background-color: rgb(169, 219, 202);

        }
        .table tbody tr:last-of-type{
            border-bottom: 2px solid rgb(214, 114, 97);
        }
       

     </style>
    


 <?php
      $semester=$_GET['val']
 ?>
<?php

$semester=$_GET['val'];
switch($semester){
    case '1';
    echo "<table >
            
    <thead>
        <tr >
        <th>Sr.No</th>
        <th>Sub code</th>
        <th>Cr.Hours</th>
        <th>Course Title</th>
        <th>Professor name</th>
        <th>Room.no</th>
    </tr></thead>";
   echo "<tbody><tr>
        <td>1</td>
        <td>1</td>
        <td>CSI-506</td>
        <td>Artificial Intelligence</td>
        <td>Sir Asad</td>
        <td>33</td>
    </tr>";
    echo "<tr>
        <td>2</td>
        <td>CSI-606</td>
        <td>3(3-1)</td>
        <td>Web Development</td>
        <td>Mam Sabahat</td>
        <td>40</td>
    </tr>";
    echo "<tr>
        <td>3</td>
        <td>SOC-320</td>
        <td>2(2-0)</td>
        <td>Spciology</td>
        <td>Mam Zobia</td>
        <td>36</td>
    </tr>";
    echo "<tr>
        <td>4</td>
        <td>PSI-326</td>
        <td>2(2-0)</td>
        <td>Pak Studies</td>
        <td>Mam Noreen</td>
        <td>29</td>
    </tr>";
    echo "<tr>
        <td>5</td>
        <td>CSI-503</td>
        <td>3(3-1)</td>
        <td>Computer Graphics</td>
        <td>sir Amir</td>
        <td>34</td>
    </tr></tbody>
</table>";
 break;

/* second case starts from here*/

case '2';
echo "<table >
        
<thead>
    <tr >
    <th>Sr.No</th>
    <th>Sub code</th>
    <th>Cr.Hours</th>
    <th>Course Title</th>
    <th>Professor name</th>
    <th>Room.no</th>
</tr></thead>";
echo "<tbody><tr>
    <td>1</td>
    <td>1</td>
    <td>CSI-506</td>
    <td>Artificial Intelligence</td>
    <td>Sir Asad</td>
    <td>33</td>
</tr>";
echo "<tr>
    <td>2</td>
    <td>CSI-606</td>
    <td>3(3-1)</td>
    <td>Web Development</td>
    <td>Mam Sabahat</td>
    <td>40</td>
</tr>";
echo "<tr>
    <td>3</td>
    <td>SOC-320</td>
    <td>2(2-0)</td>
    <td>Spciology</td>
    <td>Mam Zobia</td>
    <td>36</td>
</tr>";
echo "<tr>
    <td>4</td>
    <td>PSI-326</td>
    <td>2(2-0)</td>
    <td>Pak Studies</td>
    <td>Mam Noreen</td>
    <td>29</td>
</tr>";
echo "<tr>
    <td>5</td>
    <td>CSI-503</td>
    <td>3(3-1)</td>
    <td>Computer Graphics</td>
    <td>sir Amir</td>
    <td>34</td>
</tr></tbody>
</table>";
break;

/*third case starts from here*/

case '3';
echo "<table >
        
<thead>
    <tr >
    <th>Sr.No</th>
    <th>Sub code</th>
    <th>Cr.Hours</th>
    <th>Course Title</th>
    <th>Professor name</th>
    <th>Room.no</th>
</tr></thead>";
echo "<tbody><tr>
    <td>1</td>
    <td>1</td>
    <td>CSI-506</td>
    <td>Artificial Intelligence</td>
    <td>Sir Asad</td>
    <td>33</td>
</tr>";
echo "<tr>
    <td>2</td>
    <td>CSI-606</td>
    <td>3(3-1)</td>
    <td>Web Development</td>
    <td>Mam Sabahat</td>
    <td>40</td>
</tr>";
echo "<tr>
    <td>3</td>
    <td>SOC-320</td>
    <td>2(2-0)</td>
    <td>Spciology</td>
    <td>Mam Zobia</td>
    <td>36</td>
</tr>";
echo "<tr>
    <td>4</td>
    <td>PSI-326</td>
    <td>2(2-0)</td>
    <td>Pak Studies</td>
    <td>Mam Noreen</td>
    <td>29</td>
</tr>";
echo "<tr>
    <td>5</td>
    <td>CSI-503</td>
    <td>3(3-1)</td>
    <td>Computer Graphics</td>
    <td>sir Amir</td>
    <td>34</td>
</tr></tbody>
</table>";
break;

/* Fourth case starts here*/

case '4';
echo "<table >
        
<thead>
    <tr >
    <th>Sr.No</th>
    <th>Sub code</th>
    <th>Cr.Hours</th>
    <th>Course Title</th>
    <th>Professor name</th>
    <th>Room.no</th>
</tr></thead>";
echo "<tbody><tr>
    <td>1</td>
    <td>1</td>
    <td>CSI-506</td>
    <td>Artificial Intelligence</td>
    <td>Sir Asad</td>
    <td>33</td>
</tr>";
echo "<tr>
    <td>2</td>
    <td>CSI-606</td>
    <td>3(3-1)</td>
    <td>Web Development</td>
    <td>Mam Sabahat</td>
    <td>40</td>
</tr>";
echo "<tr>
    <td>3</td>
    <td>SOC-320</td>
    <td>2(2-0)</td>
    <td>Spciology</td>
    <td>Mam Zobia</td>
    <td>36</td>
</tr>";
echo "<tr>
    <td>4</td>
    <td>PSI-326</td>
    <td>2(2-0)</td>
    <td>Pak Studies</td>
    <td>Mam Noreen</td>
    <td>29</td>
</tr>";
echo "<tr>
    <td>5</td>
    <td>CSI-503</td>
    <td>3(3-1)</td>
    <td>Computer Graphics</td>
    <td>sir Amir</td>
    <td>34</td>
</tr></tbody>
</table>";
break;

/* 5th case starts here*/

case '5';
echo "semester 5";
echo "<table >
        
<thead>
    <tr >
    <th>Sr.No</th>
    <th>Sub code</th>
    <th>Cr.Hours</th>
    <th>Course Title</th>
    <th>Professor name</th>
    <th>Room.no</th>
</tr></thead>";
echo "<tbody><tr>
    <td>1</td>
    <td>1</td>
    <td>CSI-506</td>
    <td>Artificial Intelligence</td>
    <td>Sir Asad</td>
    <td>33</td>
</tr>";
echo "<tr>
    <td>2</td>
    <td>CSI-606</td>
    <td>3(3-1)</td>
    <td>Web Development</td>
    <td>Mam Sabahat</td>
    <td>40</td>
</tr>";
echo "<tr>
    <td>3</td>
    <td>SOC-320</td>
    <td>2(2-0)</td>
    <td>Spciology</td>
    <td>Mam Zobia</td>
    <td>36</td>
</tr>";
echo "<tr>
    <td>4</td>
    <td>PSI-326</td>
    <td>2(2-0)</td>
    <td>Pak Studies</td>
    <td>Mam Noreen</td>
    <td>29</td>
</tr>";
echo "<tr>
    <td>5</td>
    <td>CSI-503</td>
    <td>3(3-1)</td>
    <td>Computer Graphics</td>
    <td>sir Amir</td>
    <td>34</td>
</tr></tbody>
</table>";
break;

/*6th case */

case '6';
echo "<table >
        
<thead>
    <tr >
    <th>Sr.No</th>
    <th>Sub code</th>
    <th>Cr.Hours</th>
    <th>Course Title</th>
    <th>Professor name</th>
    <th>Room.no</th>
</tr></thead>";
echo "<tbody><tr>
    <td>1</td>
    <td>1</td>
    <td>CSI-506</td>
    <td>Artificial Intelligence</td>
    <td>Sir Asad</td>
    <td>33</td>
</tr>";
echo "<tr>
    <td>2</td>
    <td>CSI-606</td>
    <td>3(3-1)</td>
    <td>Web Development</td>
    <td>Mam Sabahat</td>
    <td>40</td>
</tr>";
echo "<tr>
    <td>3</td>
    <td>SOC-320</td>
    <td>2(2-0)</td>
    <td>Spciology</td>
    <td>Mam Zobia</td>
    <td>36</td>
</tr>";
echo "<tr>
    <td>4</td>
    <td>PSI-326</td>
    <td>2(2-0)</td>
    <td>Pak Studies</td>
    <td>Mam Noreen</td>
    <td>29</td>
</tr>";
echo "<tr>
    <td>5</td>
    <td>CSI-503</td>
    <td>3(3-1)</td>
    <td>Computer Graphics</td>
    <td>sir Amir</td>
    <td>34</td>
</tr></tbody>
</table>";
break;

}

?>