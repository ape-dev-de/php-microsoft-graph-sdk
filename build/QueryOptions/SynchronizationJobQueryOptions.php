<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationJob resources
 *
 * Available select fields:
 */
class SynchronizationJobQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SynchronizationJob
     */

    /**
     * Select specific SynchronizationJob properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
