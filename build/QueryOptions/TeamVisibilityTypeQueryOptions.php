<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamVisibilityType resources
 *
 * Available select fields:
 */
class TeamVisibilityTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamVisibilityType
     */

    /**
     * Select specific TeamVisibilityType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
