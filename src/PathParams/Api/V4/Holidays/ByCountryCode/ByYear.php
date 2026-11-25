<?php

declare(strict_types=1);

namespace NagerDateSDK\PathParams\Api\V4\Holidays\ByCountryCode;

final class ByYear extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'countryCode',
        'year',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'countryCode' => 'countryCode',
            'year' => 'year',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'year' => [
            'format' => 'int32',
        ],
    ];

    public string $countryCode;
    public int $year {
        set {
            $this->assigning('year', $value);
            $this->year = $value;
        }
    }
}
