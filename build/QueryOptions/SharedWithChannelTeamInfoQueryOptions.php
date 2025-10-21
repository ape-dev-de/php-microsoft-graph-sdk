<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharedWithChannelTeamInfo resources
 *
 * Available select fields:
 */
class SharedWithChannelTeamInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SharedWithChannelTeamInfo
     */

    /**
     * Select specific SharedWithChannelTeamInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
