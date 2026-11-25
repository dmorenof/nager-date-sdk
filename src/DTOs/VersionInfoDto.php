<?php

declare(strict_types=1);

namespace NagerDateSDK\DTOs;

/**
 * Version information.
 */
final class VersionInfoDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
        'version',
    ];

    /**
     * The name of the library.
     */
    public string $name;
    /**
     * The version of the library.
     */
    public string $version;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'version' => is_string($value) ? $this->version = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
