<?php
$visitor_ip = $_SERVER['REMOTE_ADDR'];
$api_url = "http://ip-api.com/json/{$visitor_ip}";
$response = file_get_contents($api_url);
$data = json_decode($response);
if ($data && $data->status == 'success') {
    $country_code = $data->countryCode;
} else {

    echo "Request Rejected";
    exit;
}
$allowed_countries = ['FR', 'MA']; 


if (!in_array($country_code, $allowed_countries)) {
 
    echo "You Blocked Due Isp Resirection";
    exit;
}


?>