<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAndroidLobAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ManagedAndroidLobAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ManagedAndroidLobAppCollectionResponse properties
     * 
     * @param array<string> $select Use ManagedAndroidLobAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
