<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttachmentSession
 */
class AttachmentSession
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The content streams that are uploaded. */
        public ?string $content = null,
        /** The date and time in UTC when the upload session will expire. The complete file must be uploaded before this expiration time is reached. */
        public ?\DateTimeInterface $expirationDateTime = null,
        /** @var string[] Indicates a single value {start} that represents the location in the file where the next upload should begin. */
        public array $nextExpectedRanges = []
    ) {}
}
