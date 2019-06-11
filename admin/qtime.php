<?php
//$_SERVER['REMOTE_ADDR'];


$ips = array("");
$pass1 = rand(10,100); 
$pass2 = rand(10,1000); 
$pass3 = rand(10,10000); 
$pass4 = rand(10,100000); 
$pass5 = rand(10,1000000); 
$pass6 = rand(10,1000000); 
 $pass_code = $pass1 . $pass2 . $pass3 . $pass4 . $pass5 . $pass6; 
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
echo get_client_ip();

?>