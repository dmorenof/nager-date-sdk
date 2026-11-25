<?php

declare(strict_types=1);

namespace NagerDateSDK\Resources\Api\V4\Countries;

final class Available extends \NagerDateSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/api/v4/Countries/Available',
        'responseType' => '\\NagerDateSDK\\Collections\\Api\\V4\\Countries\\Available\\Get\\CountriesAvailableCollection',
    ];

    /**
     * Retrieve the complete list of all supported countries
     *
     * This endpoint returns all countries for which public-holiday data is available.
     * Each entry includes the country's name and ISO code.
     */
    public function get(): \NagerDateSDK\Collections\Api\V4\Countries\Available\Get\CountriesAvailableCollection
    {
        /** @var \NagerDateSDK\Collections\Api\V4\Countries\Available\Get\CountriesAvailableCollection $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
