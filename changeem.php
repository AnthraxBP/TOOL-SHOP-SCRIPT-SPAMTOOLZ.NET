<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<?php
$db = mysqli_connect('208.109.23.206', 'uuzzeeerr', 'RaX147021@@', 'ssppmm');
$useame = $_SESSION['username'];
$email = $_POST["email"];
$errors = array(); 
// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array
if (empty($email)) { array_push($errors, "Email is required"); }
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { array_push($errors, "Please Enter Email"); }
// first check the database to make sure 
// a user does not already exist with the same username and/or email
$user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
 
if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
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

$sql = "UPDATE users SET email='$email' WHERE username='$useame'";

if ($conn->query($sql) === TRUE) { ?>

<script src="https://aerulcyber.biz/js/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="https://aerulcyber.biz/css/sweetalert.css"> <script src='https://www.google.com/recaptcha/api.js'></script>
</html>
<body>
<script language = javascript>
			swal(
			  'Nice',
			  'You have successfully changed your Email!',
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
			  'Please write Your Email!',
			  'error'
			)
</script>
<meta http-equiv = "refresh" content = "4; url =profile.php" />
</body>
<?php
	}
?>