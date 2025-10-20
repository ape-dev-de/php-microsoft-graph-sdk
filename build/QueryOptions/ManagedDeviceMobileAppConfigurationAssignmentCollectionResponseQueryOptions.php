<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDeviceMobileAppConfigurationAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ManagedDeviceMobileAppConfigurationAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ManagedDeviceMobileAppConfigurationAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use ManagedDeviceMobileAppConfigurationAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
