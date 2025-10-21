<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceAndAppManagementRoleDefinition resources
 *
 * Available select fields:
 */
class DeviceAndAppManagementRoleDefinitionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceAndAppManagementRoleDefinition
     */

    /**
     * Select specific DeviceAndAppManagementRoleDefinition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
