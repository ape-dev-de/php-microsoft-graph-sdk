<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceAndAppManagementRoleAssignment
 */
class DeviceAndAppManagementRoleAssignment
{
    public function __construct(
        /** @var string[] The Role Assignment resource. Role assignments tie together a role definition with members and scopes. There can be one or more role assignments per role. This applies to custom and built-in roles. */
        public array $members = []
    ) {}
}
