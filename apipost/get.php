
  <?php 
$u = '49ba30ab-a3d6-4eaa-b95b-42dbe4bacee4';
$p = '9125bad2-4a86-4a25-aa18-30c5f81ef637';
//$url = "https://sandbox.myhermes.co.uk/customer/authorize?response_type=code&client_id=49ba30ab-a3d6-4eaa-b95b-42dbe4bacee4&redirect_uri=https://localhost:8080";

//$url = 'https://www.google.com/search';
$u_p = "Authorization:Basic"." ".base64_encode($u.":".$p);
$ch = curl_init();
//$request_headers = array();
$User_Agent = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.43 Safari/537.31';
//$request_headers[] = 'User-Agent: '. $User_Agent;
 //$request_headers[] = "Authorization=Basic"." ".base64_encode($u.":".$p);
 //$request_headers[] = "Content-Type: application/json";
    curl_setopt($ch, CURLOPT_URL, $url ); //Url together with parameters
	curl_setopt($ch, CURLOPT_HTTPGET, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 7); //Timeout after 7 seconds
curl_setopt($ch, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
//curl_setopt($ch, CURLOPT_HTTPHEADER, $u_p);
$result = curl_exec($ch);
curl_close($ch);
if(curl_errno($ch)){  //catch if curl error exists and show it
  echo 'Curl error: ' . curl_error($ch);
}
else{
  echo $result.'not code error<br>';
}




$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);
//echo $result;
// Will dump a beauty json :3
var_dump(json_decode($result, true));

?>
<?php
$url = "https://sandbox.myhermes.co.uk/customer/authorize?response_type=code&client_id=49ba30ab-a3d6-4eaa-b95b-42dbe4bacee4&redirect_uri=https://app.postage-solutions.co.uk/admin/index.php";
// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url,
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
]);
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
echo $resp."222";
curl_close($curl);

function callAPI($method, $url, $data){
   $curl = curl_init();

 // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
}
echo "<br>";
echo callAPI($method,$url,$data);

?>