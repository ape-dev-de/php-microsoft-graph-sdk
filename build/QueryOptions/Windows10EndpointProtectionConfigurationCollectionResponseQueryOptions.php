<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10EndpointProtectionConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class Windows10EndpointProtectionConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific Windows10EndpointProtectionConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use Windows10EndpointProtectionConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
