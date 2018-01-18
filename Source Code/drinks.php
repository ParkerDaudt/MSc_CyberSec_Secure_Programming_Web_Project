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
<title>Our Drinks</title>
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
      <h3>Our Drinks</h3>
      <p>Here at All American Bar & Grill we believe that the drinks you enjoy can shape any night out in Temple Bar. This is why we take great pride in offering 15 premium IPAs and Ales from across the United States. In addition we offer various local craft ales, stouts, a large selection on tap, and more. Below you will find a brief description of each beer we offer. </p>
      <p>We believe that the best way to enjoy great food and drinks, is with your friends. In order to promote this atmosphere we offer various drink specials and food discounts of 20% to groups of 3-5, 30% to groups of 5-7 and 40% to groups of 7 or more. We offer private rooms to rent for your next birthday party, office gathering or large groups.</p>
      <p> Check back for our daily and weekly specials as well as current and upcoming events. </p>
      <p> If you have any additional questions about our ingredients or promotional offers please visit our Contact page.</p>
          </article>
    <br><br><aside class="right_article"><img src="images/bardrinks.jpg" alt="" height="200" width="400" class="placeholder"/> </aside>
    <br>
   <article class="left_article">
      <h3> IPAs and Ales Imported From The USA </h3>
	  </article>
	  <article class="right_article">
	  	<br>
	  </article>
	  <br> <br> <br> <br> <br>
	  <article>
    <table width="100%" border="0">
  <tbody>
    <tr>
      <td><center> <img src="images/AnchorStout.png"></center></td>
      <td><center> <img src="images/Benaglia.png"></center></td>
      <td><center> <img src="images/Excelence.png"></center></td>
    </tr>
    <tr>
      <td><center> 5% APV <br> Brewed in Boston, MA <br> Dark Ceather Color with Ruby Notes <br> Luxurious Tan Head <br>Bready Aroma with a Hint of Smoke </center> </td>
      <td><center> 5% APV <br> Brewed in Boston, MA <br> Dark Ceather Color with Ruby Notes <br> Luxurious Tan Head <br>Bready Aroma with a Hint of Smoke </center></td>
      <td><center> 5% APV <br> Brewed in Boston, MA <br> Dark Ceather Color with Ruby Notes <br> Luxurious Tan Head <br>Bready Aroma with a Hint of Smoke </center></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><center> <img src="images/Maltster.png"></center></td>
      <td><center> <img src="images/Memphis.png"></center></td>
      <td><center> <img src="images/Pendleton.png"></center></td>
    </tr>
    <tr>
      <td><center> 5% APV <br> Brewed in Boston, MA <br> Dark Ceather Color with Ruby Notes <br> Luxurious Tan Head <br>Bready Aroma with a Hint of Smoke </center></td>
      <td><center> 5% APV <br> Brewed in Boston, MA <br> Dark Ceather Color with Ruby Notes <br> Luxurious Tan Head <br>Bready Aroma with a Hint of Smoke </center></td>
      <td><center> 5% APV <br> Brewed in Boston, MA <br> Dark Ceather Color with Ruby Notes <br> Luxurious Tan Head <br>Bready Aroma with a Hint of Smoke </center></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><center> <img src="images/SavageAle.png"></center></td>
      <td><center> <img src="images/Schneider.png"></center></td>
      <td><center> <img src="images/Scofield.png"></center></td>
    </tr>
    <tr>
      <td><center> 5% APV <br> Brewed in Boston, MA <br> Dark Ceather Color with Ruby Notes <br> Luxurious Tan Head <br>Bready Aroma with a Hint of Smoke </center></td>
      <td><center> 5% APV <br> Brewed in Boston, MA <br> Dark Ceather Color with Ruby Notes <br> Luxurious Tan Head <br>Bready Aroma with a Hint of Smoke </center></td>
      <td><center> 5% APV <br> Brewed in Boston, MA <br> Dark Ceather Color with Ruby Notes <br> Luxurious Tan Head <br>Bready Aroma with a Hint of Smoke </center></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><center> <img src="images/Snech.png"></center></td>
      <td><center> <img src="images/Strudel.png"></center></td>
      <td><center> <img src="images/TheBarrel.png"></center></td>
    </tr>
    <tr>
      <td><center> 5% APV <br> Brewed in Boston, MA <br> Dark Ceather Color with Ruby Notes <br> Luxurious Tan Head <br>Bready Aroma with a Hint of Smoke </center></td>
      <td><center> 5% APV <br> Brewed in Boston, MA <br> Dark Ceather Color with Ruby Notes <br> Luxurious Tan Head <br>Bready Aroma with a Hint of Smoke </center></td>
      <td><center> 5% APV <br> Brewed in Boston, MA <br> Dark Ceather Color with Ruby Notes <br> Luxurious Tan Head <br>Bready Aroma with a Hint of Smoke </center></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><center> <img src="images/Tomlinson.png"></center></td>
      <td><center> <img src="images/Whitman.png"></center></td>
      <td><center> <img src="images/Alexander.png"></center></td>
    </tr>
    <tr>
      <td><center> 5% APV <br> Brewed in Boston, MA <br> Dark Ceather Color with Ruby Notes <br> Luxurious Tan Head <br>Bready Aroma with a Hint of Smoke </center></td>
      <td><center> 5% APV <br> Brewed in Boston, MA <br> Dark Ceather Color with Ruby Notes <br> Luxurious Tan Head <br>Bready Aroma with a Hint of Smoke </center></td>
      <td><center> 5% APV <br> Brewed in Boston, MA <br> Dark Ceather Color with Ruby Notes <br> Luxurious Tan Head <br>Bready Aroma with a Hint of Smoke </center></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

         </article>
  </section>
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