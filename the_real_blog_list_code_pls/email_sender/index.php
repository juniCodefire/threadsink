<!DOCTYPE html>
<html>
<head>
	<title>Wrap Mail Sender</title>
	     	   <meta charset="utf-8">
			   <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
				<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
				<meta name="HandheldFriendly" content="true">
			   <meta name="desciption" content="professional and affordable coaching">
			   <meta name="keyword" content="coaching, affordable coaching,">
			   <meta name="author" content="okechukwu david">
		 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	     <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
         <script src="js/jquery-3.2.1.min.js"></script>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	   <link rel="stylesheet" type="text/css" href="styles/style.css">
	   <link rel="stylesheet" type="text/css" href="styles/iestyle.css">
	   <link rel="stylesheet" type="text/css" href="styles/chromestyle.css">
	   <link rel="stylesheet" type="text/css" href="styles/section_2.css">
	   <link rel="stylesheet" type="text/css" href="styles/respond_size.css">

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
					                                               display: none;
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
display: none;
															   											                                                   
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
																	z-index: 9999;
																	display: block;

																}

														
											 .sticky	#up_sty {
													        		width: 5%;
													        	    margin-top: 37%;
													        	    position: fixed;
													        	    margin-left: 90%;
													        	    z-index: 999;
													        	    border-radius: 5px;
													        	    display: block;
													        	}


                                                                                                     	
					 	/* Chrome only: */
				         @media all and (-webkit-min-device-pixel-ratio:0) and (min-resolution: .001dpcm) { 
				               
                                                .sticky	#up_sty    {
													        		width: 5%;
													        	    margin-top: 39%;
													        	    position: fixed;
													        	    margin-left: 90%;
													        	    z-index: 999;
													        	    border-radius: 5px;
													        	    display: block;
													        	}
																		
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

					        <style type="text/css">
					        	#up_sty {
					        		width: 5%;
					        	    margin-top: 29%;
					        	    position: fixed;
					        	    margin-left: 90%;
					        	    z-index: 999;
					        	    border-radius: 5px;
					        	    display: none;
					        	}

					        	
					        </style>

    

	<div class="whole" >
		<!-- this a pre loader before the home page ---------------------->
		<div class="se-pre-con"><img class="image2" id="pre_loader_img_icon" src="images/favicon.png"><p id="welcom_msg">Loading...<p></div>

		<div class="main_header">
				<a href="#"><img id="logo_word" src="images/logo_real.png" alt="Wrap Sender Logo" border="0">
					<a href="#"><img class="image2" id="header_img" src="images/images.png"></a>

				</a>
				<div class="timerSty">

	            <img id='clock' src='images/clock.png'>
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
							<li><a href="#"><img class="image2" id="header_img_call" src="images/call.png"></a>
                                 <div class="call_dropdw">
										<ul>
											<li><a><img id="header_img_contact" src="images/call.png">&nbsp;+2347060959269</a></li>
										</ul>
		                        </div>

							</li>
						  </ul>   
			
		</div>
			
		<nav>
		    <div id="myHeader" class="header_middle" >
                 <a href="#"><img class="image2" id="header_img_con" src="images/images.png"></a>
		          
					<div id="header_list">
						<ul class="header_nav">
							<li><a id="header_ul" href="#"><img id="header_img_contact" src="images/paper-plane.png"> Send a Mail</a></li>
							<li><a href="#"><img id="header_img_contact" src="images/send.png"> Your Sent Mail</a></li><!--pricing -->
							<li><a href="#"><img id="header_img_contact" src="images/cen.jpg"> Your Contact List</a></li><!--blog -->
							<li><a href="#"><img id="header_img_contact" src="images/call.png"> Contact Us</a></li>
							<li><a href="#" id="cat"><img id="header_img_contact" src="images/advert.png"> Categories</a>
								<div class="menu_dropdw">
										<ul>
											<li><a><img id="header_img_contact" src="images/advert.png"> Private</a></li>
											<li><a href=""><img id="header_img_contact" src="images/advert.png"> Public</a></li>
											<li><a href=""><img id="header_img_contact" src="images/advert.png"> Social</a></li>
											<li><a href=""><img id="header_img_contact" src="images/advert.png"> Single</a></li>
											<li><a href=""><img id="header_img_contact" src="images/advert.png"> Bulk</a></li>
											<li><a href=""><img id="header_img_contact" src="images/advert.png"> Event</a></li>
											<li><a href=""><img id="header_img_contact" src="images/advert.png"> Business</a></li>
											<li><a href=""><img id="header_img_contact" src="images/advert.png"> News</a></li>
											<li><a href=""><img id="header_img_contact" src="images/advert.png"> Institution</a></li>
										</ul>
		                        </div>

							</li>
						</ul>			
					</div>
					<div id="header">
						<a href="#logo_word"><img  id ="up_sty" src="images/up.jpg"></a>
						<a href="sign_up/index.php"><button id="get_sign_up_button">SIGN UP</button></a>
						<a href="log_in/index.php"><button id="get_login_button">LOGIN</button></a>
						
					</div>
			</div>
		</nav>
			<section class="section_1">
				
				
					<div id="showcase">
				          <div id="showcase_head_word"><h1>Welcome, Let's Get Started</h1></div>

				          <div id="notice">
			                   <p>An online platform where you can send mail at your covienent and style...We are certainly the best... </p>
			                   <img src="">
			              </div>

				          <div class="show_case_info"><p>The number one online mail sender</p><img id="showcase_img_icon" src="images/forward_2.png"><a href="registration.php"><button id="get_started_button">Get Started</button></a>
				          </div>

			        </div>			
			</section>

              

			<div class="container">

			    <div id="bottom_showcase">
			       <div id="bottom_showcase1">
			        	<p id="word">Use <span class="site_name1">Wrap Sender</span> to send <span class="site_name2">Business</span>, <span class="site_name3">Personal</span>, Single or Bulk, <span class="site_name4">Public,</span>  <span class="site_name5">News </span>, <span class="site_name6">Social</span>, Events emails...</p>

			        	<div class="prove"><img id="header_img_con" class="image1" src="images/images.png" alt="My-Mail-Sender" ></div>
			       </div>

			        <a><div id="bottom_showcase2">
			        	<p id="advert_link1">Advertize Here</p>
			        	<img id="advertize_1_img" src="images/b.jpg">
			        	
			           </div>
			        </a>

			       
			        <div id="advertize_1">
			        	<p class="ad_new"><img id="giphy" src="images/giphy.gif"></p>
			        </div>
			   </div>


		   <div class="crack">
			    <div id="coner_rite">
			    	<div id="coner_rite_btn">
			    		<p>
			    			<img id="header_img_contact" src="images/arrow_right.png">
			    			<img id="header_img_contact" src="images/arrow_right.png">
			    			<img id="header_img_contact" src="images/arrow_right.png">
			    			<span id="guideline">Click here to see guideline...</span>
			    			<button id="tap_icon">How to </button>
		               </p>

		            </div>
			    	
			    </div>
		    
			    <style type="text/css">
			    	 #input_textarea_sty {
	      	           width: 46%;
	                  }
	                  #input_reg_sty {
	                    padding:4px;
	                    border-radius: 10px;
	                    text-shadow: 2px 1px 1px white, 1px 2px 8px black; color: black;
	                    border-color: brown;
	                    width: 90%;
	                  }

	                  #input_sty {
						padding:4px;
						border-radius: 10px;
						text-shadow: 2px 1px 1px white, 1px 2px 8px black; color: black;
						border-color: brown;
						width: 45%;
						
					}
			    </style>

			    <div id="email_form">
			    	<form action="form.php" method="POST">
			    		<div id="cuty">
			            <table id="table" width="900" align="center">

			               <tr align="center">                            
		                        <td colspan="5" id="header_email"><h2>Send Mail Here</h2></td>
		                   </tr>  
								    <b style="color:yellow; padding-right: 5px; padding-left: 5px;">* <span style="color: yellow;">Required Field</span></b>
						   <tr>
		                        <td style="font-family: sans-serif;" align="right"><b>Receiver Mail:</b></td>
		                        <td><br><b style="color:yellow; padding-right: 5px; padding-left: 5px;">*</b><input id="input_sty" type="text" name="mail_receiver" placeholder="Receiver's mail" size="38"  required><br><br></td>
		                   </tr>
		                    <tr>
		                        <td style="font-family: sans-serif;" align="right"><b>Subject:</b></td>
		                        <td><br><b style="color:yellow; padding-right: 5px; padding-left: 5px;">*</b><input id="input_sty" type="text" name="mail_subject" placeholder="Your subject" size="38"  required><br><br></td>
		                   </tr>
		                    <tr>
		                        <td style="font-family: sans-serif;" align="right"><b>Header:</b></td>
		                        <td><br><b style="color:yellow; padding-right: 5px; padding-left: 5px;">*</b><input id="input_sty" type="text" name="mail_subject" placeholder="Header" size="38"  required><br><br></td>
		                   </tr>
		                    
		                  
		                    <tr>
		                        <td style="font-family: sans-serif;" align="right"><b>Sender Mail:</b></td>
		                        <td><br><b style="color:yellow; padding-right: 18px;"></b><input id="input_sty" type="text" name="mail_sender" placeholder="sender's mail" size="38"><br><br></td>
		                   </tr>
		                    <tr>
		                        <td style="font-family: sans-serif;" align="right"><b>Message_mail:</b></td>
		                        <td><br><b style="color:yellow; padding-right: 5px; padding-left: 5px;">*</b><textarea id="input_textarea_sty" name="message_mail" placeholder="Type a message" cols="55" rows="10"></textarea><br><br></td>
		                   </tr>
								   	
								 
		                   <tr align="center">
		                            <td colspan="5"><input id="table_sub" type="submit" name="mail_submit" value="Send"></td>
		                   </tr>  	
						  	
					    </table>
					</div>
					</form>
			    </div>

		       <div id="coner_rite2">
			    	<form action="" method="POST" enctype="multipart/form-data">
			    		 <div class="receiver_reg_sty">
			    		 	<p class="ad_new1">Add New Contact Mail Here</p>
			    		 	<label>Enter Name:</label>
				    		<p id="pick"><input id="input_reg_sty" type="text" name="receiver_reg_name" placeholder="Enter name" size="38"></p>
				    		<label>Enter Email:</label>
				    		<p id="pick"><input id="input_reg_sty" type="email" name="receiver_reg_email" placeholder="Enter email" size="38"></p>
				    		<label>Insert image:</label>
				    		<p id="pick"><input id="receiver_reg_img_sty" type="file" name="receiver_reg_image"></p>
				    		<input id="corner_btn" type="submit" name="receiver_reg_submit" value="Submit">
				    		<li id="goto_list"><a href="#">View contact list</a></li>
				    	</div>	
			    	</form>

			    </div>

			   <iframe scrolling="no"  id="coner_rite3" src="facebook.com">
			    	
			   </iframe>

			   <div id="coner_rite4">
			   	   <p id="advert_link2">Advertize Here</p>	
			   	    <img id="coner_rite4_advert" src="images/h.jpg">
			    	
			    </div>


			     <div id="coner_rite5">
			    	
			    </div>
		         

		         <div id="coner_rite6">
			    	<p id="advert_link3">Advertize Here</p>	
			    	<img id="coner_rite6_advert" src="images/h.jpg">

			    </div>

			    <div id="coner_rite7">
			    	<p id="advert_link4">Advertize Here</p>	
                    <img id="coner_rite7_advert" src="images/h.jpg">
			    </div>
	<!-------------------------------------------------------2nd secction---------------------------------------------------------->
	       <div class="bonus">
				<div id="section_2">
					       <div id="section_pad">
					        	<p id="word">Discover the  emails...</p>

					        	<div class="prove"><img id="header_img_con" class="image1-2" src="images/images.png" alt="My-Mail-Sender" ></div>
					       </div>
                      <a><div id="bottom_showcase2">
			        	<p id="advert_link1">Advertize Here</p>
			        	<img  id="advertize_1_img" src="images/b.jpg">
			        	
			           </div>
			          </a>

					        <div id="advertize_1">
					        	<p class="ad_new"><img id="giphy" src="images/giphy.gif"></p>
					        </div>


			     </div>
				   <div class="crack">
					    <div id="coner_rite">
					    	<div id="coner_rite_btn">
					    		<p>
					    			<img id="header_img_contact" src="images/arrow_right.png">
					    			<img id="header_img_contact" src="images/arrow_right.png">
					    			<img id="header_img_contact" src="images/arrow_right.png">
					    			<span id="guideline">Click here to see guideline...</span>
					    			<button id="tap_icon">How To </button>
				               </p>

				            </div>
					    	
					    </div>
				  </div>



			    <div id="email_form">
			    	<form action="form.php" method="POST">
			    		<div id="cuty">
			            <table id="table" width="900" align="center">

			               <tr align="center">                            
		                        <td colspan="5" id="header_email"><h2>Send Mail Here</h2></td>
		                   </tr>  
								    <b style="color:yellow; padding-right: 5px; padding-left: 5px;">* <span style="color: yellow;">Required Field</span></b>
						   <tr>
		                        <td style="font-family: sans-serif;" align="right"><b>Receiver Mail:</b></td>
		                        <td><br><b style="color:yellow; padding-right: 5px; padding-left: 5px;">*</b><input id="input_sty" type="text" name="mail_receiver" placeholder="Receiver's mail" size="38"  required><br><br></td>
		                   </tr>
		                    <tr>
		                        <td style="font-family: sans-serif;" align="right"><b>Subject:</b></td>
		                        <td><br><b style="color:yellow; padding-right: 5px; padding-left: 5px;">*</b><input id="input_sty" type="text" name="mail_subject" placeholder="Your subject" size="38"  required><br><br></td>
		                   </tr>
		                    <tr>
		                        <td style="font-family: sans-serif;" align="right"><b>Header:</b></td>
		                        <td><br><b style="color:yellow; padding-right: 5px; padding-left: 5px;">*</b><input id="input_sty" type="text" name="mail_subject" placeholder="Header" size="38"  required><br><br></td>
		                   </tr>
		                    
		                  
		                    <tr>
		                        <td style="font-family: sans-serif;" align="right"><b>Sender Mail:</b></td>
		                        <td><br><b style="color:yellow; padding-right: 18px;"></b><input id="input_sty" type="text" name="mail_sender" placeholder="sender's mail" size="38"><br><br></td>
		                   </tr>
		                    <tr>
		                        <td style="font-family: sans-serif;" align="right"><b>Message_mail:</b></td>
		                        <td><br><b style="color:yellow; padding-right: 5px; padding-left: 5px;">*</b><textarea id="input_textarea_sty" name="message_mail" placeholder="Type a message" cols="55" rows="10"></textarea><br><br></td>
		                   </tr>
								   	
								 
		                   <tr align="center">
		                            <td colspan="5"><input id="table_sub" type="submit" name="mail_submit" value="Send"></td>
		                   </tr>  	
						  	
					    </table>
					</div>
					</form>
			    </div>
		       <div id="coner_rite2">
			    	<form action="" method="POST" enctype="multipart/form-data">
			    		 <div class="receiver_reg_sty">
			    		 	<p class="ad_new1">Add New Contact Mail Here</p>
			    		 	<label>Enter Name:</label>
				    		<p id="pick"><input id="input_reg_sty" type="text" name="receiver_reg_name" placeholder="Enter name" size="38"></p>
				    		<label>Enter Email:</label>
				    		<p id="pick"><input id="input_reg_sty" type="email" name="receiver_reg_email" placeholder="Enter email" size="38"></p>
				    		<label>Insert image:</label>
				    		<p id="pick"><input id="receiver_reg_img_sty" type="file" name="receiver_reg_image"></p>
				    		<input id="corner_btn" type="submit" name="receiver_reg_submit" value="Submit">
				    		<li id="goto_list"><a href="#">View contact list</a></li>
				    	</div>	
			    	</form>

			    </div>

			   <iframe scrolling="no"  id="coner_rite3" src="facebook.com">
			    	
			   </iframe>

			  <div id="coner_rite4">
			  	    <p id="advert_link2">Advertize Here</p>	
			   	    <img id="coner_rite4_advert" src="images/h.jpg">
			    	
			    </div>


			     <div id="coner_rite5">
			    	
			    </div>
		         

		         <div id="coner_rite6">
			    	<p id="advert_link3">Advertize Here</p>	
			    	<img id="coner_rite6_advert" src="images/h.jpg">

			    </div>

			    <div id="coner_rite7">
			    	<p id="advert_link4">Advertize Here</p>	
                    <img id="coner_rite7_advert" src="images/h.jpg">
			    </div>
		    </div>

	<!-------------------------------------------------------section 3-------------------------------------------------------->


	<div class="bonus">
				<div id="section_2">
					       <div id="section_pad">
					        	<p id="word">Discover the  emails...</p>

					        	<div class="prove"><img id="header_img_con" class="image1-2" src="images/images.png" alt="My-Mail-Sender" ></div>
					       </div>

					        <a><div id="bottom_showcase2">
			        	       <p id="advert_link1">Advertize Here</p>
			        	      <img  id="advertize_1_img" src="images/b.jpg">
			        	
			                  </div>
			                </a>

					        <div id="advertize_1">
					        	<p class="ad_new"><img id="giphy" src="images/giphy.gif"></p>
					        </div>


			     </div>
				   <div class="crack">
					    <div id="coner_rite">
					    	<div id="coner_rite_btn">
					    		<p>
					    			<img id="header_img_contact" src="images/arrow_right.png">
					    			<img id="header_img_contact" src="images/arrow_right.png">
					    			<img id="header_img_contact" src="images/arrow_right.png">
					    			<span id="guideline">Click here to see guideline...</span>
					    			<button id="tap_icon">How To </button>
				               </p>

				            </div>
					    	
					    </div>
				  </div>


				  
			    <div id="email_form">
			    	<form action="form.php" method="POST">
			    		<div id="cuty">
			            <table id="table" width="900" align="center">

			               <tr align="center">                            
		                        <td colspan="5" id="header_email"><h2>Send Mail Here</h2></td>
		                   </tr>  
								    <b style="color:yellow; padding-right: 5px; padding-left: 5px;">* <span style="color: yellow;">Required Field</span></b>
						   <tr>
		                        <td style="font-family: sans-serif;" align="right"><b>Receiver Mail:</b></td>
		                        <td><br><b style="color:yellow; padding-right: 5px; padding-left: 5px;">*</b><input id="input_sty" type="text" name="mail_receiver" placeholder="Receiver's mail" size="38"  required><br><br></td>
		                   </tr>
		                    <tr>
		                        <td style="font-family: sans-serif;" align="right"><b>Subject:</b></td>
		                        <td><br><b style="color:yellow; padding-right: 5px; padding-left: 5px;">*</b><input id="input_sty" type="text" name="mail_subject" placeholder="Your subject" size="38"  required><br><br></td>
		                   </tr>
		                    <tr>
		                        <td style="font-family: sans-serif;" align="right"><b>Header:</b></td>
		                        <td><br><b style="color:yellow; padding-right: 5px; padding-left: 5px;">*</b><input id="input_sty" type="text" name="mail_subject" placeholder="Header" size="38"  required><br><br></td>
		                   </tr>
		                    
		                  
		                    <tr>
		                        <td style="font-family: sans-serif;" align="right"><b>Sender Mail:</b></td>
		                        <td><br><b style="color:yellow; padding-right: 18px;"></b><input id="input_sty" type="text" name="mail_sender" placeholder="sender's mail" size="38"><br><br></td>
		                   </tr>
		                    <tr>
		                        <td style="font-family: sans-serif;" align="right"><b>Message_mail:</b></td>
		                        <td><br><b style="color:yellow; padding-right: 5px; padding-left: 5px;">*</b><textarea id="input_textarea_sty" name="message_mail" placeholder="Type a message" cols="55" rows="10"></textarea><br><br></td>
		                   </tr>
								   	
								 
		                   <tr align="center">
		                            <td colspan="5"><input id="table_sub" type="submit" name="mail_submit" value="Send"></td>
		                   </tr>  	
						  	
					    </table>
					</div>
					</form>
			    </div>
		       <div id="coner_rite2">
			    	<form action="" method="POST" enctype="multipart/form-data">
			    		 <div class="receiver_reg_sty">
			    		 	<p class="ad_new1">Add New Contact Mail Here</p>
			    		 	<label>Enter Name:</label>
				    		<p id="pick"><input id="input_reg_sty" type="text" name="receiver_reg_name" placeholder="Enter name" size="38"></p>
				    		<label>Enter Email:</label>
				    		<p id="pick"><input id="input_reg_sty" type="email" name="receiver_reg_email" placeholder="Enter email" size="38"></p>
				    		<label>Insert image:</label>
				    		<p id="pick"><input id="receiver_reg_img_sty" type="file" name="receiver_reg_image"></p>
				    		<input id="corner_btn" type="submit" name="receiver_reg_submit" value="Submit">
				    		<li id="goto_list"><a href="#">View contact list</a></li>
				    	</div>	
			    	</form>

			    </div>

			   <iframe scrolling="no"  id="coner_rite3" src="facebook.com">
			    	
			   </iframe>

			  <div id="coner_rite4">
			     	<p id="advert_link2">Advertize Here</p>
			   	    <img id="coner_rite4_advert" src="images/h.jpg">
			    		
			    </div>


			     <div id="coner_rite5">
			    	
			    </div>
		         

		          <div id="coner_rite6">
			    	<p id="advert_link3">Advertize Here</p>	
			    	<img id="coner_rite6_advert" src="images/h.jpg">

			    </div>

			    <div id="coner_rite7">
			    	<p id="advert_link4">Advertize Here</p>	
                    <img id="coner_rite7_advert" src="images/h.jpg">
			    </div>
		    </div>


		   
	   </div>
		    <div class="footer">
		    	 <h3 style="text-align: center; padding-top: 30px; color: lightgreen; font-size: 12px;">&copy; 2018 by New~Era Group</h3>
	   </div>
</div>

  <!--javascript code start here for this page -->
<!-- "Script for the stiky header" --> 
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



