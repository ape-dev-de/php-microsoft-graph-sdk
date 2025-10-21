<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceAnnouncementAttachment
 */
class ServiceAnnouncementAttachment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The attachment content. */
        public ?string $content = null,
        /**  */
        public ?string $contentType = null,
        /**  */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /**  */
        public ?string $name = null,
        /**  */
        public ?string $size = null
    ) {}
}
