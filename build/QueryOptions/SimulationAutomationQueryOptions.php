<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SimulationAutomation resources
 *
 * Available select fields:
 */
class SimulationAutomationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SimulationAutomation
     */

    /**
     * Select specific SimulationAutomation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
