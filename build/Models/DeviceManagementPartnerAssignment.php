<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementPartnerAssignment
 */
class DeviceManagementPartnerAssignment
{
    public function __construct(
        /** User groups targeting for devices to be enrolled through partner. */
        public ?string $target = null
    ) {}
}
