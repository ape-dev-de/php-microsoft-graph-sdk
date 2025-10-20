<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AudioRoutingGroup resources
 *
 * Available select fields:
 * - receivers
 * - routingMode
 * - sources
 */
class AudioRoutingGroupQueryOptions extends QueryOptions
{
    public const FIELD_RECEIVERS = 'receivers';
    public const FIELD_ROUTING_MODE = 'routingMode';
    public const FIELD_SOURCES = 'sources';

    /**
     * Select specific AudioRoutingGroup properties
     * 
     * @param array<string> $select Use AudioRoutingGroupQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
