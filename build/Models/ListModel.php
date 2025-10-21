<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ListModel
 */
class ListModel
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
        /** The displayable title of the list. */
        public ?string $displayName = null,
        /** Contains more details about the list. */
        public ?string $list = null,
        /** Returns identifiers useful for SharePoint REST compatibility. Read-only. */
        public ?string $sharepointIds = null,
        /** If present, indicates that the list is system-managed. Read-only. */
        public ?string $system = null,
        /** The collection of field definitions for this list. */
        public array $columns = [],
        /** The collection of content types present in this list. */
        public array $contentTypes = [],
        /** Allows access to the list as a drive resource with driveItems. Only present on document libraries. */
        public ?string $drive = null,
        /** All items contained in the list. */
        public array $items = [],
        /** The collection of long-running operations on the list. */
        public array $operations = [],
        /** @var string[] The set of subscriptions on the list. */
        public array $subscriptions = []
    ) {}
}
