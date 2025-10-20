<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceAndAppManagementRoleDefinitionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceAndAppManagementRoleDefinitionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceAndAppManagementRoleDefinitionCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceAndAppManagementRoleDefinitionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
