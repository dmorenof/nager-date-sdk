<?php

declare(strict_types=1);

namespace NagerDateSDK\Resources\Api\V4;

final class Versions extends \NagerDateSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/api/v4/Versions',
        'errors' => [
            500 => null,
        ],
        'errorResponses' => [
            500 => [
                'type' => 'mixed',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\NagerDateSDK\\DTOs\\VersionInfoDto',
    ];

    /**
     * Retrieve the current version information of the Nager.Date library
     *
     * This endpoint returns detailed version information about the Nager.Date implementation running on the server, including the exact NuGet package version used by the API.
     */
    public function get(): \NagerDateSDK\DTOs\VersionInfoDto
    {
        /** @var \NagerDateSDK\DTOs\VersionInfoDto $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
