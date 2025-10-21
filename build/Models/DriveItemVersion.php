<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveItemVersion
 */
class DriveItemVersion
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
        /** The content stream for this version of the item. */
        public ?string $content = null,
        /** Indicates the size of the content stream for this version of the item. */
        public ?float $size = null
    ) {}
}
