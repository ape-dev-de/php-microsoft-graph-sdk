<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ContentTypeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ContentTypeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ContentTypeCollectionResponse properties
     * 
     * @param array<string> $select Use ContentTypeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
