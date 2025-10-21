<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteraction
 */
class AiInteraction
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $appClass = null,
        /**  */
        public array $attachments = [],
        /**  */
        public ?ItemBody $body = null,
        /**  */
        public array $contexts = [],
        /**  */
        public ?string $conversationType = null,
        /**  */
        public ?\DateTimeInterface $createdDateTime = null,
        /**  */
        public ?string $etag = null,
        /**  */
        public ?IdentitySet $from = null,
        /**  */
        public ?AiInteractionType $interactionType = null,
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
