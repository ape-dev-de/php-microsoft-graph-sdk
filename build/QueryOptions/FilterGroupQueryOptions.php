<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FilterGroup resources
 *
 * Available select fields:
 * - clauses
 * - name
 */
class FilterGroupQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FilterGroup
     */
    public const FIELD_CLAUSES = 'clauses';
    public const FIELD_NAME = 'name';

    /**
     * Select specific FilterGroup properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
