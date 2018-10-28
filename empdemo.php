<?php
// Your code here!
set_time_limit(0);
$service_url = 'http://dummy.restapiexample.com/api/v1/employees';
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_response = curl_exec($curl);
if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('error occured during curl exec. Additioanl info: ' . var_export($info));
}
curl_close($curl);
$decoded = json_decode($curl_response);
//var_dump($decoded);
echo count($decoded);

?>
