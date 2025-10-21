<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamSpecialization resources
 *
 * Available select fields:
 */
class TeamSpecializationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamSpecialization
     */

    /**
     * Select specific TeamSpecialization properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
