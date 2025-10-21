<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessContentMetadataBase
 */
class ProcessContentMetadataBase
{
    public function __construct(
        /** Represents the actual content, either as text (textContent) or binary data (binaryContent). Optional if metadata alone is sufficient for policy evaluation. Do not use for contentActivities. */
        public ?string $content = null,
        /** An identifier used to group multiple related content entries (for example, different parts of the same file upload, messages in a conversation). */
        public ?string $correlationId = null,
        /** Required. Timestamp indicating when the original content was created (for example, file creation time, message sent time). */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Required. A unique identifier for this specific content entry within the context of the calling application or enforcement plane (for example, message ID, file path/URL). */
        public ?string $identifier = null,
        /** Required. Indicates if the provided content has been truncated from its original form (for example, due to size limits). */
        public ?bool $isTruncated = null,
        /** The length of the original content in bytes. */
        public ?float $length = null,
        /** Required. Timestamp indicating when the original content was last modified. For ephemeral content like messages, this might be the same as createdDateTime. */
        public ?\DateTimeInterface $modifiedDateTime = null,
        /** Required. A descriptive name for the content (for example, file name, web page title, 'Chat Message'). */
        public ?string $name = null,
        /** A sequence number indicating the order in which content was generated or should be processed, required when correlationId is used. */
        public ?float $sequenceNumber = null
    ) {}
}
