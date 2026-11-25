<?php

declare(strict_types=1);

namespace NagerDateSDK\Resources\Api\V4\Holidays\ByCountryCode;

final class Next extends \NagerDateSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/api/v4/Holidays/{countryCode}/Next',
        'success' => [
            200,
            204,
        ],
        'errors' => [
            404 => '\\NagerDateSDK\\DTOs\\ProblemDetails',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\NagerDateSDK\\DTOs\\ProblemDetails',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\NagerDateSDK\\Collections\\Api\\V4\\Holidays\\ByCountryCode\\Next\\Get\\ByCountryCodeNextCollection',
                'schemaNullable' => false,
            ],
            204 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Retrieve all upcoming public holidays occurring within the next 365 days for a given country
     *
     * The list includes only future holidays relative to the current date and is useful for forecasting, event planning, and applications that provide forward-looking holiday insights.
     */
    public function get(string $countryCode): ?\NagerDateSDK\Collections\Api\V4\Holidays\ByCountryCode\Next\Get\ByCountryCodeNextCollection
    {
        /** @var ?\NagerDateSDK\Collections\Api\V4\Holidays\ByCountryCode\Next\Get\ByCountryCodeNextCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['countryCode' => $countryCode]);
        return $result;
    }
}
