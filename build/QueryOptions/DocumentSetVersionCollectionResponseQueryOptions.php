<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DocumentSetVersionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DocumentSetVersionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DocumentSetVersionCollectionResponse properties
     * 
     * @param array<string> $select Use DocumentSetVersionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
