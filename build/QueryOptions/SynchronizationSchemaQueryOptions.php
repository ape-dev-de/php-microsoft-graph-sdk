<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationSchema resources
 *
 * Available select fields:
 */
class SynchronizationSchemaQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SynchronizationSchema
     */

    /**
     * Select specific SynchronizationSchema properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
