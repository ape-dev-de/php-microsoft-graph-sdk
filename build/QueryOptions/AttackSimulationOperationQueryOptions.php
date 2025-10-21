<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttackSimulationOperation resources
 *
 * Available select fields:
 */
class AttackSimulationOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttackSimulationOperation
     */

    /**
     * Select specific AttackSimulationOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
