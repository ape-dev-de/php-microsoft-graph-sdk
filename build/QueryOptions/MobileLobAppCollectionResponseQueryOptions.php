<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileLobAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MobileLobAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MobileLobAppCollectionResponse properties
     * 
     * @param array<string> $select Use MobileLobAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
