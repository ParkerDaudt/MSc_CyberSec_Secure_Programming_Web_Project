<?php

$host = '127.0.0.1';
$user = 'websecurity';
$pass = 'websecurity';
$db = 'accounts';
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);
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
<title>Events</title>
<link href="css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
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
      <?php echo $nameupper ?>
      <h3>Events at All American Bar & Grill</h3>
      <p> At All American Bar & Grill we strive to ensure that any birthday party, office event or night out with friends is as speical as the people you spend it with. That's why we offer private rooms or the entire establishment for hire. For whatever event you have planned, big or small, we can accomodate your needs. </p>
      <p>We offer various events throught the year in celebration of various holidays. Below you will find pictures from serveral events hosted at All American Bar & Grill.</p>
      <p> If you would like to host your next event with us, please use the contact form provided on our Contact page or give us a call!</p>
    </article>
    <aside class="right_article"><img src="images/bar-event.jpg" alt="" width="400" height="200" class="placeholder"/> </aside>
  </section>
	<div><center>
	  <img src="images/bar-event1.jpg" alt="" style="width:600px; height:400px" class="placeholder"/> <br> <br>
	   <img src="images/bar-event2.jpg" alt="" style="width:600px; height:400px" class="placeholder"/> <br> <br>
	    <img src="images/bar-event3.jpg" alt="" style="width:250px; height:370px" class="placeholder"/> <br> <br>
	     <img src="images/bar-event4.jpg" alt="" style="width:600px; height:400px" class="placeholder"/> <br> <br>
	</center></div>
  
	<br>
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
</div>
</body>
</html>