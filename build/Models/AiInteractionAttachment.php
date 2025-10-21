<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionAttachment
 */
class AiInteractionAttachment
{
    public function __construct(
        /**  */
        public ?string $attachmentId = null,
        /**  */
        public ?string $content = null,
        /**  */
        public ?string $contentType = null,
        /**  */
        public ?string $contentUrl = null,
        /**  */
        public ?string $name = null
    ) {}
}
