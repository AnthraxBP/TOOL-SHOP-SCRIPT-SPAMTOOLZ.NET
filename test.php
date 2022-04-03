<?php 
$url="https://spamtoolz.net/test.php";
$ch = curl_init();//I have removed it from here
curl_setopt($ch, CURLOPT_URL,$url);// This will do
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$output = curl_exec($ch);
echo $output;
curl_close($ch); 
?>