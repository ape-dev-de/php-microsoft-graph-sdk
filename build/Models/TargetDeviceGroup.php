<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargetDeviceGroup
 */
class TargetDeviceGroup
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Display name for the target device group. */
        public ?string $displayName = null
    ) {}
}
