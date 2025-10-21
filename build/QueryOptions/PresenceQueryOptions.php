<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Presence resources
 *
 * Available select fields:
 */
class PresenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Presence
     */

    /**
     * Select specific Presence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
