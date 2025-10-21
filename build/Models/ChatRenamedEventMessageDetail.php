<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatRenamedEventMessageDetail
 */
class ChatRenamedEventMessageDetail
{
    public function __construct(
        /** The updated name of the chat. */
        public ?string $chatDisplayName = null,
        /** Unique identifier of the chat. */
        public ?string $chatId = null,
        /** Initiator of the event. */
        public ?string $initiator = null
    ) {}
}
