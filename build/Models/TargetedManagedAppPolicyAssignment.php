<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargetedManagedAppPolicyAssignment
 */
class TargetedManagedAppPolicyAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Identifier for deployment to a group or app */
        public ?DeviceAndAppManagementAssignmentTarget $target = null
    ) {}
}
