<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementTroubleshootingEventCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceManagementTroubleshootingEventCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceManagementTroubleshootingEventCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceManagementTroubleshootingEventCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
