<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationMetadata resources
 *
 * Available select fields:
 */
class SynchronizationMetadataQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SynchronizationMetadata
     */

    /**
     * Select specific SynchronizationMetadata properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
