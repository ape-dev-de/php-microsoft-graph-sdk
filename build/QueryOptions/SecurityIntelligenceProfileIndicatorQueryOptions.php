<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIntelligenceProfileIndicator resources
 *
 * Available select fields:
 * - firstSeenDateTime
 * - lastSeenDateTime
 */
class SecurityIntelligenceProfileIndicatorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityIntelligenceProfileIndicator
     */
    public const FIELD_FIRST_SEEN_DATE_TIME = 'firstSeenDateTime';
    public const FIELD_LAST_SEEN_DATE_TIME = 'lastSeenDateTime';

    /**
     * Select specific SecurityIntelligenceProfileIndicator properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
