<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookFormatProtection resources
 *
 * Available select fields:
 */
class WorkbookFormatProtectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookFormatProtection
     */

    /**
     * Select specific WorkbookFormatProtection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
