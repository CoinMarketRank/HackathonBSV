<?php
error_reporting(E_ERROR | E_PARSE);
$handle=curl_init();
$headers = array(
'Accept: application/json',
'Content-Type: application/json'
);
//'Authorization: Basic xxx'



curl_setopt_array(
$handle,
array(
CURLOPT_URL=>'https://jira.coinmarketrank.io/rest/api/2/search?jql=filter=10200',
//CURLOPT_POST=>true,
CURLOPT_HTTPGET =>true,

CURLOPT_VERBOSE=>1,
//CURLOPT_POSTFIELDS=>$data,
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
$json = json_decode($result, true);
//print_r($json);
foreach($json['issues'] as $item) {
    //print_r($item);
    $valor = $item['fields']['customfield_10500'];
    if ($valor == "" ) $valor = "0";
    $summary = $item['fields']['summary'];
    $key = $item['key'];
    $created = $item['fields']['created'];
    $status = $item['fields']['status']['name'];
    echo "$created - $valor € - $key - $summary - <a target='new' href='https://jira.coinmarketrank.io/browse/$key'>ESTADO: <b>$status</b></a><br>";
}
    
}

curl_close($handle);


?>