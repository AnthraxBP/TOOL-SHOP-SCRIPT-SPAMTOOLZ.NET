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
$iid = $_GET['id'];
$time = date("Y/m/d  h:i:sa");
$usenme = $_SESSION['username'];
$id = (rand(1, 1000000));
$servername = "208.109.23.206";
$username = "uuzzeeerr";
$password = "RaX147021@@";
$dbname = "ssppmm";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE ticket SET status='Closed' Where id='$iid'";
if ($conn->query($sql) === TRUE) {
    echo"<meta http-equiv = 'refresh' content = '0; url =myticket.php?id=$id' />";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>