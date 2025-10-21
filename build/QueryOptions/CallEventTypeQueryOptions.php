<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallEventType resources
 *
 * Available select fields:
 */
class CallEventTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallEventType
     */

    /**
     * Select specific CallEventType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
