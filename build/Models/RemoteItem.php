<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RemoteItem
 */
class RemoteItem
{
    public function __construct(
        /** Unique identifier for the remote item in its drive. Read-only. */
        public ?string $id = null,
        /** Identity of the user, device, and application which created the item. Read-only. */
        public ?string $createdBy = null,
        /** Date and time of item creation. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Indicates that the remote item is a file. Read-only. */
        public ?string $file = null,
        /** Information about the remote item from the local file system. Read-only. */
        public ?string $fileSystemInfo = null,
        /** Indicates that the remote item is a folder. Read-only. */
        public ?string $folder = null,
        /** Image metadata, if the item is an image. Read-only. */
        public ?string $image = null,
        /** Identity of the user, device, and application which last modified the item. Read-only. */
        public ?string $lastModifiedBy = null,
        /** Date and time the item was last modified. Read-only. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Optional. Filename of the remote item. Read-only. */
        public ?string $name = null,
        /** If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only. */
        public ?string $package = null,
        /** Properties of the parent of the remote item. Read-only. */
        public ?string $parentReference = null,
        /** Indicates that the item has been shared with others and provides information about the shared state of the item. Read-only. */
        public ?string $shared = null,
        /** Provides interop between items in OneDrive for Business and SharePoint with the full set of item identifiers. Read-only. */
        public ?string $sharepointIds = null,
        /** Size of the remote item. Read-only. */
        public ?float $size = null,
        /** If the current item is also available as a special folder, this facet is returned. Read-only. */
        public ?string $specialFolder = null,
        /** Video metadata, if the item is a video. Read-only. */
        public ?string $video = null,
        /** DAV compatible URL for the item. */
        public ?string $webDavUrl = null,
        /** URL that displays the resource in the browser. Read-only. */
        public ?string $webUrl = null
    ) {}
}
