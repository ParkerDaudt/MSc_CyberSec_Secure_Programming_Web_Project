 <?php
/* Connect to Database */
if($_SESSION['captchacontact'] ==1)
{
	$contact = 1;
}
else 
{
	$contact = 0;
}

$host = '127.0.0.1';
$user = 'websecurity';
$pass = 'websecurity';
$db = 'accounts';
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$comment = $_POST['comment'];


$first_name = trim($first_name);
$last_name = trim($last_name);
$email = trim($email);
$comment = trim($comment);


$first_name = $mysqli->real_escape_string($first_name);
$first_name = addslashes($first_name);
$first_name = htmlspecialchars($first_name);
$last_name = $mysqli->real_escape_string($last_name);
$last_name = addslashes($last_name);
$last_name = htmlspecialchars($last_name);
$email = $mysqli->real_escape_string($email);
$email = addslashes($email);
$email = htmlspecialchars($email);
$comment = $mysqli->real_escape_string($comment);
$comment = addslashes($comment);
$comment = htmlspecialchars($comment);


if($contact == 1)
	{
    $sql = "INSERT INTO contact (first_name, last_name, email, message, date) VALUES ('$first_name', '$last_name', '$email', '$comment', NOW())";

    // Add user to the database
    if ( $mysqli->query($sql) == TRUE ){
		$_SESSION["message"] =	 "Successfuly submitted feedback!";
		 header("location: contact.php");
	}
    

    else {
        echo "Error" . $sql . "<br>". $conn->error;

    }
	}
else
{
	$_SESSION["message"] = "Failed to submit comment, please try again.";
	header("location: contact.php");
}
$conn->close();
?>