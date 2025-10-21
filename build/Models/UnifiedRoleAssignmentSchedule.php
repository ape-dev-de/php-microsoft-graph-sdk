<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleAssignmentSchedule
 */
class UnifiedRoleAssignmentSchedule
{
    public function __construct(
        /** The type of the assignment that can either be Assigned or Activated. Supports $filter (eq, ne). */
        public ?string $assignmentType = null,
        /** How the assignment is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleAssignmentSchedule can be managed by the caller. Supports $filter (eq, ne). */
        public ?string $memberType = null,
        /** The period of the role assignment. It can represent a single occurrence or multiple recurrences. */
        public ?string $scheduleInfo = null,
        /** If the request is from an eligible administrator to activate a role, this parameter shows the related eligible assignment for that activation. Otherwise, it''s null. Supports $expand. */
        public ?string $activatedUsing = null
    ) {}
}
