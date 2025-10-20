<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcManagementGroupAssignmentTarget resources
 *
 * Available select fields:
 * - groupId
 * - servicePlanId
 */
class CloudPcManagementGroupAssignmentTargetQueryOptions extends QueryOptions
{
    public const FIELD_GROUP_ID = 'groupId';
    public const FIELD_SERVICE_PLAN_ID = 'servicePlanId';

    /**
     * Select specific CloudPcManagementGroupAssignmentTarget properties
     * 
     * @param array<string> $select Use CloudPcManagementGroupAssignmentTargetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
