<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenoteEntityHierarchyModel
 */
class OnenoteEntityHierarchyModel
{
    public function __construct(
        /** Identity of the user, device, and application that created the item. Read-only. */
        public ?string $createdBy = null,
        /** The name of the notebook. */
        public ?string $displayName = null,
        /** Identity of the user, device, and application that created the item. Read-only. */
        public ?string $lastModifiedBy = null,
        /** The date and time when the notebook was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $lastModifiedDateTime = null
    ) {}
}
