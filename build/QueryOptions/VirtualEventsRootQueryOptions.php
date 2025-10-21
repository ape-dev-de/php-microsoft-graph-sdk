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
    /**
     * Available select fields for VirtualEventsRoot
     */
    public const FIELD_EVENTS = 'events';
    public const FIELD_TOWNHALLS = 'townhalls';
    public const FIELD_WEBINARS = 'webinars';

    /**
     * Select specific VirtualEventsRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
