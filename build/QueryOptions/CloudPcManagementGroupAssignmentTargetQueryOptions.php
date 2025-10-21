<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcManagementGroupAssignmentTarget resources
 *
 * Available select fields:
 */
class CloudPcManagementGroupAssignmentTargetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcManagementGroupAssignmentTarget
     */

    /**
     * Select specific CloudPcManagementGroupAssignmentTarget properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
