<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ColumnLinkCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ColumnLinkCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ColumnLinkCollectionResponse properties
     * 
     * @param array<string> $select Use ColumnLinkCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
