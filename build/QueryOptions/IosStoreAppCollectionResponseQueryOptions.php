<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosStoreAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IosStoreAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IosStoreAppCollectionResponse properties
     * 
     * @param array<string> $select Use IosStoreAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
