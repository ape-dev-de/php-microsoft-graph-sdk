<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookFilter resources
 *
 * Available select fields:
 * - criteria
 */
class WorkbookFilterQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookFilter
     */
    public const FIELD_CRITERIA = 'criteria';

    /**
     * Select specific WorkbookFilter properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
