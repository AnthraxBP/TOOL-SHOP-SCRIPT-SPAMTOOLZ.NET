<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<?php
$db = mysqli_connect('208.109.23.206', 'uuzzeeerr', 'RaX147021@@', 'ssppmm');
$useame = $_SESSION['username'];
$servername = "208.109.23.206";
$username = "uuzzeeerr";
$password = "RaX147021@@";
$dbname = "ssppmm";
$useame = $_SESSION['username'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE users SET welcome='1' WHERE username='$useame'";

if ($conn->query($sql) === TRUE) {
    ?>
<meta http-equiv = "refresh" content = "0; url =index.php" />
<?php
}
?>