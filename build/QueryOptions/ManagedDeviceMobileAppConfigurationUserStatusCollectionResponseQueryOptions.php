<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDeviceMobileAppConfigurationUserStatusCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ManagedDeviceMobileAppConfigurationUserStatusCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ManagedDeviceMobileAppConfigurationUserStatusCollectionResponse properties
     * 
     * @param array<string> $select Use ManagedDeviceMobileAppConfigurationUserStatusCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
