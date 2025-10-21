<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationDisposition resources
 *
 * Available select fields:
 */
class SynchronizationDispositionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SynchronizationDisposition
     */

    /**
     * Select specific SynchronizationDisposition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
