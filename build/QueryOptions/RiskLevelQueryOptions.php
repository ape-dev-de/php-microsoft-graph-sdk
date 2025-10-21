<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskLevel resources
 *
 * Available select fields:
 */
class RiskLevelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RiskLevel
     */

    /**
     * Select specific RiskLevel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
