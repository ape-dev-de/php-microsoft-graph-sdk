<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosVppAppAssignmentSettings
 */
class IosVppAppAssignmentSettings
{
    public function __construct(
        /** Whether or not to use device licensing. */
        public ?bool $useDeviceLicensing = null,
        /** Contains properties used to assign an iOS VPP mobile app to a group. */
        public ?string $vpnConfigurationId = null
    ) {}
}
