<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskyUserHistoryItemCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RiskyUserHistoryItemCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RiskyUserHistoryItemCollectionResponse properties
     * 
     * @param array<string> $select Use RiskyUserHistoryItemCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
