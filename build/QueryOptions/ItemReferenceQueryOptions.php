<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ItemReference resources
 *
 * Available select fields:
 * - driveId
 * - driveType
 * - id
 * - name
 * - path
 * - shareId
 * - sharepointIds
 * - siteId
 */
class ItemReferenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ItemReference
     */
    public const FIELD_DRIVE_ID = 'driveId';
    public const FIELD_DRIVE_TYPE = 'driveType';
    public const FIELD_ID = 'id';
    public const FIELD_NAME = 'name';
    public const FIELD_PATH = 'path';
    public const FIELD_SHARE_ID = 'shareId';
    public const FIELD_SHAREPOINT_IDS = 'sharepointIds';
    public const FIELD_SITE_ID = 'siteId';

    /**
     * Select specific ItemReference properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
