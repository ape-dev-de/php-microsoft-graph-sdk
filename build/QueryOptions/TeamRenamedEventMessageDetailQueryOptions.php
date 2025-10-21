<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamRenamedEventMessageDetail resources
 *
 * Available select fields:
 */
class TeamRenamedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamRenamedEventMessageDetail
     */

    /**
     * Select specific TeamRenamedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
