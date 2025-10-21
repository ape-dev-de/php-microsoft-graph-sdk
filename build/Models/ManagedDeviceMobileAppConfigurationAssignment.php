<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedDeviceMobileAppConfigurationAssignment
 */
class ManagedDeviceMobileAppConfigurationAssignment
{
    public function __construct(
        /** Contains the properties used to assign an MDM app configuration to a group. */
        public ?string $target = null
    ) {}
}
