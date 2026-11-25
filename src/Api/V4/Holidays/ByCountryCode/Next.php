<?php

declare(strict_types=1);

namespace NagerDateSDK\Api\V4\Holidays\ByCountryCode;

final class Next extends \NagerDateSDK\NagerDateAPISDK
{
    /** GET /api/v4/Holidays/{countryCode}/Next [operationId: get.api.v4.Holidays.by.countryCode.Next] */
    /**
     * Retrieve all upcoming public holidays occurring within the next 365 days for a given country
     *
     * The list includes only future holidays relative to the current date and is useful for forecasting, event planning, and applications that provide forward-looking holiday insights.
     */
    public static function get(string $countryCode): ?\NagerDateSDK\Collections\Api\V4\Holidays\ByCountryCode\Next\Get\ByCountryCodeNextCollection
    {
        return self::client()->resource(\NagerDateSDK\Resources\Api\V4\Holidays\ByCountryCode\Next::class)->get($countryCode);
    }
}
