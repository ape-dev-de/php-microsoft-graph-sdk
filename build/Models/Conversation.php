<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Conversation
 */
class Conversation
{
    public function __construct(
        /** Indicates whether any of the posts within this Conversation has at least one attachment. Supports $filter (eq, ne) and $search. */
        public ?bool $hasAttachments = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $lastDeliveredDateTime = null,
        /** A short summary from the body of the latest post in this conversation. Supports $filter (eq, ne, le, ge). */
        public ?string $preview = null,
        /** The topic of the conversation. This property can be set when the conversation is created, but it cannot be updated. */
        public ?string $topic = null,
        /** @var string[] All the users that sent a message to this Conversation. */
        public array $uniqueSenders = [],
        /** @var string[] A collection of all the conversation threads in the conversation. A navigation property. Read-only. Nullable. */
        public array $threads = []
    ) {}
}
