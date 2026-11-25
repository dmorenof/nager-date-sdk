<?php

declare(strict_types=1);

namespace NagerDateSDK\Resources\Api\V4\Holidays;

final class ByCountryCode extends \NagerDateSDK\Client
{
    private const array GET_BY_YEAR = [
        'method' => 'GET',
        'path' => '/api/v4/Holidays/{countryCode}/{year}',
        'errors' => [
            400 => '\\NagerDateSDK\\DTOs\\ProblemDetails',
            404 => '\\NagerDateSDK\\DTOs\\ProblemDetails',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\NagerDateSDK\\DTOs\\ProblemDetails',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\NagerDateSDK\\DTOs\\ProblemDetails',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\NagerDateSDK\\Collections\\Api\\V4\\Holidays\\ByCountryCode\\Next\\Get\\ByCountryCodeNextCollection',
        'validation' => [
            'year' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Retrieve the list of all public holidays for the specified year and country
     *
     * This endpoint returns all officially recognized public holidays for the given country
     * and year. Each holiday entry includes the local and English holiday names, information
     * about whether the holiday applies nationally or only in specific subdivisions, and the
     * associated holiday type classifications.
     */
    public function getByYear(\NagerDateSDK\PathParams\Api\V4\Holidays\ByCountryCode\ByYear $identifier): \NagerDateSDK\Collections\Api\V4\Holidays\ByCountryCode\Next\Get\ByCountryCodeNextCollection
    {
        /** @var \NagerDateSDK\Collections\Api\V4\Holidays\ByCountryCode\Next\Get\ByCountryCodeNextCollection $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_YEAR), path: $identifier);
        return $result;
    }
}
