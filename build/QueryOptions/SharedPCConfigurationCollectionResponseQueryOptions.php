<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharedPCConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SharedPCConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SharedPCConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use SharedPCConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
