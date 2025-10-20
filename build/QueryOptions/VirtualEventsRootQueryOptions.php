<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventsRoot resources
 *
 * Available select fields:
 * - events
 * - townhalls
 * - webinars
 */
class VirtualEventsRootQueryOptions extends QueryOptions
{
    public const FIELD_EVENTS = 'events';
    public const FIELD_TOWNHALLS = 'townhalls';
    public const FIELD_WEBINARS = 'webinars';

    /**
     * Select specific VirtualEventsRoot properties
     * 
     * @param array<string> $select Use VirtualEventsRootQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
