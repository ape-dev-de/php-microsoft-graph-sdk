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
    /**
     * Available select fields for WorkbookFilterDatetime
     */
    public const FIELD_DATE = 'date';
    public const FIELD_SPECIFICITY = 'specificity';

    /**
     * Select specific WorkbookFilterDatetime properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
