<?php

declare(strict_types=1);

namespace NagerDateSDK\DTOs\Country;

/**
 * Represents a country supported by the Nager.Date API.
 */
final class V4Dto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'countryCode',
        'name',
    ];

    /**
     * The ISO 3166-1 alpha-2 country code (e.g., "US", "DE").
     */
    public string $countryCode;
    /**
     * The common name of the country.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
