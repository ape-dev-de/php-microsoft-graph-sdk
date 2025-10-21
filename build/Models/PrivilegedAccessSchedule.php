<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessSchedule
 */
class PrivilegedAccessSchedule
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** When the schedule was created. Optional. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The identifier of the access assignment or eligibility request that created this schedule. Optional. */
        public ?string $createdUsing = null,
        /** When the schedule was last modified. Optional. */
        public ?\DateTimeInterface $modifiedDateTime = null,
        /** Represents the period of the access assignment or eligibility. The scheduleInfo can represent a single occurrence or multiple recurring instances. Required. */
        public ?RequestSchedule $scheduleInfo = null,
        /** The status of the access assignment or eligibility request. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable. Optional. */
        public ?string $status = null
    ) {}
}
