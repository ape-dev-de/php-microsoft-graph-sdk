<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SimulationAttackType resources
 *
 * Available select fields:
 */
class SimulationAttackTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SimulationAttackType
     */

    /**
     * Select specific SimulationAttackType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
