<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceCategory
 */
class DeviceCategory
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Optional description for the device category. */
        public ?string $description = null,
        /** Display name for the device category. */
        public ?string $displayName = null
    ) {}
}
