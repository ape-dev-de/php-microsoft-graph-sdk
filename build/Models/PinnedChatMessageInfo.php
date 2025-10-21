<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PinnedChatMessageInfo
 */
class PinnedChatMessageInfo
{
    public function __construct(
        /** Represents details about the chat message that is pinned. */
        public ?string $message = null
    ) {}
}
