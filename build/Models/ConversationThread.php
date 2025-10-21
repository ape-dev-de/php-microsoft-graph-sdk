<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConversationThread
 */
class ConversationThread
{
    public function __construct(
        /** The Cc: recipients for the thread. Returned only on $select. */
        public array $ccRecipients = [],
        /** Indicates whether any of the posts within this thread has at least one attachment. Returned by default. */
        public ?bool $hasAttachments = null,
        /** Indicates if the thread is locked. Returned by default. */
        public ?bool $isLocked = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.Returned by default. */
        public ?\DateTimeInterface $lastDeliveredDateTime = null,
        /** A short summary from the body of the latest post in this conversation. Returned by default. */
        public ?string $preview = null,
        /** The topic of the conversation. This property can be set when the conversation is created, but it cannot be updated. Returned by default. */
        public ?string $topic = null,
        /** The To: recipients for the thread. Returned only on $select. */
        public array $toRecipients = [],
        /** @var string[] All the users that sent a message to this thread. Returned by default. */
        public array $uniqueSenders = [],
        /** @var string[]  */
        public array $posts = []
    ) {}
}
