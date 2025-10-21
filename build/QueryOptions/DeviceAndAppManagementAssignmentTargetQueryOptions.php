<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceAndAppManagementAssignmentTarget resources
 *
 * Available select fields:
 */
class DeviceAndAppManagementAssignmentTargetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceAndAppManagementAssignmentTarget
     */

    /**
     * Select specific DeviceAndAppManagementAssignmentTarget properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
