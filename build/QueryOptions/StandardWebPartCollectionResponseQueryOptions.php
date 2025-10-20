<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StandardWebPartCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class StandardWebPartCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific StandardWebPartCollectionResponse properties
     * 
     * @param array<string> $select Use StandardWebPartCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
