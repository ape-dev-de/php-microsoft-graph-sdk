<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContactFolder
 */
class ContactFolder
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The folder's display name. */
        public ?string $displayName = null,
        /** The ID of the folder's parent folder. */
        public ?string $parentFolderId = null,
        /** The collection of child folders in the folder. Navigation property. Read-only. Nullable. */
        public array $childFolders = [],
        /** The contacts in the folder. Navigation property. Read-only. Nullable. */
        public array $contacts = [],
        /** The collection of multi-value extended properties defined for the contactFolder. Read-only. Nullable. */
        public array $multiValueExtendedProperties = [],
        /** @var string[] The collection of single-value extended properties defined for the contactFolder. Read-only. Nullable. */
        public array $singleValueExtendedProperties = []
    ) {}
}
