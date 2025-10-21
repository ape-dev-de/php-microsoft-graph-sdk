<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RbacApplication resources
 *
 * Available select fields:
 * - resourceNamespaces
 * - roleAssignments
 * - roleAssignmentScheduleInstances
 * - roleAssignmentScheduleRequests
 * - roleAssignmentSchedules
 * - roleDefinitions
 * - roleEligibilityScheduleInstances
 * - roleEligibilityScheduleRequests
 * - roleEligibilitySchedules
 */
class RbacApplicationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RbacApplication
     */
    public const FIELD_RESOURCE_NAMESPACES = 'resourceNamespaces';
    public const FIELD_ROLE_ASSIGNMENTS = 'roleAssignments';
    public const FIELD_ROLE_ASSIGNMENT_SCHEDULE_INSTANCES = 'roleAssignmentScheduleInstances';
    public const FIELD_ROLE_ASSIGNMENT_SCHEDULE_REQUESTS = 'roleAssignmentScheduleRequests';
    public const FIELD_ROLE_ASSIGNMENT_SCHEDULES = 'roleAssignmentSchedules';
    public const FIELD_ROLE_DEFINITIONS = 'roleDefinitions';
    public const FIELD_ROLE_ELIGIBILITY_SCHEDULE_INSTANCES = 'roleEligibilityScheduleInstances';
    public const FIELD_ROLE_ELIGIBILITY_SCHEDULE_REQUESTS = 'roleEligibilityScheduleRequests';
    public const FIELD_ROLE_ELIGIBILITY_SCHEDULES = 'roleEligibilitySchedules';

    /**
     * Select specific RbacApplication properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
