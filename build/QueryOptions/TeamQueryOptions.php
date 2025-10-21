<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Team resources
 *
 * Available select fields:
 */
class TeamQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Team
     */

    /**
     * Select specific Team properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
