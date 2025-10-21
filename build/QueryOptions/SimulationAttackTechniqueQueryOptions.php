<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SimulationAttackTechnique resources
 *
 * Available select fields:
 */
class SimulationAttackTechniqueQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SimulationAttackTechnique
     */

    /**
     * Select specific SimulationAttackTechnique properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
