<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Simulation resources
 *
 * Available select fields:
 */
class SimulationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Simulation
     */

    /**
     * Select specific Simulation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
