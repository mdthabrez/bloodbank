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
     <form action="dcontact.php" method="POST">
     <table class="table" >

<tr><td colspan="2" class="headtd"><h1 class="title">Contact Us</h1></td></tr>

<tr><td colspan="2">&nbsp;</td></tr>

<tr><td class="lefttd">Name:</td><td class="lefttd"><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{4,15}" title="please enter only character  between 4 to 15 for donor name" /></td></tr>

<tr><td class="lefttd">Mobile No:</td><td class="lefttd"><input type="number" name="t3" required="required"  /></td></tr>

<tr><td class="lefttd">E-Mail:</td><td class="lefttd"><input type="email" name="t5" required="required" /></td></tr>


<tr><td class="lefttd">Subject:</td><td class="lefttd"><textarea name="subject" id="subject" cols="30" rows="10"></textarea></td></tr>

<tr><td>&nbsp;</td><td class="lefttd"><input class="btn" type="submit" value="Send" name="submit" ></td></tr>

</table>
</form>
</div>

<?php include 'footer.php'; ?>

<?php

include 'config.php';

if(isset($_POST['submit']))
{  echo "hi";
    $sql = "insert into contacts(name,mobile,email,subject) 
    values(
    '".$_POST['t1']."',
    '".$_POST['t3']."',
    '".$_POST['t5']."',
    '".$_POST['subject']."'
        )" ;

    $result = mysqli_query($con,$sql);
    mysqli_close($con);
    if($result>0){
        echo "<script>alert('Message Sent');</script>";
        }
        else{
            echo "error";
        }
}


?>

</body>
</html>
