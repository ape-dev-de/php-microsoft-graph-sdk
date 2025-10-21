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
    /**
     * Available select fields for SimulationEvent
     */
    public const FIELD_COUNT = 'count';
    public const FIELD_EVENT_NAME = 'eventName';

    /**
     * Select specific SimulationEvent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
