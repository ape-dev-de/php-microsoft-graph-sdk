<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EventType resources
 *
 * Available select fields:
 */
class EventTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EventType
     */

    /**
     * Select specific EventType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
