<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookWorksheetProtection resources
 *
 * Available select fields:
 */
class WorkbookWorksheetProtectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookWorksheetProtection
     */

    /**
     * Select specific WorkbookWorksheetProtection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
