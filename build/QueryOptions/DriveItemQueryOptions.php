<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveItem resources
 *
 * Available select fields:
 * - audio
 * - bundle
 * - content
 * - cTag
 * - deleted
 * - file
 * - fileSystemInfo
 * - folder
 * - image
 * - location
 * - malware
 * - package
 * - pendingOperations
 * - photo
 * - publication
 * - remoteItem
 * - root
 * - searchResult
 * - shared
 * - sharepointIds
 * - size
 * - specialFolder
 * - video
 * - webDavUrl
 * - analytics
 * - children
 * - listItem
 * - permissions
 * - retentionLabel
 * - subscriptions
 * - thumbnails
 * - versions
 * - workbook
 */
class DriveItemQueryOptions extends QueryOptions
{
    public const FIELD_AUDIO = 'audio';
    public const FIELD_BUNDLE = 'bundle';
    public const FIELD_CONTENT = 'content';
    public const FIELD_C_TAG = 'cTag';
    public const FIELD_DELETED = 'deleted';
    public const FIELD_FILE = 'file';
    public const FIELD_FILE_SYSTEM_INFO = 'fileSystemInfo';
    public const FIELD_FOLDER = 'folder';
    public const FIELD_IMAGE = 'image';
    public const FIELD_LOCATION = 'location';
    public const FIELD_MALWARE = 'malware';
    public const FIELD_PACKAGE = 'package';
    public const FIELD_PENDING_OPERATIONS = 'pendingOperations';
    public const FIELD_PHOTO = 'photo';
    public const FIELD_PUBLICATION = 'publication';
    public const FIELD_REMOTE_ITEM = 'remoteItem';
    public const FIELD_ROOT = 'root';
    public const FIELD_SEARCH_RESULT = 'searchResult';
    public const FIELD_SHARED = 'shared';
    public const FIELD_SHAREPOINT_IDS = 'sharepointIds';
    public const FIELD_SIZE = 'size';
    public const FIELD_SPECIAL_FOLDER = 'specialFolder';
    public const FIELD_VIDEO = 'video';
    public const FIELD_WEB_DAV_URL = 'webDavUrl';
    public const FIELD_ANALYTICS = 'analytics';
    public const FIELD_CHILDREN = 'children';
    public const FIELD_LIST_ITEM = 'listItem';
    public const FIELD_PERMISSIONS = 'permissions';
    public const FIELD_RETENTION_LABEL = 'retentionLabel';
    public const FIELD_SUBSCRIPTIONS = 'subscriptions';
    public const FIELD_THUMBNAILS = 'thumbnails';
    public const FIELD_VERSIONS = 'versions';
    public const FIELD_WORKBOOK = 'workbook';

    /**
     * Select specific DriveItem properties
     * 
     * @param array<string> $select Use DriveItemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
