<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroup
 */
class PrivilegedAccessGroup
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public array $assignmentApprovals = [],
        /** The instances of assignment schedules to activate a just-in-time access. */
        public array $assignmentScheduleInstances = [],
        /** The schedule requests for operations to create, update, delete, extend, and renew an assignment. */
        public array $assignmentScheduleRequests = [],
        /** The assignment schedules to activate a just-in-time access. */
        public array $assignmentSchedules = [],
        /** The instances of eligibility schedules to activate a just-in-time access. */
        public array $eligibilityScheduleInstances = [],
        /** The schedule requests for operations to create, update, delete, extend, and renew an eligibility. */
        public array $eligibilityScheduleRequests = [],
        /** @var string[] The eligibility schedules to activate a just-in-time access. */
        public array $eligibilitySchedules = []
    ) {}
}
