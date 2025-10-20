<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RemoteItem resources
 *
 * Available select fields:
 * - createdBy
 * - createdDateTime
 * - file
 * - fileSystemInfo
 * - folder
 * - id
 * - image
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - name
 * - package
 * - parentReference
 * - shared
 * - sharepointIds
 * - size
 * - specialFolder
 * - video
 * - webDavUrl
 * - webUrl
 */
class RemoteItemQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_FILE = 'file';
    public const FIELD_FILE_SYSTEM_INFO = 'fileSystemInfo';
    public const FIELD_FOLDER = 'folder';
    public const FIELD_ID = 'id';
    public const FIELD_IMAGE = 'image';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_NAME = 'name';
    public const FIELD_PACKAGE = 'package';
    public const FIELD_PARENT_REFERENCE = 'parentReference';
    public const FIELD_SHARED = 'shared';
    public const FIELD_SHAREPOINT_IDS = 'sharepointIds';
    public const FIELD_SIZE = 'size';
    public const FIELD_SPECIAL_FOLDER = 'specialFolder';
    public const FIELD_VIDEO = 'video';
    public const FIELD_WEB_DAV_URL = 'webDavUrl';
    public const FIELD_WEB_URL = 'webUrl';

    /**
     * Select specific RemoteItem properties
     * 
     * @param array<string> $select Use RemoteItemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
