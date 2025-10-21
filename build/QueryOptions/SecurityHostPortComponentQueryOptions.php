<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostPortComponent resources
 *
 * Available select fields:
 * - firstSeenDateTime
 * - isRecent
 * - lastSeenDateTime
 * - component
 */
class SecurityHostPortComponentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHostPortComponent
     */
    public const FIELD_FIRST_SEEN_DATE_TIME = 'firstSeenDateTime';
    public const FIELD_IS_RECENT = 'isRecent';
    public const FIELD_LAST_SEEN_DATE_TIME = 'lastSeenDateTime';
    public const FIELD_COMPONENT = 'component';

    /**
     * Select specific SecurityHostPortComponent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
