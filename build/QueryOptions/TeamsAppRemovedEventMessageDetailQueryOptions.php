<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppRemovedEventMessageDetail resources
 *
 * Available select fields:
 */
class TeamsAppRemovedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamsAppRemovedEventMessageDetail
     */

    /**
     * Select specific TeamsAppRemovedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
