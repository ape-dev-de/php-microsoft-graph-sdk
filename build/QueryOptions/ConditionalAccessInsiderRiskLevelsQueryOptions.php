<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessInsiderRiskLevels resources
 *
 * Available select fields:
 */
class ConditionalAccessInsiderRiskLevelsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConditionalAccessInsiderRiskLevels
     */

    /**
     * Select specific ConditionalAccessInsiderRiskLevels properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
