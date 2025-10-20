<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MediaStreamCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MediaStreamCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MediaStreamCollectionResponse properties
     * 
     * @param array<string> $select Use MediaStreamCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
