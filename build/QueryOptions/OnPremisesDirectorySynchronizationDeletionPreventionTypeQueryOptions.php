<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnPremisesDirectorySynchronizationDeletionPreventionType resources
 *
 * Available select fields:
 */
class OnPremisesDirectorySynchronizationDeletionPreventionTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnPremisesDirectorySynchronizationDeletionPreventionType
     */

    /**
     * Select specific OnPremisesDirectorySynchronizationDeletionPreventionType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
