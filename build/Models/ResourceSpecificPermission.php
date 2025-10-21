<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourceSpecificPermission
 */
class ResourceSpecificPermission
{
    public function __construct(
        /** The unique identifier for the resource-specific application permission. */
        public ?string $id = null,
        /** Describes the level of access that the resource-specific permission represents. */
        public ?string $description = null,
        /** The display name for the resource-specific permission. */
        public ?string $displayName = null,
        /** Indicates whether the permission is enabled. */
        public ?bool $isEnabled = null,
        /** The value of the permission. */
        public ?string $value = null
    ) {}
}
