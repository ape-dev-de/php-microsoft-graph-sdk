<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationStatusCode resources
 *
 * Available select fields:
 */
class SynchronizationStatusCodeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SynchronizationStatusCode
     */

    /**
     * Select specific SynchronizationStatusCode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
