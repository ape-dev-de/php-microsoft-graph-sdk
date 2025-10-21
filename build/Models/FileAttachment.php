<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileAttachment
 */
class FileAttachment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The MIME type. */
        public ?string $contentType = null,
        /** true if the attachment is an inline attachment; otherwise, false. */
        public ?bool $isInline = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The attachment's file name. */
        public ?string $name = null,
        /** The length of the attachment in bytes. */
        public ?string $size = null,
        /** The base64-encoded contents of the file. */
        public ?string $contentBytes = null,
        /** The ID of the attachment in the Exchange store. */
        public ?string $contentId = null,
        /** Don't use this property as it isn't supported. */
        public ?string $contentLocation = null
    ) {}
}
