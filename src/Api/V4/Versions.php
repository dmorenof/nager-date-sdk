<?php

declare(strict_types=1);

namespace NagerDateSDK\Api\V4;

final class Versions extends \NagerDateSDK\NagerDateAPISDK
{
    /** GET /api/v4/Versions [operationId: get.api.v4.Versions] */
    /**
     * Retrieve the current version information of the Nager.Date library
     *
     * This endpoint returns detailed version information about the Nager.Date implementation running on the server, including the exact NuGet package version used by the API.
     */
    public static function get(): \NagerDateSDK\DTOs\VersionInfoDto
    {
        return self::client()->resource(\NagerDateSDK\Resources\Api\V4\Versions::class)->get();
    }
}
