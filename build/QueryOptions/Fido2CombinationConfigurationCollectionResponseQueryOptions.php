<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Fido2CombinationConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class Fido2CombinationConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific Fido2CombinationConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use Fido2CombinationConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
