<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RegistryKeyStateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RegistryKeyStateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RegistryKeyStateCollectionResponse properties
     * 
     * @param array<string> $select Use RegistryKeyStateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
