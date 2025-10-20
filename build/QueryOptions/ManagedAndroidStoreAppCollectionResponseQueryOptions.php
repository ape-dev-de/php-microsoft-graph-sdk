<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAndroidStoreAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ManagedAndroidStoreAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ManagedAndroidStoreAppCollectionResponse properties
     * 
     * @param array<string> $select Use ManagedAndroidStoreAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
