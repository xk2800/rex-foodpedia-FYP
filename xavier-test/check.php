<?php

$time = time();
$actual_time = date('H:i:s', $time);

echo 'The current time is '.$actual_time;
echo'<br>--------------------------------<br>';



echo'<br>Getting Visitor IP Address<br>';
//acurate grab
$http_client_ip = getenv('HTTP_CLIENT_IP');
$http_x_forwarded_for = getenv('HTTP_X_FORWARDED_FOR');
$remote_addr = getenv('REMOTE_ADDR');

if(!empty($http_client_ip)){
    $ip_address = $http_client_ip;
}else if(!empty($http_x_forwarded_for)){
    $ip_address = $http_x_forwarded_for;
}else{
    $ip_address = $remote_addr;
}

echo $ip_address;

echo'<br>--------------------------------<br>';

echo'<br>Getting Visitor browser<br>';

function get_browser_name($user_agent)
{
    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
    elseif (strpos($user_agent, 'Edge')) return 'Edge';
    elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
    elseif (strpos($user_agent, 'Safari')) return 'Safari';
    elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';
    
    return 'Other';
}

echo get_browser_name($_SERVER['HTTP_USER_AGENT']);

echo'<br><br>Another way<br>';

$browser = '';
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$chrome = preg_match('/Chrome/', $user_agent);
$msie = preg_match('/Trident/', $user_agent);
$edge = preg_match('/Edge/', $user_agent);
$firefox = preg_match('/Firefox/', $user_agent);
$safari = preg_match('/Safari/', $user_agent);
//
/*
you can also add more data on this $col array to make 
detection of more browsers but you also have to create there 
variables on the top like i did  
user agent strings
Google chrome = "Chrome";
Microsoft Edge = "Edge";
Internet explorer = "Trident";
Latest version of opera "OPR";
Older version of opera = "Opera";
Apple's Safari web browser = "Safari"
UC borwser = "UBrowser";
note::
you must have to arrange the array to a specific order like mine
if dont understand how to arrange then please first understand that
What are user agent strings becuse i cannot too much explanation right here 
*/
$col = array('Safari' => $safari , 'Firefox' => $firefox , 'Internet Explorer' => $msie, 'Google chrome' => $chrome , 'Microsoft Edge' => $edge);

foreach ($col as $key => $value) {
 $check = $value;
 if($check)
 {
  $browser = $key;
 }
}
if($browser == '')
{
 echo 'Sorry our system did\'nt detect your browser';
}
echo 'Your browser is '.$browser;



echo'<br>--------------------------------<br>';
echo'SET Cookies';
setcookie('username', 'xavier', time()+500); //name, value, exp date

echo '<br>Your cookie: ';
echo $_COOKIE['username']; //set in other page


echo'<br>--------------------------------<br>';
echo'UNSET Cookies';

setcookie('username', 'xavier', time()-500); //name, value, exp date
//unset use for login and reg system


?>