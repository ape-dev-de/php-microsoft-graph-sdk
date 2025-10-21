<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IncomingCallOptions resources
 *
 * Available select fields:
 */
class IncomingCallOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IncomingCallOptions
     */

    /**
     * Select specific IncomingCallOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
