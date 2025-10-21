<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkApplicationIdentityType resources
 *
 * Available select fields:
 */
class TeamworkApplicationIdentityTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamworkApplicationIdentityType
     */

    /**
     * Select specific TeamworkApplicationIdentityType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
