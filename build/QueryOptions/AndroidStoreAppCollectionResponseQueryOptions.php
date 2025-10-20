<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidStoreAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AndroidStoreAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AndroidStoreAppCollectionResponse properties
     * 
     * @param array<string> $select Use AndroidStoreAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
