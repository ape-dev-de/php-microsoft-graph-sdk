<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookTableRow resources
 *
 * Available select fields:
 * - index
 * - values
 */
class WorkbookTableRowQueryOptions extends QueryOptions
{
    public const FIELD_INDEX = 'index';
    public const FIELD_VALUES = 'values';

    /**
     * Select specific WorkbookTableRow properties
     * 
     * @param array<string> $select Use WorkbookTableRowQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
