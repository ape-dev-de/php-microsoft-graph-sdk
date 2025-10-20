<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostComponent resources
 *
 * Available select fields:
 * - category
 * - firstSeenDateTime
 * - lastSeenDateTime
 * - name
 * - version
 * - host
 */
class SecurityHostComponentQueryOptions extends QueryOptions
{
    public const FIELD_CATEGORY = 'category';
    public const FIELD_FIRST_SEEN_DATE_TIME = 'firstSeenDateTime';
    public const FIELD_LAST_SEEN_DATE_TIME = 'lastSeenDateTime';
    public const FIELD_NAME = 'name';
    public const FIELD_VERSION = 'version';
    public const FIELD_HOST = 'host';

    /**
     * Select specific SecurityHostComponent properties
     * 
     * @param array<string> $select Use SecurityHostComponentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
