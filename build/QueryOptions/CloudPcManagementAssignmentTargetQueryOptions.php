<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcManagementAssignmentTarget resources
 *
 * Available select fields:
 */
class CloudPcManagementAssignmentTargetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcManagementAssignmentTarget
     */

    /**
     * Select specific CloudPcManagementAssignmentTarget properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
