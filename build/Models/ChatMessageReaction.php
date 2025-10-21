<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageReaction
 */
class ChatMessageReaction
{
    public function __construct(
        /** The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The name of the reaction. */
        public ?string $displayName = null,
        /** The hosted content URL for the custom reaction type. */
        public ?string $reactionContentUrl = null,
        /** The reaction type. Supported values include Unicode characters, custom, and some backward-compatible reaction types, such as like, angry, sad, laugh, heart, and surprised. */
        public ?string $reactionType = null,
        /**  */
        public ?string $user = null
    ) {}
}
