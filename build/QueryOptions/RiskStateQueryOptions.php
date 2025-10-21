<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskState resources
 *
 * Available select fields:
 */
class RiskStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RiskState
     */

    /**
     * Select specific RiskState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
