<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceConfigurationAssignment
 */
class DeviceConfigurationAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The assignment target for the device configuration. */
        public ?string $target = null
    ) {}
}
