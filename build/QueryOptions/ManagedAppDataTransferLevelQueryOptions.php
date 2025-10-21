<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppDataTransferLevel resources
 *
 * Available select fields:
 */
class ManagedAppDataTransferLevelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAppDataTransferLevel
     */

    /**
     * Select specific ManagedAppDataTransferLevel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
