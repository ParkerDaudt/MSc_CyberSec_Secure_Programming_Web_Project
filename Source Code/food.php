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
<title>Our Food</title>
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
      <h3>Our Food</h3>
      <p>Here at All American Bar & Grill we believe that food is the most important aspect of any night out in Temple Bar. This is why we have partnered with FX Buckley in order to provide local Irish beef. Minced fresh every morning by our head chef, Paul, each burger is hand crafted to your satisfaction. In addition to beef we also offer chicken, fish and a wide range of vegitarian options. </p>
      <p>We believe that the best way to enjoy great food and drinks is with your friends. In order to promote this atmosphere we offer discounts of 20% to groups of 3-5, 30% to groups of 5-7 and 40% to groups of 7 or more. We offer private rooms to rent for your next birthday party, office gathering or large groups.</p>
      <p> Check back for our daily and weekly specials as well as current and upcoming events. </p>
      <p> If you have any additional questions about our ingredients or promotional offers please visit our Contact page.</p>
          </article>
    <br><br><aside class="right_article"><img src="images/front.jpg" alt="" width="400" height="200" class="placeholder"/> </aside>
  </section>
  <article class="left_article">
      <h3>Meet The Chef: Scott</h3>
    <p> Born in Texas, U.S.A., Scott has traveled across the US to learn how to create the perfect burger and grilling techniques from the greatest chefs and grill-masters in America.</p>
    <p> <b> Awards and Competition</b> <br> <ul>First Place - Houston's Best Grill-Master Competition, 2016 </ul> <br> 
     <ul> Second Place - Chicago's Top Grill Challenge, 2016 </ul></p> 
      
	</article>
	<aside class="right_article"><img src="images/scott.jpg" alt="" width="400" height="200" class="placeholder"/> </aside>
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
