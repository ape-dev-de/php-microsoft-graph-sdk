<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmergencyCallEvent resources
 *
 * Available select fields:
 */
class EmergencyCallEventQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EmergencyCallEvent
     */

    /**
     * Select specific EmergencyCallEvent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
