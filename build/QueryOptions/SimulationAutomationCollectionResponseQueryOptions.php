<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SimulationAutomationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SimulationAutomationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SimulationAutomationCollectionResponse properties
     * 
     * @param array<string> $select Use SimulationAutomationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
