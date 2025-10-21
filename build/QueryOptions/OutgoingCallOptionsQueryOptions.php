<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OutgoingCallOptions resources
 *
 * Available select fields:
 */
class OutgoingCallOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OutgoingCallOptions
     */

    /**
     * Select specific OutgoingCallOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
