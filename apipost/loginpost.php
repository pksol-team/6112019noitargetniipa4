<?php

//https://sandbox-api.myhermes.co.uk/oauth/token?client_id=d278ebbc-b51d-464d-8f18-81d95fb36a20&client_secret=c6ddd635-3acc-4ddb-aa8f-ca2307fbe65d&code=bd8f43dd-ac0f-4e94-af18-a4e8b9477089&grant_type=authorization_code


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"https://sandbox-api.myhermes.co.uk/oauth/token?client_id=bfad4384-b081-40be-b2a3-c68bf83aecda&client_secret=a00686bc-0582-4c2d-bc8c-e1f3755fb24a&code=bd8f43dd-ac0f-4e94-af18-a4e8b9477089&grant_type=authorization_code");
curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS,
            //"email=ebaypostagesolutions@gmail.com&password=Hermes1234");

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close ($ch);

// Further processing ...
echo $server_output;