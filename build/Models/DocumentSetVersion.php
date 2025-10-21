<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DocumentSetVersion
 */
class DocumentSetVersion
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Identity of the user which last modified the version. Read-only. */
        public ?string $lastModifiedBy = null,
        /** Date and time the version was last modified. Read-only. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Indicates the publication status of this particular version. Read-only. */
        public ?string $publication = null,
        /** A collection of the fields and values for this version of the list item. */
        public ?string $fields = null,
        /** Comment about the captured version. */
        public ?string $comment = null,
        /** User who captured the version. */
        public ?string $createdBy = null,
        /** Date and time when this version was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Items within the document set that are captured as part of this version. */
        public array $items = [],
        /** If true, minor versions of items are also captured; otherwise, only major versions are captured. The default value is false. */
        public ?bool $shouldCaptureMinorVersion = null
    ) {}
}
