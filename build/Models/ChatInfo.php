<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatInfo
 */
class ChatInfo
{
    public function __construct(
        /** The unique identifier of a message in a Microsoft Teams channel. */
        public ?string $messageId = null,
        /** The ID of the reply message. */
        public ?string $replyChainMessageId = null,
        /** The unique identifier for a thread in Microsoft Teams. */
        public ?string $threadId = null
    ) {}
}
