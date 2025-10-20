<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchAcronym resources
 *
 * Available select fields:
 * - standsFor
 * - state
 */
class SearchAcronymQueryOptions extends QueryOptions
{
    public const FIELD_STANDS_FOR = 'standsFor';
    public const FIELD_STATE = 'state';

    /**
     * Select specific SearchAcronym properties
     * 
     * @param array<string> $select Use SearchAcronymQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
