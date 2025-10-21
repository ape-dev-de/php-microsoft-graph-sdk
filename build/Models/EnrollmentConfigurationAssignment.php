<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EnrollmentConfigurationAssignment
 */
class EnrollmentConfigurationAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents an assignment to managed devices in the tenant */
        public ?DeviceAndAppManagementAssignmentTarget $target = null
    ) {}
}
