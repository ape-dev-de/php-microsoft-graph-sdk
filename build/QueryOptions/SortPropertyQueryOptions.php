<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SortProperty resources
 *
 * Available select fields:
 * - isDescending
 * - name
 */
class SortPropertyQueryOptions extends QueryOptions
{
    public const FIELD_IS_DESCENDING = 'isDescending';
    public const FIELD_NAME = 'name';

    /**
     * Select specific SortProperty properties
     * 
     * @param array<string> $select Use SortPropertyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
