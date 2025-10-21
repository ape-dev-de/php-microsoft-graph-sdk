<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ListItem
 */
class ListItem
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
        /** The content type of this list item */
        public ?string $contentType = null,
        /** Returns identifiers useful for SharePoint REST compatibility. Read-only. */
        public ?string $sharepointIds = null,
        /** Analytics about the view activities that took place on this item. */
        public ?string $analytics = null,
        /** Version information for a document set version created by a user. */
        public array $documentSetVersions = [],
        /** For document libraries, the driveItem relationship exposes the listItem as a driveItem */
        public ?string $driveItem = null,
        /** The values of the columns set on this list item. */
        public ?string $fields = null,
        /** The list of previous versions of the list item. */
        public array $versions = []
    ) {}
}
