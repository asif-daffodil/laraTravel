<?php
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap a minimal Laravel application environment by loading .env and config
$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$service = $app->make(App\Services\TravelvelaApiService::class);
$response = $service->getCitiesAndAirports();

echo "Result type: " . gettype($response) . "\n";
if (is_array($response)) {
    echo "Top-level keys: " . implode(', ', array_keys($response)) . "\n";
    if (isset($response['data'])) {
        echo "Data count: " . (is_array($response['data']) ? count($response['data']) : 'n/a') . "\n";
        // print first item
        $first = is_array($response['data']) ? reset($response['data']) : null;
        echo "First item sample:\n";
        print_r($first);
    } else {
        print_r(array_slice($response, 0, 3));
    }
} else {
    echo $response . "\n";
}
