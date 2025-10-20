<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DocumentSetVersionItemCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DocumentSetVersionItemCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DocumentSetVersionItemCollectionResponse properties
     * 
     * @param array<string> $select Use DocumentSetVersionItemCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
