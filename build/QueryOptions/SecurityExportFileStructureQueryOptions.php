<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityExportFileStructure resources
 *
 * Available select fields:
 */
class SecurityExportFileStructureQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityExportFileStructure
     */

    /**
     * Select specific SecurityExportFileStructure properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
