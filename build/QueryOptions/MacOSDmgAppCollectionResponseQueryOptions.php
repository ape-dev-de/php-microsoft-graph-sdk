<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSDmgAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MacOSDmgAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MacOSDmgAppCollectionResponse properties
     * 
     * @param array<string> $select Use MacOSDmgAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
