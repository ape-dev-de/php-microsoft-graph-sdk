<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AssociatedTeamInfo resources
 *
 * Available select fields:
 */
class AssociatedTeamInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AssociatedTeamInfo
     */

    /**
     * Select specific AssociatedTeamInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
