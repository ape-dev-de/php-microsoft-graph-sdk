<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SiteProtectionUnitsBulkAdditionJob resources
 *
 * Available select fields:
 */
class SiteProtectionUnitsBulkAdditionJobQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SiteProtectionUnitsBulkAdditionJob
     */

    /**
     * Select specific SiteProtectionUnitsBulkAdditionJob properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
