<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSLobChildAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MacOSLobChildAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MacOSLobChildAppCollectionResponse properties
     * 
     * @param array<string> $select Use MacOSLobChildAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
