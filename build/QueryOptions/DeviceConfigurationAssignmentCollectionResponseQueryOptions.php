<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceConfigurationAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceConfigurationAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceConfigurationAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceConfigurationAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
