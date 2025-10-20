<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementPartnerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceManagementPartnerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceManagementPartnerCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceManagementPartnerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
