<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DirectoryRoleTemplate
 */
class DirectoryRoleTemplate
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
        public ?\DateTimeInterface $deletedDateTime = null,
        /** The description to set for the directory role. Read-only. */
        public ?string $description = null,
        /** The display name to set for the directory role. Read-only. */
        public ?string $displayName = null
    ) {}
}
