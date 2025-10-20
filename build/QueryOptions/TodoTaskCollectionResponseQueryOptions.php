<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TodoTaskCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TodoTaskCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TodoTaskCollectionResponse properties
     * 
     * @param array<string> $select Use TodoTaskCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
