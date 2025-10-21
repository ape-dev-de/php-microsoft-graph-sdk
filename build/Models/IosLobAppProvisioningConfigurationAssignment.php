<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosLobAppProvisioningConfigurationAssignment
 */
class IosLobAppProvisioningConfigurationAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The target group assignment defined by the admin. */
        public ?string $target = null
    ) {}
}
