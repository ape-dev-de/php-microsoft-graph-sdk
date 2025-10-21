<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EventMessageRequest resources
 *
 * Available select fields:
 */
class EventMessageRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EventMessageRequest
     */

    /**
     * Select specific EventMessageRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
