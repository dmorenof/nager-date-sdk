<?php

declare(strict_types=1);

namespace NagerDateSDK\PathParams\Api\V4\IotHolidays\ByIsoCode\IsToday;

final class ByOffset extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'isoCode',
        'offset',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'isoCode' => 'isoCode',
            'offset' => 'offset',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'isoCode' => [
            'minLength' => 2,
        ],
        'offset' => [
            'minimum' => -12,
            'maximum' => 12,
            'format' => 'int32',
        ],
    ];

    public string $isoCode {
        set {
            $this->assigning('isoCode', $value);
            $this->isoCode = $value;
        }
    }
    public int $offset {
        set {
            $this->assigning('offset', $value);
            $this->offset = $value;
        }
    }
}
