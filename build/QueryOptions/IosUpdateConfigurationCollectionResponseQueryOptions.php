<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosUpdateConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IosUpdateConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IosUpdateConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use IosUpdateConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
