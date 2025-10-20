<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementPartnerAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceManagementPartnerAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceManagementPartnerAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceManagementPartnerAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
