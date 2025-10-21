<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityWhoisNameserver resources
 *
 * Available select fields:
 * - firstSeenDateTime
 * - lastSeenDateTime
 * - host
 */
class SecurityWhoisNameserverQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityWhoisNameserver
     */
    public const FIELD_FIRST_SEEN_DATE_TIME = 'firstSeenDateTime';
    public const FIELD_LAST_SEEN_DATE_TIME = 'lastSeenDateTime';
    public const FIELD_HOST = 'host';

    /**
     * Select specific SecurityWhoisNameserver properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
