<?php
// Simple local fetch to print status and start of body
$url = 'http://127.0.0.1:8000/';
$opts = [
    'http' => [
        'method' => 'GET',
        'timeout' => 5,
    ]
];
$ctx = stream_context_create($opts);
try {
    $body = @file_get_contents($url, false, $ctx);
    if ($body === false) {
        echo "FAILED to fetch $url\n";
        // print warnings
        $err = error_get_last();
        if ($err) echo json_encode($err) . "\n";
        exit(1);
    }
    echo substr($body, 0, 4000);
} catch (\Exception $e) {
    echo "Exception: ". $e->getMessage();
}
