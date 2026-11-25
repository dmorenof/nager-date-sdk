<?php

declare(strict_types=1);

namespace NagerDateSDK\Collections\PublicHolidayV4Dto;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\NagerDateSDK\Enums\HolidayTypes> */
final class HolidayTypesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \NagerDateSDK\Enums\HolidayTypes::class;
}
