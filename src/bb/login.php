<?php session_start();  ?>
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



<?php 
include 'config.php';
include 'navbar.php';
$_SESSION['donorstatus']="";
if(isset($_COOKIE['email']) and isset($_COOKIE['password']) )
{
if($_COOKIE['email'] != NULL and $_COOKIE['password'] != NULL)
{
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];
    $sql = "select * from donorregistration where email='" . $email . "' and pwd='" .$password . "'";
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
	$r=mysqli_num_rows($result);
    if($r==1)
    {
        $_SESSION["email"]=$row["email"];
        $_SESSION['donorstatus']="yes";
        ?>
        <script>
       //alert('Successfully Log In thru cookies <?php //echo $_COOKIE['email'];  ?>');
       document.location='donor/index.php'
     </script>
     <?php
    }

}
}

if(isset($_POST['submit']))
{
    $sql = "select * from donorregistration where email='" . $_POST["email"] . "' and pwd='" .$_POST["password"] . "'";
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
	$r=mysqli_num_rows($result);
    $_SESSION["email"]=$row["email"];
    $_SESSION['donorstatus']="yes";

	//mysqli_close($con);
	if($r>0)
	{   if(isset($_POST['remember']))
        {
            setcookie ("email",$_POST["email"],time()+ 86400,"/");
	        setcookie ("password",$_POST["password"],time()+ 86400,"/");
	        echo "Cookies Set Successfuly";
        }
        ?>
        <script>
       alert('Successfully Logged In');
       document.location='donor/index.php'
     </script>
     <?php
	   
       
	}
	else
	{
		echo "<script>alert('Invalid E-mail Or Password');</script>";
	}
		
		}
?>
<div class="container">
     <form action="#" method="POST" >
     <table class="table" >
     <tr><td colspan="2" class="headtd"><h1 class="title">Donor Log In</h1></td></tr>

<tr><td colspan="2">&nbsp;</td></tr>

<tr><td class="lefttd">E-mail:</td><td class="lefttd"><input type="email" name="email" id="email" required="required"></td></tr>

<tr><td class="lefttd">Password:</td><td class="lefttd"><input type="password" name="password" id="password" required="required"></td></tr>

<tr><td>&nbsp;</td><td class="lefttd"><input type="checkbox" name="remember" id="remember">&nbsp;Remember Me</td></tr>

<tr><td>&nbsp;</td><td class="lefttd"><input class="btn" type="submit" value="Log In" name="submit" ></td></tr>

<tr><td class="headtd" colspan="2">Not A Donor? <a class="clickhere" href="donorregistration.php">Click Here</a> To Register</td></tr>

     </table>
     </form>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
