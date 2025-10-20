<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostTracker resources
 *
 * Available select fields:
 * - firstSeenDateTime
 * - kind
 * - lastSeenDateTime
 * - value
 * - host
 */
class SecurityHostTrackerQueryOptions extends QueryOptions
{
    public const FIELD_FIRST_SEEN_DATE_TIME = 'firstSeenDateTime';
    public const FIELD_KIND = 'kind';
    public const FIELD_LAST_SEEN_DATE_TIME = 'lastSeenDateTime';
    public const FIELD_VALUE = 'value';
    public const FIELD_HOST = 'host';

    /**
     * Select specific SecurityHostTracker properties
     * 
     * @param array<string> $select Use SecurityHostTrackerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
