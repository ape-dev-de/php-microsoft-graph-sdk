<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VppTokenSyncStatus resources
 *
 * Available select fields:
 */
class VppTokenSyncStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VppTokenSyncStatus
     */

    /**
     * Select specific VppTokenSyncStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
