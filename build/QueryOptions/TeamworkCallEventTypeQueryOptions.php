<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkCallEventType resources
 *
 * Available select fields:
 */
class TeamworkCallEventTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamworkCallEventType
     */

    /**
     * Select specific TeamworkCallEventType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
