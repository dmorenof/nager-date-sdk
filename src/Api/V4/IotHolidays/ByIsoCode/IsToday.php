<?php

declare(strict_types=1);

namespace NagerDateSDK\Api\V4\IotHolidays\ByIsoCode;

final class IsToday extends \NagerDateSDK\NagerDateAPISDK
{
    /** GET /api/v4/IotHolidays/{isoCode}/IsToday/{offset} [operationId: get.api.v4.IotHolidays.by.isoCode.IsToday.by.offset] */
    /**
     * Determines whether today is a public holiday in the specified country or subdivision, optionally adjusted by a UTC offset.
     *
     * By default, the calculation is based on the current UTC date.
     * You may optionally provide a timezone offset to evaluate the holiday status relative to a different local timezone.
     *
     * This endpoint is optimized for simple command-line or automation workflows where only the HTTP status code is required
     *
     * ```
     * STATUSCODE=$(curl --silent --output /dev/stderr --write-out "%{http_code}" https://date.nager.at/Api/v4/IotHolidays/AT-1/IsToday/2)
     * if [ $STATUSCODE -eq 200 ]; then
     *     # Today is a public holiday
     * fi
     * ```
     */
    public static function getByOffset(\NagerDateSDK\PathParams\Api\V4\IotHolidays\ByIsoCode\IsToday\ByOffset $identifier): mixed
    {
        return self::client()->resource(\NagerDateSDK\Resources\Api\V4\IotHolidays\ByIsoCode\IsToday::class)->getByOffset($identifier);
    }
}
