<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ItemActivity resources
 *
 * Available select fields:
 * - access
 * - activityDateTime
 * - actor
 * - driveItem
 */
class ItemActivityQueryOptions extends QueryOptions
{
    public const FIELD_ACCESS = 'access';
    public const FIELD_ACTIVITY_DATE_TIME = 'activityDateTime';
    public const FIELD_ACTOR = 'actor';
    public const FIELD_DRIVE_ITEM = 'driveItem';

    /**
     * Select specific ItemActivity properties
     * 
     * @param array<string> $select Use ItemActivityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
