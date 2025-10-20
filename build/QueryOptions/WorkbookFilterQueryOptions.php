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
    public const FIELD_CRITERIA = 'criteria';

    /**
     * Select specific WorkbookFilter properties
     * 
     * @param array<string> $select Use WorkbookFilterQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
