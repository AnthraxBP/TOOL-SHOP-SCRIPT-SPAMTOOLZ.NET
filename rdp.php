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
  $url = "https://bitpay.com/api/rates";

  $json = file_get_contents($url);
  $data = json_decode($json, TRUE);

  $rate = $data[2]["rate"];   //$data[1] is outdated now, they have updated their json order. This new number 2 now fetches USD price. 
  $usd_price = 10;     # Let cost of elephant be 10$
  $bitcoin_price = round( $usd_price / $rate , 8 );
?>
<?php

$servername = "208.109.23.206";
$username = "uuzzeeerr";
$password = "RaX147021@@";
$dbname = "ssppmm";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE tools SET tools = tools+235 WHERE id ='1'";
$result = $conn->query($sql);
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
<link rel = "stylesheet" type = "text/css" href = "123.css" />
<script type="text/javascript" src="123.js"></script>


        <script src="https://kit.fontawesome.com/f4247993c0.js" crossorigin="anonymous"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Verified Shop Spam Tools</title>

        <!-- Icons -->
        <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
        <!-- END Stylesheets -->
        <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.css">
<style>
    .pp {background-color: #dc3545;

color: #fff;

padding: 3px;

border-radius: 5px;}
</style>
</head>
<link rel="stylesheet" href="css/custom.css">
<style>@-webkit-keyframes swal2-show{0%{-webkit-transform:scale(.7);transform:scale(.7)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}100%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes  swal2-show{0%{-webkit-transform:scale(.7);transform:scale(.7)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}100%{-webkit-transform:scale(1);transform:scale(1)}}@-webkit-keyframes swal2-hide{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}100%{-webkit-transform:scale(.5);transform:scale(.5);opacity:0}}@keyframes  swal2-hide{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}100%{-webkit-transform:scale(.5);transform:scale(.5);opacity:0}}@-webkit-keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.875em;width:1.5625em}}@keyframes  swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.875em;width:1.5625em}}@-webkit-keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@keyframes  swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@-webkit-keyframes swal2-rotate-success-circular-line{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}100%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@keyframes  swal2-rotate-success-circular-line{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}100%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@-webkit-keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}50%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}80%{margin-top:-.375em;-webkit-transform:scale(1.15);transform:scale(1.15)}100%{margin-top:0;-webkit-transform:scale(1);transform:scale(1);opacity:1}}@keyframes  swal2-animate-error-x-mark{0%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}50%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}80%{margin-top:-.375em;-webkit-transform:scale(1.15);transform:scale(1.15)}100%{margin-top:0;-webkit-transform:scale(1);transform:scale(1);opacity:1}}@-webkit-keyframes swal2-animate-error-icon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}100%{-webkit-transform:rotateX(0);transform:rotateX(0);opacity:1}}@keyframes  swal2-animate-error-icon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}100%{-webkit-transform:rotateX(0);transform:rotateX(0);opacity:1}}body.swal2-toast-shown .swal2-container{position:fixed;background-color:transparent}body.swal2-toast-shown .swal2-container.swal2-shown{background-color:transparent}body.swal2-toast-shown .swal2-container.swal2-top{top:0;right:auto;bottom:auto;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-top-end,body.swal2-toast-shown .swal2-container.swal2-top-right{top:0;right:0;bottom:auto;left:auto}body.swal2-toast-shown .swal2-container.swal2-top-left,body.swal2-toast-shown .swal2-container.swal2-top-start{top:0;right:auto;bottom:auto;left:0}body.swal2-toast-shown .swal2-container.swal2-center-left,body.swal2-toast-shown .swal2-container.swal2-center-start{top:50%;right:auto;bottom:auto;left:0;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-center{top:50%;right:auto;bottom:auto;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}body.swal2-toast-shown .swal2-container.swal2-center-end,body.swal2-toast-shown .swal2-container.swal2-center-right{top:50%;right:0;bottom:auto;left:auto;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-left,body.swal2-toast-shown .swal2-container.swal2-bottom-start{top:auto;right:auto;bottom:0;left:0}body.swal2-toast-shown .swal2-container.swal2-bottom{top:auto;right:auto;bottom:0;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-end,body.swal2-toast-shown .swal2-container.swal2-bottom-right{top:auto;right:0;bottom:0;left:auto}body.swal2-toast-column .swal2-toast{flex-direction:column;align-items:stretch}body.swal2-toast-column .swal2-toast .swal2-actions{flex:1;align-self:stretch;height:2.2em;margin-top:.3125em}body.swal2-toast-column .swal2-toast .swal2-loading{justify-content:center}body.swal2-toast-column .swal2-toast .swal2-input{height:2em;margin:.3125em auto;font-size:1em}body.swal2-toast-column .swal2-toast .swal2-validationerror{font-size:1em}.swal2-popup.swal2-toast{flex-direction:row;align-items:center;width:auto;padding:.625em;box-shadow:0 0 .625em #d9d9d9;overflow-y:hidden}.swal2-popup.swal2-toast .swal2-header{flex-direction:row}.swal2-popup.swal2-toast .swal2-title{flex-grow:1;justify-content:flex-start;margin:0 .6em;font-size:1em}.swal2-popup.swal2-toast .swal2-footer{margin:.5em 0 0;padding:.5em 0 0;font-size:.8em}.swal2-popup.swal2-toast .swal2-close{position:initial;width:.8em;height:.8em;line-height:.8}.swal2-popup.swal2-toast .swal2-content{justify-content:flex-start;font-size:1em}.swal2-popup.swal2-toast .swal2-icon{width:2em;min-width:2em;height:2em;margin:0}.swal2-popup.swal2-toast .swal2-icon-text{font-size:2em;font-weight:700;line-height:1em}.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{top:.875em;width:1.375em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:.3125em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:.3125em}.swal2-popup.swal2-toast .swal2-actions{height:auto;margin:0 .3125em}.swal2-popup.swal2-toast .swal2-styled{margin:0 .3125em;padding:.3125em .625em;font-size:1em}.swal2-popup.swal2-toast .swal2-styled:focus{box-shadow:0 0 0 .0625em #fff,0 0 0 .125em rgba(50,100,150,.4)}.swal2-popup.swal2-toast .swal2-success{border-color:#a5dc86}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line]{position:absolute;width:2em;height:2.8125em;-webkit-transform:rotate(45deg);transform:rotate(45deg);border-radius:50%}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.25em;left:-.9375em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:2em 2em;transform-origin:2em 2em;border-radius:4em 0 0 4em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.25em;left:.9375em;-webkit-transform-origin:0 2em;transform-origin:0 2em;border-radius:0 4em 4em 0}.swal2-popup.swal2-toast .swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-success .swal2-success-fix{top:0;left:.4375em;width:.4375em;height:2.6875em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{height:.3125em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{top:1.125em;left:.1875em;width:.75em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{top:.9375em;right:.1875em;width:1.375em}.swal2-popup.swal2-toast.swal2-show{-webkit-animation:showSweetToast .5s;animation:showSweetToast .5s}.swal2-popup.swal2-toast.swal2-hide{-webkit-animation:hideSweetToast .2s forwards;animation:hideSweetToast .2s forwards}.swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip{-webkit-animation:animate-toast-success-tip .75s;animation:animate-toast-success-tip .75s}.swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long{-webkit-animation:animate-toast-success-long .75s;animation:animate-toast-success-long .75s}@-webkit-keyframes showSweetToast{0%{-webkit-transform:translateY(-.625em) rotateZ(2deg);transform:translateY(-.625em) rotateZ(2deg);opacity:0}33%{-webkit-transform:translateY(0) rotateZ(-2deg);transform:translateY(0) rotateZ(-2deg);opacity:.5}66%{-webkit-transform:translateY(.3125em) rotateZ(2deg);transform:translateY(.3125em) rotateZ(2deg);opacity:.7}100%{-webkit-transform:translateY(0) rotateZ(0);transform:translateY(0) rotateZ(0);opacity:1}}@keyframes  showSweetToast{0%{-webkit-transform:translateY(-.625em) rotateZ(2deg);transform:translateY(-.625em) rotateZ(2deg);opacity:0}33%{-webkit-transform:translateY(0) rotateZ(-2deg);transform:translateY(0) rotateZ(-2deg);opacity:.5}66%{-webkit-transform:translateY(.3125em) rotateZ(2deg);transform:translateY(.3125em) rotateZ(2deg);opacity:.7}100%{-webkit-transform:translateY(0) rotateZ(0);transform:translateY(0) rotateZ(0);opacity:1}}@-webkit-keyframes hideSweetToast{0%{opacity:1}33%{opacity:.5}100%{-webkit-transform:rotateZ(1deg);transform:rotateZ(1deg);opacity:0}}@keyframes  hideSweetToast{0%{opacity:1}33%{opacity:.5}100%{-webkit-transform:rotateZ(1deg);transform:rotateZ(1deg);opacity:0}}@-webkit-keyframes animate-toast-success-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@keyframes  animate-toast-success-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@-webkit-keyframes animate-toast-success-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@keyframes  animate-toast-success-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow-y:hidden}body.swal2-height-auto{height:auto!important}body.swal2-no-backdrop .swal2-shown{top:auto;right:auto;bottom:auto;left:auto;background-color:transparent}body.swal2-no-backdrop .swal2-shown>.swal2-modal{box-shadow:0 0 10px rgba(0,0,0,.4)}body.swal2-no-backdrop .swal2-shown.swal2-top{top:0;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-top-left,body.swal2-no-backdrop .swal2-shown.swal2-top-start{top:0;left:0}body.swal2-no-backdrop .swal2-shown.swal2-top-end,body.swal2-no-backdrop .swal2-shown.swal2-top-right{top:0;right:0}body.swal2-no-backdrop .swal2-shown.swal2-center{top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}body.swal2-no-backdrop .swal2-shown.swal2-center-left,body.swal2-no-backdrop .swal2-shown.swal2-center-start{top:50%;left:0;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-center-end,body.swal2-no-backdrop .swal2-shown.swal2-center-right{top:50%;right:0;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-bottom{bottom:0;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-bottom-left,body.swal2-no-backdrop .swal2-shown.swal2-bottom-start{bottom:0;left:0}body.swal2-no-backdrop .swal2-shown.swal2-bottom-end,body.swal2-no-backdrop .swal2-shown.swal2-bottom-right{right:0;bottom:0}.swal2-container{display:flex;position:fixed;top:0;right:0;bottom:0;left:0;flex-direction:row;align-items:center;justify-content:center;padding:10px;background-color:transparent;z-index:1060;overflow-x:hidden;-webkit-overflow-scrolling:touch}.swal2-container.swal2-top{align-items:flex-start}.swal2-container.swal2-top-left,.swal2-container.swal2-top-start{align-items:flex-start;justify-content:flex-start}.swal2-container.swal2-top-end,.swal2-container.swal2-top-right{align-items:flex-start;justify-content:flex-end}.swal2-container.swal2-center{align-items:center}.swal2-container.swal2-center-left,.swal2-container.swal2-center-start{align-items:center;justify-content:flex-start}.swal2-container.swal2-center-end,.swal2-container.swal2-center-right{align-items:center;justify-content:flex-end}.swal2-container.swal2-bottom{align-items:flex-end}.swal2-container.swal2-bottom-left,.swal2-container.swal2-bottom-start{align-items:flex-end;justify-content:flex-start}.swal2-container.swal2-bottom-end,.swal2-container.swal2-bottom-right{align-items:flex-end;justify-content:flex-end}.swal2-container.swal2-grow-fullscreen>.swal2-modal{display:flex!important;flex:1;align-self:stretch;justify-content:center}.swal2-container.swal2-grow-row>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container.swal2-grow-column{flex:1;flex-direction:column}.swal2-container.swal2-grow-column.swal2-bottom,.swal2-container.swal2-grow-column.swal2-center,.swal2-container.swal2-grow-column.swal2-top{align-items:center}.swal2-container.swal2-grow-column.swal2-bottom-left,.swal2-container.swal2-grow-column.swal2-bottom-start,.swal2-container.swal2-grow-column.swal2-center-left,.swal2-container.swal2-grow-column.swal2-center-start,.swal2-container.swal2-grow-column.swal2-top-left,.swal2-container.swal2-grow-column.swal2-top-start{align-items:flex-start}.swal2-container.swal2-grow-column.swal2-bottom-end,.swal2-container.swal2-grow-column.swal2-bottom-right,.swal2-container.swal2-grow-column.swal2-center-end,.swal2-container.swal2-grow-column.swal2-center-right,.swal2-container.swal2-grow-column.swal2-top-end,.swal2-container.swal2-grow-column.swal2-top-right{align-items:flex-end}.swal2-container.swal2-grow-column>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal{margin:auto}@media  all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-container .swal2-modal{margin:0!important}}.swal2-container.swal2-fade{transition:background-color .1s}.swal2-container.swal2-shown{background-color:rgba(0,0,0,.4)}.swal2-popup{display:none;position:relative;flex-direction:column;justify-content:center;width:32em;max-width:100%;padding:1.25em;border-radius:.3125em;background:#fff;font-family:inherit;font-size:1rem;box-sizing:border-box}.swal2-popup:focus{outline:0}.swal2-popup.swal2-loading{overflow-y:hidden}.swal2-popup .swal2-header{display:flex;flex-direction:column;align-items:center}.swal2-popup .swal2-title{display:block;position:relative;max-width:100%;margin:0 0 .4em;padding:0;color:#595959;font-size:1.875em;font-weight:600;text-align:center;text-transform:none;word-wrap:break-word}.swal2-popup .swal2-actions{align-items:center;justify-content:center;margin:1.25em auto 0;z-index:1}.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled]{opacity:.4}.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover{background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1))}.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active{background-image:linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2))}.swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm{width:2.5em;height:2.5em;margin:.46875em;padding:0;border:.25em solid transparent;border-radius:100%;border-color:transparent;background-color:transparent!important;color:transparent;cursor:default;box-sizing:border-box;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel{margin-right:30px;margin-left:30px}.swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after{display:inline-block;width:15px;height:15px;margin-left:5px;border:3px solid #999;border-radius:50%;border-right-color:transparent;box-shadow:1px 1px 1px #fff;content:'';-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal}.swal2-popup .swal2-styled{margin:0 .3125em;padding:.625em 2em;font-weight:500;box-shadow:none}.swal2-popup .swal2-styled:not([disabled]){cursor:pointer}.swal2-popup .swal2-styled.swal2-confirm{border:0;border-radius:.25em;background:initial;background-color:#3085d6;color:#fff;font-size:1.0625em}.swal2-popup .swal2-styled.swal2-cancel{border:0;border-radius:.25em;background:initial;background-color:#aaa;color:#fff;font-size:1.0625em}.swal2-popup .swal2-styled:focus{outline:0;box-shadow:0 0 0 2px #fff,0 0 0 4px rgba(50,100,150,.4)}.swal2-popup .swal2-styled::-moz-focus-inner{border:0}.swal2-popup .swal2-footer{justify-content:center;margin:1.25em 0 0;padding:1em 0 0;border-top:1px solid #eee;color:#545454;font-size:1em}.swal2-popup .swal2-image{max-width:100%;margin:1.25em auto}.swal2-popup .swal2-close{position:absolute;top:0;right:0;justify-content:center;width:1.2em;height:1.2em;padding:0;transition:color .1s ease-out;border:none;border-radius:0;background:0 0;color:#ccc;font-family:serif;font-size:2.5em;line-height:1.2;cursor:pointer;overflow:hidden}.swal2-popup .swal2-close:hover{-webkit-transform:none;transform:none;color:#f27474}.swal2-popup>.swal2-checkbox,.swal2-popup>.swal2-file,.swal2-popup>.swal2-input,.swal2-popup>.swal2-radio,.swal2-popup>.swal2-select,.swal2-popup>.swal2-textarea{display:none}.swal2-popup .swal2-content{justify-content:center;margin:0;padding:0;color:#545454;font-size:1.125em;font-weight:300;line-height:normal;z-index:1;word-wrap:break-word}.swal2-popup #swal2-content{text-align:center}.swal2-popup .swal2-checkbox,.swal2-popup .swal2-file,.swal2-popup .swal2-input,.swal2-popup .swal2-radio,.swal2-popup .swal2-select,.swal2-popup .swal2-textarea{margin:1em auto}.swal2-popup .swal2-file,.swal2-popup .swal2-input,.swal2-popup .swal2-textarea{width:100%;transition:border-color .3s,box-shadow .3s;border:1px solid #d9d9d9;border-radius:.1875em;font-size:1.125em;box-shadow:inset 0 1px 1px rgba(0,0,0,.06);box-sizing:border-box}.swal2-popup .swal2-file.swal2-inputerror,.swal2-popup .swal2-input.swal2-inputerror,.swal2-popup .swal2-textarea.swal2-inputerror{border-color:#f27474!important;box-shadow:0 0 2px #f27474!important}.swal2-popup .swal2-file:focus,.swal2-popup .swal2-input:focus,.swal2-popup .swal2-textarea:focus{border:1px solid #b4dbed;outline:0;box-shadow:0 0 3px #c4e6f5}.swal2-popup .swal2-file::-webkit-input-placeholder,.swal2-popup .swal2-input::-webkit-input-placeholder,.swal2-popup .swal2-textarea::-webkit-input-placeholder{color:#ccc}.swal2-popup .swal2-file:-ms-input-placeholder,.swal2-popup .swal2-input:-ms-input-placeholder,.swal2-popup .swal2-textarea:-ms-input-placeholder{color:#ccc}.swal2-popup .swal2-file::-ms-input-placeholder,.swal2-popup .swal2-input::-ms-input-placeholder,.swal2-popup .swal2-textarea::-ms-input-placeholder{color:#ccc}.swal2-popup .swal2-file::placeholder,.swal2-popup .swal2-input::placeholder,.swal2-popup .swal2-textarea::placeholder{color:#ccc}.swal2-popup .swal2-range input{width:80%}.swal2-popup .swal2-range output{width:20%;font-weight:600;text-align:center}.swal2-popup .swal2-range input,.swal2-popup .swal2-range output{height:2.625em;margin:1em auto;padding:0;font-size:1.125em;line-height:2.625em}.swal2-popup .swal2-input{height:2.625em;padding:.75em}.swal2-popup .swal2-input[type=number]{max-width:10em}.swal2-popup .swal2-file{font-size:1.125em}.swal2-popup .swal2-textarea{height:6.75em;padding:.75em}.swal2-popup .swal2-select{min-width:50%;max-width:100%;padding:.375em .625em;color:#545454;font-size:1.125em}.swal2-popup .swal2-checkbox,.swal2-popup .swal2-radio{align-items:center;justify-content:center}.swal2-popup .swal2-checkbox label,.swal2-popup .swal2-radio label{margin:0 .6em;font-size:1.125em}.swal2-popup .swal2-checkbox input,.swal2-popup .swal2-radio input{margin:0 .4em}.swal2-popup .swal2-validationerror{display:none;align-items:center;justify-content:center;padding:.625em;background:#f0f0f0;color:#666;font-size:1em;font-weight:300;overflow:hidden}.swal2-popup .swal2-validationerror::before{display:inline-block;width:1.5em;min-width:1.5em;height:1.5em;margin:0 .625em;border-radius:50%;background-color:#f27474;color:#fff;font-weight:600;line-height:1.5em;text-align:center;content:'!';zoom:normal}@supports (-ms-accelerator:true){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@media  all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@-moz-document url-prefix(){.swal2-close:focus{outline:2px solid rgba(50,100,150,.4)}}.swal2-icon{position:relative;justify-content:center;width:5em;height:5em;margin:1.25em auto 1.875em;border:.25em solid transparent;border-radius:50%;line-height:5em;cursor:default;box-sizing:content-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;zoom:normal}.swal2-icon-text{font-size:3.75em}.swal2-icon.swal2-error{border-color:#f27474}.swal2-icon.swal2-error .swal2-x-mark{position:relative;flex-grow:1}.swal2-icon.swal2-error [class^=swal2-x-mark-line]{display:block;position:absolute;top:2.3125em;width:2.9375em;height:.3125em;border-radius:.125em;background-color:#f27474}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:1.0625em;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:1em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal2-icon.swal2-warning{border-color:#facea8;color:#f8bb86}.swal2-icon.swal2-info{border-color:#9de0f6;color:#3fc3ee}.swal2-icon.swal2-question{border-color:#c9dae1;color:#87adbd}.swal2-icon.swal2-success{border-color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-circular-line]{position:absolute;width:3.75em;height:7.5em;-webkit-transform:rotate(45deg);transform:rotate(45deg);border-radius:50%}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.4375em;left:-2.0635em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:3.75em 3.75em;transform-origin:3.75em 3.75em;border-radius:7.5em 0 0 7.5em}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.6875em;left:1.875em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:0 3.75em;transform-origin:0 3.75em;border-radius:0 7.5em 7.5em 0}.swal2-icon.swal2-success .swal2-success-ring{position:absolute;top:-.25em;left:-.25em;width:100%;height:100%;border:.25em solid rgba(165,220,134,.3);border-radius:50%;z-index:2;box-sizing:content-box}.swal2-icon.swal2-success .swal2-success-fix{position:absolute;top:.5em;left:1.625em;width:.4375em;height:5.625em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);z-index:1}.swal2-icon.swal2-success [class^=swal2-success-line]{display:block;position:absolute;height:.3125em;border-radius:.125em;background-color:#a5dc86;z-index:2}.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip]{top:2.875em;left:.875em;width:1.5625em;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal2-icon.swal2-success [class^=swal2-success-line][class$=long]{top:2.375em;right:.5em;width:2.9375em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal2-progresssteps{align-items:center;margin:0 0 1.25em;padding:0;font-weight:600}.swal2-progresssteps li{display:inline-block;position:relative}.swal2-progresssteps .swal2-progresscircle{width:2em;height:2em;border-radius:2em;background:#3085d6;color:#fff;line-height:2em;text-align:center;z-index:20}.swal2-progresssteps .swal2-progresscircle:first-child{margin-left:0}.swal2-progresssteps .swal2-progresscircle:last-child{margin-right:0}.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep{background:#3085d6}.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle{background:#add8e6}.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline{background:#add8e6}.swal2-progresssteps .swal2-progressline{width:2.5em;height:.4em;margin:0 -1px;background:#3085d6;z-index:10}[class^=swal2]{-webkit-tap-highlight-color:transparent}.swal2-show{-webkit-animation:swal2-show .3s;animation:swal2-show .3s}.swal2-show.swal2-noanimation{-webkit-animation:none;animation:none}.swal2-hide{-webkit-animation:swal2-hide .15s forwards;animation:swal2-hide .15s forwards}.swal2-hide.swal2-noanimation{-webkit-animation:none;animation:none}[dir=rtl] .swal2-close{right:auto;left:0}.swal2-animate-success-icon .swal2-success-line-tip{-webkit-animation:swal2-animate-success-line-tip .75s;animation:swal2-animate-success-line-tip .75s}.swal2-animate-success-icon .swal2-success-line-long{-webkit-animation:swal2-animate-success-line-long .75s;animation:swal2-animate-success-line-long .75s}.swal2-animate-success-icon .swal2-success-circular-line-right{-webkit-animation:swal2-rotate-success-circular-line 4.25s ease-in;animation:swal2-rotate-success-circular-line 4.25s ease-in}.swal2-animate-error-icon{-webkit-animation:swal2-animate-error-icon .5s;animation:swal2-animate-error-icon .5s}.swal2-animate-error-icon .swal2-x-mark{-webkit-animation:swal2-animate-error-x-mark .5s;animation:swal2-animate-error-x-mark .5s}@-webkit-keyframes swal2-rotate-loading{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes  swal2-rotate-loading{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}</style>
<style type="text/css">/* Chart.js */
    @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes  chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
<script type="856679498872a607405cba04-text/javascript">

    $(document).on("submit", '.search-form', function(e) {
        e.preventDefault();

        var $form  = $(this);
        var $input = $form.find(':submit');
        $input.attr("disabled", 'disabled');
        var dataz = $form.serializeArray();
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: dataz,

            beforeSend: function() {
                $("#main_content").html('<div class="loading">Loading&#8230;</div>');
                $input.html ("Loading ....");
            },
            success: function(data) {
                var main_content = $(data).filter('#main_content');
                var content = $(main_content).html();
                $("#main_content").html(content);
                history.pushState({
                    url: this.url,
                    title: null
                }, null, this.url);
                //document.title = title;

            },
            error: function(request, x, y) {
                swal({
                    title: "Error",
                    html: "Error",
                    type: "error",
                    confirmButtonText: "Ok"
                });
                if (request.status == 401 || request.status == 503) {
                    location.reload();
                }
            }
        });

    });
</script>
<script type="856679498872a607405cba04-text/javascript">


    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "showDuration": "300",
        "hideDuration": "3000",
        "timeOut": "0",
        "extendedTimeOut": "0",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",

    }






</script>
<script src="js/custom.js?v=1.5" type="856679498872a607405cba04-text/javascript"></script>
<script src="js/checker.js" type="856679498872a607405cba04-text/javascript"></script>
<script type="856679498872a607405cba04-text/javascript">
    $(document).on('click','#seller',function (e) {
        e.preventDefault()
        window.location.href = $(this).data('href')
    })

</script>
<script type="856679498872a607405cba04-text/javascript">
    $('#DataTables_Table_2').DataTable( {
        destroy: true,
        searching: false
    } );
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" type="856679498872a607405cba04-text/javascript"></script>
<script src="js/vue.js" type="856679498872a607405cba04-text/javascript"></script>
<style>
    #main_content{
        margin-bottom: 80px;
    }
</style>
    <body>
        <div id="page-loader" class="show"></div>
        <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed page-header-modern main-content-boxed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Header -->
                <div class="content-header content-header-fullrow">
                    <div class="content-header-section align-parent">
                        <!-- Close Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Close Side Overlay -->

                        <!-- User Info -->
                        <div class="content-header-item">
                            <a class="img-link mr-5" href="be_pages_generic_profile.html">
                                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                            </a>
                            <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html"><?php echo $_SESSION['username']; ?></a>
                        </div>
                        <!-- END User Info -->
                    </div>
                </div>
                <!-- END Side Header -->
            </aside>
            <!-- END Side Overlay -->

            <nav id="sidebar">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow px-15">
                        <!-- Mini Mode -->
                        <div class="content-header-section sidebar-mini-visible-b">
                            <!-- Logo -->
                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                            <!-- END Logo -->
                        </div>
                        <!-- END Mini Mode -->

                        <!-- Normal Mode -->
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                            <!-- Logo -->
                            <div class="content-header-item">
                                <a class="link-effect font-w700" href="index.php">
                                    <i class="si si-fire text-primary"></i>
                                    <span class="font-size-xl text-dual-primary-dark">Spam</span><span class="font-size-xl text-primary">ToolZ</span>
                                </a>
                            </div>
                            <!-- END Logo -->
                        </div>
                        <!-- END Normal Mode -->
                    </div>
                    <!-- END Side Header -->

                    <!-- Side User -->
                    <div class="content-side content-side-full content-side-user px-10 align-parent">
                        <!-- Visible only in mini mode -->
                        <div class="sidebar-mini-visible-b align-v animated fadeIn">
                            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                        </div>
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="profile.php">
                                <img class="img-avatar" src="assets/media/avatars/avatar15.jpg" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="profile.php"><?php echo $_SESSION['username']; ?></a>
                                </li>
                                <li class="list-inline-item">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                        <i class="si si-drop"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a onclick="return confirm('Are you sure to logout?');" class="link-effect text-dual-primary-dark" href="logout.php">
                                        <i class="si si-logout"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Visible only in normal mode -->
                    </div>
                    <!-- END Side User -->

                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li >
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-home"></i><span class="sidebar-mini-hide">Main Navigation</span></a>
                                <ul>
                                    <li>
                                        <a  href="index.php"><span class="sidebar-mini-hide"><i class="si si-home"></i> Dashboard</span></a>
                                    </li>
                                    <li>
                                        <a  href="rules.php"><span class="sidebar-mini-hide"><i class="fa fa-edit"></i> Rules</span></a>
                                    </li>
                                    <li>
                                        <a  href="profile.php"><span class="sidebar-mini-hide"><i class="fa fa-key"></i> Profile Settings</span></a>
                                    </li>
                                    <li>
                                        <a  href="add.php"><span class="sidebar-mini-hide"><i class="fa fa-money"></i> Balance</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="open">
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-basket"></i><span class="sidebar-mini-hide">Stuff</span></a>
                                <ul>
                                    <li>
                                        <a  href="cpanel.php"><span class="sidebar-mini-hide"><i class="si si-rocket"></i> Cpanels</span></a>
                                    </li>
                                    <li>
                                        <a  href="shell.php"><span class="sidebar-mini-hide"><i class="si si-ghost"></i> Shells</span></a>
                                    </li>
                                    <li>
                                        <a  href="ssh.php"><span class="sidebar-mini-hide"><i class="si si-settings"></i> SSH/WHM</span></a>
                                    </li>
                                    <li>
                                        <a  href="smtp.php"><span class="sidebar-mini-hide"><i class="fa fa-inbox"></i> SMTP</span></a>
                                    </li>
                                    <li>
                                        <a  href="mailer.php"><span class="sidebar-mini-hide"><i class="si si-envelope"></i> Mailers</span></a>
                                    </li>
                                    <li>
                                        <a  href="webmail.php"><span class="sidebar-mini-hide"><i class="si si-envelope-letter"></i> Webmail</span></a>
                                    </li>
                                    <li>
                                        <a  href="leads.php"><span class="sidebar-mini-hide"><i class="fa fa-group"></i> Leads</span></a>
                                    </li>
                                    <li>
                                        <a  href="account.php"><span class="sidebar-mini-hide"><i class="si si-lock-open"></i> Accounts</span></a>
                                    </li>
                                    <li>
                                        <a class="active" href="rdp.php"><span class="sidebar-mini-hide"><i class="si si-screen-desktop"></i> RDP</span></a>
                                    </li>
                                    <li>
                                        <a  href="stuff.php"><span class="sidebar-mini-hide"><i class="si si-shuffle"></i> Others</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-credit-card"></i><span class="sidebar-mini-hide">Cards</span></a>
                                <ul>
                                    <li>
                                        <a  href="cards.php"><span class="sidebar-mini-hide"><i class="si si-credit-card"></i> Cards</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-basket-loaded"></i><span class="sidebar-mini-hide">Purchased Stuff</span></a>
                                <ul>
                                    <li>
                                        <a  href="mystuff.php"><span class="sidebar-mini-hide"><i class="si si-shuffle"></i> MY Orders</span></a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->
                    </div>
                    <!-- END Left Section -->
					<marquee behavior="alternate" direction="right"><button type="button" onclick="location='rules.php'" class="btn btn-alt-danger min-width-125" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: -38.425px;"></span>Attention to new members here, Please read the <b>RULES</b> before you buy</button></marquee>
                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user d-sm-none"></i>
                                <span class="d-none d-sm-inline-block"><?php echo $_SESSION['username']; ?></span>
                                <i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                                <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                                <a class="dropdown-item" href="profile.php">
                                    <i class="si si-user mr-5"></i> Profile
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="inbox.php">
                                    <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                                    <span class="badge badge-primary">0</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="invoices.php">
                                    <span><i class="si si-note mr-5"></i> Invoices</span>
									<span class="badge badge-primary">0</span>
                                </a>
                                <div class="dropdown-divider"></div>

                                <a onclick="return confirm('Are you sure to logout?');" class="dropdown-item" href="logout.php">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Notifications -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="badge badge-primary badge-pill">0</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-300" aria-labelledby="page-header-notifications">
                                <h5 class="h6 text-center py-10 mb-0 border-b text-uppercase">Notifications</h5>
                                <ul class="list-unstyled my-20">
								<!---
                                    <li>
                                        <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                            <div class="ml-5 mr-15">
                                                <i class="fa fa-fw fa-check text-success"></i>
                                            </div>
                                            <div class="media-body pr-10">
                                                <p class="mb-0">You’ve upgraded to a VIP account successfully!</p>
                                                <div class="text-muted font-size-sm font-italic">15 min ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                            <div class="ml-5 mr-15">
                                                <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                            </div>
                                            <div class="media-body pr-10">
                                                <p class="mb-0">Please check your payment info since we can’t validate them!</p>
                                                <div class="text-muted font-size-sm font-italic">50 min ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                            <div class="ml-5 mr-15">
                                                <i class="fa fa-fw fa-times text-danger"></i>
                                            </div>
                                            <div class="media-body pr-10">
                                                <p class="mb-0">Web server stopped responding and it was automatically restarted!</p>
                                                <div class="text-muted font-size-sm font-italic">4 hours ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                            <div class="ml-5 mr-15">
                                                <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                            </div>
                                            <div class="media-body pr-10">
                                                <p class="mb-0">Please consider upgrading your plan. You are running out of space.</p>
                                                <div class="text-muted font-size-sm font-italic">16 hours ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                            <div class="ml-5 mr-15">
                                                <i class="fa fa-fw fa-plus text-primary"></i>
                                            </div>
                                            <div class="media-body pr-10">
                                                <p class="mb-0">New purchases! +$250</p>
                                                <div class="text-muted font-size-sm font-italic">1 day ago</div>
                                            </div>
                                        </a>
                                    </li>
									!--->
                                </ul>
                            </div>
                        </div>
                        <!-- END Notifications -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action="be_pages_generic_search.html" method="post">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #1 -->
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-bag fa-2x text-primary-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="15000" data-to="<?php $servername = "208.109.23.206"; $username = "uuzzeeerr"; $password = "RaX147021@@"; $dbname = "ssppmm"; $conn = new mysqli($servername, $username, $password, $dbname); if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error); } $username = $_SESSION['username']; $sql = "SELECT * FROM tools WHERE id='1'"; $result = $conn->query($sql); if ($result->num_rows > 0) {   while($row = $result->fetch_assoc()) {    echo "" . $row["tools"]. "";  } } ?>">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Total Stuff in Store</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="add.php">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-wallet fa-2x text-earth-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-earth">$<span data-toggle="countTo" data-speed="1000" data-to="0">0</span></div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Account Balance</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-clock fa-2x text-elegance-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-elegance"><?php echo "" . date("h:i A"); ?></div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted"><?php echo "" . date("l");?>,  <?php echo "" . date("m/d/Y") ;?></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="fa fa-bitcoin fa-2x text-warning"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-warning">$<span data-toggle="countTo" data-speed="3000" data-to="<?php include("test.php"); ?>">0</span></div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Bitcoin Price</div>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #1 -->
                    </div>
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #3 -->
                        <!-- Dynamic Table Full -->
                        <div class="col-md-12">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">RDP</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter table-responsive js-dataTable-full">
                                <thead>
<tr role="row">
<th>ID</th>
<th>Location</th>
<th>Hosting</th>
<th>Username</th>
<th>Source</th>
<th>Ram</th>
<th>Windows</th>
<th>Access</th>
<th>Price </th>
<th>Ip Blacklist </th>
<th>Seller </th>
<th>Check </th>
<th>Buy</th>
<th>Date Created</th>
</tr>
                                </thead>
<?php
$date = date("Y-m-d");
$date1 = date('Y-m-d',strtotime("-1 days"));
$date2 = date('Y-m-d',strtotime("-2 days"));
$date3 = date('Y-m-d',strtotime("-3 days"));
$date4 = date('Y-m-d',strtotime("-4 days"));
$date5 = date('Y-m-d',strtotime("-5 days"));
?>
<tbody>
<tr role="row" class="odd">
<td>1405</td>
<td>
<img src="https://ipgeolocation.io/static/flags/in_64.png">
IN-Maharashtra
</td>
<td>Amazon Technologies Inc. (EC2)</td>
<td>Ad******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>8 GB</td>
<td>Win Server 2012</td>
<td>Admin</td>
<td>10.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1405" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_81</td>
<td>
<button data-href="check_cpanel.php" data-id="1405" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="10.00" data-id="1405" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 08:58:36 PM</td>
</tr><tr role="row" class="even">
<td>1404</td>
<td>
<img src="https://ipgeolocation.io/static/flags/in_64.png">
IN-Maharashtra
</td>
<td>Amazon Technologies Inc. (EC2)</td>
<td>Ad******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>8 GB</td>
<td>Win Server 2012</td>
<td>Admin</td>
<td>10.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1404" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
 </button>
</div>
</td>
<td>Seller_81</td>
<td>
<button data-href="check_cpanel.php" data-id="1404" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="10.00" data-id="1404" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 08:58:34 PM</td>
</tr><tr role="row" class="odd">
<td>1403</td>
<td>
<img src="https://ipgeolocation.io/static/flags/de_64.png">
 DE-Hesse
</td>
<td>Amazon Technologies Inc. (EC2)</td>
<td>Ad******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>8 GB</td>
<td>Win Server 2012</td>
<td>Admin</td>
<td>10.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1403" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_81</td>
<td>
<button data-href="check_cpanel.php" data-id="1403" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="10.00" data-id="1403" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 08:58:31 PM</td>
</tr><tr role="row" class="even">
<td>1402</td>
<td>
<img src="https://ipgeolocation.io/static/flags/de_64.png">
DE-Hesse
</td>
<td>Amazon Technologies Inc. (EC2)</td>
<td>Ad******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>8 GB</td>
<td>Win Server 2012</td>
<td>Admin</td>
<td>10.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1402" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_81</td>
<td>
<button data-href="check_cpanel.php" data-id="1402" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="10.00" data-id="1402" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 08:58:29 PM</td>
</tr><tr role="row" class="odd">
<td>1401</td>
<td>
<img src="https://ipgeolocation.io/static/flags/fr_64.png">
FR-Ile-de-France
</td>
<td>Amazon Technologies Inc. (EC2)</td>
<td>Ad******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>8 GB</td>
<td>Win Server 2012</td>
<td>Admin</td>
<td>10.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1401" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_81</td>
<td>
<button data-href="check_cpanel.php" data-id="1401" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="10.00" data-id="1401" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 08:58:27 PM</td>
</tr><tr role="row" class="even">
<td>1400</td>
<td>
<img src="https://ipgeolocation.io/static/flags/fr_64.png">
FR-Ile-de-France
</td>
<td>Amazon Technologies Inc. (EC2)</td>
<td>Ad******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>8 GB</td>
<td>Win Server 2012</td>
<td>Admin</td>
<td>10.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1400" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_81</td>
<td>
<button data-href="check_cpanel.php" data-id="1400" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="10.00" data-id="1400" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 08:58:26 PM</td>
</tr><tr role="row" class="odd">
<td>1399</td>
<td>
<img src="https://ipgeolocation.io/static/flags/ca_64.png">
CA-Ontario
</td>
 <td>Amazon Technologies Inc. (EC2)</td>
<td>Ad******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>8 GB</td>
<td>Win Server 2012</td>
<td>Admin</td>
<td>10.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1399" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_81</td>
<td>
<button data-href="check_cpanel.php" data-id="1399" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="10.00" data-id="1399" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 08:58:24 PM</td>
</tr><tr role="row" class="even">
<td>1398</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Virginia
</td>
<td>Amazon Technologies Inc. (EC2)</td>
<td>Ad******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>8 GB</td>
<td>Win Server 2012</td>
<td>Admin</td>
<td>10.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1398" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_81</td>
<td>
<button data-href="check_cpanel.php" data-id="1398" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="10.00" data-id="1398" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 08:58:22 PM</td>
</tr><tr role="row" class="odd">
<td>1397</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Virginia
</td>
<td>Amazon Technologies Inc. (EC2)</td>
<td>Ad******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>8 GB</td>
<td>Win Server 2012</td>
<td>Admin</td>
<td>10.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1397" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_81</td>
<td>
<button data-href="check_cpanel.php" data-id="1397" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="10.00" data-id="1397" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 08:58:20 PM</td>
</tr><tr role="row" class="even">
<td>1396</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Ohio
</td>
<td>Amazon Technologies Inc. (EC2)</td>
<td>Ad******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>8 GB</td>
<td>Win Server 2012</td>
<td>Admin</td>
<td>10.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1396" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_81</td>
<td>
<button data-href="check_cpanel.php" data-id="1396" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="10.00" data-id="1396" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 08:58:18 PM</td>
</tr><tr role="row" class="odd">
<td>1395</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Ohio
</td>
<td>Amazon Technologies Inc. (EC2)</td>
<td>Ad******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>8 GB</td>
<td>Win Server 2012</td>
<td>Admin</td>
<td>10.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1395" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_81</td>
<td>
<button data-href="check_cpanel.php" data-id="1395" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="10.00" data-id="1395" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
 </td>
<td class="sorting_1"><?php echo $date; ?> 08:58:16 PM</td>
</tr><tr role="row" class="even">
<td>1394</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Oregon
</td>
<td>Amazon Technologies Inc. (EC2)</td>
<td>Ad******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>8 GB</td>
<td>Win Server 2012</td>
<td>Admin</td>
<td>10.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1394" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_81</td>
<td>
<button data-href="check_cpanel.php" data-id="1394" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="10.00" data-id="1394" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 08:58:13 PM</td>
</tr><tr role="row" class="odd">
<td>1393</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Oregon
</td>
<td>Amazon Technologies Inc. (EC2)</td>
<td>Ad******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>8 GB</td>
<td>Win Server 2012</td>
<td>Admin</td>
<td>10.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1393" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_81</td>
<td>
<button data-href="check_cpanel.php" data-id="1393" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="10.00" data-id="1393" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 08:58:11 PM</td>
</tr><tr role="row" class="even">
<td>1392</td>
<td>
<img src="https://ipgeolocation.io/static/flags/fi_64.png">
FI-South Finland
</td>
<td>Hetzner Online GmbH</td>
<td>Ad******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>32 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>5.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1392" class="btn btn-sm btn-primary check_black_list">
 Check Blacklist
</button>
</div>
</td>
<td>Seller_10134</td>
<td>
<button data-href="check_cpanel.php" data-id="1392" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="5.00" data-id="1392" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date1; ?> 11:44:15 PM</td>
</tr><tr role="row" class="odd">
<td>1387</td>
<td>
<img src="https://ipgeolocation.io/static/flags/au_64.png">
AU-Victoria
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1387" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1387" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1387" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:16:04 PM</td>
</tr><tr role="row" class="even">
<td>1386</td>
<td>
<img src="https://ipgeolocation.io/static/flags/de_64.png">
DE-Hesse
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1386" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1386" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1386" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:16:02 PM</td>
</tr><tr role="row" class="odd">
<td>1385</td>
<td>
<img src="https://ipgeolocation.io/static/flags/jp_64.png">
JP-Tokyo
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1385" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1385" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1385" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:16:00 PM</td>
</tr><tr role="row" class="even">
<td>1384</td>
<td>
<img src="https://ipgeolocation.io/static/flags/in_64.png">
IN-Maharashtra
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1384" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1384" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1384" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:58 PM</td>
</tr><tr role="row" class="odd">
<td>1383</td>
<td>
<img src="https://ipgeolocation.io/static/flags/fr_64.png">
FR-Ile-de-France
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1383" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1383" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1383" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:56 PM</td>
</tr><tr role="row" class="even">
<td>1382</td>
<td>
<img src="https://ipgeolocation.io/static/flags/de_64.png">
DE-Hesse
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
 <div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1382" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1382" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1382" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:54 PM</td>
</tr><tr role="row" class="odd">
<td>1381</td>
<td>
<img src="https://ipgeolocation.io/static/flags/ca_64.png">
CA-Quebec
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
 <td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1381" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1381" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1381" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:52 PM</td>
</tr><tr role="row" class="even">
<td>1380</td>
<td>
<img src="https://ipgeolocation.io/static/flags/de_64.png">
DE-Hesse
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1380" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1380" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1380" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:50 PM</td>
</tr><tr role="row" class="odd">
<td>1379</td>
<td>
<img src="https://ipgeolocation.io/static/flags/gb_64.png">
GB-Wales
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1379" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1379" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1379" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:48 PM</td>
</tr><tr role="row" class="even">
<td>1378</td>
<td>
<img src="https://ipgeolocation.io/static/flags/za_64.png">
ZA-Gauteng
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1378" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1378" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1378" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:46 PM</td>
</tr><tr role="row" class="odd">
<td>1377</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Washington
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1377" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1377" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1377" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:44 PM</td>
</tr><tr role="row" class="even">
<td>1376</td>
<td>
<img src="https://ipgeolocation.io/static/flags/fr_64.png">
FR-Ile-de-France
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1376" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1376" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1376" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:42 PM</td>
</tr><tr role="row" class="odd">
<td>1374</td>
<td>
<img src="https://ipgeolocation.io/static/flags/fr_64.png">
FR-Ile-de-France
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1374" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1374" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1374" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:38 PM</td>
</tr><tr role="row" class="even">
<td>1373</td>
<td>
<img src="https://ipgeolocation.io/static/flags/de_64.png">
DE-Hesse
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1373" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1373" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1373" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:36 PM</td>
</tr><tr role="row" class="odd">
<td>1372</td>
<td>
<img src="https://ipgeolocation.io/static/flags/kr_64.png">
KR-
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1372" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
 <td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1372" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1372" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:34 PM</td>
</tr><tr role="row" class="even">
<td>1371</td>
<td>
<img src="https://ipgeolocation.io/static/flags/in_64.png">
IN-Maharashtra
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1371" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1371" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1371" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:32 PM</td>
</tr><tr role="row" class="odd">
<td>1369</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Washington
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1369" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1369" class="btn btn-sm btn-primary check_up_item">
 Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1369" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:28 PM</td>
</tr><tr role="row" class="even">
<td>1368</td>
<td>
<img src="https://ipgeolocation.io/static/flags/hk_64.png">
HK-Hong Kong SAR
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1368" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1368" class="btn btn-sm btn-primary check_up_item">
Check
 </button>
</td>
<td>
<button data-price="15.00" data-id="1368" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:26 PM</td>
</tr><tr role="row" class="odd">
<td>1367</td>
<td>
<img src="https://ipgeolocation.io/static/flags/fr_64.png">
FR-Ile-de-France
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1367" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1367" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1367" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:24 PM</td>
</tr><tr role="row" class="even">
<td>1366</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Texas
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1366" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1366" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1366" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:22 PM</td>
</tr><tr role="row" class="odd">
<td>1365</td>
<td>
<img src="https://ipgeolocation.io/static/flags/fr_64.png">
FR-Ile-de-France
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1365" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1365" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1365" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:20 PM</td>
</tr><tr role="row" class="even">
<td>1364</td>
<td>
<img src="https://ipgeolocation.io/static/flags/gb_64.png">
GB-Wales
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1364" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1364" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1364" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:19 PM</td>
</tr><tr role="row" class="odd">
<td>1363</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Texas
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1363" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1363" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1363" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:16 PM</td>
</tr><tr role="row" class="even">
<td>1362</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Virginia
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1362" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1362" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1362" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:14 PM</td>
</tr><tr role="row" class="odd">
<td>1361</td>
<td>
<img src="https://ipgeolocation.io/static/flags/no_64.png">
NO-Oslo
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1361" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1361" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1361" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:12 PM</td>
 </tr><tr role="row" class="even">
<td>1360</td>
<td>
<img src="https://ipgeolocation.io/static/flags/jp_64.png">
JP-Osaka
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1360" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1360" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1360" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:10 PM</td>
</tr><tr role="row" class="odd">
<td>1359</td>
<td>
<img src="https://ipgeolocation.io/static/flags/no_64.png">
NO-Oslo
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1359" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1359" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1359" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:08 PM</td>
</tr><tr role="row" class="even">
<td>1358</td>
<td>
<img src="https://ipgeolocation.io/static/flags/ae_64.png">
AE-
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1358" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1358" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1358" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:06 PM</td>
</tr><tr role="row" class="odd">
<td>1356</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Washington
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1356" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1356" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1356" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:02 PM</td>
</tr><tr role="row" class="even">
<td>1355</td>
<td>
<img src="https://ipgeolocation.io/static/flags/kr_64.png">
KR-
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1355" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1355" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1355" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:15:00 PM</td>
</tr><tr role="row" class="odd">
<td>1354</td>
<td>
<img src="https://ipgeolocation.io/static/flags/jp_64.png">
JP-Osaka
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1354" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1354" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1354" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:58 PM</td>
</tr><tr role="row" class="even">
<td>1353</td>
<td>
<img src="https://ipgeolocation.io/static/flags/kr_64.png">
KR-
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1353" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1353" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1353" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:56 PM</td>
</tr><tr role="row" class="odd">
<td>1352</td>
<td>
<img src="https://ipgeolocation.io/static/flags/in_64.png">
IN-Maharashtra
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1352" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1352" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1352" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:54 PM</td>
</tr><tr role="row" class="even">
<td>1350</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Washington
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1350" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
 </td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1350" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1350" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:50 PM</td>
</tr><tr role="row" class="odd">
<td>1349</td>
<td>
<img src="https://ipgeolocation.io/static/flags/in_64.png">
IN-Maharashtra
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1349" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1349" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1349" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:48 PM</td>
</tr><tr role="row" class="even">
<td>1348</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Washington
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1348" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1348" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1348" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:46 PM</td>
</tr><tr role="row" class="odd">
<td>1347</td>
<td>
<img src="https://ipgeolocation.io/static/flags/br_64.png">
BR-Sao Paulo
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1347" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1347" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1347" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:44 PM</td>
</tr><tr role="row" class="even">
<td>1346</td>
<td>
<img src="https://ipgeolocation.io/static/flags/au_64.png">
AU-Victoria
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1346" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1346" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1346" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:42 PM</td>
</tr><tr role="row" class="odd">
<td>1345</td>
<td>
<img src="https://ipgeolocation.io/static/flags/jp_64.png">
JP-Osaka
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1345" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1345" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1345" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:40 PM</td>
</tr><tr role="row" class="even">
<td>1344</td>
<td>
<img src="https://ipgeolocation.io/static/flags/ca_64.png">
CA-Quebec
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1344" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1344" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1344" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:38 PM</td>
</tr><tr role="row" class="odd">
<td>1343</td>
<td>
<img src="https://ipgeolocation.io/static/flags/in_64.png">
IN-Maharashtra
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1343" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1343" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1343" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:37 PM</td>
</tr><tr role="row" class="even">
<td>1342</td>
<td>
<img src="https://ipgeolocation.io/static/flags/br_64.png">
BR-Sao Paulo
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1342" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1342" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1342" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:34 PM</td>
</tr><tr role="row" class="odd">
<td>1341</td>
<td>
<img src="https://ipgeolocation.io/static/flags/au_64.png">
AU-Victoria
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1341" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1341" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1341" data-name="rdp" class="buy_button btn btn-sm btn-danger">
 Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:32 PM</td>
</tr><tr role="row" class="even">
<td>1340</td>
<td>
<img src="https://ipgeolocation.io/static/flags/jp_64.png">
JP-Osaka
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1340" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1340" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1340" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:31 PM</td>
</tr><tr role="row" class="odd">
<td>1339</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Washington
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1339" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1339" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1339" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:29 PM</td>
</tr><tr role="row" class="even">
<td>1338</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Illinois
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1338" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1338" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1338" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:27 PM</td>
</tr><tr role="row" class="odd">
<td>1337</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Texas
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1337" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1337" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1337" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:24 PM</td>
</tr><tr role="row" class="even">
<td>1336</td>
<td>
<img src="https://ipgeolocation.io/static/flags/sg_64.png">
SG-
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1336" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1336" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1336" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:23 PM</td>
</tr><tr role="row" class="odd">
<td>1335</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Illinois
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1335" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1335" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1335" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:20 PM</td>
</tr><tr role="row" class="even">
<td>1333</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Washington
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1333" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
 <button data-href="check_cpanel.php" data-id="1333" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1333" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:16 PM</td>
</tr><tr role="row" class="odd">
<td>1332</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Washington
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1332" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1332" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1332" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:14 PM</td>
</tr><tr role="row" class="even">
<td>1331</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Washington
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1331" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1331" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1331" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:12 PM</td>
</tr><tr role="row" class="odd">
<td>1330</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Illinois
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1330" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1330" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1330" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:10 PM</td>
</tr><tr role="row" class="even">
<td>1329</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Virginia
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1329" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1329" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1329" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:08 PM</td>
</tr><tr role="row" class="odd">
<td>1328</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Wyoming
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1328" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1328" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1328" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
 </button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:07 PM</td>
</tr><tr role="row" class="even">
<td>1327</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Texas
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1327" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1327" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1327" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:05 PM</td>
</tr><tr role="row" class="odd">
<td>1326</td>
<td>
<img src="https://ipgeolocation.io/static/flags/jp_64.png">
JP-Osaka
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1326" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1326" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1326" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:02 PM</td>
</tr><tr role="row" class="even">
<td>1325</td>
<td>
<img src="https://ipgeolocation.io/static/flags/ae_64.png">
AE-
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1325" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1325" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1325" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:14:00 PM</td>
</tr><tr role="row" class="odd">
<td>1324</td>
<td>
<img src="https://ipgeolocation.io/static/flags/gb_64.png">
GB-Wales
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1324" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1324" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1324" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:13:58 PM</td>
</tr><tr role="row" class="even">
<td>1323</td>
<td>
<img src="https://ipgeolocation.io/static/flags/ca_64.png">
CA-Quebec
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1323" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1323" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1323" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:13:57 PM</td>
</tr><tr role="row" class="odd">
<td>1322</td>
<td>
<img src="https://ipgeolocation.io/static/flags/kr_64.png">
KR-
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1322" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1322" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
 <td>
<button data-price="15.00" data-id="1322" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:13:55 PM</td>
</tr><tr role="row" class="even">
<td>1320</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Wyoming
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
 <span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1320" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1320" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1320" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:13:51 PM</td>
</tr><tr role="row" class="odd">
<td>1319</td>
<td>
<img src="https://ipgeolocation.io/static/flags/nl_64.png">
NL-North Holland
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1319" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1319" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1319" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:13:49 PM</td>
</tr><tr role="row" class="even">
<td>1317</td>
<td>
<img src="https://ipgeolocation.io/static/flags/us_64.png">
US-Washington
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1317" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1317" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1317" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:13:44 PM</td>
</tr><tr role="row" class="odd">
<td>1316</td>
<td>
<img src="https://ipgeolocation.io/static/flags/sg_64.png">
SG-
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1316" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1316" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1316" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:13:42 PM</td>
</tr><tr role="row" class="even">
<td>1315</td>
<td>
<img src="https://ipgeolocation.io/static/flags/ch_64.png">
CH-Zurich
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1315" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1315" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1315" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:13:41 PM</td>
</tr><tr role="row" class="odd">
<td>1314</td>
<td>
<img src="https://ipgeolocation.io/static/flags/gb_64.png">
GB-England
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1314" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1314" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1314" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:13:39 PM</td>
</tr><tr role="row" class="even">
<td>1313</td>
<td>
<img src="https://ipgeolocation.io/static/flags/au_64.png">
AU-Victoria
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1313" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1313" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1313" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:13:37 PM</td>
</tr><tr role="row" class="odd">
<td>1312</td>
<td>
<img src="https://ipgeolocation.io/static/flags/in_64.png">
IN-Tamil Nadu
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1312" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1312" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1312" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:13:34 PM</td>
</tr><tr role="row" class="even">
<td>1310</td>
<td>
<img src="https://ipgeolocation.io/static/flags/gb_64.png">
GB-England
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1310" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1310" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1310" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:13:31 PM</td>
</tr><tr role="row" class="odd">
<td>1309</td>
<td>
<img src="https://ipgeolocation.io/static/flags/ie_64.png">
IE-
</td>
<td>Microsoft Corporation</td>
<td>cl******</td>
<td>
<span class="created"><i class="fa fa-plus-circle"></i> Created</span>
</td>
<td>16 GB</td>
<td>Win Server 2019</td>
<td>Admin</td>
<td>15.00</td>
<td>
<div class="contains-blacklist">
<button data-href="check_rdp.php" data-id="1309" class="btn btn-sm btn-primary check_black_list">
Check Blacklist
</button>
</div>
</td>
<td>Seller_31</td>
<td>
<button data-href="check_cpanel.php" data-id="1309" class="btn btn-sm btn-primary check_up_item">
Check
</button>
</td>
<td>
<button data-price="15.00" data-id="1309" data-name="rdp" class="buy_button btn btn-sm btn-danger">
Buy
</button>
</td>
<td class="sorting_1"><?php echo $date; ?> 07:13:28 PM</td>
</tr>
</tbody>
                            </table>
                        </div>
                    </div>                    </div>
                    <!-- END Dynamic Table Full -->
                        <!-- END Row #3 -->
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
			<center><img style="width: 120px" src="assets/media/photos/se.png"/></center>
			<hr>
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-left">
                        Copyright &copy; 2017 - <span class="js-year-copy"></span> <a class="font-w600" href="#">spamtoolz.net</a>. All rights reserved.
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->
        <script src="assets/js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_pages_dashboard.min.js"></script>
        <script src="assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_tables_datatables.min.js"></script>
<script type="4bc6ee030c1f4be0e4cf2817-text/javascript">

    $(document).ready(function(){

        $("#myModal").modal('show');

    });

  function smtp_check(id){
        
       var email = "admin@admin.com";
       
       var action_id = id;
       var id_send = 'id_'+id;     
       var element = document.getElementById(id_send);
       
        
        var ajaxurl ="check_cpanel.php";
        var action = 'send';
     if(email !=''){   
         
        if(!validateEmail(email)){
               alert('write valid email');
        }else{ 
         element.innerHTML = '<i class="fa fa-spinner fa-spin" id="spinner"></i>';
          $.ajax ({

            type:'POST',
            url: ajaxurl,
            data:'id='+action_id+'&email='+email,

            success: function (result) {
             var vald = result.split("<br>");
             var le = vald.length;
             
             var check = vald[le-1];
             
             
             if(check == 1){
                 element.innerHTML = 'Working';
                 element.className = "btn btn-success";
             }else{ element.innerHTML = 'Working';
                    element.className = "btn btn-success";
             }
              

            },

            error: function (result) {
              alert('error connection');
            }

        });
    }
        
    }else{alert('write valid email');}
        
    }
    
    function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

</script>
<script type="4bc6ee030c1f4be0e4cf2817-text/javascript">
        $(document).ready(function() {
              $('#bsr-results').dataTable({
                  "language": [{
                      "decimal": ".",
                      "thousands": ","
                  }],
                  "order": [],
                  "columnDefs": [{
                      "type": "html-num-fmt",
                      "targets": 4,
                      "orderable": false,
                      "targets": [1, 3]
                  }],
                  "paging": false,
                  "searching": false,
                  "autoWidth": false,
                  "info": false
              });
});

              $(document).ready(function() {
                  $("#myInput").on("keyup", function() {
                      var value = $(this).val().toLowerCase();
                      $("#myTable tr").filter(function() {
                          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                      });
                  });
              });




              function myFunction() {
                  var copyText = document.getElementById("myInput");
                  copyText.select();
                  copyText.setSelectionRange(0, 99999);
                  document.execCommand("copy");

                  var tooltip = document.getElementById("myTooltip");
                  tooltip.innerHTML = "Copied";
              }

              function outFunc() {
                  var tooltip = document.getElementById("myTooltip");
                  tooltip.innerHTML = "Copy to clipboard";
              }



</script>
<script type="4bc6ee030c1f4be0e4cf2817-text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
<script type="4bc6ee030c1f4be0e4cf2817-text/javascript">
      $(":file").filestyle({icon: false});
    </script>
<script type="4bc6ee030c1f4be0e4cf2817-text/javascript">
   $('#list').addInputArea({
  maximum : 5
});
</script>
<script type="4bc6ee030c1f4be0e4cf2817-text/javascript">
$(document).ready(function() {
    $('#example_table').DataTable();
} );
    </script>
<script type="4bc6ee030c1f4be0e4cf2817-text/javascript">
  
$(document).ready(function(){

    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 500) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });

});
</script>
<script src="js/wow.min.js" type="4bc6ee030c1f4be0e4cf2817-text/javascript"></script>
<script type="4bc6ee030c1f4be0e4cf2817-text/javascript">
    new WOW().init();
</script>
<script src="build/js/intlTelInput.js" type="4bc6ee030c1f4be0e4cf2817-text/javascript"></script>
<script type="4bc6ee030c1f4be0e4cf2817-text/javascript">
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });
  </script>
<script src="js/clipboard.min.js" type="4bc6ee030c1f4be0e4cf2817-text/javascript"></script>
<script type="4bc6ee030c1f4be0e4cf2817-text/javascript">
  new ClipboardJS('.btn');
</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="4bc6ee030c1f4be0e4cf2817-|49" defer=""></script>
<script type="856679498872a607405cba04-text/javascript">
            $("#DataTables_Table_4").DataTable({ "destroy": true,"aaSorting": [], "paging": false, "bInfo": false, "searching": false });


        </script>
</div>

<script type="856679498872a607405cba04-text/javascript">
    $(document).on("click",'.notification_parent',function (e) {
        var notification_href =  $("#notifications_mark_read").attr("href");
        var id =  $(this).data("id");
        //var notification_parent = $(this).parents(".notification_parent");
        var notification_parent = $(this);
        notification_parent.fadeOut(300,function() {
            notification_parent.remove();

            $.ajax({
                type: "post",
                url: notification_href,
                data: {id:id},
                dataType: 'json',
                success: function(data) {
                    var notification_count = Number($(".notification_count").text()) - 1;
                    $(".notification_count").text(notification_count);
                    if (notification_count == 0) {
                        $(".notification_count").removeClass ("badge-success");
                        $(".notification_count").addClass ("badge-info");
                        $(".notification_count").addClass ("d-blue-background");

                    }

                },
                error: function(request,x,y) {


                },
                complete: function(data) {

                },
                beforeSend: function () {


                },
            });
        });
    });
    $(document).on("click",'#notifications_mark_read',function (e) {
        e.preventDefault();
        var notification_href =  $(this).attr("href");
        $.ajax({
            type: "post",
            url: notification_href,
            dataType: 'json',
            success: function(data) {

                $.get( data.notifications_url, function( data ) {
                    $("#notifications_container").html(data.notifications);
                });

            },

        });
    });

    setInterval(function() {

        $.get('bt.php', function( data ) {

            $("#buyer_balance").text(data.balance);

            if (data.untoasted.length > 0) {
                data.untoasted.forEach (function (entry) {

                        toastr.info(entry.msg,'',
                        {

                            "tapToDismiss": false,
                            onclick: function() {
                                url = entry.url;
                                var title = false;
                                if (isURL (url)) {
                                    //load(url,title);
                                    var x = $('[data-id='+entry.id+']');
                                    x.parents(".notification_parent").click();
                                    x.parents(".notification_parent").trigger("click");
                                    window.location.href = url;
                                }



                                return false;

                            }

                        });

                });
            }

        });
        $.get('notes.php', function( data ) {
            $('#notifications_container').html(data)
        });
        $.get('https://www.spamtoolz.net')

    }, 20* 1000);

</script>
<script type="856679498872a607405cba04-text/javascript">
    $(document).on('click','.get-code',function () {
        var url = $(this).data('href');
        var $this = $(this)
        $this.html('loading...')
        $.ajax({
            type: "get",
            url: url,
            dataType: 'json',
            success: function(data) {
                $this.html(data.msg)
                $this.removeClass('btn-warning')
                $this.addClass('btn-success')
            },

        });
    })
</script>


<div class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="buyModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="buyModalLabel">Are you sure? </h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
Are you sure buying this item?
</div>
<div class="modal-footer">
<form class="ajaxform" method="post" action="buy.php" data-reset="false">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
<input class="item_id" type="hidden" value="" name="item_id">
<input class="item_name" type="hidden" value="" name="item_name">
<button type="submit" class="btn btn-primary">Yes, BuyIt </button>
<input type="hidden" name="_token" value="7bTgcvWBeXPRMSgdJw2yHTcG0dNvtCKv1eykxRPk"> </form>
</div>
</div>
</div>
</div>


<div class="modal fade" id="addBalanceModal" tabindex="-1" role="dialog" aria-labelledby="addBalanceModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="addBalanceModalLabel"> </h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body text-center">
No Funds .. Add balance To buy this item <br>
<img src="moneybag.jpg" style="max-width: 300px;" class="img img-responsive">
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
<a href="add.php" type="button" class="btn btn-primary">Add Balance </a>
</div>
</div>
</div> notifications
</div>


<div class="modal fade" id="SeoDetailsModal" tabindex="-1" role="dialog" aria-labelledby="SeoDetailsModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="reportModalLabel">Seo Details</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body seo_item_body">
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<div class="modal fade" id="showItemModal" tabindex="-1" role="dialog" aria-labelledby="showItemModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="reportModalLabel">Show Item #<span class="item_id_span">1</span></h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body item_body">
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
 </div>
</div>
</div>
</div>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="856679498872a607405cba04-|49" defer=""></script><script type="text/javascript">(function(){window['__CF$cv$params']={r:'61ea4e5bebb5ee44',m:'7e789c089affea4b58480ec16dc794c07b341e4c-1612839270-1800-AW5H/X26mPJIAvQ8cMQlXfnFEmrnDxUTl2y+DhP9hq6Lzw8QvlRuqp2NCrRPw5/JxE4wV/59UJVY+aOo5AMar1wEksEVBARk56ZWT0hd7kx+/IqkRf2OA0zeV6NO+d+++w==',s:[0xec1c8fae05,0x92bb082a1b],}})();</script>
</body>
</html>
