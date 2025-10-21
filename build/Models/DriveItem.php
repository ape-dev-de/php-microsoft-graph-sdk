<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveItem
 */
class DriveItem
{
    public function __construct(
        /** Audio metadata, if the item is an audio file. Read-only. Read-only. Only on OneDrive Personal. */
        public ?string $audio = null,
        /** Bundle metadata, if the item is a bundle. Read-only. */
        public ?string $bundle = null,
        /** The content stream, if the item represents a file. */
        public ?string $content = null,
        /** An eTag for the content of the item. This eTag isn't changed if only the metadata is changed. Note This property isn't returned if the item is a folder. Read-only. */
        public ?string $cTag = null,
        /** Information about the deleted state of the item. Read-only. */
        public ?string $deleted = null,
        /** File metadata, if the item is a file. Read-only. */
        public ?string $file = null,
        /** File system information on client. Read-write. */
        public ?string $fileSystemInfo = null,
        /** Folder metadata, if the item is a folder. Read-only. */
        public ?string $folder = null,
        /** Image metadata, if the item is an image. Read-only. */
        public ?string $image = null,
        /** Location metadata, if the item has location data. Read-only. */
        public ?string $location = null,
        /** Malware metadata, if the item was detected to contain malware. Read-only. */
        public ?string $malware = null,
        /** If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only. */
        public ?string $package = null,
        /** If present, indicates that one or more operations that might affect the state of the driveItem are pending completion. Read-only. */
        public ?string $pendingOperations = null,
        /** Photo metadata, if the item is a photo. Read-only. */
        public ?string $photo = null,
        /** Provides information about the published or checked-out state of an item, in locations that support such actions. This property isn''t returned by default. Read-only. */
        public ?string $publication = null,
        /** Remote item data, if the item is shared from a drive other than the one being accessed. Read-only. */
        public ?string $remoteItem = null,
        /** If this property is non-null, it indicates that the driveItem is the top-most driveItem in the drive. */
        public ?string $root = null,
        /** Search metadata, if the item is from a search result. Read-only. */
        public ?string $searchResult = null,
        /** Indicates that the item was shared with others and provides information about the shared state of the item. Read-only. */
        public ?string $shared = null,
        /** Returns identifiers useful for SharePoint REST compatibility. Read-only. */
        public ?string $sharepointIds = null,
        /** Size of the item in bytes. Read-only. */
        public ?float $size = null,
        /** If the current item is also available as a special folder, this facet is returned. Read-only. */
        public ?string $specialFolder = null,
        /** Video metadata, if the item is a video. Read-only. */
        public ?string $video = null,
        /** WebDAV compatible URL for the item. */
        public ?string $webDavUrl = null,
        /** Analytics about the view activities that took place on this item. */
        public ?string $analytics = null,
        /** Collection containing Item objects for the immediate children of Item. Only items representing folders have children. Read-only. Nullable. */
        public array $children = [],
        /** For drives in SharePoint, the associated document library list item. Read-only. Nullable. */
        public ?string $listItem = null,
        /** The set of permissions for the item. Read-only. Nullable. */
        public array $permissions = [],
        /** Information about retention label and settings enforced on the driveItem. Read-write. */
        public ?string $retentionLabel = null,
        /** The set of subscriptions on the item. Only supported on the root of a drive. */
        public array $subscriptions = [],
        /** Collection of thumbnailSet objects associated with the item. For more information, see getting thumbnails. Read-only. Nullable. */
        public array $thumbnails = [],
        /** The list of previous versions of the item. For more info, see getting previous versions. Read-only. Nullable. */
        public array $versions = [],
        /** For files that are Excel spreadsheets, access to the workbook API to work with the spreadsheet''s contents. Nullable. */
        public ?string $workbook = null
    ) {}
}
