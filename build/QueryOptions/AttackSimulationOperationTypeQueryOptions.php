<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttackSimulationOperationType resources
 *
 * Available select fields:
 */
class AttackSimulationOperationTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttackSimulationOperationType
     */

    /**
     * Select specific AttackSimulationOperationType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
