<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeletedTeam resources
 *
 * Available select fields:
 */
class DeletedTeamQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeletedTeam
     */

    /**
     * Select specific DeletedTeam properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
