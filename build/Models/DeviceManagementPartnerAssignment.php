<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementPartnerAssignment
 */
class DeviceManagementPartnerAssignment
{
    public function __construct(
        /** User group targeting for Device Management Partner */
        public ?string $target = null
    ) {}
}
