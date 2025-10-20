<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SimulationEvent resources
 *
 * Available select fields:
 * - count
 * - eventName
 */
class SimulationEventQueryOptions extends QueryOptions
{
    public const FIELD_COUNT = 'count';
    public const FIELD_EVENT_NAME = 'eventName';

    /**
     * Select specific SimulationEvent properties
     * 
     * @param array<string> $select Use SimulationEventQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
