<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostCookie resources
 *
 * Available select fields:
 * - domain
 * - firstSeenDateTime
 * - lastSeenDateTime
 * - name
 * - host
 */
class SecurityHostCookieQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHostCookie
     */
    public const FIELD_DOMAIN = 'domain';
    public const FIELD_FIRST_SEEN_DATE_TIME = 'firstSeenDateTime';
    public const FIELD_LAST_SEEN_DATE_TIME = 'lastSeenDateTime';
    public const FIELD_NAME = 'name';
    public const FIELD_HOST = 'host';

    /**
     * Select specific SecurityHostCookie properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
