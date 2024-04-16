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



<?php 
include 'config.php';
include 'dnavbar.php' ?>

<form action="#" method="get" class="search">
    <label class="searchtext"> Select Blood Group </label>
    <select class="searchtext" name="bg" id="bg">
        <option value="all" selected>All</option>
        <option value="O-">O-</option>
        <option value="O+">O+</option>
        <option value="A-">A-</option>
        <option value="A+">A+</option>
        <option value="B-">B-</option>
        <option value="B+">B+</option>
        <option value="AB-">AB-</option>
        <option value="AB+">AB+</option>
    </select>
    <input type="submit" class="btn" value="Filter" name="filter">
</form>

<div class="container" style="width: fit-content;">
<h1 class="headtd">Blood Requests</h1>
<table>
<tr><th class="lefttd">Blood Group</th><th class="lefttd">Name</th><th class="lefttd">Gender</th>
<th class="lefttd">Till Required Date</th><th class="lefttd">Mobile No</th><th class="lefttd">E-mail</th>
<th class="lefttd">Address</th><th class="lefttd">Details</th></tr>
<?php

if(isset($_GET['bg']))
{   
    if($_GET['bg']=="all")
    {
        $sql="select * from requests where reqdate >= '".date('Y-m-d',time())."'";
    }
    else
    {
        $sql = "select * from requests where bgroup like '".$_GET['bg']."' and reqdate >= '".date('Y-m-d',time())."'";  
    }
}
else
{
    $sql="select * from requests where reqdate >= '".date('Y-m-d',time())."'";
}
	$result=mysqli_query($con,$sql);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_assoc($result))
	{
	    echo"<tr><td  class='lefttd'>".$data['bgroup']."</td><td  class='lefttd'>".$data['name']."</td><td  class='lefttd'>".$data['gender'].
            "</td><td  class='lefttd'>".$data['reqdate']."</td><td  class='lefttd'>".$data['mobile']."</td><td  class='lefttd'>".$data['email'].
            "</td><td  class='lefttd'>".$data['address']."</td><td  class='lefttd'>".$data['detail']."</td></tr>";
			}
			mysqli_close($con);
			?>


</table>

</div>
   
<?php include 'footer.php'; ?>

</body>
</html>