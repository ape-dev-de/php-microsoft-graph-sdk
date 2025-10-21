<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosLobAppProvisioningConfigurationAssignment
 */
class IosLobAppProvisioningConfigurationAssignment
{
    public function __construct(
        /** A class containing the properties used for Group Assignment of an iOS LOB App Provisioning and Configuration. */
        public ?string $target = null
    ) {}
}
