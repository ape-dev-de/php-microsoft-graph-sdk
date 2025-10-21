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
        /** The VPN Configuration Id to apply for this app. */
        public ?string $vpnConfigurationId = null
    ) {}
}
