<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookTableSort resources
 *
 * Available select fields:
 * - fields
 * - matchCase
 * - method
 */
class WorkbookTableSortQueryOptions extends QueryOptions
{
    public const FIELD_FIELDS = 'fields';
    public const FIELD_MATCH_CASE = 'matchCase';
    public const FIELD_METHOD = 'method';

    /**
     * Select specific WorkbookTableSort properties
     * 
     * @param array<string> $select Use WorkbookTableSortQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
