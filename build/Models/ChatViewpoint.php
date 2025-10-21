<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatViewpoint
 */
class ChatViewpoint
{
    public function __construct(
        /** Indicates whether the chat is hidden for the current user. */
        public ?bool $isHidden = null,
        /** Represents the dateTime up until which the current user has read chatMessages in a specific chat. */
        public ?\DateTimeInterface $lastMessageReadDateTime = null
    ) {}
}
