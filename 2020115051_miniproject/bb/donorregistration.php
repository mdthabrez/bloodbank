<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="G Mohammed Thabrez (2020115051)" />
    <meta name="language" content="EN"/>
    <link rel="stylesheet" href="../css/style.css">
    <title>Bloodbank</title>
</head>
<body>
    
<?php include 'navbar.php' ?>

<div class="container">
     <form action="#" method="POST"  enctype="multipart/form-data">
     <table class="table" >

<tr><td colspan="2" class="headtd"><h1 class="title">Donor Registration</h1></td></tr>

<tr><td colspan="2">&nbsp;</td></tr>

<!--<tr><td class="lefttd">Username:</td><td class="lefttd"><input type="text" name="t0" required="required"/></td></tr>
-->
<tr><td class="lefttd">Donor Name:</td><td class="lefttd"><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{4,15}" title="please enter only character  between 4 to 15 for donor name" /></td></tr>

<tr><td class="lefttd">Gender</td><td class="lefttd"><input name="r1" type="radio" value="male" checked="checked">Male<input name="r1" type="radio" value="female" >Female</td></tr>

<tr><td class="lefttd">Age</td><td class="lefttd"><input type="number" name="t2" required="required" min="18" max="60" title="please enter age between 18 to 60 for donor age"/></td></tr>

<tr><td class="lefttd"> Blood Group </td><td class="lefttd"><select name="t4" required><option value="">Select</option>
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


<tr><td class="lefttd">E-Mail</td><td class="lefttd"><input type="email" name="t5" required="required" /></td></tr>

<tr><td class="lefttd">Password</td><td class="lefttd"><input type="password" name="t6" required="required"  minlength="6"/></td></tr>

<tr><td class="lefttd">Mobile No</td><td class="lefttd"><input type="number" name="t3" required="required"/></td></tr>

<tr><td class="lefttd">Address </td><td class="lefttd"><textarea name="address" id="address" cols="30" rows="10"></textarea></td></tr>

<tr><td class="lefttd">Uplode Pic</td><td class="lefttd"><input type="file" name="t8" /></td></tr>

<tr><td>&nbsp;</td><td class="lefttd"><input class="btn" type="submit" value="Register" name="sbmt" ></td></tr>


</table>
</form>
</div>


<?php include 'footer.php'; ?>

<?php

include 'config.php';

if(isset($_POST["sbmt"])) 
{
$target_dir = "../donorpics/";
$target_file = $target_dir . basename($_FILES["t8"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

$check = getimagesize($_FILES["t8"]["tmp_name"]);
if($check !== false) {
  //  echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
} else {
    echo "File is not an image.";
    $uploadOk = 0;
}

// Check if file already exists
if (file_exists($target_file)) {
echo "Sorry, file already exists.";
$uploadOk = 0;
}

// Check file size
if ($_FILES["t8"]["size"] > 500000) {
echo "Sorry, your file is too large.";
$uploadOk = 0;
}

//allow certain file formats
if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
    echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
    $uploadOk=0;
}

if ($uploadOk == 0){
    echo "Sorry, your file was not uploaded."; 
}
else{
    $s = "select email from donorregistration";
    $r = mysqli_query($con,$s);
    $userok=1;
    while($row = mysqli_fetch_assoc($r))
    {
        if($row['email']==$_POST['t5']){$userok=0;}
    }

    if($userok == 1){
    if(move_uploaded_file($_FILES["t8"]["tmp_name"], $target_file)){
    
        //$sql="insert into donorregistration(name,gender,age,mobile,b_id,email,pwd,pic) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["t6"] .  "','" . basename($_FILES["t8"]["name"])  ."')";
        $sql = "INSERT INTO donorregistration(
            name,
            gender,
            age,
            b_id,
            email,
            pwd,
            mobile,
            address,
            pic
        )
        VALUES(
            '" . $_POST["t1"] ."',
            '" . $_POST["r1"] ."',
            '" . $_POST["t2"] ."',
            '" . $_POST["t4"] ."',
            '" . $_POST["t5"] ."',
            '" . $_POST["t6"] ."',
            '" . $_POST["t3"] ."',
            '" . $_POST["address"] ."',
            '" . basename($_FILES["t8"]["name"]) ."'
        )";


        mysqli_query($con,$sql);

        mysqli_close($con);
        if($sql!=NULL)
        {
        echo "<script>alert('Donor Registered.');</script>";
        }
        else{
                echo "sorry there was an error uploading your file.";
                echo " window.location = 'donor/index.php';";
            }
    }
    }
    else{echo "<script>alert('This E-mail already has an account.');</script>";}
	
}
}



?>    
</body>
</html>