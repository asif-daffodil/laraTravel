<?php
require __DIR__ . '/../vendor/autoload.php';
// Boot Illuminate container minimally by including bootstrap/app.php
$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$service = $app->make(App\Services\TravelvelaApiService::class);
$res = $service->getCitiesAndAirports();
print_r([ 'type' => gettype($res), 'sample' => is_array($res) ? array_slice($res, 0, 3) : $res ]);
