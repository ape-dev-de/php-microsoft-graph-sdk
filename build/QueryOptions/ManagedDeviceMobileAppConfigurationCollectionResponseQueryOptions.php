<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDeviceMobileAppConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ManagedDeviceMobileAppConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ManagedDeviceMobileAppConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use ManagedDeviceMobileAppConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
