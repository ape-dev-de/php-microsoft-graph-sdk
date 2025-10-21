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
    /**
     * Available select fields for SimulationEventsContent
     */
    public const FIELD_COMPROMISED_RATE = 'compromisedRate';
    public const FIELD_EVENTS = 'events';

    /**
     * Select specific SimulationEventsContent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
