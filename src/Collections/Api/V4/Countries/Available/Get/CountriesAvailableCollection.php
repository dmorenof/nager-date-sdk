<?php

declare(strict_types=1);

namespace NagerDateSDK\Collections\Api\V4\Countries\Available\Get;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\NagerDateSDK\DTOs\Country\V4Dto> */
final class CountriesAvailableCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \NagerDateSDK\DTOs\Country\V4Dto::class;
}
