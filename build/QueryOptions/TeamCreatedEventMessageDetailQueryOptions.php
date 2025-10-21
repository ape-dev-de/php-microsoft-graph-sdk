<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamCreatedEventMessageDetail resources
 *
 * Available select fields:
 */
class TeamCreatedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamCreatedEventMessageDetail
     */

    /**
     * Select specific TeamCreatedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
