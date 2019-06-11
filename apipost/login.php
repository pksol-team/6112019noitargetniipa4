 <?php 
$u = 'bfad4384-b081-40be-b2a3-c68bf83aecda';
$p = 'a00686bc-0582-4c2d-bc8c-e1f3755fb24a';
$url = "https://sandbox.myhermes.co.uk/login.html";

//$url = 'https://dev.myparcellabel.co.uk/login';
$u_p = "Authorization:Basic"." ".base64_encode($u.":".$p);
$ch = curl_init();
$request_headers = array();
$User_Agent = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.43 Safari/537.31';
$request_headers[] = 'User-Agent: '. $User_Agent;
 $request_headers[] = "Authorization=Basic"." ".base64_encode($u.":".$p);
 $request_headers[] = "Content-Type: application/json";
    curl_setopt($ch, CURLOPT_URL, $url ); //Url together with parameters
	curl_setopt($ch, CURLOPT_HTTPGET, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 7); //Timeout after 7 seconds
curl_setopt($ch, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
curl_setopt($ch, CURLOPT_HTTPHEADER, $u_p);
$result = curl_exec($ch);
curl_close($ch);
if(curl_errno($ch)){  //catch if curl error exists and show it
  echo 'Curl error: ' . curl_error($ch);
}
else{
  echo $result.'not code error<br>';
}
?>