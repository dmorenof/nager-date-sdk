<?php

declare(strict_types=1);

namespace NagerDateSDK\DTOs;

final class ProblemDetails extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'status' => [
            'format' => 'int32',
        ],
    ];

    public ?string $detail;
    public ?string $instance;
    /**
     * Format: int32
     */
    public ?int $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    public ?string $title;
    public ?string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'detail' => $value === null || is_string($value) ? $this->detail = $value : parent::assignMember($name, $value),
            'instance' => $value === null || is_string($value) ? $this->instance = $value : parent::assignMember($name, $value),
            'status' => $value === null || is_int($value) ? $this->status = $value : parent::assignMember($name, $value),
            'title' => $value === null || is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'type' => $value === null || is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
