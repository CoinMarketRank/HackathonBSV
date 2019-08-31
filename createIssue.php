<?php
error_reporting(E_ERROR | E_PARSE);

$parts = parse_url((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}");
parse_str($parts['query'], $query);
$amount = $query['amount'];
$mensaje = $query['mensaje'];


$handle=curl_init();
$headers = array(
'Accept: application/json',
'Content-Type: application/json'
);
//'Authorization: Basic xxx'

$data = <<<JSON
{
"fields": {
"project":
{ 
"key": "BSV"
},
"summary": "Nueva suscripción: $mensaje",
"description": "Nueva suscripción",
"customfield_10500" : $amount,
"issuetype": {
          "id": "10001"
       }
}
}
JSON;



curl_setopt_array(
$handle,
array(
CURLOPT_URL=>'https://jira.coinmarketrank.io/rest/api/2/issue/',
CURLOPT_POST=>true,
//CURLOPT_HTTPGET =>true,

CURLOPT_VERBOSE=>1,
CURLOPT_POSTFIELDS=>$data,
CURLOPT_SSL_VERIFYHOST=> 0,
CURLOPT_SSL_VERIFYPEER=> 0,
CURLOPT_RETURNTRANSFER=>true,
//CURL_HEADER=>false,
CURLOPT_HTTPHEADER=> $headers,
//CURLOPT_USERPWD=>"user:pwd",
//CURLOPT_CUSTOMREQUEST=>"POST"
)

);
$result=curl_exec($handle);
$ch_error = curl_error($handle);

if ($ch_error) {
echo "cURL Error: $ch_error";
} else {
//echo $result;
header('Location: index.php');
}

curl_close($handle);


?>