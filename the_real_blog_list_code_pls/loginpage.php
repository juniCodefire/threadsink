<?php
session_start();
include 'datab.php';
 ?>

 <!DOCTYPE html>
   <html>
     <head>	
       <meta charset="utf-8">
	   <meta name="viewport" content="width=device-width" scale="1">
	   <meta name="desciption" content="professional and affordable coaching">
	   <meta name="keyword" content="coaching, affordable coaching,">
	   <meta name="author" content="okechukwu david">
       <title>BlogList | WELCOME</title>
	   <link rel="stylesheet" href="./css/style.css">
     </head>
    

     <!--body working-->
     <body>
	     <header>
	       <div class="nice">

	      <section>
		     <div id="branding">
			   <h1 title="WELCOME TO BLOGLIST"><span class="highlight">Blog</span>List</h1>
                 <p class="italic"> sure all blog in one click...</p>


                 <nav id="logpagenav">
            <ul id="logpagenav1">
            <li class="current" title="WELCOME TO BLOGLIST"><a href="index.html">HOME</a></li>
             </ul>
          </nav>
		       </div>


		      <div id="centerhead">
			   <h1 title="REGISTRATION AND LOGIN">MEMEMER REGISTRATION AND LOGIN</h1> 
	          <?php
               if (isset($_SESSION["uid"])) {
               	echo "Welcome To BlogList"." ".$_SESSION["uid"];
              } else{
             	echo "Register you details or else log in!";
                 }
                 ?>
                 </div>
		 </section>


             <section id="logout1">
           <div class="dark2">
<form action="logout.php" class="log2">
	      <button class="button_1" type="submit">LOG OUT</button>
	</form>
	</div>
	 </section>
             </ul>
          </nav>
		     </div> 
        </header>


         <section id="newsletter">
	       <div class="container">
		     <h1>Subscribe To Our Newsletter;</h1>
		     <p> To get latest update on newer added blogs...</p>
		     </div>

		     <div class="container">
		     <form>
		     <input type="email" placeholder="Enter Email...">
			 <button type="submit" class="button_1">Subscribe</button>
		     </form>
		   </div>
	     </section>


         

	        
  <section>
  	<div>
  		<form action="loginpage.php" method="post">
<p>Upload your song in MP3 format:</p>
<input type="file" name="user-song" /><br />
<input type="submit" value="Upload" />
</form>
  	</div>
  </section>














<footer>
	       <p><span class="italic">BlogList</span>, Copyright © 2017</p>
	     </footer>
       </body>
      </body>
   </html>