<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StorageQuotaBreakdown resources
 *
 * Available select fields:
 */
class StorageQuotaBreakdownQueryOptions extends QueryOptions
{
    /**
     * Available select fields for StorageQuotaBreakdown
     */

    /**
     * Select specific StorageQuotaBreakdown properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
