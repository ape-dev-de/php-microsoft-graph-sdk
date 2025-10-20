<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttackSimulationOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AttackSimulationOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AttackSimulationOperationCollectionResponse properties
     * 
     * @param array<string> $select Use AttackSimulationOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
