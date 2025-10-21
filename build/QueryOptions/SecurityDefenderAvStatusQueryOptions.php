<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDefenderAvStatus resources
 *
 * Available select fields:
 */
class SecurityDefenderAvStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDefenderAvStatus
     */

    /**
     * Select specific SecurityDefenderAvStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
