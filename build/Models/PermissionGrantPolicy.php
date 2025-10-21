<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PermissionGrantPolicy
 */
class PermissionGrantPolicy
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
        public ?\DateTimeInterface $deletedDateTime = null,
        /** Description for this policy. Required. */
        public ?string $description = null,
        /** Display name for this policy. Required. */
        public ?string $displayName = null,
        /** Condition sets that are excluded in this permission grant policy. Automatically expanded on GET. */
        public array $excludes = [],
        /** Condition sets that are included in this permission grant policy. Automatically expanded on GET. */
        public array $includes = []
    ) {}
}
