<?php

declare(strict_types=1);

namespace NagerDateSDK\DTOs\Country;

/**
 * Detailed information about a country, including neighboring countries.
 */
final class InfoWithBordersDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'commonName',
        'countryCode',
        'nativeName',
        'officialName',
        'region',
    ];

    /**
     * Neighboring countries based on geographical borders.
     */
    public ?\NagerDateSDK\Collections\Country\InfoWithBordersDto\BordersCollection $borders;
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
            'borders' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->borders = $value === null ? null : new \NagerDateSDK\Collections\Country\InfoWithBordersDto\BordersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \NagerDateSDK\DTOs\Country\InfoDto::class)) : parent::assignMember($name, $value),
            'commonName' => is_string($value) ? $this->commonName = $value : parent::assignMember($name, $value),
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'nativeName' => is_string($value) ? $this->nativeName = $value : parent::assignMember($name, $value),
            'officialName' => is_string($value) ? $this->officialName = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
