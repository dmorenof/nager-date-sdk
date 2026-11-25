<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use NagerDateSDK\Api\V4\Holidays\ByCountryCode;
use NagerDateSDK\Configuration;
use NagerDateSDK\NagerDateAPISDK;
use NagerDateSDK\PathParams\Api\V4\Holidays\ByCountryCode\ByYear;

$configuration = new Configuration();
NagerDateAPISDK::configure($configuration);

$year = new ByYear();
$year->countryCode = 'ES';
$year->year = 2026;

foreach (ByCountryCode::getByYear($year) as $holiday) {
    echo $holiday->date, ' ', $holiday->name, "\n";
}
