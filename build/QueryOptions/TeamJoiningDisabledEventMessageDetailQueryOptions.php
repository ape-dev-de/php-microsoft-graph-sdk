<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamJoiningDisabledEventMessageDetail resources
 *
 * Available select fields:
 */
class TeamJoiningDisabledEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamJoiningDisabledEventMessageDetail
     */

    /**
     * Select specific TeamJoiningDisabledEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
