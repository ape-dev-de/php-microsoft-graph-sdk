<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InsiderRiskLevel resources
 *
 * Available select fields:
 */
class InsiderRiskLevelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for InsiderRiskLevel
     */

    /**
     * Select specific InsiderRiskLevel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
