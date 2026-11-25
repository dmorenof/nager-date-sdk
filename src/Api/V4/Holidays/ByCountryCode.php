<?php

declare(strict_types=1);

namespace NagerDateSDK\Api\V4\Holidays;

final class ByCountryCode extends \NagerDateSDK\NagerDateAPISDK
{
    /** GET /api/v4/Holidays/{countryCode}/{year} [operationId: get.api.v4.Holidays.by.countryCode.by.year] */
    /**
     * Retrieve the list of all public holidays for the specified year and country
     *
     * This endpoint returns all officially recognized public holidays for the given country
     * and year. Each holiday entry includes the local and English holiday names, information
     * about whether the holiday applies nationally or only in specific subdivisions, and the
     * associated holiday type classifications.
     */
    public static function getByYear(\NagerDateSDK\PathParams\Api\V4\Holidays\ByCountryCode\ByYear $identifier): \NagerDateSDK\Collections\Api\V4\Holidays\ByCountryCode\Next\Get\ByCountryCodeNextCollection
    {
        return self::client()->resource(\NagerDateSDK\Resources\Api\V4\Holidays\ByCountryCode::class)->getByYear($identifier);
    }
}
