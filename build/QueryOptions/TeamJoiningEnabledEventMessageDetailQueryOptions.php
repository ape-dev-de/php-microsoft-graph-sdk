<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamJoiningEnabledEventMessageDetail resources
 *
 * Available select fields:
 */
class TeamJoiningEnabledEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamJoiningEnabledEventMessageDetail
     */

    /**
     * Select specific TeamJoiningEnabledEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
