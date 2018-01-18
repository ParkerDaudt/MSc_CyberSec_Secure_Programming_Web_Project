<?php
/* User login process, checks if user exists and password is correct */

// Escape email and password to protect against SQL injections

if($_SESSION['captchalogin'] ==1)
{
	$login = 1;
}
else 
{
	$login = 0;
}

$email = $_POST["email"];
$password = $_POST["password"];
$email = trim($email);
$password = trim($password);



$password = $mysqli->real_escape_string($password);
$password = addslashes($password);
$password = htmlspecialchars($password);
$email = $mysqli->real_escape_string($email);
$email = addslashes($email);
$email = htmlspecialchars($email);


$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");


$user = $result->fetch_assoc();
$userpasswithhash = $password . $user['hash'];
$userhashed = hash('sha512', $userpasswithhash);



if ( $result->num_rows == 0 ){ // User doesn't exist 
	$_SESSION["message"] = "You have entered an invalid login! try again! No User";
    header("location: login.php");
}
else { // User exists
	
	$loginquery = $mysqli->query("SELECT first_name FROM users WHERE email = '$email' AND password = '$userhashed'");

if  ($loginquery->num_rows == 1)
{
	if($login == 1)
	{
      
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = 1;
		$_SESSION["message"] = "";

        header("location: index.php");
	}
	else{
		$_SESSION["message"] = "You have entered an invalid login, try again!";
        header("location: login.php");
	}
    }
    else {
		$_SESSION["message"] = "You have entered an invalid login, try again!";
        header("location: login.php");
    }
}

$conn->close();
?>