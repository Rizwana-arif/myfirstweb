<style type="text/css">
	form{
	width:400px;
	height:auto;
	background:#FFCC66;
	margin:0px auto;
	padding:30px;
}
form label{
	color:white;
	font-size:20px;
	font-weight:bold;
}
form input{
	margin-top:5px;
	width:100%;
	height:40px;
	margin-bottom:15px;
	border-radius:30px;
	border:none;
	border-bottom:5px #FF9900 solid;
	text-indent:20px;
	font-size:20px;
	color:#333333;
	font-family:"Comic Sans MS";
}
</style>
<form method="get" enctype="multipart/form-data" action="view_Date.php">
	<h1 align="center">Call Charges Management System</h1>
	<label>Consumer ID</label>
	<input type="number" name="identity" />
	
	<label>Consumer Name</label>
	<input type="text" name="con_name" />
	
	<label>Address</label>
	<input type="text" name="con_address" />
	
	<label>Bill Month</label>
	<input type="month" name="month" /> 
	
	<label>Due Date</label>
	<input type="text" name="due_date" />
	
	<label>Line Rent</label>
	<input type="text" name="l_rent" value="350" readonly="readonly" />
	
	<label>Land Line Calls Minutes</label>
	<input type="number" name="lline" />
	
	<label>Mobile Calls Minutes</label>
	<input type="number" name="mob" />
	
	<label>International Calls Minutes</label>
	<input type="number" name="inter" />

	<input type="submit" name="bill_Cal" value="Display Bill" />
	
</form>


