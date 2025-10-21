<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostPair resources
 *
 * Available select fields:
 * - firstSeenDateTime
 * - lastSeenDateTime
 * - linkKind
 * - childHost
 * - parentHost
 */
class SecurityHostPairQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHostPair
     */
    public const FIELD_FIRST_SEEN_DATE_TIME = 'firstSeenDateTime';
    public const FIELD_LAST_SEEN_DATE_TIME = 'lastSeenDateTime';
    public const FIELD_LINK_KIND = 'linkKind';
    public const FIELD_CHILD_HOST = 'childHost';
    public const FIELD_PARENT_HOST = 'parentHost';

    /**
     * Select specific SecurityHostPair properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
