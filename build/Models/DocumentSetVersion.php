<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DocumentSetVersion
 */
class DocumentSetVersion
{
    public function __construct(
        /** Comment about the captured version. */
        public ?string $comment = null,
        /** User who captured the version. */
        public ?string $createdBy = null,
        /** Date and time when this version was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Items within the document set that are captured as part of this version. */
        public array $items = [],
        /** If true, minor versions of items are also captured; otherwise, only major versions are captured. The default value is false. */
        public ?string $shouldCaptureMinorVersion = null
    ) {}
}
