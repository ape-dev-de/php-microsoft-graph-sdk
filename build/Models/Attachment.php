<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Attachment
 */
class Attachment
{
    public function __construct(
        /** The MIME type. */
        public ?string $contentType = null,
        /** true if the attachment is an inline attachment; otherwise, false. */
        public ?bool $isInline = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The attachment's file name. */
        public ?string $name = null,
        /** The length of the attachment in bytes. */
        public ?string $size = null
    ) {}
}
