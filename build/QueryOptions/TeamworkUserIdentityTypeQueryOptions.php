<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkUserIdentityType resources
 *
 * Available select fields:
 */
class TeamworkUserIdentityTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamworkUserIdentityType
     */

    /**
     * Select specific TeamworkUserIdentityType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
