<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for NetworkConnectionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class NetworkConnectionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific NetworkConnectionCollectionResponse properties
     * 
     * @param array<string> $select Use NetworkConnectionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
