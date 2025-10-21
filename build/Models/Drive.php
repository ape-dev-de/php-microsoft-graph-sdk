<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Drive
 */
class Drive
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
        /** Describes the type of drive represented by this resource. OneDrive personal drives return personal. OneDrive for Business returns business. SharePoint document libraries return documentLibrary. Read-only. */
        public ?string $driveType = null,
        /** Optional. The user account that owns the drive. Read-only. */
        public ?string $owner = null,
        /** Optional. Information about the drive's storage space quota. Read-only. */
        public ?string $quota = null,
        /**  */
        public ?string $sharePointIds = null,
        /** If present, indicates that it''s a system-managed drive. Read-only. */
        public ?string $system = null,
        /** Collection of bundles (albums and multi-select-shared sets of items). Only in personal OneDrive. */
        public array $bundles = [],
        /** The list of items the user is following. Only in OneDrive for Business. */
        public array $following = [],
        /** All items contained in the drive. Read-only. Nullable. */
        public array $items = [],
        /** For drives in SharePoint, the underlying document library list. Read-only. Nullable. */
        public ?string $list = null,
        /** The root folder of the drive. Read-only. */
        public ?string $root = null,
        /** @var string[] Collection of common folders available in OneDrive. Read-only. Nullable. */
        public array $special = []
    ) {}
}
