<?php
  require "../include/connect.inc.php";


?>


<!DOCTYPE html>
<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	     <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
         <script src="js/jquery-3.2.1.min.js"></script>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
	<link rel="stylesheet" type="text/css" href="../styles/sign_up.css">
	<link rel="stylesheet" type="text/css" href="../styles/iestyle.css">
	<link rel="stylesheet" type="text/css" href="../styles/chromestyle.css">
	<title>Sign Up</title>
<style type="text/css">
	   											.no-js #loader {  display: none;  }
					                             .js #loader {     display: block; position: absolute; left: 100px; top: 0; }
					                             .se-pre-con {
					                                               position: fixed;
					                                               left: 0px;
					                                               top: 0px;
					                                               width: 100%;
					                                               height: 100%;
					                                               z-index: 99999;
					                                               background: white;
					                            }

					                            #welcom_msg {
					                            	               left: 49%;
					                                               top: 60%;
					                                               color: lightgreen;
					                                               position: fixed;
					                                               font-family: COMIC SANS MS;
					                                               text-shadow: 2px 2px 1px #FF0000, 1px 2px 8px #0000FF; color: #ffffff;             
								                            }     

								               
								               #pre_loader_img_icon {
								                               	left: 50%;
								                               	top: 50%;
								                               	position: fixed;
								                               	width: 35px;
																border: 2px solid white;
																border-radius: 35px;							
															   											                                                   
								                            }  

								                        .sticky {
					                                              position: fixed;
					                                              top: 0;
					                                              z-index: 9999;
					                                              width: 90%;
					                                              height: auto;
					                                              margin: auto;
					                                              overflow: none;
					                                              background: #393E41;

					                                          }

					      
					                           .sticky + .content {
					                                              padding-top: 102px;
					                                              }

					                            .sticky #header_list {
															       margin-top: -52px;
																   margin-left: 54px;
															  }

												.sticky  #header_img_con {
																	width: 45px;
																	border: 2px solid white;
																	border-radius: 35px;
																	border-bottom-color: orange;
																	z-index: 99999;
																	display: block;

																}



	   										</style>




					    <script type="text/javascript">
					    	// thsi the pre loader javascript code
							    //paste this code under the head tag or in a separate js file.
							    // Wait for window load
							    $(window).load(function() {
							        // Animate loader off screen
							        $(".se-pre-con").fadeOut("slow");;
							    }); 
				        </script>
</head>
<body>

	<div class="whole" >
		<!-- this a pre loader before the home page ---------------------->
		<div class="se-pre-con"><img class="image2" id="pre_loader_img_icon" src="../images/favicon.png"><p id="welcom_msg">Loading...<p></div>

	<div class="main_header">
			<a href="../index.php"><img id="logo_word" src="../images/logo_real.png" alt="Wrap Sender Logo" border="0">
				<a href=../index.php><img class="image2" id="header_img" src="../images/images.png"></a>

			</a>
			<div class="timerSty">

            <img id='clock' src='../images/clock.png'>
           <?php
                // date_default_timezone_set('Europe/Berlin');
                 $time =  time();
                 $time_now = date('H:i:s a, l F jS Y', $time);
                 //the timer was modified because the php timer function is going an hour back of Nigeria timer
                 $actual_time_modify = date('h:i:s a, l F jS Y', $time-3600);


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
			            <ul class="cal_nav">
							<li><a href="#"><img class="image2" id="header_img_call" src="../images/call.png"></a>
                                 <div class="call_dropdw">
										<ul>
											<li><a><img id="header_img_contact" src="../images/call.png">&nbsp;+2347060959269</a></li>
										</ul>
		                        </div>

							</li>
						  </ul>  
		
	</div>
		
	<nav>
	    <div class ="header_middle">
            <a href="#"><img class="image2" id="header_img_con" src="images/images.png"></a>
	          
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
					<a href="../index.php"><button id="get_sign_up_home_button">HOME</button></a>
					<a href="../log_in/index.php"><button id="get_login_home_button_tweak">LOGIN</button></a>
					
				</div>
		</div>
	</nav><br>
	

	<style type="text/css">
		
#sign_input_sty {
	padding:4px;
	border-radius: 10px;
	text-shadow: 2px 1px 1px white, 1px 2px 8px black; color: black;
	border-color: brown;
	width: 135%;
}

	</style>

<div id="sign_form">
	    	<form action="form.php" method="POST">
	    		<div id="cuty">
	            <table id="sort" width="900" align="center">

	               <tr align="center">                            
                        <td colspan="5" id="sign_sign"><h2>Sign Up Here</h2></td>
                   </tr>  
						    <b style="color:yellow; padding-right: 5px; padding-left: 5px; float: right;">*<span style="color: yellow; float: right;">&nbsp;Required Field</span></b>
				   <tr>
                        <td style="font-family: COMIC SANS MS; mar" align="right"><b>Your Name:</b><b style="color:yellow; padding-right: 5px; padding-left: 5px;">*</b></td>
                        <td><br><input id="sign_input_sty" size="50" type="text" name="mail_receiver" placeholder="Enter name..."  required><br><br></td>
                   </tr>
                    <tr>
                        <td style="font-family: COMIC SANS MS;" align="right"><b>Username:</b><b style="color:yellow; padding-right: 5px; padding-left: 5px;">*</b></td>
                        <td><br><input id="sign_input_sty" size="50" type="text" name="mail_subject" placeholder="Enter username"  required><br><br></td>
                   </tr>
                    <tr>
                        <td style="font-family: COMIC SANS MS;" align="right"><b>Organisation/Company:</b><b style="color:yellow; padding-right: 5px; padding-left: 5px;"></b></td>
                        <td><br><input id="sign_input_sty" size="50" type="text" name="mail_subject" placeholder="Enter organisation/company name" ><br><br></td>
                   </tr>
                    
                  
                    <tr>
                        <td style="font-family: COMIC SANS MS;" align="right"><b>Email:</b><b style="color:yellow; padding-right: 5px; padding-left: 5px;">*</b></td>
                        <td><br><input id="sign_input_sty" size="50" type="email" name="mail_sender" placeholder="Enter email(example: example@example.com)" ><br><br></td>
                   </tr>

                    <tr>
                        <td style="font-family: COMIC SANS MS;" align="right"><b>Password:</b><b style="color:yellow; padding-right: 5px; padding-left: 5px;">*</b></td>
                        <td><br><input id="sign_input_sty" size="50" type="password" name="mail_sender" placeholder="Enter password" ><br><br></td>
                   </tr>

                    <tr>
                        <td style="font-family: COMIC SANS MS;" align="right">*<b>Retype Password:</b><b style="color:yellow; padding-right: 5px; padding-left: 5px;">*</b></td>
                        <td><br><input id="sign_input_sty" size="50" type="password" name="mail_sender" placeholder="retype password" ><br><br></td>
                   </tr>

                   
						 
                  <tr align="center">
	                            <td colspan="5"  ><input id="sign_table_sub" type="submit" name="mail_submit" value="SIGN UP"></td>
	                   </tr>
			    </table>
			</div>
			</form>
	    </div>


	    <div class="footer">
	    	 <h3 style="text-align: center; padding-top: 30px; color: lightgreen; font-size: 12px;">&copy; 2018 by New~Era Group</h3>
	    	
	    </div>
</div>

<script>
            window.onscroll = function() {myFunction()};

           var header = document.getElementById("myHeader");
               var sticky = header.offsetTop;

                 function myFunction() 
                 {
                       if (window.pageYOffset >= sticky) {
                               header.classList.add("sticky");
                       } else {
                               header.classList.remove("sticky");
                       }
                 }


    </script>
</body>
</html>


























