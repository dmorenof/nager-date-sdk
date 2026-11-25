<?php

declare(strict_types=1);

namespace NagerDateSDK\DTOs\Country;

/**
 * Detailed information about a country.
 */
final class InfoDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'commonName',
        'countryCode',
        'nativeName',
        'officialName',
        'region',
    ];

    /**
     * The commonly used name of the country.
     */
    public string $commonName;
    /**
     * ISO 3166-1 alpha-2 country code.
     */
    public string $countryCode;
    /**
     * The name of the country in its native language.
     */
    public string $nativeName;
    /**
     * The official name of the country.
     */
    public string $officialName;
    /**
     * Geopolitical or continental region of the country.
     */
    public string $region;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'commonName' => is_string($value) ? $this->commonName = $value : parent::assignMember($name, $value),
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'nativeName' => is_string($value) ? $this->nativeName = $value : parent::assignMember($name, $value),
            'officialName' => is_string($value) ? $this->officialName = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
