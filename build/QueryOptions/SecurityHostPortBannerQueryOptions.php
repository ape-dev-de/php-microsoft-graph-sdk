<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostPortBanner resources
 *
 * Available select fields:
 * - banner
 * - firstSeenDateTime
 * - lastSeenDateTime
 * - scanProtocol
 * - timesObserved
 */
class SecurityHostPortBannerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHostPortBanner
     */
    public const FIELD_BANNER = 'banner';
    public const FIELD_FIRST_SEEN_DATE_TIME = 'firstSeenDateTime';
    public const FIELD_LAST_SEEN_DATE_TIME = 'lastSeenDateTime';
    public const FIELD_SCAN_PROTOCOL = 'scanProtocol';
    public const FIELD_TIMES_OBSERVED = 'timesObserved';

    /**
     * Select specific SecurityHostPortBanner properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
