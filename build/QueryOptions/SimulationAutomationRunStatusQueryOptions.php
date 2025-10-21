<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SimulationAutomationRunStatus resources
 *
 * Available select fields:
 */
class SimulationAutomationRunStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SimulationAutomationRunStatus
     */

    /**
     * Select specific SimulationAutomationRunStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
