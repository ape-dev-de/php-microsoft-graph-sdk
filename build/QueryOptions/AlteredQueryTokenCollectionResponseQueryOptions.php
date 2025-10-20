<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AlteredQueryTokenCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AlteredQueryTokenCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AlteredQueryTokenCollectionResponse properties
     * 
     * @param array<string> $select Use AlteredQueryTokenCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
