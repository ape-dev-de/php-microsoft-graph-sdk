<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosLobAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IosLobAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IosLobAppCollectionResponse properties
     * 
     * @param array<string> $select Use IosLobAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
