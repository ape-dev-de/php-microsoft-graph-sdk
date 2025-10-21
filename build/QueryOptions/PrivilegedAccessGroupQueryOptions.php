<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessGroup resources
 *
 * Available select fields:
 * - assignmentApprovals
 * - assignmentScheduleInstances
 * - assignmentScheduleRequests
 * - assignmentSchedules
 * - eligibilityScheduleInstances
 * - eligibilityScheduleRequests
 * - eligibilitySchedules
 */
class PrivilegedAccessGroupQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrivilegedAccessGroup
     */
    public const FIELD_ASSIGNMENT_APPROVALS = 'assignmentApprovals';
    public const FIELD_ASSIGNMENT_SCHEDULE_INSTANCES = 'assignmentScheduleInstances';
    public const FIELD_ASSIGNMENT_SCHEDULE_REQUESTS = 'assignmentScheduleRequests';
    public const FIELD_ASSIGNMENT_SCHEDULES = 'assignmentSchedules';
    public const FIELD_ELIGIBILITY_SCHEDULE_INSTANCES = 'eligibilityScheduleInstances';
    public const FIELD_ELIGIBILITY_SCHEDULE_REQUESTS = 'eligibilityScheduleRequests';
    public const FIELD_ELIGIBILITY_SCHEDULES = 'eligibilitySchedules';

    /**
     * Select specific PrivilegedAccessGroup properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
