<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallEvent resources
 *
 * Available select fields:
 */
class CallEventQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallEvent
     */

    /**
     * Select specific CallEvent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
