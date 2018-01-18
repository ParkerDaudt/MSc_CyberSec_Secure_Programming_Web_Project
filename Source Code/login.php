<?php

$host = '127.0.0.1';
$user = 'websecurity';
$pass = 'websecurity';
$db = 'accounts';
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);
session_start();


?>
   <!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Simple Theme</title>
<link href="css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
 <?php
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
 
	$g_resp=$_POST['g-recaptcha-response'];

	$secret="6LdcGzwUAAAAAD-kHFHBxu8fCISr30BeuxaSRebv";
	$postdata ="secret=".$secret."&response=".$g_resp;
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	$server_output = curl_exec($ch);
	$out=json_decode($server_output);
	curl_close($ch);
	
	if($out->success==1){
		$_SESSION['captchalogin'] = 1;
	}
	else{
		$_SESSION['captchalogin'] = 0;
	}
	if (isset($_POST['login'])) 
	{
		
			require 'submitlogin.php';
		}    
}
?>
<body>
<div class="container">
  <header>
    <div class="primary_header">
      <h1 class="title"> ALL AMERICAN BAR & GRILL</h1>
    </div>
    <nav class="secondary_header" id="menu">
      <ul>
		 <li> <a href="index.php" style="text-decoration: none; color: currentColor"> ABOUT </a> </li>
        <li><a href="food.php" style="text-decoration: none; color: currentColor"> FOOD</a></li>
        <li><a href="drinks.php" style="text-decoration: none; color: currentColor"> DRINKS </a></li>
        <li><a href="events.php" style="text-decoration: none; color: currentColor"> EVENTS </a></li>
        <li><a href="reviews.php" style="text-decoration: none; color: currentColor"> REVIEWS </a></li>
        <li><a href="contact.php" style="text-decoration: none; color: currentColor"> CONTACT </a></li>
      </ul>
    </nav>
  </header>
  <section>
   
   <body>
	<center>
      <script src="https://www.google.com/recaptcha/api.js"></script>
      <div class="form">         
	
        <?php 
		  
		  
		  if($_SESSION['logged_in'] == 0 )
		  {
         echo'
		 <div id="login"> 
          <h1>Welcome Back! Please Sign In:</h1>
		  
          
          <form action="login.php" method="post" autocomplete="off" style="background-color: white; border-style: solid; border-color: #52bad5; border-width: 10px; max-width: 310px; max-height: inherit; border-radius: 25px">


		  <center>
         <div class ="top-row">
            <div class="field-wrap" style="padding-left: 15px">
			<br>
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
			<label>
             Password<span class="req">* &nbsp; &nbsp; &nbsp; &nbsp;</span>
            </label>
            <input type="password" required autocomplete="off" name="password" style="padding-left: 5px"/>
          </div><br>
		  <div class="g-recaptcha" data-sitekey="6LdcGzwUAAAAAK9ItrUm_Yvl8TdcYZQGh1MS2XS-"></div><br>
          <button type="submit" class="button button-block" name="login" />Log In</button>
		  <div> <br> </div>
          <br>' ?>
				 <?php			 
				 echo $_SESSION["message"];
			 		$_SESSION["message"] =" ";
			    ?> 
			<?php echo'
       
	   </center>
	   </form>
		</div>';
        }
		  else
		  {
			  echo' <div id="login">
			  <h1> You have already signed in. </h1>
			  </div>';
		  }
		?>
		</div>
	   </center>
<br>
    <div>
    <?php
	
	if($_SESSION['logged_in'] == 1 )
	{
		echo'
    <div class="row blockDisplay">

			<div class="column_half left_half">
				<h2 id = "username" class="column_title" style="text-decoration: none; color: white"> WELCOME '.$_SESSION['first_name'].' </h2>
			</div>
			<div class="column_half right_half">
				<h2 id = "logout" class="column_title"><a href="logout.php" style="text-decoration: none; color: currentColor"> LOG OUT </a></h2>
		</div>
		</div>';
	}
	else
	{
		echo'
		<div class ="row blockDisplay">
	
			<div class="column_half left_half">
				<h2 id = "username" class="column_title"><a href="login.php" style="text-decoration: none; color: currentColor"> CUSTOMER LOGIN </a></h2>
			</div>
			<div class="column_half right_half">
				<h2 id = "register" class="column_title"><a href="register.php" style="text-decoration: none; color: currentColor"> CUSTOMER REGISTRATION </a></h2>
			</div>';
	}
		?>
			
	 </div>
		 <br>

  <div class="social">
    <p class="social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
  </div>
  <footer class="secondary_header footer">
    <div class="copyright">&copy; 2019 - <strong>All American Bar & Grill</strong></div>
  </footer>
</body>
</html>
