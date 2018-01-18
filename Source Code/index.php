<?php
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
<title>All American Bar & Grill</title>
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
      <h3>About Us</h3>
      <p>Located in the heart of Ireland's largest city, All American Pub & Grill brings the American bar experience to Dublin's Temple Bar. Opened in 2019 All American Bar & Grill provides a unique exposure to the traditional American bar experience. </p>
      <p>Whether you are an American traveling across Europe looking for a little taste of home, or have never set foot in an American bar, All American Bar & Grill is the perfect place for you. Our friendly staff and amazing drink specials make sure that each visit will be one to remember.</p>
    </article>
    <aside class="right_article"><img src="images/bar.jpg" alt="" width="400" height="200" class="placeholder"/> </aside>
  </section>
  <div class="row">
    <div class="columns">
      <p class="thumbnail_align"> <img src="images/michaeledit.jpg" alt="" class="thumbnail"/> </p>
      <h4>MICHAEL</h4>
		<center> <p>Owner <br> Born in New York City, New York.<br> 15 years of restaurant experience. <br> "I opened All American Bar & Grill in Dublin because I wanted to bring the classic American bar and grill to the heart of Ireland.</p> </center>
    </div>
    <div class="columns">
      <p class="thumbnail_align"> <img src="images/ashley.jpg" alt="" class="thumbnail"/> </p>
      <h4>ASHLEY</h4>
      <center><p>Manager <br> Born in London, England <br> 5 years of management experience <br> "Working with Michael, Paul, Tiffany and everyone here at All American Bar & Grill has been the greatest experience of my life.</p> </center>
    </div>
    <div class="columns">
      <p class="thumbnail_align"> <img src="images/paul.jpg" alt="" class="thumbnail"/> </p>
      <h4>PAUL</h4>
      <center><p> Event Coordinator <br> 12 years of event planning experience <br> "I work my hardest to ensure that every event held at All American Bar & Grill meets and exceeds our guest's expectations. Nothing is better than a good party."</p></center>
    </div>
    <div class="columns">
      <p class="thumbnail_align"> <img src="images/tiffany.jpg" alt="" class="thumbnail"/> </p>
      <h4>TIFFANY</h4>
      <center><p>Head Bartender <br> 7 years of bartending experience <br> "I think what you drink is as important as the people you drink them with. I want to make sure our guests are served the best drinks found in Europe and the U.S.."</p></center>
    </div>
  </div>
  <article class="left_article">
      <h3>Featured Menu Item: December</h3>
      <p> Chef Scott's famous Texas  Salt & Pepper Burger. <br> <br> A 1 kg. of Black Angus beef, with Alderwood smoked sea salt, ground black-peppered bacon, and dill pickle. <br> <br>Served with a house-made Smoke & Pepper sauce on a toasted ciabatta bun. <br> <br> Come in during the month of December for 10% discount on our featured menu item of the month and 15% discount on any drink w/ purchase of the featured menu item. </p>
	</article>
	<aside class="right_article"><img src="images/burger.jpg" alt="" width="400" height="200" class="placeholder"/> </aside>
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
