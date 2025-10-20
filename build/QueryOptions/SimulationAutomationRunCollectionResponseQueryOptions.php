<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SimulationAutomationRunCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SimulationAutomationRunCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SimulationAutomationRunCollectionResponse properties
     * 
     * @param array<string> $select Use SimulationAutomationRunCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
