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
    /**
     * Available select fields for ItemAnalytics
     */
    public const FIELD_ALL_TIME = 'allTime';
    public const FIELD_ITEM_ACTIVITY_STATS = 'itemActivityStats';
    public const FIELD_LAST_SEVEN_DAYS = 'lastSevenDays';

    /**
     * Select specific ItemAnalytics properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
