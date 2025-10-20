<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceAndAppManagementRoleAssignment resources
 *
 * Available select fields:
 * - members
 */
class DeviceAndAppManagementRoleAssignmentQueryOptions extends QueryOptions
{
    public const FIELD_MEMBERS = 'members';

    /**
     * Select specific DeviceAndAppManagementRoleAssignment properties
     * 
     * @param array<string> $select Use DeviceAndAppManagementRoleAssignmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
