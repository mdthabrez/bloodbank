<?php
   if(isset($_COOKIE['email']) and isset($_COOKIE['password']))
   {
        header("Location: bb/login.php");

   } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="G Mohammed Thabrez (2020115051)" />
    <meta name="language" content="EN"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Bloodbank</title>
</head>
<body>

<nav class="navbar">
        <div class="logo"><img src="img/logo.png" alt="logo"> <h1>Bharatiya Blood Bank</h1></div>
        <ul class="nav-list ">
            <li><a href="index.php">Home</a></li>
            <li><a href="bb/donorregistration.php">Become A Donor</a></li>
            <li><a href="bb/sendrequests.php">Send Requests</a></li>
            <li><a href="bb/viewrequests.php">View Requests</a></li>
            <li><a href="bb/contact.php">Contact Us</a></li>  
            <li><a href="bb/login.php">Log In</a></li>    
        </ul>
    </nav>
    <section class="secLeft">
    <div class="paras"><img src="img/welcome.png" alt="Welcome"></div>    
    <div class="paras ">
    <h3>The Blood</h3> 
    <p class="sectionSubTag">Blood is universally recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. More than 29 million units of blood components are transfused every year. Donate Blood Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility. We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.</p>
    </div>
    </section>
    
    <section class="secLeft">
    <div class="paras"><img src="img/doc.png" alt="Welcome"></div>
    <div class="paras ">
    <h3>Blood Bank:</h3> 
    <p class="sectionSubTag">We welcome you to in our WebSite. If you are a donor , We appreciate you <a href="bb/donorregistration.php" class="clickhere">signing up </a> as a Donor. If you need blood we are happy to serve you. This blood donor list is hosted by Bharatiyabloodbank.com on behalf of "Bharatiya Blood Bank" as a public service without any profit motive.This is a free service. While the Organisers have taken all steps to obtain accurate and up-to-date information of potential blood donors, the Organisers and ICM Computers do not guarantee accuracy of the information contained herein or the suitability of the persons listed as any liability for direct or consequential damage to any person using this blood donor list including loss of life or damage due to infection of any nature arising out of blood transfusion from persons whose names have been listed in this website. We request donors to update contact details regularly.</p>
    </div>
    </section>
    <p class="space" style="background-color: antiquewhite;"></p>
    <footer class="background">
    <p class="text-footer">
    Copyright &copy; 2027 - All rights reserved.
    </p>
    </footer>
</body>
</html>
