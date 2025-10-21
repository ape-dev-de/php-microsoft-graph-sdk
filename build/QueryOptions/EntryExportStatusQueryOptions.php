<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EntryExportStatus resources
 *
 * Available select fields:
 */
class EntryExportStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EntryExportStatus
     */

    /**
     * Select specific EntryExportStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
