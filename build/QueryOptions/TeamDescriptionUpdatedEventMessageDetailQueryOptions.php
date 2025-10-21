<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamDescriptionUpdatedEventMessageDetail resources
 *
 * Available select fields:
 */
class TeamDescriptionUpdatedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamDescriptionUpdatedEventMessageDetail
     */

    /**
     * Select specific TeamDescriptionUpdatedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
