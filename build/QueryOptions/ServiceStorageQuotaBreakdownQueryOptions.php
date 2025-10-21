<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceStorageQuotaBreakdown resources
 *
 * Available select fields:
 */
class ServiceStorageQuotaBreakdownQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceStorageQuotaBreakdown
     */

    /**
     * Select specific ServiceStorageQuotaBreakdown properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
