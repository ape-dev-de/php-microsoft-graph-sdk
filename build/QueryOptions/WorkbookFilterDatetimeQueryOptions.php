<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookFilterDatetime resources
 *
 * Available select fields:
 * - date
 * - specificity
 */
class WorkbookFilterDatetimeQueryOptions extends QueryOptions
{
    public const FIELD_DATE = 'date';
    public const FIELD_SPECIFICITY = 'specificity';

    /**
     * Select specific WorkbookFilterDatetime properties
     * 
     * @param array<string> $select Use WorkbookFilterDatetimeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
