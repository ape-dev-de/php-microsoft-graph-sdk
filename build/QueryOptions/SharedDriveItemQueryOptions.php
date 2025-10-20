<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharedDriveItem resources
 *
 * Available select fields:
 * - owner
 * - driveItem
 * - items
 * - list
 * - listItem
 * - permission
 * - root
 * - site
 */
class SharedDriveItemQueryOptions extends QueryOptions
{
    public const FIELD_OWNER = 'owner';
    public const FIELD_DRIVE_ITEM = 'driveItem';
    public const FIELD_ITEMS = 'items';
    public const FIELD_LIST = 'list';
    public const FIELD_LIST_ITEM = 'listItem';
    public const FIELD_PERMISSION = 'permission';
    public const FIELD_ROOT = 'root';
    public const FIELD_SITE = 'site';

    /**
     * Select specific SharedDriveItem properties
     * 
     * @param array<string> $select Use SharedDriveItemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
