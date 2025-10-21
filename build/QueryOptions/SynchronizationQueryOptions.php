<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Synchronization resources
 *
 * Available select fields:
 */
class SynchronizationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Synchronization
     */

    /**
     * Select specific Synchronization properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
