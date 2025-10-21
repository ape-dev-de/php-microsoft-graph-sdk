<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttachmentBase
 */
class AttachmentBase
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The MIME type. */
        public ?string $contentType = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The display name of the attachment. This doesn't need to be the actual file name. */
        public ?string $name = null,
        /** The length of the attachment in bytes. */
        public ?string $size = null
    ) {}
}
