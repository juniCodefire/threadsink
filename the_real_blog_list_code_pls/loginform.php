 <?php
      session_start();

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


		    <nav>
            <ul>
            <li class="current" title="WELCOME TO BLOGLIST"><a href="index.html">HOME</a></li>
             </ul>
          </nav>
		     </div> 
        </header>



             <section id="newsletter">
               <nav id="footerlogin">
                <ul>
                <li class="current1"><a href="login.php"><img src="./img/user.png" border="0" alt="MEMBERSHIP / LOGIN" title="MEMBERSHIP / LOGIN" style="width: 50px;"></a></li>             
                </ul>
          </nav>
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
	  <signup id="sign1">

	  <p style="text-align: left; margin-left:30px; font-size:17px; font-weight: 800;">Please fill in the information below:</p><br><br>

        <div class="dark1" >
	     <form action="signin.php"  method="post" class="sign2">
		
		<div>
		<label >First Name:</label><br/>
		 <input style="float: center; " type="text" name="firstname" placeholder="firstname..." maxlength="1000" width="1000"/> 
		<br/>
		</div>

		<div>
		<label>Last Name :</label><br/>
		 <input type="text" name="lastname" placeholder="lastname..." maxlength="1000" width="1000"/>
		<br/>
		</div>

		<div>
		<label>Gender :</label><br/>
		 <input type="text" name="gender" maxlength="20" width="1000"/>
		<br/>
		</div>

		<div>
		<label>Age :</label><br/>
		 <input type="text" name="age"  maxlength="20" width="200"/>
		<br/>
		</div>

		<div>
		<label>Country   :</label><br/>
		 <input type="text" name="country" maxlength="20" width="1000"/>
		<br/>
		</div>

		<div>
		<label>Username  :</label><br/>
		 <input type="text" name="uid" placeholder="Username..." maxlength="20" width="1000"/>
		<br/>
		</div>

		<div>
		<label>Password  :</label><br/>
		 <input type="password" name="pwd" placeholder="password..." maxlength="20" width="1000"/>
		<br/>
		</div>

		<button class="button_1" type="submit">SIGN UP</button>

	</form>
	</div>
	
        </signup>

         <login id=log1>

         <div class="dark">
	     <form action="login.php"  method="post" class="log2">
          <div>
		<label>Username  :</label><br/>
		 <input type="text" name="uid" placeholder="Username" maxlength="20" width="1000"/>
		<br/>
		</div>

		<div>
		<label>Password  :</label><br/>
		 <input type="password" name="pwd" placeholder="password" maxlength="20" width="1000"/>
		<br/>
		</div>

		<button class="button_1" type="submit">LOGIN</button>
		</div>				
	</form>
<?php
  if (isset($_SESSION["uid"])) {
  	echo $_SESSION["uid"];
  } else{
  	echo "You are not logged in!";
  }
?>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="dark">
<form action="logout.php" class="log2">
	      <button class="button_1" type="submit">LOG OUT</button>
	</form>
	</div>
	</login>

	
	</section>





	     <footer>
	       <p><span class="italic">BlogList</span>, Copyright © 2017</p>
	     </footer>
       </body>
   </html>