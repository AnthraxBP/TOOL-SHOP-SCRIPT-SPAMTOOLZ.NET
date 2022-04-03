<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<?php
$useame = $_SESSION['username'];
$ps1 = $_POST["password"];
$uppercase = preg_match('@[A-Z]@', $ps1);
$lowercase = preg_match('@[a-z]@', $ps1);
$number    = preg_match('@[0-9]@', $ps1);
$specialChars = preg_match('@[^\w]@', $ps1);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($ps1) < 8) {
    ?>
<script src="https://aerulcyber.biz/js/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="https://aerulcyber.biz/css/sweetalert.css"> <script src='https://www.google.com/recaptcha/api.js'></script>
</html>
<body>
<script language = javascript>
			swal(
			  'Oops...',
			  'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character',
			  'error'
			)
</script>
<meta http-equiv = "refresh" content = "5; url =profile.php" />
</body>
<?php
} else {
$ps = md5($ps1);
$errors = array(); 

if (empty($ps1)) { array_push($errors, "Password is required"); }
// Validate password strength

if (count($errors) == 0) {
$servername = "208.109.23.206";
$username = "uuzzeeerr";
$password = "RaX147021@@";
$dbname = "ssppmm";
$useame = $_SESSION['username'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE users SET password='$ps' WHERE username='$useame'";

if ($conn->query($sql) === TRUE) { ?>

<script src="https://aerulcyber.biz/js/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="https://aerulcyber.biz/css/sweetalert.css"> <script src='https://www.google.com/recaptcha/api.js'></script>
</html>
<body>
<script language = javascript>
			swal(
			  'Nice',
			  'You have successfully changed your Password!',
			  'success'
			)
</script>
<meta http-equiv = "refresh" content = "4; url =profile.php" />
</body>
<?php } else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
	} else {
		?>
<script src="https://aerulcyber.biz/js/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="https://aerulcyber.biz/css/sweetalert.css"> <script src='https://www.google.com/recaptcha/api.js'></script>
</html>
<body>
<script language = javascript>
			swal(
			  'Oops...',
			  'Please write Your Password!',
			  'error'
			)
</script>
<meta http-equiv = "refresh" content = "4; url =profile.php" />
</body>
<?php
	}}
?>