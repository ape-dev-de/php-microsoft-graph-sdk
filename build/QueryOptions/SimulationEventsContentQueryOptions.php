<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SimulationEventsContent resources
 *
 * Available select fields:
 * - compromisedRate
 * - events
 */
class SimulationEventsContentQueryOptions extends QueryOptions
{
    public const FIELD_COMPROMISED_RATE = 'compromisedRate';
    public const FIELD_EVENTS = 'events';

    /**
     * Select specific SimulationEventsContent properties
     * 
     * @param array<string> $select Use SimulationEventsContentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
