<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://v1.formula-1.api-sports.io/circuits?id=4',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'x-rapidapi-key: 549829e9731ded479c830655abffc5a4',
    'x-rapidapi-host: v1.formula-1.api-sports.io'
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

$dataIdEmpat = json_decode($response, true);
// var_dump($data);
// echo $response;
?>