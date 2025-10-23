<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PermissionGrantPolicy
 */
class PermissionGrantPolicy
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /** Description for this policy. Required. */
    public ?string $description = null;

    /** Display name for this policy. Required. */
    public ?string $displayName = null;

    /** 
     * Condition sets that are excluded in this permission grant policy. Automatically expanded on GET.
     * @var PermissionGrantConditionSet[]
     */
    public array $excludes = [];

    /** 
     * Condition sets that are included in this permission grant policy. Automatically expanded on GET.
     * @var PermissionGrantConditionSet[]
     */
    public array $includes = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['deletedDateTime'])) {
            $this->deletedDateTime = is_string($data['deletedDateTime']) ? new \DateTimeImmutable($data['deletedDateTime']) : $data['deletedDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['excludes'])) {
            $this->excludes = $data['excludes'];
        }
        if (isset($data['includes'])) {
            $this->includes = $data['includes'];
        }
    }
}
