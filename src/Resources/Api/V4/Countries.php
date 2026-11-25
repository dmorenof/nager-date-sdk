<?php

declare(strict_types=1);

namespace NagerDateSDK\Resources\Api\V4;

final class Countries extends \NagerDateSDK\Client
{
    private const array GET_BY_COUNTRY_CODE = [
        'method' => 'GET',
        'path' => '/api/v4/Countries/{countryCode}',
        'errors' => [
            404 => '\\NagerDateSDK\\DTOs\\ProblemDetails',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\NagerDateSDK\\DTOs\\ProblemDetails',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\NagerDateSDK\\DTOs\\Country\\InfoWithBordersDto',
    ];

    /**
     * Retrieves detailed information about a specific country
     *
     * Provide a valid `ISO 3166-1 alpha-2` country code to retrieve country metadata.
     * The response includes commonly used and official country names, the assigned region, and if available neighboring countries based on geographical borders.
     */
    public function getByCountryCode(string $countryCode): \NagerDateSDK\DTOs\Country\InfoWithBordersDto
    {
        /** @var \NagerDateSDK\DTOs\Country\InfoWithBordersDto $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_COUNTRY_CODE), path: ['countryCode' => $countryCode]);
        return $result;
    }
}
