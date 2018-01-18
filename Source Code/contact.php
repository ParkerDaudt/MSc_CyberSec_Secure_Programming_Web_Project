<?php
//session_start();
// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] == 1) {   
	session_start();
}

else {
	$_SESSION['logged_in'] == 0;
	session_start();
}
		
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Us</title>
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
		$_SESSION['captchacontact'] = 1;
	}
	else{
		$_SESSION['captchacontact'] = 0;
	}
	if (isset($_POST['contacts'])) 
	{

        require 'submitcontact.php';
        
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
    <h2 class="noDisplay">Main Content</h2>
    <article class="left_article">
      <h3>Contact Us</h3>
      <p>Located in the heart of Ireland's largest city, All American Pub & Grill brings the American bar experience to Dublin's Temple Bar. Opened in 2019 All American Bar & Grill provides a unique exposure to the traditional American bar experience. </p>
      <p>Whether you are an American traveling across Europe looking for a little taste of home, or have never set foot in an American bar, All American Bar & Grill is the perfect place for you. Our friendly staff and amazing drink specials make sure that each visit will be one to remember. <br> <br> If you have any questions or concerns please use the form below, or send us an email at: contact@allamericanbarandgrill.com</p>
    </article>
    <br> <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.689321983756!2d-6.245373348128241!3d53.348817379881346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e8cd86e97e7%3A0x6d51b774ee7fa935!2sNational+College+of+Ireland!5e0!3m2!1sen!2sie!4v1509288239148" width="500" height="250" frameborder="0" style="border:0; text-align: right" allowfullscreen></iframe> </aside>
  </section>
       <br> <br>
       <script src="https://www.google.com/recaptcha/api.js"></script>
       <center>
    	<div>
         <form action="contact.php" method="post" autocomplete="off" style="background-color: white; border-style: solid; border-color: #52bad5; border-width: 10px; max-width: 310px; max-height: inherit; border-radius: 25px">
          <center>
          <div class="top-row">
            <div class="field-wrap">
              <br>
			  <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="firstname" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="lastname" />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email <span class="req">* &nbsp;&nbsp; &nbsp;</span>
            </label>
            <input type="email"required autocomplete="off" name="email" />
          </div>
          
          <div class="field-wrap">
            <label>
              Message<span class="req">*</span>
            </label>
             <textarea required name="comment" style="max-width: 200px; min-height: 15px;" placeholder="Your review here." rows="2" cols="30" maxlength="950" wrap="hard"></textarea>
          </div>
		  <div> <br> </div>
         <div class="g-recaptcha" data-sitekey="6LdcGzwUAAAAAK9ItrUm_Yvl8TdcYZQGh1MS2XS-"></div>
		 <div> <br> </div>
         <div class="g-recaptcha" data-sitekey="6LdcGzwUAAAAAK9ItrUm_Yvl8TdcYZQGh1MS2XS-"></div>
          <button type="submit" class="button button-block" name="contacts" />Submit</button>
			 <div> <br> </form> </div> 
          <?php			 
				 echo $_SESSION["message"];
			 		$_SESSION["message"] =" ";
		   ?> </div> <br> <br> <br>
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
  <div class="social">
    <p class="social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
  </div>
  <footer class="secondary_header footer">
    <div class="copyright">&copy; 2019 - <strong>All American Bar & Grill</strong></div>
  </footer>
</div>
</body>
</html>
