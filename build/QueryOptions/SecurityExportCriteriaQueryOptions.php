<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityExportCriteria resources
 *
 * Available select fields:
 */
class SecurityExportCriteriaQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityExportCriteria
     */

    /**
     * Select specific SecurityExportCriteria properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
