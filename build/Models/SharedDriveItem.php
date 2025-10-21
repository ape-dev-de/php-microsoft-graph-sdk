<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharedDriveItem
 */
class SharedDriveItem
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Identity of the user, device, or application that created the item. Read-only. */
        public ?string $createdBy = null,
        /** Date and time of item creation. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Provides a user-visible description of the item. Optional. */
        public ?string $description = null,
        /** ETag for the item. Read-only. */
        public ?string $eTag = null,
        /** Identity of the user, device, and application that last modified the item. Read-only. */
        public ?string $lastModifiedBy = null,
        /** Date and time the item was last modified. Read-only. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The name of the item. Read-write. */
        public ?string $name = null,
        /** Parent information, if the item has a parent. Read-write. */
        public ?string $parentReference = null,
        /** URL that either displays the resource in the browser (for Office file formats), or is a direct link to the file (for other formats). Read-only. */
        public ?string $webUrl = null,
        /** Identity of the user who created the item. Read-only. */
        public ?string $createdByUser = null,
        /** Identity of the user who last modified the item. Read-only. */
        public ?string $lastModifiedByUser = null,
        /** Information about the owner of the shared item being referenced. */
        public ?string $owner = null,
        /** Used to access the underlying driveItem */
        public ?string $driveItem = null,
        /** All driveItems contained in the sharing root. This collection cannot be enumerated. */
        public array $items = [],
        /** Used to access the underlying list */
        public ?string $list = null,
        /** Used to access the underlying listItem */
        public ?string $listItem = null,
        /** Used to access the permission representing the underlying sharing link */
        public ?string $permission = null,
        /** Used to access the underlying driveItem. Deprecated -- use driveItem instead. */
        public ?string $root = null,
        /** Used to access the underlying site */
        public ?string $site = null
    ) {}
}
