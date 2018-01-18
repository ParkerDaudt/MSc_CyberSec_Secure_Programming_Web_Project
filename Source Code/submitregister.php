 <?php
/* Connect to Database */


if($_SESSION['captcharegister'] ==1)
{
	$register = 1;
}
else 
{
	$register = 0;
}

$host = '127.0.0.1';
$user = 'root';
$pass = 'charchar';
$db = 'accounts';
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$hash = md5(rand(0,1000));

$first_name = trim($first_name);
$last_name = trim($last_name);
$email = trim($email);
$password = trim($password);
$password = $mysqli->real_escape_string($password);
$password = addslashes($password);
$password = htmlspecialchars($password);

$passandhash = $password . $hash;

$passandhash = hash('sha512', $passandhash);

$first_name = strtoupper($first_name);
$last_name = strtoupper($last_name);

$first_name = $mysqli->real_escape_string($first_name);
$first_name = addslashes($first_name);
$first_name = htmlspecialchars($first_name);
$last_name = $mysqli->real_escape_string($last_name);
$last_name = addslashes($last_name);
$last_name = htmlspecialchars($last_name);
$email = $mysqli->real_escape_string($email);
$email = addslashes($email);
$email = htmlspecialchars($email);
$passandhash = $mysqli->escape_string($passandhash);
$hash = $mysqli->escape_string($hash);
//$_first_name =  FILTER_SANITIZE_STRING($first_name);
//$_last_name =  FILTER_SANITIZE_STRING($last_name);
//$_email =  FILTER_SANITIZE_STRING($email);
//$_password =  FILTER_SANITIZE_STRING($password);
//echo $first_name;
//echo $last_name;
//echo $email;
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");


if ( $result->num_rows != 0 )
{ // User already exist
     $_SESSION["message"] = "You have entered an invalid input, try again!";
    header("location: register.php");
}
else
{
	if($register == 1)
	{
		$_SESSION['first_name'] = $first_name;
		$_SESSION['last_name'] = $lastname;

		$sql = "INSERT INTO users (first_name, last_name, email, password, hash) VALUES ('$first_name','$last_name','$email','$passandhash', '$hash')";

		// Add user to the database
		if ( $mysqli->query($sql) == TRUE )
		{
			echo "Suceessful entry";
			$_SESSION['message'] = "";
			$_SESSION['logged_in'] = 0;
			header("location: login.php");
		}
    

		else 
		{
			echo "Error" . $sql . "<br>". $conn->error;
			$_SESSION['message'] = 'Registration failed!';
			header("location: register.php");
		}
	}
	else
	{
		$_SESSION["message"] = "You have entered an invalid input, try again!";
		header("location: register.php");
	}
}
$conn->close();
?>