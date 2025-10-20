<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ColumnDefinitionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ColumnDefinitionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ColumnDefinitionCollectionResponse properties
     * 
     * @param array<string> $select Use ColumnDefinitionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
