<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AssignedPlan
 */
class AssignedPlan
{
    public function __construct(
        /** The date and time at which the plan was assigned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $assignedDateTime = null,
        /** Condition of the capability assignment. The possible values are Enabled, Warning, Suspended, Deleted, LockedOut. See a detailed description of each value. */
        public ?string $capabilityStatus = null,
        /** The name of the service; for example, exchange. */
        public ?string $service = null,
        /** A GUID that identifies the service plan. For a complete list of GUIDs and their equivalent friendly service names, see Product names and service plan identifiers for licensing. */
        public ?string $servicePlanId = null
    ) {}
}
