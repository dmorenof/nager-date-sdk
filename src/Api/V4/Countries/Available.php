<?php

declare(strict_types=1);

namespace NagerDateSDK\Api\V4\Countries;

final class Available extends \NagerDateSDK\NagerDateAPISDK
{
    /** GET /api/v4/Countries/Available [operationId: get.api.v4.Countries.Available] */
    /**
     * Retrieve the complete list of all supported countries
     *
     * This endpoint returns all countries for which public-holiday data is available.
     * Each entry includes the country's name and ISO code.
     */
    public static function get(): \NagerDateSDK\Collections\Api\V4\Countries\Available\Get\CountriesAvailableCollection
    {
        return self::client()->resource(\NagerDateSDK\Resources\Api\V4\Countries\Available::class)->get();
    }
}
