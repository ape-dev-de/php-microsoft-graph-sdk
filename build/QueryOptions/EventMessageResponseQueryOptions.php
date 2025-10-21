<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EventMessageResponse resources
 *
 * Available select fields:
 */
class EventMessageResponseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EventMessageResponse
     */

    /**
     * Select specific EventMessageResponse properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
