<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ItemAnalytics resources
 *
 * Available select fields:
 * - allTime
 * - itemActivityStats
 * - lastSevenDays
 */
class ItemAnalyticsQueryOptions extends QueryOptions
{
    public const FIELD_ALL_TIME = 'allTime';
    public const FIELD_ITEM_ACTIVITY_STATS = 'itemActivityStats';
    public const FIELD_LAST_SEVEN_DAYS = 'lastSevenDays';

    /**
     * Select specific ItemAnalytics properties
     * 
     * @param array<string> $select Use ItemAnalyticsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
