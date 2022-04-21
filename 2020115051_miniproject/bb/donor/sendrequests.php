<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="G Mohammed Thabrez (2020115051)" />
    <meta name="language" content="EN"/>
    <link rel="stylesheet" href="../../css/style.css">
    <title>Bloodbank</title>
</head>
<body>
    
<?php include 'dnavbar.php' ?>

<div class="container">
    <form action="#" method="post">
        <table class="table">
        <tr><td colspan="2" class="headtd"><h1 class="title">Send Requests For Blood</h1></td></tr>
        
        <tr><td colspan="2">&nbsp;</td></tr>

        <tr><td class="lefttd" > Name:</td><td class="lefttd"><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{5,15}" title="please enter only character  between 5 to 15 for donor name" /></td></tr>
        
        <tr><td class="lefttd" >Gender</td><td class="lefttd"><input name="r1" type="radio" value="male" checked="checked">Male<input name="r1" type="radio" value="female">Female</td></tr>
        
        <tr><td class="lefttd" >Age</td><td class="lefttd"><input type="number" name="t2" required="required" min="18" max="60" title="please enter age between 18 to 60 for donor age"/></td></tr>
        
        <tr><td class="lefttd" >Select Blood Group </td><td class="lefttd"><select name="t4" required><option value="">Select</option>
<?php
include 'config.php';

$sql="select * from bloodgroup";
	$result=mysqli_query($con,$sql);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s2"])
		{
			echo "<option value=$data[1] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[1]>$data[1]</option>";
		}	
	}
	mysqli_close($con);

?>

</select></td></tr>

<tr><td class="lefttd">Till Required Date</td><td class="lefttd"><input type="date" name="date" id="date"></td></tr>

<tr><td class="lefttd" >Mobile No</td><td class="lefttd"><input type="number" name="t3"  required="required" /></td></tr>

<tr><td class="lefttd" >E-Mail</td><td class="lefttd"><input type="email" name="t5" required="required" /></td></tr>

<tr><td class="lefttd">Address </td><td class="lefttd"><textarea name="address" id="address" cols="30" rows="5"></textarea></td></tr>

<tr><td class="lefttd">Details</td><td class="lefttd"><textarea name="detail" id="detail" cols="30" rows="2"></textarea></td></tr>

<tr><td>&nbsp;</td><td class="lefttd"><input class="btn" type="submit" value="Request" name="sbmt" ></td></tr>
</table>
</form>
</div>

<?php

if(isset($_POST["sbmt"])) 
{  
	include 'config.php';
			
    $sql="insert into requests(name,gender,age,bgroup,reqdate,mobile,email,address,detail) 
    values(
        '" . $_POST["t1"] ."',
        '" . $_POST["r1"] . "',
        '" . $_POST["t2"] . "',
        '" . $_POST["t4"] . "',
        '" . $_POST["date"] . "',
        '" . $_POST["t3"] . "',
        '" . $_POST["t5"] .  "',
        '" . $_POST["address"]  ."',
        '" . $_POST["detail"]  ."'
        )";
			
			
	$result2=mysqli_query($con,$sql);
	mysqli_close($con);
	if($result2>0)
	{
	echo "<script>alert('Request Sent');</script>";
	}
	else
	{echo "<script>alert('Saving Record Failed');</script>";
	}
		
}	
?> 
<?php
 include 'footer.php';
?>

</body>
</html>