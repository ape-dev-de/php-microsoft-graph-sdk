<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SimulationAutomationStatus resources
 *
 * Available select fields:
 */
class SimulationAutomationStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SimulationAutomationStatus
     */

    /**
     * Select specific SimulationAutomationStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
