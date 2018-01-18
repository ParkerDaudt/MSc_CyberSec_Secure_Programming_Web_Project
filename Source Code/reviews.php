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
<title>Review Us</title>
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
		$_SESSION['captchareview'] = 1;
	}
	else{
		$_SESSION['captchareview'] = 0;
	}
	if (isset($_POST['review'])) 
	{

        require 'submitreview.php';
        
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
      <h3>Leave Us A Review</h3>
      <p>Below you can read reviews and find out what others have thought about thier visit to All American Bar & Grill. If you have recently visited, please leave some feedback as one lucky customer will be selected each month for a free meal.</p>
      <p> Any promotional or marketing requests must be submitted via email, available on our Contact page.</p>
      <script src="https://www.google.com/recaptcha/api.js"></script>
      <?php
      if($_SESSION['logged_in'] == 1 )
	{
		echo'
       <br> <br>
       <center>
    	
         <form action="reviews.php" method="post" autocomplete="off" style="background-color: white; border-style: solid; border-color: #52bad5; border-width: 8px; max-width: 305px; max-height: inherit; border-radius: 25px">
           <div class="field-wrap">
            <label>
              Comment:*
            </label><br><div style="padding-left: 15px">
            <textarea required name="comment" style="max-width: 200px; min-height: 15px;" placeholder="Your review here." rows="2" cols="30" maxlength="950" wrap="hard"></textarea></div>
          </div>
		  <div class="top-row">
            <div class="field-wrap">
              <label>
                ', $_SESSION['first_name'],'
              </label>
               ', $_SESSION['last_name'],'
              </label>
            </div>
          </div>

           <div class="g-recaptcha" data-sitekey="6LdcGzwUAAAAAK9ItrUm_Yvl8TdcYZQGh1MS2XS-"></div>
          <button type="submit" class="button button-block" name="review" />Submit</button>
          
          </form>';
	}
		   
		   else
		   {
			     echo ' <p>In order to leave a review you must Sign-In or Create an Account.</p>  '; 
		   }
		   ?>
		</center>
    </article>
    <article class="right_article"><img src="images/bar-review.jpg" alt="" width="400" height="200" class="placeholder"> </article>
	</section>
    <section>
    <article class="left_article" style="width: 100%">
     <div>
       <br> <br> <br>
     <center>
      <?php 
	  	$sql = "SELECT first_name, last_name, message, date FROM reviews";
		$result = $mysqli->query($sql);

while ($row = $result->fetch_assoc()) {
	
	
	echo'<div style="background-color: white; border-style: solid; border-color: #52bad5; max-width: none ; border-radius: 25px">
		<h2> '.$row['message'].' </h2> </div>
		<div style="background-color: #52bad5; border-style: solid; border-color: #52bad5; max-width: none ; border-radius: 25px">
		<h2> By: '.$row['first_name'].' '.$row['last_name'].' on '.$row['date'].'  </h2>	</div> <br>';
	
	/*echo "<br>", $row["message"];
	echo "<br>",$row["first_name"];
    echo " ",$row["last_name"];
	echo "<br>",$row["date"];
    echo "<br>";*/
}
	  ?>
	
	</center>
</div>
	<br>
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
