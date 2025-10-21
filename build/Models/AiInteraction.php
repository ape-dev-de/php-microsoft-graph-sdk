<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteraction
 */
class AiInteraction
{
    public function __construct(
        /**  */
        public ?string $appClass = null,
        /**  */
        public array $attachments = [],
        /**  */
        public ?string $body = null,
        /**  */
        public array $contexts = [],
        /**  */
        public ?string $conversationType = null,
        /**  */
        public ?\DateTimeInterface $createdDateTime = null,
        /**  */
        public ?string $etag = null,
        /**  */
        public ?string $from = null,
        /**  */
        public ?string $interactionType = null,
        /**  */
        public array $links = [],
        /**  */
        public ?string $locale = null,
        /**  */
        public array $mentions = [],
        /**  */
        public ?string $requestId = null,
        /**  */
        public ?string $sessionId = null
    ) {}
}
