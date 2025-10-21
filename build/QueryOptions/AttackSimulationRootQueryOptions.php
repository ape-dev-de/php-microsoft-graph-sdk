<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttackSimulationRoot resources
 *
 * Available select fields:
 */
class AttackSimulationRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttackSimulationRoot
     */

    /**
     * Select specific AttackSimulationRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
