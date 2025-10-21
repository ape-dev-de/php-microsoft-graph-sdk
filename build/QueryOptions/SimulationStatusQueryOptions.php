<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SimulationStatus resources
 *
 * Available select fields:
 */
class SimulationStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SimulationStatus
     */

    /**
     * Select specific SimulationStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
