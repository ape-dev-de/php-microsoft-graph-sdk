<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnPremisesDirectorySynchronization resources
 *
 * Available select fields:
 */
class OnPremisesDirectorySynchronizationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnPremisesDirectorySynchronization
     */

    /**
     * Select specific OnPremisesDirectorySynchronization properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
