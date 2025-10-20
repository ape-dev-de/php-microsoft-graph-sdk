<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AssignedPlan resources
 *
 * Available select fields:
 * - assignedDateTime
 * - capabilityStatus
 * - service
 * - servicePlanId
 */
class AssignedPlanQueryOptions extends QueryOptions
{
    public const FIELD_ASSIGNED_DATE_TIME = 'assignedDateTime';
    public const FIELD_CAPABILITY_STATUS = 'capabilityStatus';
    public const FIELD_SERVICE = 'service';
    public const FIELD_SERVICE_PLAN_ID = 'servicePlanId';

    /**
     * Select specific AssignedPlan properties
     * 
     * @param array<string> $select Use AssignedPlanQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
