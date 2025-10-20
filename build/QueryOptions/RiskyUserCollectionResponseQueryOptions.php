<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskyUserCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RiskyUserCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RiskyUserCollectionResponse properties
     * 
     * @param array<string> $select Use RiskyUserCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
