<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleAssignmentScheduleInstance
 */
class UnifiedRoleAssignmentScheduleInstance
{
    public function __construct(
        /** The type of the assignment that can either be Assigned or Activated. Supports $filter (eq, ne). */
        public ?string $assignmentType = null,
        /** The end date of the schedule instance. */
        public ?\DateTimeInterface $endDateTime = null,
        /** How the assignment is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleAssignmentSchedule can be managed by the caller. Supports $filter (eq, ne). */
        public ?string $memberType = null,
        /** The identifier of the role assignment in Microsoft Entra. Supports $filter (eq, ne). */
        public ?string $roleAssignmentOriginId = null,
        /** The identifier of the unifiedRoleAssignmentSchedule object from which this instance was created. Supports $filter (eq, ne). */
        public ?string $roleAssignmentScheduleId = null,
        /** When this instance starts. */
        public ?\DateTimeInterface $startDateTime = null,
        /** If the request is from an eligible administrator to activate a role, this parameter shows the related eligible assignment for that activation. Otherwise, it''s null. Supports $expand and $select nested in $expand. */
        public ?string $activatedUsing = null
    ) {}
}
