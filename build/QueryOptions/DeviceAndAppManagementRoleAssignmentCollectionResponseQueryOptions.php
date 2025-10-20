<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceAndAppManagementRoleAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceAndAppManagementRoleAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceAndAppManagementRoleAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceAndAppManagementRoleAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
