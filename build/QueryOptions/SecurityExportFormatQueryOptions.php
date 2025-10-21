<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityExportFormat resources
 *
 * Available select fields:
 */
class SecurityExportFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityExportFormat
     */

    /**
     * Select specific SecurityExportFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
