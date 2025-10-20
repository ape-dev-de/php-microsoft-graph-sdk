<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RecycleBinItemCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RecycleBinItemCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RecycleBinItemCollectionResponse properties
     * 
     * @param array<string> $select Use RecycleBinItemCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
