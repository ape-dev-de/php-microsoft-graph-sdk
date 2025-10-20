<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedIOSLobAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ManagedIOSLobAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ManagedIOSLobAppCollectionResponse properties
     * 
     * @param array<string> $select Use ManagedIOSLobAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
