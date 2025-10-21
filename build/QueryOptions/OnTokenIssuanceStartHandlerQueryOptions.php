<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnTokenIssuanceStartHandler resources
 *
 * Available select fields:
 */
class OnTokenIssuanceStartHandlerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnTokenIssuanceStartHandler
     */

    /**
     * Select specific OnTokenIssuanceStartHandler properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
