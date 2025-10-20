<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharedInsightCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SharedInsightCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SharedInsightCollectionResponse properties
     * 
     * @param array<string> $select Use SharedInsightCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
