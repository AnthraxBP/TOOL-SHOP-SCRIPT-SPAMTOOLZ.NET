<?php
session_start();
function getBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }
   
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Apple Safari';
        $ub = "Safari";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
        $ub = "Opera";
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
        $ub = "Netscape";
    }
   
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
    }
   
    $i = count($matches['browser']);
    if ($i != 1) {
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }
   
    if ($version==null || $version=="") {$version="?";}
   
    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
}
$ua=getBrowser();
$platform = $ua['platform'];
$useragent = $ua['userAgent'];
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
$json = file_get_contents("https://www.geoip-db.com/json/$ip"); 
$data = json_decode($json); 
$country_code = $data->country_code;
$country_name = $data->country_name;

	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	$db = mysqli_connect('208.109.23.206', 'uuzzeeerr', 'RaX147021@@', 'ssppmm');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    $captcha = $_POST["captcha"];
    $captchaUser = filter_var($_POST["captcha"], FILTER_SANITIZE_STRING);
          if(empty($captcha)) {
              array_push($errors, "Please enter the captcha.");
      }else if($_SESSION['CAPTCHA_CODE'] == $captchaUser){
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  $uppercase = preg_match('@[A-Z]@', $password_1);
  $lowercase = preg_match('@[a-z]@', $password_1);
  $number    = preg_match('@[0-9]@', $password_1);
  if(!$uppercase || !$lowercase || !$number || strlen($password_1) < 8){ array_push($errors, "Password should be at least 8 characters in length and should include at least one upper case letter, and one number"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { array_push($errors, "Please Enter Valid Email"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
	$date      = date("Y/m/d / h:i:sa");
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, email, password, date, ip, code, country) 
  			  VALUES('$username', '$email', '$password', '$date', '$ip', '$country_code', '$country_name')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }

}else {
    array_push($errors, "Captcha is invalid.");
}
}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
    $captcha = $_POST["captcha"];
    $captchaUser = filter_var($_POST["captcha"], FILTER_SANITIZE_STRING);
          if(empty($captcha)) {
              array_push($errors, "Please enter the captcha.");
      }else if($_SESSION['CAPTCHA_CODE'] == $captchaUser){
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$date      = date("Y-m-d h:i:sa");
				$_SESSION['success'] = "You are now logged in";
				$query = "INSERT INTO sessions (username, ip, platform, useragent, date)
  			  VALUES('$username', '$ip', '$platform', '$useragent', '$date')";
  			mysqli_query($db, $query);

				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password");
			}
		}
          }else {
    array_push($errors, "Captcha is invalid.");
}
		
	}

?>