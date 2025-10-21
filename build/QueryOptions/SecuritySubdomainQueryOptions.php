<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySubdomain resources
 *
 * Available select fields:
 * - firstSeenDateTime
 * - host
 */
class SecuritySubdomainQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecuritySubdomain
     */
    public const FIELD_FIRST_SEEN_DATE_TIME = 'firstSeenDateTime';
    public const FIELD_HOST = 'host';

    /**
     * Select specific SecuritySubdomain properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
