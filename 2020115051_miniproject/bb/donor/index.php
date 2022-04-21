<?php 
session_start(); //echo"hello";  ?>
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


?>
<?php include 'dnavbar.php' ?>

<?php
			
    include '../config.php';
	$sql="select * from donorregistration where email='" . $_SESSION["email"] . "'";
	//echo $_SESSION['email'];
	$result=mysqli_query($con,$sql);
	$r=mysqli_num_rows($result);

	$data=mysqli_fetch_assoc($result);
	$name=$data['name'];
	$gender=$data['gender'];
	$age=$data['age'];
	$mobile=$data['mobile'];
    $address=$data['address'];
	$pic=$data['pic'];
	//echo $name;
	//mysqli_close($con);

?> 

<div class="container" style="width:fit-content;">
    <form action="update.php" method="post">
        <table class="table" >
            <tr><td colspan="3" class="headtd"><h1>Profile</h1></td></tr>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr><td rowspan="5"><img class="profilepic" src="../../donorpics/<?php echo"$pic" ?>" alt="profile pic"></td><td class="lefttd" > Name:</td><td class="lefttd"><?php echo "$name" ;?></td></tr>
            <tr><td class="lefttd" >Gender:</td><td class="lefttd"><?php echo "$gender" ;?></td></tr>
            <tr><td class="lefttd" >Age:</td><td class="lefttd"><?php echo "$age" ;?></td></tr>
            <tr><td class="lefttd" >Mobile:</td><td class="lefttd"><?php echo "$mobile" ;?></td></tr>
            <tr><td class="lefttd" >Address</td><td class="lefttd"><?php echo "$address" ;?></td></tr>
            <tr><td>&nbsp;</td><td>&nbsp;</td><td class="lefttd"><input class="btn" type="submit" value="Update" name="submit" ></td></tr>
        </table>
    </form>
</div>

		

<?php include 'footer.php'; ?>

</body>
</html>