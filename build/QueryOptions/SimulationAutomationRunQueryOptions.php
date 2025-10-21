<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SimulationAutomationRun resources
 *
 * Available select fields:
 */
class SimulationAutomationRunQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SimulationAutomationRun
     */

    /**
     * Select specific SimulationAutomationRun properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
