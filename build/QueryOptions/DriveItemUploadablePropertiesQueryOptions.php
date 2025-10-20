<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveItemUploadableProperties resources
 *
 * Available select fields:
 * - description
 * - driveItemSource
 * - fileSize
 * - fileSystemInfo
 * - mediaSource
 * - name
 */
class DriveItemUploadablePropertiesQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DRIVE_ITEM_SOURCE = 'driveItemSource';
    public const FIELD_FILE_SIZE = 'fileSize';
    public const FIELD_FILE_SYSTEM_INFO = 'fileSystemInfo';
    public const FIELD_MEDIA_SOURCE = 'mediaSource';
    public const FIELD_NAME = 'name';

    /**
     * Select specific DriveItemUploadableProperties properties
     * 
     * @param array<string> $select Use DriveItemUploadablePropertiesQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
