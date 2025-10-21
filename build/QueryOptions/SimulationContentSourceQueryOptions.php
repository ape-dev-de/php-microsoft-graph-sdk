<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SimulationContentSource resources
 *
 * Available select fields:
 */
class SimulationContentSourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SimulationContentSource
     */

    /**
     * Select specific SimulationContentSource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
