<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<?php 
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<?php
$title = $_POST['subject'];
$message = $_POST['message'];
$time = date("Y/m/d  h:i:sa");
$usenme = $_SESSION['username'];
$id = (rand(1, 1000000));
$servername = "208.109.23.206";
$username = "uuzzeeerr";
$password = "RaX147021@@";
$dbname = "ssppmm";
$conn = new mysqli($servername, $username, $password, $dbname);
if (empty($title or $message)) { 
    echo "<meta http-equiv = 'refresh' content = '0; url =inbox.php' />";
} else {
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ticket (id, username, title, last, time, status, message)
VALUES ('$id', '$usenme', '$title', '$usenme', '$time', 'Opened', '$message')";

if ($conn->query($sql) === TRUE) {
    echo"<meta http-equiv = 'refresh' content = '0; url =myticket.php?id=$id' />";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>