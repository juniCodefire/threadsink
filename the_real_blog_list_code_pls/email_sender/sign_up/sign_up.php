<?php
  require "../include/connect.inc.php";


?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
	<link rel="stylesheet" type="text/css" href="../styles/iestyle.css">
	<link rel="stylesheet" type="text/css" href="../styles/chromestyle.css">
	<title>Sign Up</title>
</head>
<body>
<div class="whole">

	<div class="main_header">
			<a href="#"><img id="logo_word" src="../images/logo_real.png" alt="Wrap Sender Logo" border="0">
				<a href="#"><img class="image2" id="header_img" src="../images/images.png"></a>

			</a>
			<div class="timerSty">

            <img id='clock' src='../images/clock.png'>
           <?php
                // date_default_timezone_set('Europe/Berlin');
                 $time =  time();
                 $time_now = date('H:i:s a, l F jS Y', $time);
                 //the timer was modified because the php timer function is going an hour back of Nigeria timer
                 $actual_time_modify = date('H:i:s a, l F jS Y', $time-3600);


                /* Echos the date
            h : 12 hr format
            H : 12 hr format
            i : Minutes
            s : Seconds
            u : Microseconds
            a : Lowercase am or pm
            l : Full text for the day
            F : Full text for the month
            j : Day of the month
            S : Suffix for the day st, nd, rd, etc
            Y : 4 digit y
                */
              echo "<b>";
             //  echo date('h:i:s a, l F jS Y ');
             
               echo $actual_time_modify;
               echo "</b>";
               


              ?> 
          </div>
			<div id="header">

						<a href="#"><img class="image2" id="header_img_call" src="../images/call.png"></a>		
		   </div>   
		
	</div>
		
	<nav>
	    <div id="header_middle">

	          
				<div id="header_list">
					<ul class="header_nav">
						<li><a id="header_ul" href="#"><img id="header_img_contact" src="../images/paper-plane.png"> Send a Mail</a></li>
						<li><a href="#"><img id="header_img_contact" src="../images/send.png"> Your Sent Mail</a></li><!--pricing -->
						<li><a href="#"><img id="header_img_contact" src="../images/cen.jpg"> Your Contact List</a></li><!--blog -->
						<li><a href="#"><img id="header_img_contact" src="../images/call.png"> Contact Us</a></li>
						<li><a href="#" id="cat"><img id="header_img_contact" src="../images/advert.png"> Categories</a>
							<div class="menu_dropdw">
									<ul>
										<li><a><img id="header_img_contact" src="../images/advert.png"> Private</a></li>
										<li><a href=""><img id="header_img_contact" src="../images/advert.png"> Public</a></li>
										<li><a href=""><img id="header_img_contact" src="../images/advert.png"> Social</a></li>
										<li><a href=""><img id="header_img_contact" src="../images/advert.png"> Single</a></li>
										<li><a href=""><img id="header_img_contact" src="../images/advert.png"> Bulk</a></li>
										<li><a href=""><img id="header_img_contact" src="../images/advert.png"> Event</a></li>
										<li><a href=""><img id="header_img_contact" src="../images/advert.png"> Business</a></li>
										<li><a href=""><img id="header_img_contact" src="../images/advert.png"> News</a></li>
										<li><a href=""><img id="header_img_contact" src="../images/advert.png"> Institution</a></li>
									</ul>
	                        </div>

						</li>
					</ul>			
				</div>
				<div id="header">
					<a href="sign_up/index.php"><button id="get_sign_up_button">Sign up</button></a>
					<a href=""><button id="get_login_button">Login</button></a>
					
				</div>
		</div>
	</nav><br>

<div id="sign_form">
	    	<form action="form.php" method="POST">
	    		<div id="cuty">
	            <table id="sort" width="900" align="center">

	               <tr align="center">                            
                        <td colspan="5" style="text-align: center; text-shadow: 2px 2px 1px lightgrey, 100px 241px 810px blue; color: grey; font-family: COMIC SANS MS; padding-right: 150px;"><h2>Sign Up Here</h2></td>
                   </tr>  
						    <b style="color:red; padding-right: 5px; padding-left: 5px;">* <span style="color: black;">Required Field</span></b>
				   <tr>
                        <td style="font-family: COMIC SANS MS;" align="right"><b>Your Name:</b></td>
                        <td><br><b style="color:red; padding-right: 5px; padding-left: 5px;">*</b><input id="sign_input_sty" type="text" name="mail_receiver" placeholder="Enter name"  required><br><br></td>
                   </tr>
                    <tr>
                        <td style="font-family: COMIC SANS MS;" align="right"><b>Username:</b></td>
                        <td><br><b style="color:red; padding-right: 5px; padding-left: 5px;">*</b><input id="sign_input_sty" type="text" name="mail_subject" placeholder="Enter username"  required><br><br></td>
                   </tr>
                    <tr>
                        <td style="font-family: COMIC SANS MS;" align="right"><b>Organisation/Company Name:</b></td>
                        <td><br><b style="color:red; padding-right: 5px; padding-left: 5px;">*</b><input id="sign_input_sty" type="text" name="mail_subject" placeholder="Organisation/Company name"  required><br><br></td>
                   </tr>
                    
                  
                    <tr>
                        <td style="font-family: COMIC SANS MS;" align="right"><b>Email:</b></td>
                        <td><br><b style="color:red; padding-right: 5px; padding-left: 5px;">*</b><input id="sign_input_sty" type="text" name="mail_sender" placeholder="Email" ><br><br></td>
                   </tr>

                    <tr>
                        <td style="font-family: COMIC SANS MS;" align="right"><b>Password:</b></td>
                        <td><br><b style="color:red; padding-right: 5px; padding-left: 5px;">*</b><input id="sign_input_sty" type="text" name="mail_sender" placeholder="Password" ><br><br></td>
                   </tr>

                    <tr>
                        <td style="font-family: COMIC SANS MS;" align="right">*<b>Retype Password:</b></td>
                        <td><br><b style="color:red; padding-right: 5px; padding-left: 5px;">*</b><input id="sign_input_sty" type="text" name="mail_sender" placeholder="Retype Password" ><br><br></td>
                   </tr>

                   
						 
                   <tr align="center">
                            <td colspan="5" style=" padding-right: 155px;" ><input id="sign_table_sub" type="submit" name="mail_submit" value="Send"></td>
                   </tr>  	
				  	
			    </table>
			</div>
			</form>
	    </div>


	    <div class="footer">
	    	 <h3 style="text-align: center; padding-top: 30px; color: lightgreen; font-size: 12px;">&copy; 2018 by New~Era Group</h3>
	    	
	    </div>

</body>
</html>


























