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
        /** The device configuration assignment entity assigns an AAD group to a specific device configuration. */
        public ?string $target = null
    ) {}
}
