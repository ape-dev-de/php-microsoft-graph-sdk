<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TabUpdatedEventMessageDetail resources
 *
 * Available select fields:
 */
class TabUpdatedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TabUpdatedEventMessageDetail
     */

    /**
     * Select specific TabUpdatedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
