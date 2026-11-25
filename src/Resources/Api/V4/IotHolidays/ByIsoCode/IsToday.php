<?php

declare(strict_types=1);

namespace NagerDateSDK\Resources\Api\V4\IotHolidays\ByIsoCode;

final class IsToday extends \NagerDateSDK\Client
{
    private const array GET_BY_OFFSET = [
        'method' => 'GET',
        'path' => '/api/v4/IotHolidays/{isoCode}/IsToday/{offset}',
        'success' => [
            200,
            204,
        ],
        'errors' => [
            400 => '\\NagerDateSDK\\DTOs\\ValidationProblemDetails',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\NagerDateSDK\\DTOs\\ValidationProblemDetails',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => 'mixed',
                'schemaNullable' => false,
            ],
            204 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'isoCode' => [
                'minLength' => 2,
            ],
            'offset' => [
                'minimum' => -12,
                'maximum' => 12,
                'format' => 'int32',
            ],
        ],
    ];

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
    public function getByOffset(\NagerDateSDK\PathParams\Api\V4\IotHolidays\ByIsoCode\IsToday\ByOffset $identifier): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_OFFSET), path: $identifier);
        return $result;
    }
}
