<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceAndAppManagementRoleAssignment resources
 *
 * Available select fields:
 */
class DeviceAndAppManagementRoleAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceAndAppManagementRoleAssignment
     */

    /**
     * Select specific DeviceAndAppManagementRoleAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
