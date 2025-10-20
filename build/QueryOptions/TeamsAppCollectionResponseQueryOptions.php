<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TeamsAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TeamsAppCollectionResponse properties
     * 
     * @param array<string> $select Use TeamsAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
