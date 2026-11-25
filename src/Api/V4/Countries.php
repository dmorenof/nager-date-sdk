<?php

declare(strict_types=1);

namespace NagerDateSDK\Api\V4;

final class Countries extends \NagerDateSDK\NagerDateAPISDK
{
    /** GET /api/v4/Countries/{countryCode} [operationId: get.api.v4.Countries.by.countryCode] */
    /**
     * Retrieves detailed information about a specific country
     *
     * Provide a valid `ISO 3166-1 alpha-2` country code to retrieve country metadata.
     * The response includes commonly used and official country names, the assigned region, and if available neighboring countries based on geographical borders.
     */
    public static function getByCountryCode(string $countryCode): \NagerDateSDK\DTOs\Country\InfoWithBordersDto
    {
        return self::client()->resource(\NagerDateSDK\Resources\Api\V4\Countries::class)->getByCountryCode($countryCode);
    }
}
