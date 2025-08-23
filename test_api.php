<?php
// Simple test to check the cities/airports API
$url = 'https://admin.travelvela.com/api/cities/airports';
$headers = [
    'Authorization: TravelVela-DYSBW7537NUDD7078',
    'username: genesis',
    'password: ERTYUIO87347854',
    'Content-Type: application/json'
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);
curl_close($ch);

echo "HTTP Code: " . $httpCode . "\n";
if ($error) {
    echo "Error: " . $error . "\n";
}

if ($response) {
    $data = json_decode($response, true);
    echo "Response: \n";
    print_r($data);
} else {
    echo "No response received\n";
}
?>
