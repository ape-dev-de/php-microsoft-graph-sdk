<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskDetail resources
 *
 * Available select fields:
 */
class RiskDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RiskDetail
     */

    /**
     * Select specific RiskDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
