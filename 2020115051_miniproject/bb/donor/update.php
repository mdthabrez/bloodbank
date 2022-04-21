<?php session_start();  ?>
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

<?php
			
            include '../config.php';
            $sql="select * from donorregistration where email='" . $_SESSION["email"] . "'";
                    
            $result=mysqli_query($con,$sql);
            //$r=mysqli_num_rows($q);
        
            $data=mysqli_fetch_array($result);
            $name=$data[1];
            $gender=$data[2];
            $age=$data[3];
            $mobile=$data[7];
            $address=$data[8];
            $pic=$data[9];
            //echo $name;
            mysqli_close($con);
        ?> 
        
<?php include 'dnavbar.php' ?>


<div class="container" style="width:fit-content;">
    <form action="#" method="post">
        <table class="table" >
            <tr><td colspan="2" class="headtd"><h1>Update Profile</h1></td></tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr><td class="lefttd" > Name:</td><td class="lefttd"><input type="text" name="name" id="name" value="<?php echo "$name" ;?>"></td></tr>
            <tr><td class="lefttd" >Gender:</td><td class="lefttd"><input name="r1" type="radio" value="male"  <?php if($gender == 'male'){ echo "checked" ;}  ?>>Male<input name="r1" checked="checked" type="radio" value="female" <?php if($gender=="female"){ echo "checked" ;}  ?> />Female</td></tr>
            <tr><td class="lefttd" >Age:</td><td class="lefttd"><input type="number" name="age" id="age" value="<?php echo "$age" ;?>"></td></tr>
            <tr><td class="lefttd" >Mobile:</td><td class="lefttd"><input type="number" name="mobile" id="mobile" value="<?php echo "$mobile" ;?>"></td></tr>
            <tr><td class="lefttd" >Address</td><td class="lefttd"><textarea name="address" id="name" cols="35" rows="5" ><?php echo "$address" ;?></textarea></td></tr>
            <!--<tr><td class="lefttd" >Profile Pic:</td><td class="lefttd"><input type="file" name="pic" id="pic" value="<?php //echo "$pic" ;?>" ></td></tr>-->
            <tr><td>&nbsp;</td><td class="lefttd"><button class="btn"><a href="index.php" class="cancelbtn" >Cancel</a></button>&nbsp;&nbsp;<input class="btn" type="submit" value="Update" name="update" ></td></tr>
        </table>
    </form>
</div>
		
<?php include 'footer.php'; ?>
<?php
include '../config.php';
if(isset($_POST['update']) )
{
    $sql="update donorregistration set name='" .$_POST["name"]. "' ,gender='" .$_POST["r1"]."' , age='" .$_POST["age"]. "',mobile='" .$_POST["mobile"]. "' ,address='" .$_POST["address"]. "' where email='" .$_SESSION["email"]. "'";

    $result = mysqli_query($con,$sql);
    //mysqli_close($con);
    ?>
       <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "index.php";
        </script>
    <?php
}
?>


</body>
</html>