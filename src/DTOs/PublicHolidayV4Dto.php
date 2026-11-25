<?php

declare(strict_types=1);

namespace NagerDateSDK\DTOs;

/**
 * Represents a public holiday.
 */
final class PublicHolidayV4Dto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'countryCode',
        'date',
        'holidayTypes',
        'name',
    ];

    /**
     * ISO 3166-1 alpha-2 country code.
     */
    public string $countryCode;
    /**
     * The date of the holiday.
     * Format: date
     */
    public string $date;
    /**
     * List of holiday types this holiday is classified under.
     */
    public \NagerDateSDK\Collections\PublicHolidayV4Dto\HolidayTypesCollection $holidayTypes;
    /**
     * English name of the holiday.
     */
    public string $name;
    /**
     * Indicates if this holiday applies to the entire country.
     */
    public bool $nationalHoliday;
    /**
     * ISO-3166-2 codes of the subdivisions where this holiday applies
     */
    public ?\NagerDateSDK\Collections\StringCollection $subdivisionCodes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'date' => is_string($value) ? $this->date = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'nationalHoliday' => is_bool($value) ? $this->nationalHoliday = $value : parent::assignMember($name, $value),
            'subdivisionCodes' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->subdivisionCodes = $value === null ? null : new \NagerDateSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
