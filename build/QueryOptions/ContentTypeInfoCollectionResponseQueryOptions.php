<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ContentTypeInfoCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ContentTypeInfoCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ContentTypeInfoCollectionResponse properties
     * 
     * @param array<string> $select Use ContentTypeInfoCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
