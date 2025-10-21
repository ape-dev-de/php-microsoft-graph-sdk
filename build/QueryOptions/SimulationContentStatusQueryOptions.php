<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SimulationContentStatus resources
 *
 * Available select fields:
 */
class SimulationContentStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SimulationContentStatus
     */

    /**
     * Select specific SimulationContentStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
