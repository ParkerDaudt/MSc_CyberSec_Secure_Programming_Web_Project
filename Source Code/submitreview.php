 <?php
/* Connect to Database */
if($_SESSION['captchareview'] ==1)
{
	$review = 1;
}
else 
{
	$review = 0;
}

$host = '127.0.0.1';
$user = 'websecurity';
$pass = 'websecurity';
$db = 'accounts';
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);

$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$comment = $_POST['comment'];


$first_name = trim($first_name);
$last_name = trim($last_name);
$comment = trim($comment);


$first_name = $mysqli->real_escape_string($first_name);
$first_name = addslashes($first_name);
$first_name = htmlspecialchars($first_name);
$last_name = $mysqli->real_escape_string($last_name);
$last_name = addslashes($last_name);
$last_name = htmlspecialchars($last_name);
$comment = $mysqli->real_escape_string($comment);
$comment = addslashes($comment);
$comment = htmlspecialchars($comment);


if($review == 1)
	{
    $sql = "INSERT INTO reviews (first_name, last_name, message, date) VALUES ('$first_name', '$last_name', '$comment', NOW())";

    // Add user to the database
    if ( $mysqli->query($sql) == TRUE ){
		echo "Suceessful entry";
		 header("location: reviews.php");
	}
    

    else {
        echo "Error" . $sql . "<br>". $conn->error;

    }
	}
else
{
	$_SESSION["message"] = "Failed to submit comment, please try again.";
	header("location: reviews.php");
}
$conn->close();
?>
