<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintDocument
 */
class PrintDocument
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The document's content (MIME) type. Read-only. */
        public ?string $contentType = null,
        /** The document's name. Read-only. */
        public ?string $displayName = null,
        /** The time the document was downloaded. Read-only */
        public ?\DateTimeInterface $downloadedDateTime = null,
        /** The document's size in bytes. Read-only. */
        public ?float $size = null,
        /** The time the document was uploaded. Read-only */
        public ?\DateTimeInterface $uploadedDateTime = null
    ) {}
}
