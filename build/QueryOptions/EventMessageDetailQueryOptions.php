<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EventMessageDetail resources
 *
 * Available select fields:
 */
class EventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EventMessageDetail
     */

    /**
     * Select specific EventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
