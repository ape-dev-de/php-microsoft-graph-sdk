<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DocumentSetContentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DocumentSetContentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DocumentSetContentCollectionResponse properties
     * 
     * @param array<string> $select Use DocumentSetContentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
