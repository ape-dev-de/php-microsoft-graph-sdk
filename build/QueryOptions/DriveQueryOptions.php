<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Drive resources
 *
 * Available select fields:
 * - driveType
 * - owner
 * - quota
 * - sharePointIds
 * - system
 * - bundles
 * - following
 * - items
 * - list
 * - root
 * - special
 */
class DriveQueryOptions extends QueryOptions
{
    public const FIELD_DRIVE_TYPE = 'driveType';
    public const FIELD_OWNER = 'owner';
    public const FIELD_QUOTA = 'quota';
    public const FIELD_SHARE_POINT_IDS = 'sharePointIds';
    public const FIELD_SYSTEM = 'system';
    public const FIELD_BUNDLES = 'bundles';
    public const FIELD_FOLLOWING = 'following';
    public const FIELD_ITEMS = 'items';
    public const FIELD_LIST = 'list';
    public const FIELD_ROOT = 'root';
    public const FIELD_SPECIAL = 'special';

    /**
     * Select specific Drive properties
     * 
     * @param array<string> $select Use DriveQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
