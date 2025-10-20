<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TextWebPartCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TextWebPartCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TextWebPartCollectionResponse properties
     * 
     * @param array<string> $select Use TextWebPartCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
