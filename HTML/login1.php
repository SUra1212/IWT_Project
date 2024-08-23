<?php

   include_once 'login.php';
   
?>

<!DOCTYPE html>
<html>
<head>
  <title>OUTBACK ADVENCTURE SAFARIS</title>

<link rel="stylesheet" type="text/css" href="../CSS/login1.css">

<style>
  body{
  background:url(../IMAGES/chathu.jpg);
   background-position: center;
   background-size: cover;
   font-family: Arial;
   margin-top: 80px;
  }
  
</style>
</head>

<body>
<div class="navbar">
  <img class="imglogo" src="../IMAGES/logo.jpeg">
  <a href="home_page.html">Home</a>
  <a href="Gallery.html">Gallery</a>
  <a href="Contact Us.html">Contact Us</a>

      <div class="dropdown">
        <button class="dropbtn">Wild Life Tours 
        <i class="fa fa-caret-down"></i>
        </button>
          <div class="dropdown-content">
            <a href="packages.html">Packages</a>
            <a href="Offers.html">Offers</a>
          </div>
      </div> 
  <a href="Inquiry Form.html">Inquire Now</a>
  <a href="login.html">Login</a>
  <a href="registation_form.html">Register</a>
    </div>
<!--------------------------------------------------------------------------Header-------------------------------------------------------------------->

<center>
	
	
	
	<div class="login1">
	    <table border="1" width="60%" style="background-color:#E6E6FA; border-color:black">
	     
		<tr>
		   <th class="col1"> Login Id </th>
		   <th class="col2"> Email </th>
		   
        </tr>
	
		
	 <?php
	 
	 $sql="select * from login";
	 $result = $conn->query($sql);
	 
	 if($result->num_rows>0){
		
        while( $row=$result->fetch_assoc()    )
		{
	echo"<tr><td>".$row["login_ID"]."</td><td>".$row["Email"]."</td></tr>";
	
        }
		
		 
	 }
	 else{
		 
	echo "0 result"	 ;
		 
		 
	 }
	 
	 
	 $conn->close();
	 ?>
	 
		
		</table>
	
	</div>
	</center>




 <!---------------------------------------------footer-------------------------------------------------------------->

            <div class="fgridrow">


                <div class="ftupper">


                    <div class="dlo">

                            <img class="im2" src="../IMAGES/logo.jpeg">
            
                    </div><!--dlo-->
            

                    <div class="ftupper-about">

                        <div class="abt">
                            About
                        </div><!--abt-->
                            
                        <div class="abtde">

                            <ul>

                                <li><a href="About Us.html">About Us</a></li>
                                <li><a href="Vacancies.html">Contact Us</a></li>
                                <li><a href="privacy_policy.html">Privacy Policy</a></li>
                                <li><a href="terms of service.html">Terms of Service</a></li>
                            </ul>
                        </div><!--abtde-->
                    </div><!--ftupper-->

        


                    <div class="ftupper-cantact-form">  
                        <div class="follow">
                            Follow Us
                        </div>
                        <div class="fol">
                            <ul>
                                 <li><a href="https://www.facebook.com/"><img src="../IMAGES/fb.png" ></a></li>
                                <li><a href="https://twitter.com/login?lang=en"><img src="../IMAGES/twt.png" ></a></li>
                                <li><a href="https://myaccount.google.com/"><img src="../IMAGES/ggl.png" ></a></li>
                                <li><a href="https://www.instagram.com/accounts/login/?hl=en"><img src="../IMAGES/int.png" ></a></li>
                            </ul>    
                        </div><!--fol-->    

                        <div class="quection">
                              <h3>    Safety First </h3>
                        </div>

                        <div class="que">
                            <ul><br>
                                <li><a href="covid.html"><h4> Covid 19 Update </h4></a></li>
                              
                            </ul>

                        </div>

                    </div><!--ftupper-contact-form-->

                </div><!--ftupper-->


                <div class="ftdown">
                    &copy;OutBackAdventuer.lk | Designed and Developed by Team
                </div><!--ftdown-->


            </div><!--e1-->


        </div><!--a1-->


</body>
</html> 
