<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkTagType resources
 *
 * Available select fields:
 */
class TeamworkTagTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamworkTagType
     */

    /**
     * Select specific TeamworkTagType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
