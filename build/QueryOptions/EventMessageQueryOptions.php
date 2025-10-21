<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EventMessage resources
 *
 * Available select fields:
 */
class EventMessageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EventMessage
     */

    /**
     * Select specific EventMessage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
