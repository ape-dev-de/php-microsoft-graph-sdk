<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedIOSStoreAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ManagedIOSStoreAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ManagedIOSStoreAppCollectionResponse properties
     * 
     * @param array<string> $select Use ManagedIOSStoreAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
