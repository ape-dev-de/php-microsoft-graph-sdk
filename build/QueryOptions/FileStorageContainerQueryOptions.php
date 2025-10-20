<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FileStorageContainer resources
 *
 * Available select fields:
 * - containerTypeId
 * - createdDateTime
 * - customProperties
 * - description
 * - displayName
 * - lockState
 * - settings
 * - status
 * - viewpoint
 * - columns
 * - drive
 * - permissions
 * - recycleBin
 */
class FileStorageContainerQueryOptions extends QueryOptions
{
    public const FIELD_CONTAINER_TYPE_ID = 'containerTypeId';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_CUSTOM_PROPERTIES = 'customProperties';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LOCK_STATE = 'lockState';
    public const FIELD_SETTINGS = 'settings';
    public const FIELD_STATUS = 'status';
    public const FIELD_VIEWPOINT = 'viewpoint';
    public const FIELD_COLUMNS = 'columns';
    public const FIELD_DRIVE = 'drive';
    public const FIELD_PERMISSIONS = 'permissions';
    public const FIELD_RECYCLE_BIN = 'recycleBin';

    /**
     * Select specific FileStorageContainer properties
     * 
     * @param array<string> $select Use FileStorageContainerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
